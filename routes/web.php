<?php

use App\Http\Controllers\Admin\MasterWargaController;
use App\Http\Controllers\Admin\PelayananController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TestingController;


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

Route::get('/testing',  [TestingController::class, 'index'])->name('testing');

// admin

// customer
Route::middleware('customer')->group(function () {
    Route::get('/customer',  [CustomerController::class, 'index'])->name('customer');
// customer foto
    Route::get('/customer/coverFoto/',  [CustomerController::class, 'coverFoto'])->name('customer/coverFoto');
    Route::get('/customer/editcoverFoto/{id}', [CustomerController::class, 'editcoverFoto'])->name('customer/editcoverFoto');
    Route::post('/customer/updatecoverFoto', [CustomerController::class, 'updatecoverFoto'])->name('customer/updatecoverFoto');
    Route::post('/customer/uploadFoto',  [CustomerController::class, 'uploadFoto'])->name('customer/uploadFoto');

    // undangan
    Route::get('/customer/undangan/{id}',  [CustomerController::class, 'undangan'])->name('customer/undangan');
    Route::post('/customer/update-undangan',  [CustomerController::class, 'updateUndangan'])->name('customer/update-undangan');

    // love story
    Route::get('/customer/love-story/{id}',  [CustomerController::class, 'loveStory'])->name('customer/love-story');
    Route::post('/customer/update-love-story',  [CustomerController::class, 'updateLoveStory'])->name('customer/update-love-story');
});

// admin
Route::middleware('admin')->group(function () {
    Route::get('/admin',  [AdminController::class, 'index'])->name('admin');
    Route::get('/admin/register',  [AdminController::class, 'register'])->name('admin/register');
    Route::get('/admin/inputData',  [AdminController::class, 'inputData'])->name('admin/inputData');
    Route::get('/admin/editData/{id}',  [AdminController::class, 'editData'])->name('admin/editData');
    Route::post('/admin/updateData/',  [AdminController::class, 'updateData'])->name('admin/updateData');
    Route::post('/admin/hapus/', [AdminController::class, 'destroy'])->name('admin/hapus');


    // Route::get('/user/profile', function () {
    //     // Uses first & second middleware...
    // });
});



Auth::routes();
// Route::get('/logout', 'Auth\LoginController@logout');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
