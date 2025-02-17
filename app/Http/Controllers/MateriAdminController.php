<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriAdminController extends Controller
{
    public function index()
    {
        return view('/admin/materi_admin'); // Pastikan file belajar.blade.php sudah ada di resources/views/user
    }
}