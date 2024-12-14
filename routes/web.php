<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\PenghuniController;
use App\Http\Controllers\KeluhanController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PenyewaController;
use App\Http\Controllers\PublikController;

use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['guest'])->group(function(){
    Route::get('/login', [SesiController::class, 'index']);
    Route::post('/login', [SesiController::class, 'login'])->name('login');
    Route::get('/register', [SesiController::class, 'register'])->name('register');
    Route::post('/register', [AdminController::class, 'regis'])->name('regis');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/admin', [AdminController::class, 'dashboard'])->middleware('userAkses:admin');


    Route::get('/publik', [PublikController::class, 'publik'])->middleware('userAkses:publik')->name('publik');
    Route::post('/publik/booking/{id}', [PublikController::class, 'pesanKamar'])->middleware('userAkses:publik')->name('pesanKamar');
    Route::get('/publik/booking/{id}', [PublikController::class, 'konfirmasi'])->middleware('userAkses:publik')->name('konfirmasi');
    Route::post('/publik/booking/success/{id}', [PublikController::class, 'berhasil'])->middleware('userAkses:publik')->name('berhasil');




    Route::get('/admin/pengguna', [AdminController::class, 'index'])->middleware('userAkses:admin')->name('pengguna');
    Route::get('/admin/pengguna/tambah', [AdminController::class, 'formPengguna'])->middleware('userAkses:admin');
    Route::post('/admin/pengguna/tambah', [AdminController::class, 'tambahPengguna'])->middleware('userAkses:admin');
    Route::get('/admin/pengguna/{id}/edit', [AdminController::class, 'editPengguna'])->middleware('userAkses:admin');
    Route::patch('/admin/pengguna/{id}/edit', [AdminController::class, 'updatePengguna'])->middleware('userAkses:admin');
    Route::get('/admin/pengguna/{id}/delete', [AdminController::class, 'deletePengguna'])->middleware('userAkses:admin');


    Route::get('/admin/kamar', [KamarController::class, 'index'])->middleware('userAkses:admin')->name('kamar');
    Route::get('/admin/kamar/tambah', [KamarController::class, 'formKamar'])->middleware('userAkses:admin');
    Route::post('/admin/kamar/tambah', [KamarController::class, 'tambahKamar'])->middleware('userAkses:admin')->name('tambahkamar');
    Route::get('/admin/kamar/{id}/edit', [KamarController::class, 'editKamar'])->middleware('userAkses:admin');
    Route::put('/admin/kamar/{id}/edit', [KamarController::class, 'updateKamar'])->middleware('userAkses:admin');
    Route::get('/admin/kamar/{id}/delete', [KamarController::class, 'deleteKamar'])->middleware('userAkses:admin');


    Route::get('/admin/keluhan', [KeluhanController::class, 'index'])->middleware('userAkses:admin')->name('keluhanAdmin');
    Route::patch('/admin/keluhan/{id}/edit', [KeluhanController::class, 'statusKeluhan'])->middleware('userAkses:admin');
    Route::get('/admin/keluhan/{id}/delete', [KeluhanController::class, 'deleteKeluhan'])->middleware('userAkses:admin');




    Route::get('/admin/pembayaran', [PembayaranController::class, 'index'])->middleware('userAkses:admin')->name('pembayaran');
    Route::get('/admin/pembayaran/tambah', [PembayaranController::class, 'formPembayaran'])->middleware('userAkses:admin');
    Route::post('/admin/pembayaran/tambah', [PembayaranController::class, 'tambahPembayaran'])->middleware('userAkses:admin');
    Route::get('/admin/pembayaran/{id}/delete', [PembayaranController::class, 'deletePembayaran'])->middleware('userAkses:admin');

    Route::get('/admin/laporan', [PembayaranController::class, 'laporanPembayaran'])->middleware('userAkses:admin');
    Route::get('admin/laporan/pdf', [PembayaranController::class, 'downloadPDF'])->name('admin.laporan.pdf');

    Route::get('/admin/penghuni', [PenghuniController::class, 'index'])->middleware('userAkses:admin')->name('penghuni');
    Route::get('/admin/penghuni/tambah', [PenghuniController::class, 'formPenghuni'])->middleware('userAkses:admin');
    Route::post('/admin/penghuni/tambah', [PenghuniController::class, 'createPenghuni'])->middleware('userAkses:admin');
    Route::get('/admin/penghuni/{id}/edit', [PenghuniController::class, 'editPenghuni'])->middleware('userAkses:admin');
    Route::put('/admin/penghuni/{id}/edit', [PenghuniController::class, 'updatePenghuni'])->middleware('userAkses:admin');
    Route::get('/admin/penghuni/{id}/delete', [PenghuniController::class, 'deletePenghuni'])->middleware('userAkses:admin');


    Route::get('/admin/publik/informasi/{id}/edit', [HomeController::class, 'informasi'])->middleware('userAkses:admin')->name('info');
    Route::put('/admin/publik/informasi/{id}/edit', [HomeController::class, 'updateinformasi'])->middleware('userAkses:admin');
    Route::get('/admin/publik/testi', [HomeController::class, 'testi'])->middleware('userAkses:admin')->name('testi');
    Route::get('/admin/publik/tentang', [HomeController::class, 'tentang'])->middleware('userAkses:admin')->name('tentang');
    Route::post('/admin/publik/tentang/edit', [HomeController::class, 'updatetentang'])->middleware('userAkses:admin');


    Route::get('/penyewa', [PenyewaController::class, 'index'])->middleware('userAkses:penyewa')->name('penyewa');
    Route::get('/penyewa/keluhan', [PenyewaController::class, 'formKeluhan'])->middleware('userAkses:penyewa')->name('keluhan');
    Route::post('/penyewa/keluhan', [PenyewaController::class, 'storeKeluhan'])->middleware('userAkses:penyewa');
    Route::get('/penyewa/tagihan', [PenyewaController::class, 'tagihan'])->middleware('userAkses:penyewa')->name('tagihan');
    Route::post('/penyewa/tagihan/{id}', [PenyewaController::class, 'bayarTagihan'])->middleware('userAkses:penyewa')->name('bayarTagihan');
    Route::get('/penyewa/tagihan/{id}', [PenyewaController::class, 'pdfTagihan'])->middleware('userAkses:penyewa')->name('pdfTagihan');
    Route::get('/penyewa/testimoni', [PenyewaController::class, 'testimoni'])->middleware('userAkses:penyewa')->name('testimoni');
    Route::put('/penyewa/testimoni/{id}/edit', [PenyewaController::class, 'updateTestimoni'])->middleware('userAkses:penyewa');
    Route::get('/penyewa/profil', [PenyewaController::class, 'profil'])->middleware('userAkses:penyewa')->name('profil');
    Route::put('/penyewa/profil/{id}/edit', [PenyewaController::class, 'updateProfil'])->middleware('userAkses:penyewa');
    

    Route::get('/logout', [SesiController::class, 'logout']);
});