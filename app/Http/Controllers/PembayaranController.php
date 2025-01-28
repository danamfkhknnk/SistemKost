<?php

namespace App\Http\Controllers;

use App\Models\pembayaran;
use App\Models\penghuni;
use Barryvdh\DomPDF\Facade\Pdf;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PembayaranController extends Controller {

    public function index(){
        $pembayarans = pembayaran::with('user','penghuni')->orderBy('penghuni_id', 'desc')->simplePaginate(10);
        return view('Admin.Pembayaran.Pembayaran',compact('pembayarans'));
    }

    public function formPembayaran()
    {
    $penghuni = penghuni::with('user','pembayaran')->whereNotNull('kamar_id')->get();
    return view('Admin.Pembayaran.add', compact('penghuni'));
    }

    public function tambahPembayaran(Request $request) {

        $request->validate([
            'jatuhtempo' => 'required|date|after:' . Carbon::parse(Penghuni::find($request->penghuni_id)->tgglmasuk)->toDateString(),
        ], [
            'jatuhtempo.after' => 'Tanggal jatuh tempo harus setelah tanggal masuk.',
        ]);
        
        $penghuni = Penghuni::find($request->penghuni_id);

        // Ambil bulan dan tahun dari jatuhtempo
        $bulan = Carbon::parse($request->jatuhtempo)->format('m');
        $tahun = Carbon::parse($request->jatuhtempo)->format('Y');

        // Cek apakah sudah ada pembayaran untuk bulan dan tahun yang sama
        $existingPayment = Pembayaran::where('penghuni_id', $request->penghuni_id)
            ->whereMonth('jatuhtempo', $bulan)
            ->whereYear('jatuhtempo', $tahun)
            ->first();

        if ($existingPayment) {
            return redirect()->back()->withErrors(['message' => 'Pembayaran untuk bulan dan tahun ini sudah ada.']);
        }
    
        $pembayaran = Pembayaran::create([
            'penghuni_id' => $request->penghuni_id,
            'jatuhtempo' => $request->jatuhtempo . '-' . date('d', strtotime($penghuni->tgglmasuk)),
            'kamar_id' => $penghuni->kamar_id, 
            'user_id' => $penghuni->user->id,
            'status' => 'pending',
            'tipe' => 'sewa',
        ]);
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.serverKey');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $price = $pembayaran->kamar->harga; // Pastikan kolom harga ada di tabel pembayaran

        $params = array(
            'transaction_details' => array(
                'order_id' => uniqid(), // Gunakan uniqid untuk order_id yang unik
                'gross_amount' => $price,
            ),
            'customer_details' => array(
                'first_name' => $penghuni->user->nama,
                'email' => $penghuni->user->email,
            ),
            
        );

        // Mendapatkan Snap Token
        $snapToken = \Midtrans\Snap::getSnapToken($params);

        // Simpan snap_token ke dalam entri pembayaran
        $pembayaran->snap_token = $snapToken;
        $pembayaran->updated_at = null;
        $pembayaran->save();

        Session::flash('message','Tambah Data Berhasil');
        return redirect('/admin/pembayaran');
    }


    public function deletePembayaran($id) {
        $pembayaran = pembayaran::findOrFail($id);

        $pembayaran->delete();
   
       Session::flash('message','Delete Data Berhasil');
       return redirect('/admin/pembayaran');
    }
}