<?php

namespace App\Http\Controllers;

use App\Models\Disposisi;

class DetailDisposisiController extends Controller
{
    public function detaildisposisi($id)
    {
        $data = Disposisi::find($id);
        return view('layouts.detail_disposisi', ['datadisposisi' => $data]);

    }
}
