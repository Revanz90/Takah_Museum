<?php

namespace App\Http\Controllers;
use App\Models\SuratMasuk;

class DitakahkanController extends Controller
{
    public function ditakahkan()
    {
        $suratMasuk = SuratMasuk::all()->sortByDesc('created_at');
        return view('layouts.ditakahkan', ['datas' => $suratMasuk]);
    }

    public function updatesuratmasukditakahkan($id)
    {
        $data = SuratMasuk::find($id);
        $data->update(['status' => 'ditakahkan']);
        $data->update(['ditakahkan_at' => now()]);

        return view('layouts.ditakahkan');
    }
}
