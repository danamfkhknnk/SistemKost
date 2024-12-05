<?php

namespace App\Http\Controllers;

use App\Models\kamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

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
            'gambarkamar.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);
        
        $kamars = $request->all();
        if ($files = $request->file('gambarkamar')) {
            $uploadedImages = []; // Array untuk menyimpan nama file
            foreach ($files as $file) {
                $fileName = date('YmdHis') . "_" . $file->getClientOriginalName();
                $file->move(public_path('gambarkamar'), $fileName);
                $uploadedImages[] = $fileName; // Tambahkan nama file ke array
            }
            $kamars['gambarkamar'] = implode(',', $uploadedImages);
        }
        Kamar::create($kamars);
        Session::flash('message','Tambah Data Berhasil');
        return redirect()->route('kamar');
    }


    function editKamar( $id){

        $kamar = kamar::findOrFail($id);
        return view('Admin.Kamar.edit',['kamar' => $kamar]);
    }

    function updateKamar(Request $request, $id){
        $request->validate([
            'nokamar' => 'required',
            'tipe' => 'required|in:AC,Kipas Angin',
            'harga' => 'required|max:12',
            'status' => 'required|in:tersedia,terisi',
            'gambarkamar.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);
        $kamars = $request->only(['nokamar', 'tipe', 'harga', 'status']); // Ambil hanya field yang diperlukan
        // Temukan data kamar berdasarkan ID
        $kamar = Kamar::findOrFail($id);
        // Proses upload gambar
        if ($files = $request->file('gambarkamar')) {
            $uploadedImages = []; // Array untuk menyimpan nama file
            // Hapus gambar lama jika ada
            if ($kamar->gambarkamar) {
                $oldImages = explode(',', $kamar->gambarkamar);
                foreach ($oldImages as $oldImage) {
                    Storage::disk('public')->delete('gambarkamar/' . $oldImage); // Hapus gambar lama
                }
            }
            // Upload gambar baru
            foreach ($files as $file) {
                $fileName = date('YmdHis') . "_" . $file->getClientOriginalName();
                $file->move(public_path('gambarkamar'), $fileName); // Pindahkan file ke direktori yang ditentukan
                $uploadedImages[] = $fileName; // Tambahkan nama file ke array
            }
            $kamars['gambarkamar'] = implode(',', $uploadedImages); // Gabungkan nama file menjadi string
        } else {
            // Jika tidak ada gambar baru, gunakan gambar lama
            $kamars['gambarkamar'] = $kamar->gambarkamar;
        }
        // Perbarui data kamar di database
        $kamar->update($kamars);
        Session::flash('message','Update Data Berhasil');
        return redirect()->route('kamar');
    }

    public function deleteKamar($id)
    {
        // Find the room by ID
        $kamar = Kamar::findOrFail($id);
        // Delete associated images from storage
        if ($kamar->gambarkamar) {
            $images = explode(',', $kamar->gambarkamar);
            foreach ($images as $image) {
                Storage::disk('public')->delete('gambarkamar/' . $image);
            }
        }
        // Delete the room from the database
        $kamar->delete();
        // Redirect back with a success message
        return redirect()->route('kamar')->with('success', 'Hapus Data Berhasil!');
    }
   
}