<?php

namespace App\Http\Controllers;

use App\Models\Keluhan;
use Illuminate\Http\Request;

class KeluhanController extends Controller
{
    function index(){

        $keluhan = Keluhan::with('user')->get();
        return view('Admin.Keluhan.Keluhan',['keluhan'=> $keluhan]);
    }

    
}