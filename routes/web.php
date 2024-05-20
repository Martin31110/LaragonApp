<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JugueteController;
use App\Http\Controllers\SucursalController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('juguete', JugueteController::class);
Route::resource('sucursales', SucursalController::class);