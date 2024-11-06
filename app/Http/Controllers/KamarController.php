<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KamarController extends Controller
{
    function index(){
        return view('Admin.Kamar.Kamar');
    }

    function tambahKamar(){
        return view('Admin.Kamar.add');
    }

    function editKamar(){
        return view('Admin.Kamar.edit');
    }
}