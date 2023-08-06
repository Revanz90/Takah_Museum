<?php

namespace App\Http\Controllers;

use App\Models\Disposisi;
use App\Models\DivisiMuseum;
use App\Models\FileSuratMasuk;
use App\Models\Role;
use App\Models\SuratMasuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DisposisiController extends Controller
{
    public function disposisi()
    {
        $suratmasuk = SuratMasuk::all()->sortByDesc('created_at');
        $disposisi = Disposisi::all();
        $divisi = DivisiMuseum::all();

        $kpd = Role::where('name', 'kamus')->get();
        return view('layouts.disposisi', ['datas' => $disposisi, 'datasm' => $suratmasuk, 'datadv' => $divisi, 'kepada' => $kpd]);
    }

    public function store(Request $request)
    {
        try {
            $disposisi = new Disposisi();

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

            $datasm = SuratMasuk::find($request->suratmasuk_id);
            $datasm->status = $request->status;
            $datasm->disposisi_at = now();

            $disposisi->save();
            $datasm->save();

            return redirect()->back()->with('success', 'Berhasil menambahkan Surat');

        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Gagal menambahkan Surat');
        }

    }

    public function getpdf($id)
    {
        $data = SuratMasuk::find($id);
        $file = FileSuratMasuk::where('id_suratmasuk', $data->id)->first();
        return $file;
    }
}
