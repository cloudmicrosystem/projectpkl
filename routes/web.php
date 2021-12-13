<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\TestComponent;

// Route::get('/', function () {
//     return view('layouts.base');
// });

Route::get('/', HomeComponent::class);
Route::get('/test', TestComponent::class);