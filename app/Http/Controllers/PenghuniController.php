<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenghuniController extends Controller
{
    function index(){
        return view ('Admin.Penghuni.Penghuni');
    }
}