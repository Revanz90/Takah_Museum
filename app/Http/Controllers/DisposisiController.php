<?php

namespace App\Http\Controllers;

use App\Models\Disposisi;
use App\Models\DivisiMuseum;
use App\Models\SuratMasuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DisposisiController extends Controller
{
    public function disposisi()
    {
        $suratmasuk = SuratMasuk::all();
        $disposisi = Disposisi::all()->sortByDesc('created_at');
        $divisi = DivisiMuseum::all();
        return view('layouts.disposisi', ['datas' => $disposisi, 'datasm' => $suratmasuk, 'datadv' => $divisi]);
    }

    public function store(Request $request)
    {
        try {
            $disposisi = new Disposisi();
            // $suratmasuk = new SuratMasuk();

            // Validasi yang wajib diinputkan pada request payloads
            $validated = $request->validate([
                'suratmasuk_id' => 'required',
                'pesan_disposisi' => 'required',
                'tembusan_ke' => 'required',
                'status' => 'required',
            ]);

            $disposisi->pesan_disposisi = $request->input('pesan_disposisi');
            $disposisi->suratmasuk_id = $request->input('suratmasuk_id');
            $disposisi->tembusan_ke = $request->input('tembusan_ke');
            $disposisi->author_id = Auth::id();
            $disposisi->save();

            $data = SuratMasuk::find($request->input('suratmasuk_id'));
            $data->status = $request->input('status');
            $data->ditakahkan_at = now();
            $data->save();

            return redirect()->back()->with('success', 'Berhasil menambahkan Surat');

        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Gagal menambahkan Surat');
        }

    }
}
