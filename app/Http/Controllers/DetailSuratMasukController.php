<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;
use App\Models\FileSuratMasuk;

class DetailSuratMasukController extends Controller
{
    public function detailsuratmasuk($id)
    {
        $data = SuratMasuk::find($id);
        $file = FileSuratMasuk::where('id_suratmasuk', $data->id)->first();
        return view('layouts.detail_suratmasuk', ['data' => $data, 'file' => $file]);
    }
}
