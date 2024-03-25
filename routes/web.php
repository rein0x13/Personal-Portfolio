<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', [FrontController::class, 'profile']);
Route::get('/background', [FrontController::class, 'background']);
