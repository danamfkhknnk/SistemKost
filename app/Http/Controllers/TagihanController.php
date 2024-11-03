<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagihanController extends Controller
{
    function index(){
        return view('Admin.Tagihan');
    }
}