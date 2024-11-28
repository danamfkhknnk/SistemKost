<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\KeluhanController;
use App\Http\Controllers\PenghuniController;
use App\Http\Controllers\PenyewaController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\TagihanController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
// Route::get('/home', function() {
//     return redirect('/');
// });

Route::middleware(['guest'])->group(function(){
    Route::get('/login', [SesiController::class, 'index']);
    Route::post('/login', [SesiController::class, 'login'])->name('login');
    Route::get('/register', [SesiController::class, 'register'])->name('register');
    Route::post('/register', [AdminController::class, 'regis'])->name('regis');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/admin', [AdminController::class, 'index'])->middleware('userAkses:admin');


    Route::get('/publik', [HomeController::class, 'publik'])->middleware('userAkses:publik');



    Route::get('/admin/pengguna', [AdminController::class, 'index'])->middleware('userAkses:admin')->name('pengguna');
    Route::get('/admin/pengguna/tambah', [AdminController::class, 'formPengguna'])->middleware('userAkses:admin');
    Route::post('/admin/pengguna/tambah', [AdminController::class, 'tambahPengguna'])->middleware('userAkses:admin');
    Route::get('/admin/pengguna/{id}/edit', [AdminController::class, 'editPengguna'])->middleware('userAkses:admin');
    Route::patch('/admin/pengguna/{id}/edit', [AdminController::class, 'updatePengguna'])->middleware('userAkses:admin');
    Route::get('/admin/pengguna/{id}/delete', [AdminController::class, 'deletePengguna'])->middleware('userAkses:admin');


    Route::get('/admin/kamar', [KamarController::class, 'index'])->middleware('userAkses:admin')->name('kamar');
    Route::get('/admin/kamar/tambah', [KamarController::class, 'formKamar'])->middleware('userAkses:admin');
    Route::get('preview-images', [KamarController::class, 'previewImages']);
    Route::post('/admin/kamar/tambah', [KamarController::class, 'tambahKamar'])->middleware('userAkses:admin');
    Route::get('/admin/kamar/{id}/edit', [KamarController::class, 'editKamar'])->middleware('userAkses:admin');


    Route::get('/admin/keluhan', [KeluhanController::class, 'index'])->middleware('userAkses:admin');




    Route::get('/admin/tagihan', [TagihanController::class, 'index'])->middleware('userAkses:admin');

    Route::get('/admin/penghuni', [PenghuniController::class, 'index'])->middleware('userAkses:admin');
    Route::get('/admin/penghuni/tambah', [PenghuniController::class, 'tambahPenghuni'])->middleware('userAkses:admin');
    Route::get('/admin/penghuni/edit/id', [PenghuniController::class, 'editPenghuni'])->middleware('userAkses:admin');






    Route::get('/penyewa', [PenyewaController::class, 'index'])->middleware('userAkses:penyewa');
    Route::get('/penyewa/keluhan', [PenyewaController::class, 'keluhan'])->middleware('userAkses:penyewa');
    Route::get('/penyewa/tagihan', [PenyewaController::class, 'tagihan'])->middleware('userAkses:penyewa');
    Route::get('/penyewa/profil', [PenyewaController::class, 'profil'])->middleware('userAkses:penyewa');
    







    Route::get('/logout', [SesiController::class, 'logout']);
});