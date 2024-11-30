<?php

namespace App\Http\Controllers;

use App\Models\Keluhan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenyewaController extends Controller
{
    function index(){
        return view('Penyewa.Dashboard');
    }
    function keluhan(){
        $user_id = Auth::user()->id;
        $keluhan=Keluhan::where('user_id', $user_id)->get();
       
        return view('Penyewa.Keluhan', ['keluhan' => $keluhan]);
    }
    function tagihan(){
        return view('Penyewa.Tagihan');
    }
    function profil(){

        
        $user_nama = Auth::user()->nama;
        

        return view('Penyewa.Profil', compact('user_nama'));
    }

    
}