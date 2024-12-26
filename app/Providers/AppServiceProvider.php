<?php

namespace App\Providers;

use App\Models\info;
use App\Models\kamar;
use App\Models\pembayaran;
use App\Models\tentang;
use App\Models\testi;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('Home.Layout', function ($view) {
            $info = info::first(); // Ambil data info
            $poin = tentang::all(); // Ambil semua data tentang
            $kamar = kamar::where('status', 'tersedia')->orderBy('nokamar','asc')->get(); // Ambil semua data tentang
            $testi = testi::with('user')->whereNotNull('testi')->get();
            $bayar =  pembayaran::all();
            $view->with(compact('info','bayar','poin','kamar', 'testi'));
             // Mengirimkan kedua variabel
        });
        
        View::composer('Component.LayoutAdmin', function ($view) {
            $info = info::first(); 
            $view->with('info', $info); 
        });
        View::composer('Component.LayoutPenyewa', function ($view) {
            $info = info::first(); 
            $view->with('info', $info); 
        });
    }
}