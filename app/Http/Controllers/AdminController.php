<?php

namespace App\Http\Controllers;

use App\Models\kamar;
use App\Models\keluhan;
use App\Models\laporan;
use App\Models\pembayaran;
use App\Models\penghuni;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use League\CommonMark\Extension\Attributes\Node\Attributes;

class AdminController extends Controller
{
    function dashboard(){
        $jmlkamar = kamar::count();
        $kmrterisi = kamar::where('status', 'terisi')->count();
        $kmrtersedia = kamar::where('status', 'tersedia')->count();
        $jmlmasuk = laporan::where('tipe', 'masuk')
        ->get()
        ->sum('harga');
        $jmlkeluar = laporan::where('tipe', 'keluar')
        ->get()
        ->sum('harga');

        $jml = $jmlmasuk - $jmlkeluar;
       
        $databyr = laporan::count();
        $jmlakun = User::whereIn('role', [User ::ROLE_PENYEWA, User::ROLE_PUBLIK])->count();
        $penghuni = User::whereIn('role', [User ::ROLE_PENYEWA])->count();
        $dtpenghuni = User::whereIn('role', [User ::ROLE_PENYEWA])->get();
        $dtuser = User::count();
        $dtkeluhan = keluhan::count();
        $klhnselesai = keluhan::where('status','selesai')->count();
        $klhnpending = keluhan::where('status','pending')->count();
        $tgl = penghuni::with('user')->whereNull('tgglkeluar')->get();

        return view ('Admin.Dashboard', compact('jml','dtpenghuni','tgl','jmlakun','penghuni','jmlkamar','kmrterisi','kmrtersedia','databyr','dtuser','dtkeluhan','klhnselesai','klhnpending'));
    }
    function index (){

        $users=User::whereIn('role', [User ::ROLE_PENYEWA, User::ROLE_PUBLIK])->simplePaginate(10);

        $admin = User::whereIn('role', [User :: ROLE_ADMIN])->get();
        
        return view ('Admin.Pengguna.pengguna', compact('users', 'admin'));
    }

    function regis( Request $request){
        $request->validate( [
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'telepon' => 'required|max:15|unique:users,telepon',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create( attributes : $request->only('nama','email','password','telepon'));
        event(new Registered($user));
        $user->sendEmailVerificationNotification();
       
        // // Flash message untuk sukses
        Session::flash('message', 'Registrasi Berhasil, Silahkan Cek Email Anda untuk Verifikasi.');

        return redirect()->route('verification.notice');
    }


    public function tambahPengguna(Request $request)
    {
    
        $request->validate([
            'nama' => 'required|string|max:255|unique:users,nama',
            'email' => 'required|email|unique:users,email',
            'telepon' => 'required|max:15|unique:users,telepon',
            'role' => 'required|in:publik,penghuni,admin',
            'password' => 'required|string|min:8',
        ]);
    
        $user = User::create($request->all());
        event(new Registered($user));
        $user->sendEmailVerificationNotification();
    
        Session::flash('message', 'Tambah Data Berhasil');
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