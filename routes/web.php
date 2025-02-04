<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user/dashboard');
});

use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'login'])->name('login');


use App\Http\Controllers\BelajarController;

Route::get('/belajar', [BelajarController::class, 'index']);


use App\Http\Controllers\MateriController;

Route::get('/materi', [MateriController::class, 'index']);

use App\Http\Controllers\BelajarDetailController;

Route::get('/belajar_detail', [BelajarDetailController::class, 'index']);


use App\Http\Controllers\MateriDetailController;

Route::get('/materi_detail', [MateriDetailController::class, 'index']);

use App\Http\Controllers\DiskusiController;

Route::get('/diskusi', [DiskusiController::class, 'index']);