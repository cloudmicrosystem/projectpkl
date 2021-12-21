<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\SuratKeluarComponent;
use App\Http\Livewire\SuratMasukComponent;
use App\Http\Livewire\UserComponent;
use App\Http\Livewire\ArsipComponent;
// use App\Http\Livewire\KategoriComponent;
use App\Http\Livewire\JabatanComponent;

// Route::get('/', function () {
//     return view('layouts.base');
// });

Route::get('/', HomeComponent::class);
Route::get('/surat-masuk', SuratMasukComponent::class);
Route::get('/surat-keluar', SuratKeluarComponent::class);
Route::get('/arsip', ArsipComponent::class);
// Route::get('/kategori', KategoriComponent::class);
Route::get('/jabatan', JabatanComponent::class);
Route::get('/user', UserComponent::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
