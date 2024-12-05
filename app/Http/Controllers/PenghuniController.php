<?php

namespace App\Http\Controllers;

use App\Models\kamar;
use App\Models\penghuni;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PenghuniController extends Controller
{
    function index(){
        $penghuni = penghuni::with('user','kamar')->get();
        return view('Admin.Penghuni.Penghuni',['penghuni'=> $penghuni]);
    }
    function formPenghuni(){
        $users = User::whereIn('role', [User ::ROLE_PENYEWA, User::ROLE_PUBLIK])->get();
        $kamars = kamar::where('status', 'tersedia')->get();

        return view('Admin.Penghuni.add', compact('users', 'kamars'));
    }
    function createPenghuni(Request $request){
        $request->validate([
            'user_id' => 'required|unique:penghunis,user_id|exists:users,id',
            'kamar_id' => 'required|unique:penghunis,kamar_id|exists:kamars,id',
            
        ]);
        penghuni::create($request->all());

        Session::flash('message','Tambah Data Berhasil');

        return redirect()->route('penghuni');
    }

    function editPenghuni(){
        return view('Admin.Penghuni.edit');
    }

    function deletePenghuni(){
        return view('Admin.Penghuni.edit');
    }
    
}