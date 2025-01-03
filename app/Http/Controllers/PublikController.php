<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\info;
use App\Models\kamar;
use App\Models\laporan;
use App\Models\pembayaran;
use App\Models\penghuni;
use App\Models\testi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PublikController extends Controller
{

    public function index()
    {  
        return view('Home.Layout');
    }


    public function publik()
    {
        return view('Home.Layout');
    }

    public function pesanKamar(Request $request, )
    {
        $userId = $request->user()->id; // Misalnya, jika Anda menggunakan autentikasi Laravel
        // Cek apakah ada pembayaran dengan status 'pending' untuk pengguna ini
        $pendingPayment = Pembayaran::where('user_id', $userId)
            ->where('status', 'pending')
            ->exists();

        if ($pendingPayment) {
            Session::flash('message', 'Silahkan Batalkan Terlebih Dahulu Pembayaran Pending Anda!');
            return redirect()->route('publik');
        }
        
        // Validasi input
        $request->validate([
            'kamar_id' => 'required|exists:kamars,id',
            'user_id' => 'required|exists:users,id',
            'tipe' => 'required|in:baru,sewa',
            'tanggal' => 'required|date|after_or_equal:today|before_or_equal:' . now()->addDays(7)->toDateString(),
        ]);

        // Membuat entri baru di tabel pembayaran
        $pembayaran = Pembayaran::create([
            'user_id' => $request->user_id,
            'kamar_id' => $request->kamar_id,
            'penghuni_id' => null, // Atur sesuai kebutuhan
            'status' => 'pending',
            'tipe' => $request->tipe,
            'tanggal' => $request->tanggal,

        ]);

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.serverKey');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        // Ambil harga kamar dari model Kamar
        $kamar = kamar::find($request->kamar_id);
        $price = $kamar->harga; // Pastikan kolom harga ada di tabel kamar

        $params = array(
            'transaction_details' => array(
                'order_id' => uniqid(), // Gunakan uniqid untuk order_id yang unik
                'gross_amount' => $price,
            ),
            'customer_details' => array(
                'first_name' => Auth::user()->nama,
                'email' => Auth::user()->email,
            ),
        );

        // Mendapatkan Snap Token
        $snapToken = \Midtrans\Snap::getSnapToken($params);
        
        // Simpan snap_token ke dalam entri pembayaran
        $pembayaran->snap_token = $snapToken;
        $pembayaran->save();

        // Redirect atau memberikan respons
        return redirect()->route('konfirmasi', $pembayaran->id)->with('success', 'Pemesanan kamar berhasil! Silakan lanjutkan ke pembayaran.');
    }

    public function konfirmasi($id)
    {
        $info = info::first();
        $pembayaran = Pembayaran::with(['kamar'])->find($id);
        return view('publik.Pemesanan', compact('pembayaran','info'));
    }

    public function berhasil(Request $request, $id){
        $user_nama = Auth::user()->nama;
        $pembayaran = Pembayaran::find($request->id);
        $pembayaran->status = 'selesai';
        $pembayaran->save();
        
        $existingPayments = Pembayaran::where('kamar_id', $pembayaran->kamar_id)
        ->where('status', 'pending')
        ->where('tipe','baru')
        ->get();
    
        // Jika ada pembayaran lain yang sukses, ubah statusnya menjadi 'batal'
        foreach ($existingPayments as $existingPayment) {
            $existingPayment->status = 'batal';
            $existingPayment->snap_token = null;
            $existingPayment->save();
        }

        $penghuni = penghuni::where('user_id', $pembayaran->user_id)->first();
        
        if ($penghuni) {
            $penghuni->kamar_id = $pembayaran->kamar_id;
            $penghuni->tgglmasuk = $pembayaran->tanggal;
            $penghuni->tgglkeluar = null;
            $penghuni->save();

        } else{
            $penghuni = penghuni::create([
                'user_id' => $pembayaran->user_id,
                'kamar_id' => $pembayaran->kamar_id,
                'tgglmasuk' => $pembayaran->tanggal,
            ]);
        }
        
        $pembayaran->penghuni_id = $penghuni->id;
        $pembayaran->save();
        
        $testi = testi::where('user_id', $pembayaran->user_id)->first();
        
        if (!$testi) {
            testi::create([
                'user_id' => $pembayaran->user_id,
            ]);
        }
        
        $kamar = kamar::find($pembayaran->kamar_id);
        $kamar->status = 'terisi';
        $kamar->save();
        
        $user = User::find($pembayaran->user_id);
        $user->role = 'penyewa';
        $user->save();
        
        laporan::create([
            'kamar_id' => $kamar->id,
            'tipe' => 'masuk',
            'harga' => $kamar->harga,
        ]);

        return view('Penyewa.Dashboard', compact('user_nama'));
    }
    
    public function cancel($id){

        $pembayaran = pembayaran::find($id);

        $pembayaran->status = 'batal';
        $pembayaran->save();
        
        return redirect()->route('publik');
    }

}