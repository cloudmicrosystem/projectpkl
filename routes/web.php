<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\SuratKeluarComponent;
use App\Http\Livewire\SuratMasukComponent;

// Route::get('/', function () {
//     return view('layouts.base');
// });

Route::get('/', HomeComponent::class);
Route::get('/surat-masuk', SuratMasukComponent::class);
Route::get('/surat-keluar', SuratKeluarComponent::class);
