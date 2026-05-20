<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;

Route::get('/', function() {
    return view('welcome');
});

//Route otomatis untuk fungsi CRUD Jasa Bengkel
Route::resource('services', ServiceController::class);
