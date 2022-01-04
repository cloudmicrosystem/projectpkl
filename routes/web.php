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

// Route::get('/', function () {
//     return view('content.dashboard.index');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::get('/', DashboardController::class);

Route::resource('/kategori', KategoriController::class);
Route::resource('/arsip', ArsipController::class);
Route::resource('/jabatan', JabatanController::class);
Route::resource('/user', UserController::class);
// Route::resource('user', UserController::class);

Route::get('/checkdb', CheckTableController::class);
Route::get('/checkdbarsip', CheckTableController::class, 'checkArsip');

//view galeri
Route::resource('/galeri', galeryController::class);


