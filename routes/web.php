<?php

use Illuminate\Support\Facades\Route;

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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
