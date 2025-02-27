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
})->name('dashboard');

use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'index'])->name('login');
// Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

use App\Http\Controllers\AdminController;

Route::get('/admin/login', [AdminController::class, 'index'])->name('admin.login');

use App\Http\Controllers\BelajarController;

Route::get('/belajar', [BelajarController::class, 'index'])->name('belajar');
Route::get('/belajar/{id}', [BelajarController::class, 'show'])->name('belajar_detail');


use App\Http\Controllers\MateriController;

Route::get('/materi', [MateriController::class, 'index'])->name('materi');
// Route::get('/materi', [MateriController::class, 'index']);
Route::get('/materi/{id}', [MateriController::class, 'show'])->name('materi_detail');

use App\Http\Controllers\BelajarDetailController;

Route::get('/belajar_detail', [BelajarDetailController::class, 'index']);

use App\Http\Controllers\ProfileController;
Route::get('/profile', [ProfileController::class, 'index'])->name('user.profile');
// Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');


use App\Http\Controllers\BelajarDetailAdminController;
Route::middleware(['auth'])->group(function () {
Route::get('/belajar_detail_admin', [BelajarDetailAdminController::class, 'index'])->name('belajar_detail_admin/index');
Route::get('/belajar_detail_admin/create_detail', [BelajarDetailAdminController::class, 'create'])->name('belajar_detail_admin/create');
Route::post('/belajar_detail_admin/store', [BelajarDetailAdminController::class, 'store']);
Route::delete('/belajar_detail_admin/{belajar}', [BelajarDetailAdminController::class, 'destroy'])->name('belajar_detail_admin/destroy');
Route::get('/belajar_detail_admin/edit/{id}', [BelajarDetailAdminController::class, 'edit'])->name('belajar_detail_admin/edit');
Route::put('/belajar_detail_admin/edit/{id}', [BelajarDetailAdminController::class, 'update'])->name('belajar_detail_admin/update');
});

use App\Http\Controllers\MateriDetailController;

Route::get('/materi_detail', [MateriDetailController::class, 'index']);

use App\Http\Controllers\DiskusiController;

Route::middleware(['auth'])->group(function () {
    Route::get('/diskusi', [DiskusiController::class, 'index'])->name('diskusi/index');
    Route::post('/diskusi', [DiskusiController::class, 'store'])->name('diskusi.store');
    Route::put('/diskusi/{diskusi}', [DiskusiController::class, 'update'])->name('diskusi.update');
    Route::delete('/diskusi/{diskusi}', [DiskusiController::class, 'destroy'])->name('diskusi.destroy');
});

use App\Http\Controllers\BelajarAdminController;

Route::get('/belajar_admin', [BelajarAdminController::class, 'index'])->name('belajar/index');
Route::get('/belajar_admin/create', [BelajarAdminController::class, 'create'])->name('belajar/create');
Route::post('/belajar/store', [BelajarAdminController::class, 'store']);
Route::delete('/belajar/{belajar}', [BelajarAdminController::class, 'destroy'])->name('belajar/destroy');
Route::get('/belajar/edit/{id}', [BelajarAdminController::class, 'edit'])->name('belajar/edit');
Route::put('/belajar/edit/{id}', [BelajarAdminController::class, 'update'])->name('belajar/update');


use App\Http\Controllers\UserAdminController;

Route::get('/user_admin', [UserAdminController::class, 'index'])->name('user_admin/index');
Route::delete('/admin/user/{id}', [UserAdminController::class, 'destroy'])->name('admin.user.destroy');


use App\Http\Controllers\MateriAdminController;

Route::get('/materi_admin', [MateriAdminController::class, 'index'])->name('materi/index');
Route::get('/materi_admin/create', [MateriAdminController::class, 'create'])->name('materi/create');
Route::post('/materi/store', [MateriAdminController::class, 'store']);
Route::delete('/materi/{materi}', [MateriAdminController::class, 'destroy'])->name('materi/destroy');
Route::get('/materi/edit/{id}', [MateriAdminController::class, 'edit'])->name('materi/edit');
Route::put('/materi/edit/{id}', [MateriAdminController::class, 'update'])->name('materi/update');