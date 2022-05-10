<?php

use App\Http\Controllers\Admin\MasterWargaController;
use App\Http\Controllers\Admin\PelayananController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Rt\RtMasterWargaController;
use App\Http\Controllers\Rt\RtPelayananController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/visi_misi', function () {
    return view('visi_misi');
});

Route::get('/perangkat_desa', function () {
    return view('perangkat_desa');
});

Route::get('/anggaran_dana', function () {
    return view('anggaran_dana');
});

Route::get('/demografis', function () {
    return view('demografis');
});


Route::get('/fasilitas_umum', function () {
    return view('fasilitas_umum');
});


Route::get('/potensi_desa', function () {
    return view('potensi_desa');
});



Route::get('/berita', function () {
    return view('berita');
});


Route::get('/layanan_pengaduan', function () {
    return view('layanan_pengaduan');
});




Route::get('/paud', function () {
    return view('paud');
});

Route::get('/tk', function () {
    return view('tk');
});

Route::get('/sd_mi', function () {
    return view('sd_mi');
});

Route::get('/smp_mts', function () {
    return view('smp_mts');
});

Route::get('/sma_smk_ma', function () {
    return view('sma_smk_ma');
});

Route::get('/foto_desa', function () {
    return view('foto_desa');
});

Route::get('/foto_kegiatan', function () {
    return view('foto_kegiatan');
});


// admin
Route::middleware('admin')->group(function () {
    Route::get('/admin',  [AdminController::class, 'index'])->name('admin');
    Route::get('/admin/pelayanan_grafik',  [PelayananController::class, 'dashboard'])->name('admin/pelayanan_grafik');
    Route::get('/admin/pelayanan',  [PelayananController::class, 'index'])->name('admin/pelayanan');
    Route::post('/admin/pelayanan',  [PelayananController::class, 'index'])->name('admin/pelayanan');
    Route::get('/admin/master_warga',  [MasterWargaController::class, 'index'])->name('admin/master_warga');
    Route::post('/admin/master_warga',  [MasterWargaController::class, 'index'])->name('admin/master_warga');
    Route::post('/admin/master_warga/import',  [MasterWargaController::class, 'importData'])->name('admin/master_warga/import');

    // Route::get('/user/profile', function () {
    //     // Uses first & second middleware...
    // });
});


// rt
Route::middleware('rt')->group(function () {
    Route::get('/rt',  [RtPelayananController::class, 'index'])->name('rt');
    Route::get('/rt/pelayanan',  [RtPelayananController::class, 'index'])->name('rt/pelayanan');
    Route::get('/rt/pelayanan/add',  [RtPelayananController::class, 'add'])->name('rt/pelayanan/add');
    Route::post('/rt/pelayanan/add',  [RtPelayananController::class, 'add_process'])->name('rt/pelayanan/add');
    // Route::get('/rt/pelayanan',  [RtPelayananController::class, 'index'])->name('rt/pelayanan');
    // Route::get('/rt/pelayanan',  [RtPelayananController::class, 'index'])->name('rt/pelayanan');

    Route::get('/rt/master_warga',  [RtMasterWargaController::class, 'index'])->name('rt/master_warga');
    Route::get('/rt/master_warga_rt',  [RtMasterWargaController::class, 'getWargaRt'])->name('rt/master_warga_rt');
    Route::get('/rt/master_warga/add',  [RtMasterWargaController::class, 'add'])->name('rt/master_warga/add');
    Route::post('/rt/master_warga/add',  [RtMasterWargaController::class, 'add_process'])->name('rt/master_warga/add');
    Route::post('/rt/master_warga/import',  [RtMasterWargaController::class, 'importData'])->name('rt/master_warga/import');



});



Auth::routes();
// Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
