<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarAdminController extends Controller
{
    public function index()
    {
        return view('/admin/belajar_admin'); // Pastikan file belajar.blade.php sudah ada di resources/views/user
    }

    public function create()
    {
        return view('/belajar/create'); 
    }
}