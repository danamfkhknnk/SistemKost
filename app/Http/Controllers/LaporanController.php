<?php

namespace App\Http\Controllers;

use App\Models\laporan;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LaporanController extends Controller
{
    public function laporanPembayaran(Request $request){

        $bulanTahun = $request->input('cari');
        // Mengambil total pemasukan dari tabel laporan
        $totalPemasukan = Laporan::when($bulanTahun, function ($query) use ($bulanTahun) {
                return $query->whereMonth('created_at', substr($bulanTahun, 5, 2))
                             ->whereYear('created_at', substr($bulanTahun, 0, 4));
            })
            ->where('tipe', 'masuk') // Hanya ambil yang bertipe 'masuk'
            ->sum('harga'); // Mengambil total harga dari kolom harga di tabel laporan
        
        // Mengambil total pengeluaran dari tabel laporan
        $totalPengeluaran = Laporan::when($bulanTahun, function ($query) use ($bulanTahun) {
                return $query->whereMonth('created_at', substr($bulanTahun, 5, 2))
                             ->whereYear('created_at', substr($bulanTahun, 0, 4));
            })
            ->where('tipe', 'keluar') // Hanya ambil yang bertipe 'keluar'
            ->sum('harga'); // Mengambil total harga dari kolom harga di tabel laporan
        
        // Menghitung jumlah yang masuk
        $jumlahMasuk = $totalPemasukan - $totalPengeluaran;
        
        // Mengambil data laporan berdasarkan bulan dan tahun
        $laporans = Laporan::with('kamar')
            ->when($bulanTahun, function ($query) use ($bulanTahun) {
                return $query->whereMonth('created_at', substr($bulanTahun, 5, 2))
                             ->whereYear('created_at', substr($bulanTahun, 0, 4));
            })
            ->orderBy('created_at', 'desc')
            ->simplePaginate(10);
        
        return view('Admin.Laporan.Laporan', compact('laporans', 'jumlahMasuk'));
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

    public function downloadPDF(Request $request)
    {
        $bulanTahun = $request->input('cari');
        // Mengambil total pemasukan dari tabel laporan
        $totalPemasukan = Laporan::when($bulanTahun, function ($query) use ($bulanTahun) {
                return $query->whereMonth('created_at', substr($bulanTahun, 5, 2))
                             ->whereYear('created_at', substr($bulanTahun, 0, 4));
            })
            ->where('tipe', 'masuk') // Hanya ambil yang bertipe 'masuk'
            ->sum('harga'); // Mengambil total harga dari kolom harga di tabel laporan
        
        // Mengambil total pengeluaran dari tabel laporan
        $totalPengeluaran = Laporan::when($bulanTahun, function ($query) use ($bulanTahun) {
                return $query->whereMonth('created_at', substr($bulanTahun, 5, 2))
                             ->whereYear('created_at', substr($bulanTahun, 0, 4));
            })
            ->where('tipe', 'keluar') // Hanya ambil yang bertipe 'keluar'
            ->sum('harga'); // Mengambil total harga dari kolom harga di tabel laporan
        
        // Menghitung jumlah yang masuk
        $jumlahMasuk = $totalPemasukan - $totalPengeluaran;
        
        // Mengambil data laporan berdasarkan bulan dan tahun
        $laporan = Laporan::with('kamar')
            ->when($bulanTahun, function ($query) use ($bulanTahun) {
                return $query->whereMonth('created_at', substr($bulanTahun, 5, 2))
                             ->whereYear('created_at', substr($bulanTahun, 0, 4));
            })
            ->orderBy('created_at', 'desc')
            ->get();

        // Load view untuk PDF
        $pdf = PDF::loadView('Admin.Laporan.LaporanPdf', compact('laporan', 'totalPemasukan', 'totalPengeluaran', 'jumlahMasuk'));

        // Download PDF
        return $pdf->download('laporan_pembayaran.pdf');
    }

    public function deleteLaporan($id)
    {
        // Find the room by ID
        $laporan = laporan::findOrFail($id);
        // Delete associated images from storage
        $laporan->delete();
        // Redirect back with a success message
        Session::flash('message','Hapus Data Berhasil');
        return redirect()->route('laporan');
    }
}