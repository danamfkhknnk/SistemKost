<?php

namespace App\Http\Controllers;

use App\Models\info;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\ForgotPasswordMail;
use Illuminate\Support\Facades\Session;

class SesiController extends Controller
{
    function index(){
        $info = info::first(); 
        return view('Component.Login', ['info' => $info]);
    }

    function register()
    {
        $info = info::first(); 
        return view('Component.Register',  ['info' => $info]);
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


    public function forgot(){
        $info = info::first();
        return view('Component.formForgot', compact('info'));
    }

    public function sendEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $user = User::whereEmail($request->email)->first();

        if (!$user) {
            return back()->withErrors(['email' => 'Email tidak ditemukan']);
        }

        $token = Str::random(60);
        $passwordReset = DB::table('password_reset_tokens')->where('email', $request->email)->first();
        if ($passwordReset) {
            // Jika sudah ada, update token yang ada
            DB::table('password_reset_tokens')->where('email', $request->email)->update([
                'token' => $token,
                'created_at' => now(),
            ]);
        } else {
            // Jika belum ada, insert entri baru
            DB::table('password_reset_tokens')->insert([
                'email' => $request->email,
                'token' => $token,
                'created_at' => now(),
            ]);
        }

        Mail::to($user->email)->send(new ForgotPasswordMail($token));

        Session::flash('message', 'Silahkan Cek Email Anda untuk Reset Password.');
        return redirect()->route('login');
    }

    public function resetPassword($token)
    {
        $passwordReset = DB::table('password_reset_tokens')->where('token', $token)->first();

        if (!$passwordReset) {
            return redirect()->route('login')->withErrors(['token' => 'Token tidak valid']);
        }

        $info = info::first();

        return view('Component.reset', ['token' => $token,'info' => $info, 'email' => $passwordReset->email]);
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ]);

        $passwordReset = DB::table('password_reset_tokens')->where('token', $request->token)->first();

        if (!$passwordReset) {
            return redirect()->route('login')->withErrors(['token' => 'Token tidak valid']);
        }

        $user = User::whereEmail($passwordReset->email)->first();

        $user->password = bcrypt($request->password);
        $user->save();

        DB::table('password_reset_tokens')->where('email', $user->email)->delete();
        Session::flash('message', 'Berhasil Reset Password.');
        return redirect()->route('login')->with('status', 'Password berhasil direset. Silakan login dengan password baru Anda.');
    }
}