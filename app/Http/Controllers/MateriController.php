<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function index()
    {
        return view('/user/materi'); // Pastikan file materi.blade.php sudah ada di resources/views/user
    }
}