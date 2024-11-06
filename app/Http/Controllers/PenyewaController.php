<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenyewaController extends Controller
{
    function index(){
        return view('Penyewa.Dashboard');
    }
    function keluhan(){
        return view('Penyewa.Keluhan');
    }
    function tagihan(){
        return view('Penyewa.Tagihan');
    }

    
}