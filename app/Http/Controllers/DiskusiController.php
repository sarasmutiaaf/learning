<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiskusiController extends Controller
{
    public function index()
    {
        return view('/user/diskusi'); // Pastikan file diskusi.blade.php sudah ada di resources/views/user
    }
}