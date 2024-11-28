<?php

namespace App\Http\Controllers;

use App\Models\kamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KamarController extends Controller
{
    function index(){
        return view('Admin.Kamar.Kamar');
    }



    function formKamar(){
        return view('Admin.Kamar.add');
    }

    function tambahKamar(Request $request){
         $request->validate([
            'nokamar' => 'required',
            'tipe' => 'required|in:AC,Kipas Angin',
            'harga' => 'required',
            
            'status' => 'required|in:tersedia,terisi',
            'gambarkamar' => 'required',
            'gambarkamar.*' => 'mimes:jpg,png,jpeg,gif,svg'
        ]);

        if($request->hasfile('gambarkamar'))
         {
            foreach($request->file('gambarkamar') as $key => $file)
            {
                $path = $file->store('public/gambarkamar');
                $name = $file->getClientOriginalName();
            }
         }

        kamar::create($request->all());

        Session::flash('message','Tambah Data Berhasil');

        return redirect()->route('kamar');
    }

    function editKamar(){
        return view('Admin.Kamar.edit');
    }
}