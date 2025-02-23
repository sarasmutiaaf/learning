<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return view('admin/index');
});

Route::get('/', function () {
    return view('user/dashboard');
});

use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'login'])->name('login');


use App\Http\Controllers\BelajarController;

Route::get('/belajar', [BelajarController::class, 'index']);


use App\Http\Controllers\MateriController;

Route::get('/materi', [MateriController::class, 'index'])->name('materi');
// Route::get('/materi', [MateriController::class, 'index']);
Route::get('/materi/{id}', [MateriController::class, 'show'])->name('materi_detail');

use App\Http\Controllers\BelajarDetailController;

Route::get('/belajar_detail', [BelajarDetailController::class, 'index']);


use App\Http\Controllers\MateriDetailController;

Route::get('/materi_detail', [MateriDetailController::class, 'index']);

use App\Http\Controllers\DiskusiController;

Route::get('/diskusi', [DiskusiController::class, 'index']);

// admin

use App\Http\Controllers\BelajarAdminController;

Route::get('/belajar_admin', [BelajarAdminController::class, 'index']);
Route::get('/belajar/create', [BelajarAdminController::class, 'create']);

use App\Http\Controllers\UserAdminController;

Route::get('/user_admin', [UserAdminController::class, 'index']);

use App\Http\Controllers\MateriAdminController;

Route::get('/materi_admin', [MateriAdminController::class, 'index'])->name('materi/index');
Route::get('/materi_admin/create', [MateriAdminController::class, 'create'])->name('materi/create');;
Route::post('/materi/store', [MateriAdminController::class, 'store']);
Route::delete('/materi/{materi}', [MateriAdminController::class, 'destroy'])->name('materi/destroy');
Route::get('/materi/edit/{id}', [MateriAdminController::class, 'edit'])->name('materi/edit');
Route::put('/materi/edit/{id}', [MateriAdminController::class, 'update'])->name('materi/update');