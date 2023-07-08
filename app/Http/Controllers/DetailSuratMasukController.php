<?php

namespace App\Http\Controllers;

use App\Models\FileSuratMasuk;
use App\Models\SuratMasuk;

class DetailSuratMasukController extends Controller
{
    public function detailsuratmasuk($id)
    {
        $data = SuratMasuk::find($id);
        $file = FileSuratMasuk::where('id_suratmasuk', $data->id)->first();
        return view('layouts.detail_suratmasuk', ['data' => $data, 'file' => $file]);
    }
}
