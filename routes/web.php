<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AlamatController;

Route::get('/', function() {
    return view('welcome');
});

//Route otomatis untuk fungsi CRUD Jasa Bengkel
Route::resource('services', ServiceController::class);
Route::get('/alamat', [AlamatController::class, 'index'])->name('alamat.index');
