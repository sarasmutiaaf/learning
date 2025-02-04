<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarDetailController extends Controller
{
    public function index()
    {
        return view('/user/belajar_detail'); // Pastikan file belajar_detail.blade.php sudah ada di resources/views/user
    }
}