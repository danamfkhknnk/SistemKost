<?php

namespace App\Http\Controllers;

use App\Models\kamar;
use App\Models\Keluhan;
use App\Models\pembayaran;
use App\Models\penghuni;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use League\CommonMark\Extension\Attributes\Node\Attributes;

class AdminController extends Controller
{
    function dashboard(){
        $user_nama = Auth::user()->nama;
        $jmlkamar = kamar::count();
        $kmrterisi = kamar::where('status', 'terisi')->count();
        $kmrtersedia = kamar::where('status', 'tersedia')->count();

        $databyr = pembayaran::count();
        $byrselesai = pembayaran::where('status','selesai')->count();
        // $jmlselesai = pembayaran::where('status','selesai')->sum('');

        $dtpenghuni = penghuni::count();

        $dtuser = User::count();

        $dtkeluhan = Keluhan::count();
        $klhnselesai = Keluhan::where('status','selesai')->count();
        $klhnpending = Keluhan::where('status','pending')->count();
        return view ('Admin.Dashboard', compact('user_nama','jmlkamar','kmrterisi','kmrtersedia','databyr','byrselesai','dtpenghuni','dtuser','dtkeluhan','klhnselesai','klhnpending'));
    }
    function index (){

        $users=User::get()->all();
        
        return view ('Admin.Pengguna.pengguna', ['users' => $users]);
    }

    function regis( Request $request){
        $request->validate( [
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'telepon' => 'required|max:15|unique:users,telepon',
            'password' => 'required|string|min:8',
        ]);

        User::create( attributes : $request->only('nama','email','password','telepon'));

        Session::flash('message','Registrasi Berhasil, Silahkan Login');

        return redirect()->route('login');
    }


    function tambahPengguna( Request $request){
        $request->validate([
            'nama' => 'required|string|max:255|unique:users,nama',
            'email' => 'required|email|unique:users,email',
            'role' => 'required|in:publik,penghuni,admin',
            'password' => 'required|string|min:8',
        ]);

        User::create($request->all());

        Session::flash('message','Tambah Data Berhasil');

        return redirect()->route('pengguna');
    }

    function formPengguna(){
        return view('Admin.Pengguna.add');
    }
    function editPengguna( $id){

        $users = User::findOrFail($id);
        return view('Admin.Pengguna.edit',['users' => $users]);
    }

    function updatePengguna(Request $request, $id){
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'role' => 'required',
            'password' => 'required|string|min:8',
        ]);


        $users = User::findOrFail($id);
        if ($request->filled('password')) {
            $users->password = Hash::make($request->password);
        }
        $users->update($request->all());
        

        Session::flash('message','Update Data Berhasil');
        return redirect()->route('pengguna');
    }

    function deletePengguna($id){
        User::findOrFail($id)->delete();

        Session::flash('message','Delete Data Berhasil');
        return redirect()->route('pengguna');
    }


}