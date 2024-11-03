<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PenyewaController;
use App\Http\Controllers\SesiController;
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
});

Route::middleware(['auth'])->group(function(){
    Route::get('/admin', [AdminController::class, 'index'])->middleware('userAkses:admin');
    Route::get('/penyewa', [PenyewaController::class, 'index'])->middleware('userAkses:penyewa');
    Route::get('/logout', [SesiController::class, 'logout']);
});