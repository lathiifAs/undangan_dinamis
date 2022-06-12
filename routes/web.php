<?php

use App\Http\Controllers\Admin\MasterWargaController;
use App\Http\Controllers\Admin\PelayananController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;


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
    // return view('demo');
    return view('welcome');
    // return view('manage.landingpage');
});

Route::get('/demo', function () {
    return view('demo');
    // return view('welcome');
    // return view('manage.landingpage');
})->name('/demo');
// admin
Route::middleware('customer')->group(function () {
    Route::get('/customer',  [CustomerController::class, 'index'])->name('customer');
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


// // rt
// Route::middleware('rt')->group(function () {
//     Route::get('/rt',  [RtPelayananController::class, 'index'])->name('rt');
//     Route::get('/rt/pelayanan',  [RtPelayananController::class, 'index'])->name('rt/pelayanan');
//     Route::get('/rt/pelayanan/add',  [RtPelayananController::class, 'add'])->name('rt/pelayanan/add');
//     Route::post('/rt/pelayanan/add',  [RtPelayananController::class, 'add_process'])->name('rt/pelayanan/add');
//     // Route::get('/rt/pelayanan',  [RtPelayananController::class, 'index'])->name('rt/pelayanan');
//     // Route::get('/rt/pelayanan',  [RtPelayananController::class, 'index'])->name('rt/pelayanan');

//     Route::get('/rt/master_warga',  [RtMasterWargaController::class, 'index'])->name('rt/master_warga');
//     Route::get('/rt/master_warga_rt',  [RtMasterWargaController::class, 'getWargaRt'])->name('rt/master_warga_rt');
//     Route::get('/rt/master_warga/add',  [RtMasterWargaController::class, 'add'])->name('rt/master_warga/add');
//     Route::post('/rt/master_warga/add',  [RtMasterWargaController::class, 'add_process'])->name('rt/master_warga/add');
//     Route::post('/rt/master_warga/import',  [RtMasterWargaController::class, 'importData'])->name('rt/master_warga/import');



// });



Auth::routes();
// Route::get('/logout', 'Auth\LoginController@logout');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
