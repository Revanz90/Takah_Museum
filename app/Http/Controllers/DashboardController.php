<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;

class DashboardController extends Controller
{
    public function hitungsurat()
    {
        $csuratmasuk = SuratMasuk::count();
        $cditakahkan = SuratMasuk::whereNotNull('ditakahkan_at')->get()->count();
        $csuratditerima = SuratMasuk::where('status', 'diterima')->get()->count();
        $csuratditolak = SuratMasuk::where('status', 'ditolak')->get()->count();

        return view('dashboard', ['countsuratmasuk' => $csuratmasuk, 'countditakahkan' => $cditakahkan, 'countsuratditerima' => $csuratditerima, 'countsuratditolak' => $csuratditolak]);
    }
}
