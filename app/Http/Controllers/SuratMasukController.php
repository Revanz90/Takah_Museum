<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;
use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    public function suratmasuk()
    {
        return view('layouts.surat_masuk');
    }

    public function store(Request $request)
    {
        // SuratMasuk::create([
        //     'id' => $request->id,
        //     'dari' => $request->dari,
        //     'no_surat' => $request->no_surat,
        //     'perihal' => $request->perihal,
        //     'keterangan' => $request->keterangan,
        //     // 'status' =>$request->status,
        // ]);
    }
}
