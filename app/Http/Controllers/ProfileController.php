<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('user.profile', compact('user'));
    }


    public function update(Request $request)
{
    $request->validate([
        'nama' => 'required|string|max:255',
        'email' => 'required|email',
    ]);

    $user = Auth::user();
    $user->nama = $request->nama;
    $user->email = $request->email;
    $user->save();

    return redirect()->route('user.profile')->with('success', 'Profil berhasil diperbarui!');
}

}