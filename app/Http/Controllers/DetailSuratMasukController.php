<?php

namespace App\Http\Controllers;

use App\Models\FileSuratMasuk;
use App\Models\SuratMasuk;

class DetailSuratMasukController extends Controller
{
    public function detailsuratmasuk()
    {
        $suratMasuk = SuratMasuk::all();
        $FileSuratMasuk = FileSuratMasuk::all();

        return view('layouts.detail_suratmasuk', ['datadetailsm' => $suratMasuk]);
    }
}
