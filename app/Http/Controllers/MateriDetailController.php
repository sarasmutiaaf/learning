<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriDetailController extends Controller
{
    public function index()
    {
        return view('/user/materi_detail'); // Pastikan file materi.blade.php sudah ada di resources/views/user
    }
}