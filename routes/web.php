<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;

// Route::get('/', function () {
//     return view('layouts.base');
// });

Route::get('/', HomeComponent::class);
