<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materi;
use Illuminate\Support\Facades\Storage;

class MateriController extends Controller
{
    public function index()
    {
        $materi = Materi::get();
        return view('/user/materi', compact('materi')); 
    }

    public function show($id)
{
    $materi = Materi::findOrFail($id);
    return view('/user/materi_detail', compact('materi'));
}


public function store(Request $request)
{
    $validated = $request->validate([
        'judul' => 'required|string',
        'deskripsi' => 'required|string',
    ]);

    Materi::create([
        'judul' => $validated['judul'],
        'deskripsi' => $validated['deskripsi'],
    ]);

    return redirect()->route('materi/index');
}

}