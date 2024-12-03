<?php

namespace App\Http\Controllers;

use App\Models\Keluhan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KeluhanController extends Controller
{
    function index(){

        $keluhan = Keluhan::with('user')->get();
        return view('Admin.Keluhan.Keluhan',['keluhan'=> $keluhan]);
    }

    function statusKeluhan(Request $request, $id){
        $request->validate([
            'status' => 'required|in:tolak,pending,selesai', // Ensure status is one of the allowed values
        ]);

        $keluhan = Keluhan::findOrFail($id);
        $keluhan->update($request->all());

        Session::flash('message','Update Data Berhasil');
        return redirect()->route('keluhanAdmin');
    }

    function deleteKeluhan($id){
        Keluhan::findOrFail($id)->delete();

        Session::flash('message','Delete Data Berhasil');
        return redirect()->route('keluhanAdmin');
    }
    
}