<?php

use App\Http\Controllers\ActionDisposisiController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\DetailSuratMasukController;
use App\Http\Controllers\DisposisiController;
use App\Http\Controllers\DitakahkanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuratKeluarController;
use App\Http\Controllers\SuratMasukController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', function () {
    return view('auth.login');
});


Route::get('/akun', [AkunController::class, 'akun'])->name('akun');

Route::get('/daftar', [DaftarController::class, 'daftar'])->name('daftar');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/surat_masuk', [SuratMasukController::class, 'suratmasuk'])->name('suratmasuk');
    Route::post('/surat_masuk', [SuratMasukController::class, 'store'])->name('storesuratmasuk');

    Route::get('/surat_keluar', [SuratKeluarController::class, 'suratkeluar'])->name('suratkeluar');
    Route::get('/ditakahkan', [DitakahkanController::class, 'ditakahkan'])->name('ditakahkan');
    Route::get('/disposisi', [DisposisiController::class, 'disposisi'])->name('disposisi');
    Route::get('/action_disposisi', [ActionDisposisiController::class, 'action'])->name('action_disposisi');
    Route::get('/detail_suratmasuk', [DetailSuratMasukController::class, 'detailsuratmasuk'])->name('detail_suratmasuk');
});

require __DIR__ . '/auth.php';
