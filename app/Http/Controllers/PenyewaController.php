<?php

namespace App\Http\Controllers;

use App\Models\Keluhan;
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




    function tagihan(){
        return view('Penyewa.Tagihan');
    }
    function profil(){

        $user_nama = Auth::user()->nama;
        

        return view('Penyewa.Profil', compact('user_nama'));
    }

    
}