<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenyewaController extends Controller
{
    function index(){
        return view('Penyewa.Dashboard');
    }
}