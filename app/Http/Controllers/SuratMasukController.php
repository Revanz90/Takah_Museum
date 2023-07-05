<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\SuratMasuk;
use App\Models\FileSuratMasuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SuratMasukController extends Controller
{
    public function suratmasuk()
    {
        $suratMasuk = SuratMasuk::all();
        return view('layouts.surat_masuk', ['datas' => $suratMasuk]);
    }

    public function store(Request $request)
    {
        try{
            $suratmasuk = new SuratMasuk();
            $filesuratmasuk = new FileSuratMasuk();
            
            // Validasi yang wajib diinputkan pada request payloads
            $validated = $request->validate([
                'dari' => 'required',
                'no_surat' => 'required',
                'perihal' => 'required',
                'keterangan' => 'required',
                'Input_SuratMasuk' =>'required'
            ]);
    
            $suratmasuk->dari = $request->input('dari');
            $suratmasuk->no_surat = $request->input('no_surat');
            $suratmasuk->perihal = $request->input('perihal');
            $suratmasuk->keterangan = $request->input('keterangan');
            $suratmasuk->author_id = Auth::id();
            $suratmasuk->save();
    
            // Melakukan pengecekan jika inputan memiliki File
            if ($request->hasFile('Input_SuratMasuk')){
                $fileName = $request->Input_SuratMasuk->getClientOriginalName();
    
                // Menyimpan data pada storage local
                Storage::putFileAs('files', $request->Input_SuratMasuk, $fileName);
                // Menyimpan File pada database File Surat Masuk
                $filesuratmasuk->files = $fileName;
                $filesuratmasuk->id_suratmasuk = $suratmasuk->id;
                $filesuratmasuk->save();
            } 
    
            return redirect()->back()->with('success', 'Berhasil menambahkan Surat');
        } catch(\Throwable $th){
            return redirect()->back()->with('error', 'Gagal menambahkan Surat');
        }
    }
}
