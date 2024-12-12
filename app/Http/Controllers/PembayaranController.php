<?php

namespace App\Http\Controllers;

use App\Models\pembayaran;
use App\Models\penghuni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class PembayaranController extends Controller
{
    public function index(){
        $pembayaran = pembayaran::with('user','penghuni')->orderBy('created_at', 'desc')->get();
        return view('Admin.Pembayaran.Pembayaran',compact('pembayaran'));
    }

    public function formPembayaran()
{
    $penghuni = penghuni::with('user','pembayaran')->whereNotNull('kamar_id')->get();
    return view('Admin.Pembayaran.add', compact('penghuni'));
}
    public function tambahPembayaran(Request $request){
        $penghuni = Penghuni::find($request->penghuni_id);
        $pembayaran = Pembayaran::create([
            'penghuni_id' => $request->penghuni_id,
            'jatuhtempo' => $request->jatuhtempo,
            'kamar_id' => $penghuni->kamar_id, // Gunakan penghuni->kamar_id, bukan $pembayaran->id
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

    public function deletePembayaran($id)
    {
        $pembayaran = pembayaran::findOrFail($id);

        $pembayaran->delete();
   
       Session::flash('message','Delete Data Berhasil');
       return redirect('/admin/pembayaran');
    }
}