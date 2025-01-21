<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarController extends Controller
{
    public function index()
    {
        return view('/user/belajar'); // Pastikan file belajar.blade.php sudah ada di resources/views/user
    }
}