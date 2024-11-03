<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    function index(){
        return view('Component.Login');
    }

    function login(Request $request){
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
            }
        }else{
            return redirect('/login')->withErrors('Username dan password yang dimasukkan salah')->withInput();
        }
    }

    function logout(){
        Auth::logout();
        return redirect('/');
    }
}