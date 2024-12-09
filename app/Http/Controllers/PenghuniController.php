<?php

namespace App\Http\Controllers;

use App\Models\kamar;
use App\Models\penghuni;
use App\Models\testi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PenghuniController extends Controller
{
    function index(){
        $penghuni = penghuni::with('user','kamar')->orderBy('created_at', 'desc')->get();
        return view('Admin.Penghuni.Penghuni',['penghuni'=> $penghuni]);
    }
    function formPenghuni(){
        $users = User::whereIn('role', [User::ROLE_PUBLIK])->get();
        $kamars = kamar::where('status', 'tersedia')->get();

        return view('Admin.Penghuni.add', compact('users', 'kamars'));
    }
    function createPenghuni(Request $request){
        $request->validate([
            'user_id' => 'required|unique:penghunis,user_id|exists:users,id',
            'kamar_id' => 'required|unique:penghunis,kamar_id|exists:kamars,id',
            'tgglmasuk'=> 'required|date',
        ]);
        penghuni::create($request->all());

        $kamar = Kamar::find($request->kamar_id);
        $kamar->status = 'terisi';
        $kamar->save();
        $role = User::find($request->user_id);
        $role->role = 'penyewa';
        $role->save();

        testi::create([
            'user_id' => $request->user_id,
        ]);
        
        Session::flash('message','Tambah Data Berhasil');

        return redirect()->route('penghuni');
    }

    function editPenghuni($id){

        $penghuni = Penghuni::findOrFail($id);
        $users = User::whereIn('role', [User ::ROLE_PENYEWA, User::ROLE_PUBLIK])->get();
        $kamars = kamar::where('status', 'tersedia')->get();
        return view('Admin.Penghuni.edit',compact('users', 'kamars', 'penghuni'));
    }

    function updatePenghuni(Request $request, $id){
        $request->validate([
            'tanggal_keluar' => 'nullable|date',
        ]);

        $penghuni = Penghuni::findOrFail($id);
        $kamar = Kamar::find($penghuni->kamar_id);
        $role = User::find($penghuni->user_id);
        $penghuni->update($request->all());
        if ($kamar) {
            $kamar->status = 'tersedia';
            $kamar->save();
        }
        if ($role) {
            $role->role = 'publik';
            $role->save();
        }
    

        Session::flash('message','Update Data Berhasil');
        return redirect()->route('penghuni');

    }

    function deletePenghuni(Request $request, $id){
         
         $penghuni = penghuni::findOrFail($id);

         $penghuni->delete();
    
        Session::flash('message','Delete Data Berhasil');
        return redirect()->route('penghuni');
    }
    
}