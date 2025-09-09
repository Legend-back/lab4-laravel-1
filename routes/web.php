<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaludoController;
use App\Http\Controllers\SaludoJoseController; 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/saludo', [SaludoController::class, 'index']);
Route::get('/saludoJose', [SaludoJoseController::class, 'index']);