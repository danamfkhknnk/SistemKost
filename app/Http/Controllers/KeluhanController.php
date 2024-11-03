<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeluhanController extends Controller
{
    function index(){
        return view('Admin.Keluhan');
    }
}