<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class SesiController extends Controller
{
    function index(){
        return view('Component.Login');
    }

    function register()
    {
        return view('Component.Register');
    }


    function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],[
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi'
        ]);

        $infologin = [
            'email'=>$request->email,
            'password'=>$request->password,
        ];
    
        if(Auth::attempt($infologin)) {
            if(Auth::user()->role == 'admin'){
                return redirect('/admin');
            } else if(Auth::user()->role == 'penyewa'){
                return redirect('/penyewa');
            } else if(Auth::user()->role == 'publik')
                return redirect('/publik');
        }else{
            return redirect('/login')->withErrors('Email dan password yang dimasukkan salah')->withInput();
        }
    }

    function logout(){
        Auth::logout();
        return redirect('/');
    }
}