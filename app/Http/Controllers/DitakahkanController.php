<?php

namespace App\Http\Controllers;
use App\Models\SuratMasuk;
use App\Models\Role;

class DitakahkanController extends Controller
{
    public function ditakahkan()
    {
        $suratMasuk = SuratMasuk::all()->sortByDesc('created_at');
        $kpd = Role::where('name', 'kamus')->get();
        return view('layouts.ditakahkan', ['datas' => $suratMasuk, 'kepada' => $kpd]);
    }

    public function updatesuratmasukditakahkan($id)
    {
        $data = SuratMasuk::find($id);
        $data->update(['status' => 'ditakahkan']);
        $data->update(['ditakahkan_at' => now()]);

        return view('layouts.ditakahkan');
    }
}
