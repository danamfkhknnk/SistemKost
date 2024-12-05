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
        $penghuni = penghuni::with('user','kamar')->orderBy('created_at', 'desc')->get();
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
            'tgglmasuk'=> 'required|date',
        ]);
        penghuni::create($request->all());

        $kamar = Kamar::find($request->kamar_id);
        $kamar->status = 'terisi';
        $kamar->save();
        
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
        $penghuni->update($request->all());
        if ($kamar) {
            $kamar->status = 'tersedia';
            $kamar->save();
        }

        Session::flash('message','Update Data Berhasil');
        return redirect()->route('penghuni');

    }

    function deletePenghuni(Request $request, $id){

         // Temukan penghuni berdasarkan ID
         $penghuni = penghuni::findOrFail($id);

         // Temukan kamar yang terkait dengan penghuni
         $kamar = Kamar::find($penghuni->kamar_id);
 
         // Hapus penghuni
         $penghuni->delete();
 
         // Ubah status kamar menjadi 'tersedia'
         if ($kamar) {
             $kamar->status = 'tersedia';
             $kamar->save();
         }

    
        Session::flash('message','Delete Data Berhasil');
        return redirect()->route('penghuni');
    }
    
}