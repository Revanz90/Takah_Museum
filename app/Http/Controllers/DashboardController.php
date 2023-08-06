<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;

class DashboardController extends Controller
{
    public function hitungsurat()
    {
        $csuratmasuk = SuratMasuk::count();
        $cditakahkan = SuratMasuk::whereNotNull('ditakahkan_at')->get()->count();
        $csudahdisposisi = SuratMasuk::whereNotNull('disposisi_at')->get()->count();
        $cbelumdisposisi = SuratMasuk::whereNull('disposisi_at')->get()->count();

        return view('dashboard', ['countsuratmasuk' => $csuratmasuk, 'countditakahkan' => $cditakahkan, 'countsudahdisposisi' => $csudahdisposisi, 'countbelumdisposisi' => $cbelumdisposisi]);
    }
}
