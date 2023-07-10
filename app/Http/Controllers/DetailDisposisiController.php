<?php

namespace App\Http\Controllers;

use App\Models\Disposisi;

class DetailDisposisiController extends Controller
{
    public function detaildisposisi($id)
    {
        $data = Disposisi::find($id);
        $dataview = Disposisi::all();
        return view('layouts.detail_disposisi', ['data' => $data, 'dataview' => $dataview]);

    }
}
