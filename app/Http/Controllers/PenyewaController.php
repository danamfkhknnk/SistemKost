<?php

namespace App\Http\Controllers;

use App\Models\info;
use App\Models\kamar;
use App\Models\keluhan;
use App\Models\laporan;
use App\Models\pembayaran;
use App\Models\penghuni;
use App\Models\profil;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\testi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PenyewaController extends Controller
{
    function index(){ 
        $user_nama = Auth::user()->nama;
        return view('Penyewa.Dashboard',compact('user_nama'));
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
        $profil = penghuni::with('user')->where('user_id', Auth::id())->firstOrFail();
        
        return view('Penyewa.Profil', compact('user_nama', 'profil'));
    }
    
    public function updateProfil(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nik' => 'required|string|unique:penghunis,nik|max:20',
            'telepon' => 'required|max:15',
            'alamat' => 'required|string|max:255',
            'foto.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $profil = Penghuni::where('user_id', Auth::id())->firstOrFail();

        $data = $request->all();

        $user = User::findOrFail(Auth::id());
        $user->nama = $request->nama; // Update nama
        $user->telepon = $request->telepon; // Update nama
        $user->save(); // Simpan perubahan

        // Update data di tabel penghuni
        $profil->update($data);

        Session::flash('message', 'Update Data Berhasil');
        return redirect()->route('profil');
    }



    function testimoni(){
        $user_id = Auth::user()->id;
        $testi = testi::where('user_id', Auth::id())->firstOrFail();
        
        return view('Penyewa.Testimoni', compact('testi'));
    }

    public function updateTestimoni(Request $request)
    {
        $request->validate([
            'testi' => 'required|string',
        ]);
        // Temukan testimoni berdasarkan user_id yang sedang login
        $testimoni = testi::where('user_id', Auth::id())->firstOrFail();
        // Update kolom 'testi' dengan data dari request
        $testimoni->testi = $request->testi; // Hanya update kolom 'testi'
        $testimoni->save(); // Simpan perubahan

        Session::flash('message', 'Update Data Berhasil');
        return redirect()->route('testimoni');
    }
    
    function tagihan(){
        $pembayaran = Pembayaran::with('kamar', 'penghuni')->where('user_id', Auth::user()->id)->whereIn('status', ['pending','selesai'])->get();
        return view('Penyewa.Tagihan', compact('pembayaran'));
    }

    function bayarTagihan(Request $request){
        $pembayaran = Pembayaran::find($request->id);
        $pembayaran->status = 'selesai';
        $pembayaran->save();
        
        $kamar = kamar::find($pembayaran->kamar_id);
        laporan::create([
            'kamar_id' => $kamar->id,
            'tipe' => 'masuk',
            'harga' => $kamar->harga, // Mengambil harga dari tabel kamar
        ]);

        Session::flash('message', 'Pembayaran Sewa Berhasil');
        return redirect()->route('tagihan');
    }

    public function pdfTagihan($id)
    {
        $pembayaran = Pembayaran::with('kamar', 'user')->find($id);

        $info = info::first(); 

        // Load view untuk PDF
        $pdf = PDF::loadView('Penyewa.invoice', compact('pembayaran','info'));

        // Download PDF
        return $pdf->download('lnvoice'.$pembayaran->id.'.pdf');
    }
    
}