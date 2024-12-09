<?php

namespace App\Http\Controllers;

use App\Models\info;
use App\Models\tentang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
            'tt' => 'required|string',
            'alamat' => 'required|string',
            'logo.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'galeri.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $info = info::findOrFail($id);

        $data = $request->all();

        if ($image = $request->file('logo')) {
            $logo = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move(public_path('home'), $logo);
            $data['logo'] = "$logo";
        }

        if ($files = $request->file('galeri')) {
            $uploadedImages = []; // Array untuk menyimpan nama file
            foreach ($files as $file) {
                $fileName = date('YmdHis') . "_" . $file->getClientOriginalName();
                $file->move(public_path('home'), $fileName);
                $uploadedImages[] = $fileName; // Tambahkan nama file ke array
            }
            $data['galeri'] = implode(',', $uploadedImages);
        }
        $info->update($data);
        
        Session::flash('message', 'Update Data Berhasil');
        
        return redirect()->route('info', ['id' => $info->id]);
    }



    
    public function testi(){
        return view('Admin.Home.testi');
    }


    public function updatetesti(Request $request, $id){
        $request->validate([
            'wa' => 'required|numeric',
            'fb' => 'required|string',
            'tt' => 'required|string',
            'logo.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'galeri.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $info = info::findOrFail($id);

        $data = $request->all();

        if ($image = $request->file('logo')) {
            $logo = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move(public_path('home'), $logo);
            $data['logo'] = "$logo";
        }

        if ($files = $request->file('galeri')) {
            $uploadedImages = []; // Array untuk menyimpan nama file
            foreach ($files as $file) {
                $fileName = date('YmdHis') . "_" . $file->getClientOriginalName();
                $file->move(public_path('home'), $fileName);
                $uploadedImages[] = $fileName; // Tambahkan nama file ke array
            }
            $data['galeri'] = implode(',', $uploadedImages);
        }
        $info->update($data);

       Session::flash('message', 'Update Data Berhasil');
        
        return redirect()->route('info');
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