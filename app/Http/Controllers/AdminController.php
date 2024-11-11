<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index (){
        return view ('Admin.Pengguna.pengguna');
    }
    function tambahPengguna(){
        return view('Admin.Pengguna.add');
    }

    function editPengguna(){
        return view('Admin.Pengguna.edit');
    }
}