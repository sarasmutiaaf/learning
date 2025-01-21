<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user/dashboard');
});

use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'login'])->name('login');


use App\Http\Controllers\BelajarController;

Route::get('/belajar', [BelajarController::class, 'index']);