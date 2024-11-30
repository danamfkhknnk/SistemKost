<?php

namespace App\Http\Controllers;

use App\Models\kamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KamarController extends Controller
{
    function index(){
        $kamars=kamar::get()->all();

        return view ('Admin.Kamar.Kamar', ['kamars' => $kamars]);
    }



    function formKamar(){
        return view('Admin.Kamar.add');
    }

    function tambahKamar(Request $request){
        
         $request->validate([
            'nokamar' => 'required',
            'tipe' => 'required|in:AC,Kipas Angin',
            'harga' => 'required|max:12',
            'status' => 'required|in:tersedia,terisi',
            'gambarkamar' => 'required|image|mimes:jpeg,png,jpg'
        ]);


        $kamar = $request->all();
        
        if ($image = $request->file('gambarkamar')) {
         
            $gambarkamar = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move(public_path('gambarkamar'), $gambarkamar);
            $kamar['gambarkamar'] = "$gambarkamar";
        }
        
        kamar::create($kamar);
        
        
        Session::flash('message','Tambah Data Berhasil');

        return redirect()->route('kamar');
    }

    function editKamar(){
        return view('Admin.Kamar.edit');
    }
}