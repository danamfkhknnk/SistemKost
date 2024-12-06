<?php

namespace App\Http\Controllers;

use App\Models\Keluhan;
use App\Models\penghuni;
use App\Models\profil;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PenyewaController extends Controller
{
    function index(){
        return view('Penyewa.Dashboard');
    }
    function formkeluhan(){
        $user_id = Auth::user()->id;
        $keluhan=Keluhan::where('user_id', $user_id)->get(); 
        return view('Penyewa.Keluhan', ['keluhan' => $keluhan]);
    }
    function storeKeluhan(Request $request){
        $request->validate([
            'judul' => 'required',
            'keluhan' => 'required',
            'gambarbukti.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $user_id = Auth::user()->id;
        $keluhan = [
            'user_id' => $user_id,
            'judul' => $request->input('judul'),
            'keluhan' => $request->input('keluhan'),
            'gambarbukti' => $request->input('gambarbukti'),

        ];
         if ($files = $request->file('gambarbukti')) {
            $uploadedImages = []; // Array untuk menyimpan nama file
            foreach ($files as $file) {
                $fileName = date('YmdHis') . "_" . $file->getClientOriginalName();
                $file->move(public_path('gambarkeluhan'), $fileName);
                $uploadedImages[] = $fileName; // Tambahkan nama file ke array
            }
            $keluhan['gambarbukti'] = implode(',', $uploadedImages);
        }
        Keluhan::create($keluhan);
        Session::flash('message','Tambah Data Berhasil');
        return redirect()->route('keluhan');
    }

    function profil(){
        $user_nama = Auth::user()->nama;
        $user_id = Auth::user()->id;
        $profil = penghuni::where('user_id', Auth::id())->firstOrFail();
        
        return view('Penyewa.Profil', compact('user_nama', 'profil'));
    }
    
    public function updateProfil(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nik' => 'required|string|max:20',
            'telepon' => 'required|string|max:15',
            'alamat' => 'required|string|max:255',
            'gambarktp.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $profil = Penghuni::where('user_id', Auth::id())->firstOrFail();

        $data = $request->all();

        if ($image = $request->file('gambarktp')) {
            $gambarktp = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move(public_path('gambarktp'), $gambarktp);
            $data['gambarktp'] = "$gambarktp";
        }

        $user = User::findOrFail(Auth::id());
        $user->nama = $request->nama; // Update nama
        $user->save(); // Simpan perubahan

        // Update data di tabel penghuni
        $profil->update($data);

        Session::flash('message', 'Update Data Berhasil');
        return redirect()->route('profil');
    }

    function tagihan(){
        return view('Penyewa.Tagihan');
    }

    
}