<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return ['Laravel' => app()->version()];
// });

require __DIR__.'/auth.php';

Route::get('/admin', function () {
    return view('admin/index');
});

Route::get('/', function () {
    return view('user/dashboard');
});

use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'login'])->name('login');


use App\Http\Controllers\BelajarController;

Route::get('/belajar', [BelajarController::class, 'index'])->name('materi');
Route::get('/belajar/{id}', [BelajarController::class, 'show'])->name('belajar_detail');


use App\Http\Controllers\MateriController;

Route::get('/materi', [MateriController::class, 'index'])->name('materi');
// Route::get('/materi', [MateriController::class, 'index']);
Route::get('/materi/{id}', [MateriController::class, 'show'])->name('materi_detail');

use App\Http\Controllers\BelajarDetailController;

Route::get('/belajar_detail', [BelajarDetailController::class, 'index']);


use App\Http\Controllers\BelajarDetailAdminController;

Route::get('/belajar_detail_admin', [BelajarDetailAdminController::class, 'index'])->name('belajar_detail_admin/index');
Route::get('/belajar_detail_admin/create_detail', [BelajarDetailAdminController::class, 'create'])->name('belajar_detail_admin/create');
Route::post('/belajar_detail_admin/store', [BelajarDetailAdminController::class, 'store']);
Route::delete('/belajar_detail_admin/{belajar}', [BelajarDetailAdminController::class, 'destroy'])->name('belajar_detail_admin/destroy');
Route::get('/belajar_detail_admin/edit/{id}', [BelajarDetailAdminController::class, 'edit'])->name('belajar_detail_admin/edit');
Route::put('/belajar_detail_admin/edit/{id}', [BelajarDetailAdminController::class, 'update'])->name('belajar_detail_admin/update');

use App\Http\Controllers\MateriDetailController;

Route::get('/materi_detail', [MateriDetailController::class, 'index']);

use App\Http\Controllers\DiskusiController;

Route::get('/diskusi', [DiskusiController::class, 'index']);

// admin

use App\Http\Controllers\BelajarAdminController;

Route::get('/belajar_admin', [BelajarAdminController::class, 'index'])->name('belajar/index');
Route::get('/belajar_admin/create', [BelajarAdminController::class, 'create'])->name('belajar/create');
Route::post('/belajar/store', [BelajarAdminController::class, 'store']);
Route::delete('/belajar/{belajar}', [BelajarAdminController::class, 'destroy'])->name('belajar/destroy');
Route::get('/belajar/edit/{id}', [BelajarAdminController::class, 'edit'])->name('belajar/edit');
Route::put('/belajar/edit/{id}', [BelajarAdminController::class, 'update'])->name('belajar/update');


use App\Http\Controllers\UserAdminController;

Route::get('/user_admin', [UserAdminController::class, 'index']);

use App\Http\Controllers\MateriAdminController;

Route::get('/materi_admin', [MateriAdminController::class, 'index'])->name('materi/index');
Route::get('/materi_admin/create', [MateriAdminController::class, 'create'])->name('materi/create');
Route::post('/materi/store', [MateriAdminController::class, 'store']);
Route::delete('/materi/{materi}', [MateriAdminController::class, 'destroy'])->name('materi/destroy');
Route::get('/materi/edit/{id}', [MateriAdminController::class, 'edit'])->name('materi/edit');
Route::put('/materi/edit/{id}', [MateriAdminController::class, 'update'])->name('materi/update');