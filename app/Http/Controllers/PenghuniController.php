<?php

namespace App\Http\Controllers;

use App\Models\penghuni;
use Illuminate\Http\Request;

class PenghuniController extends Controller
{
    function index(){
        $penghuni = penghuni::with('user','kamar')->get();
        return view('Admin.Penghuni.Penghuni',['penghuni'=> $penghuni]);
    }
    function tambahPenghuni(){
        return view('Admin.Penghuni.add');
    }

    function editPenghuni(){
        return view('Admin.Penghuni.edit');
    }
    
}