<?php

namespace App\Http\Controllers;

use App\Models\Disposisi;

// use App\Models\SuratMasuk;

class DetailDisposisiController extends Controller
{
    public function detaildisposisi($id)
    {
        $data = Disposisi::with(['suratmasuk', 'diteruskan'])->find($id);
        return view('layouts.detail_disposisi', ['data' => $data]);
    }
}
