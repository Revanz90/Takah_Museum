<?php

use App\Http\Controllers\ActionDisposisiController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailDisposisiController;
use App\Http\Controllers\DetailSuratMasukController;
use App\Http\Controllers\DisposisiController;
use App\Http\Controllers\DitakahkanController;
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

Route::get('/dashboard', [DashboardController::class, 'hitungsurat'], function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', function () {
    return view('auth.login');
});

Route::get('akun', [AkunController::class, 'akun'])->name('akun');
Route::get('/daftar', [DaftarController::class, 'daftar'])->name('daftar');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/surat_masuk', [SuratMasukController::class, 'suratmasuk'])->name('suratmasuk');
    Route::post('/surat_masuk', [SuratMasukController::class, 'store'])->name('storesuratmasuk');
    Route::post('/surat_masuk/{id}', [SuratMasukController::class, 'updatesuratmasukditakahkan'])->name('suratditakahkan');
    Route::get('/{id}/detail_suratmasuk', [DetailSuratMasukController::class, 'detailsuratmasuk'])->name('detail_suratmasuk');

    Route::get('/ditakahkan', [DitakahkanController::class, 'ditakahkan'])->name('ditakahkan');

    Route::post('/{id}/detail_disposisi', [DetailDisposisiController::class, 'detaildisposisi'])->name('detail_disposisi');

    Route::get('/surat_keluar', [SuratKeluarController::class, 'suratkeluar'])->name('suratkeluar');
});

Route::group(['middleware' => ['role:super-admin|admin|kamus']], function () {
    Route::get('/disposisi', [DisposisiController::class, 'disposisi'])->name('disposisi');
    Route::get('/{id}/disposisi', [DisposisiController::class, 'getpdf'])->name('getpdf');
    Route::post('/disposisi', [DisposisiController::class, 'store'])->name('store_disposisi');
    Route::get('/action_disposisi', [ActionDisposisiController::class, 'action'])->name('action_disposisi');
});

require __DIR__ . '/auth.php';
