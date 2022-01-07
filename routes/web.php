<?php

use App\Http\Controllers\Arsip\ArsipController;
use App\Http\Controllers\CheckTableController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Users\JabatanController;
use App\Http\Controllers\Kategori\KategoriController;
use App\Http\Controllers\Users\UserController;
use App\Http\Controllers\galeryController;
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

require __DIR__ . '/auth.php';
// Route::resource('user', UserController::class);

Route::get('/checkdb', CheckTableController::class);
Route::get('/checkdbarsip', CheckTableController::class, 'checkArsip');

Route::middleware(['auth'])->group(function () {
    Route::get('/', [DashboardController::class, 'index']);

    // CRUD untuk fungsi utama
    Route::resource('/kategori', KategoriController::class);
    Route::resource('/arsip', ArsipController::class);
    Route::resource('/jabatan', JabatanController::class);
    Route::resource('/user', UserController::class);

    // Galeri untuk file
    Route::resource('/galeri', galeryController::class);
});

Route::get('/check', [DashboardController::class, 'arsipChart']);

//search galeri
// Route::get('/galeri', [galeryController::class, 'search'])->name('search');
//Route::get('/search', [galeryController::class, 'search'])->name('search');