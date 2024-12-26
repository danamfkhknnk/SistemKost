<?php

namespace App\Http\Controllers;

use App\Models\kamar;
use App\Models\penghuni;
use App\Models\testi;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PenghuniController extends Controller
{
    function index(){
        $penghunis = penghuni::with('user','kamar')->orderBy('created_at', 'desc')->simplePaginate(10);
        return view('Admin.Penghuni.Penghuni', compact('penghunis'));
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
        $penghuni = Penghuni::findOrFail($id);

        $request->validate([
            'tgglkeluar' => 'required|date|after:' . Carbon::parse($penghuni->tgglmasuk)->toDateString(),
        ], [
            'tgglkeluar.after' => 'Tanggal jatuh tempo harus setelah tanggal masuk.',
        ]);
        
        $kamar = Kamar::find($penghuni->kamar_id);
        $role = User::find($penghuni->user_id);
        $penghuni->update(['tgglkeluar' => $request->tgglkeluar . '-' . date('d', strtotime($penghuni->tgglmasuk)),]);
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

    function deletePenghuni($id){
         
         $penghuni = penghuni::findOrFail($id);

         $penghuni->delete();
    
        Session::flash('message','Delete Data Berhasil');
        return redirect()->route('penghuni');
    }
    
}