<?php

namespace App\Http\Controllers;

use App\Models\laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LaporanController extends Controller
{
    public function laporanPembayaran(Request $request){

        $laporan = laporan::with('kamar')->get();
        // $bulanTahun = $request->input('cari');

        // // Mengambil total pemasukan
        // $jmlselesai = Pembayaran::where('status', 'selesai')
        // ->when($bulanTahun, function ($query) use ($bulanTahun) {
        //     return $query->whereMonth('updated_at', substr($bulanTahun, 5, 2))
        //                  ->whereYear('updated_at', substr($bulanTahun, 0, 4));
        // })
        // ->with('kamar') // Memuat relasi kamar
        // ->get()
        // ->sum(function ($pembayaran) {
        //     return $pembayaran->kamar->harga; // Mengambil harga dari relasi kamar
        // });

        // // Mengambil data pembayaran berdasarkan bulan dan tahun
        // $pembayaran = Pembayaran::with('kamar')
        //     ->where('status', 'selesai')
        //     ->when($bulanTahun, function ($query) use ($bulanTahun) {
        //         return $query->whereMonth('updated_at', substr($bulanTahun, 5, 2))
        //                     ->whereYear('updated_at', substr($bulanTahun, 0, 4));
        //     })
        //     ->orderBy('updated_at', 'desc')
        //     ->get();

        return view('Admin.Laporan.Laporan', compact('laporan'));
    }

    public function formLaporan(){
        
        return view ('Admin.Laporan.add');
    }

    public function tambahLaporan(Request $request){
        
        $request->validate([
            'item' => 'required',
            'harga' => 'required',
        ]);
        
        $laporans = $request->all();
       
        laporan::create($laporans);
        Session::flash('message','Tambah Data Berhasil');
        return redirect()->route('laporan');


        return view ('Admin.Laporan.add');
    }

    // public function downloadPDF(Request $request)
    // {
    //     $bulanTahun = $request->input('cari');

    //     // Mengambil data pembayaran berdasarkan bulan dan tahun
    //     $pembayaran = Pembayaran::where('status', 'selesai')
    //         ->when($bulanTahun, 
    //         function ($query) use ($bulanTahun) {
    //             return $query->whereMonth('updated_at', substr($bulanTahun, 5, 2))
    //                          ->whereYear('updated_at', substr($bulanTahun, 0, 4));
    //         })
    //         ->orderBy('updated_at', 'desc')
    //         ->get();

    //         // Menghitung total pemasukan
    //     $jmlselesai = Pembayaran::where('status', 'selesai')
    //         ->when($bulanTahun, 
    //         function ($query) use ($bulanTahun) {
    //             return $query->whereMonth('updated_at', substr($bulanTahun, 5, 2))
    //                         ->whereYear('updated_at', substr($bulanTahun, 0, 4));
    //         })
    //         ->with('kamar') // Memuat relasi kamar
    //         ->get()
    //         ->sum(function ($pembayaran) {
    //             return $pembayaran->kamar->harga; // Mengambil harga dari relasi kamar
    //         });

    //     // Load view untuk PDF
    //     $pdf = PDF::loadView('Admin.LaporanPdf', compact('pembayaran', 'jmlselesai','bulanTahun'));

    //     // Download PDF
    //     return $pdf->download('laporan_pembayaran.pdf');
    // }
}