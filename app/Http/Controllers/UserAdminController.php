<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAdminController extends Controller
{
    public function index()
    {
        return view('/admin/user_admin'); // Pastikan file belajar.blade.php sudah ada di resources/views/user
    }
}