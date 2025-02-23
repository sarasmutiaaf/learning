<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materi;
use Illuminate\Support\Facades\Storage;

class MateriAdminController extends Controller
{
    public function index()
    {
         $tbl_materi = Materi::all();
         
        return view('/admin/materi_admin', compact('tbl_materi')); 
    }

    public function create()
    {
        return view('/materi/create'); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $gambarPath = null;
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('materi_images', 'public');
        }

        Materi::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarPath,
        ]);

        return redirect()->back()->with('success', 'Materi berhasil ditambahkan!');
    }

    public function destroy(Materi $materi)
    {
        if (Storage::exists('public/' . $materi->gambar)) {
            Storage::delete('public/' . $materi->gambar);
        }

        $materi->delete();

        return redirect()->route('materi/index')->with('success', 'Materi berhasil dihapus!');
    }

    public function edit($id)
    {
        $materi = Materi::findOrFail($id);
        
        return view('materi/edit', compact('materi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $materi = Materi::findOrFail($id);

        $materi->judul = $request->input('judul');
        $materi->deskripsi = $request->input('deskripsi');

        if ($request->hasFile('gambar')) {
            if ($materi->gambar) {
                Storage::delete($materi->gambar);
            }

            $materi->gambar = $request->file('gambar')->store('materi_images', 'public');
        }

        $materi->save();

        return redirect()->route('materi/index')->with('success', 'Materi berhasil diperbarui');
    }
}