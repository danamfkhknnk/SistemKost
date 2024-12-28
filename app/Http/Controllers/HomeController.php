<?php

namespace App\Http\Controllers;

use App\Models\info;
use App\Models\tentang;
use App\Models\testi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Home.Layout');
    }

    public function informasi($id){
        $info = info::findOrFail($id);
        return view('Admin.Home.informasi',['info' => $info]);
    }

    public function updateInformasi(Request $request, $id){
        $request->validate([
            'wa' => 'required|numeric',
            'fb' => 'required|string',
            'alamat' => 'required|string',
            'logo.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'galeri.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
 
        $info = info::findOrFail($id);

        $data = $request->only(['wa','fb','alamat']);

        if ($files = $request->file('logo')) {
            if ($info->logo) {
                Storage::disk('public')->delete('home/' . $info->logo); // Hapus gambar lama
            }
                $fileName = date('YmdHis') . "_" . $files->getClientOriginalName();
                $files->move(public_path('home'), $fileName); // Pindahkan file ke direktori yang ditentukan
                $data['logo'] = "$fileName";
        } else {
            // Jika tidak ada gambar baru, gunakan gambar lama
            $data['logo'] = $info->logo;
        }

        if ($files = $request->file('galeri')) {
            $uploadedImages = []; // Array untuk menyimpan nama file
            // Hapus gambar lama jika ada
            if ($info->galeri) {
                $oldImages = explode(',', $info->galeri);
                foreach ($oldImages as $oldImage) {
                    Storage::disk('public')->delete('home/' . $oldImage); // Hapus gambar lama
                }
            }
            // Upload gambar baru
            foreach ($files as $file) {
                $fileName = date('YmdHis') . "_" . $file->getClientOriginalName();
                $file->move(public_path('home'), $fileName); // Pindahkan file ke direktori yang ditentukan
                $uploadedImages[] = $fileName; // Tambahkan nama file ke array
            }
            $data['galeri'] = implode(',', $uploadedImages); // Gabungkan nama file menjadi string
        } else {
            // Jika tidak ada gambar baru, gunakan gambar lama
            $data['galeri'] = $info->galeri;
        }

        $info->update($data);
        
        Session::flash('message', 'Update Data Berhasil');
        
        return redirect()->route('info', ['id' => $info->id]);
    }



    
    public function testi(){
        $testies = testi::with('user')->simplePaginate(10);
        return view('Admin.Home.testi', compact('testies'));
    }
    public function deleteTesti($id){
        
        $testimoni = testi::find($id);

        $testimoni-> testi = null;
        $testimoni->save();

        Session::flash('message', 'Update Data Berhasil');
        
        return redirect()->route('testi');
    }

    public function tentang(){
        $tentangs = tentang::all();
        return view('Admin.Home.tentang', compact('tentangs'));
    }
    
    public function updatetentang(Request $request){
        $request->validate([
            'poin.*' => 'required|string', // Validasi untuk array poin
            'desk.*' => 'required|string',  // Validasi untuk array desk
        ]);
    
        foreach ($request->poin as $id => $poin) {
            $tentang = tentang::findOrFail($id);
            $tentang->update([
                'poin' => $poin,
                'desk' => $request->desk[$id],
            ]);
        }
    
        Session::flash('message', 'Update Data Berhasil');
        
        return redirect()->route('tentang');
    }
    
}