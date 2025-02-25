<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Belajar;
use Illuminate\Support\Facades\Storage;
use App\Models\BelajarDetail;

class BelajarController extends Controller
{
    public function index()
    {
        $belajar = Belajar::get();
        return view('/user/belajar', compact('belajar')); 
    }

    public function show($id)
    {
        $belajar = BelajarDetail::where('belajar_id', $id)->get();
        return view('/user/belajar_detail', compact('belajar'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string',
            'deskripsi' => 'required|string',
        ]);

        Belajar::create([
            'judul' => $validated['judul'],
            'deskripsi' => $validated['deskripsi'],
        ]);

        return redirect()->route('belajar/index');
    }
}