<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BelajarDetailAdmin;

class BelajarDetailAdminController extends Controller
{
    public function index()
    {
        $tbl_belajar_detail = BelajarDetailAdmin::all();
        return view('/admin/belajar_detail_admin', compact('tbl_belajar_detail'));
    }

    public function create()
    {
        return view('/belajar/create_detail'); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'belajar_id' => 'required|exists:tbl_belajar,id',
            'judul_belajar' => 'required|string|max:255',
            'file' => 'required|file|mimes:pdf,doc,docx,jpg,png,jpeg|max:2048',
        ]);

        $filePath = $request->file('file')->store('uploads', 'public');

        BelajarDetailAdmin::create([
            'belajar_id' => $request->belajar_id,
            'judul_belajar' => $request->judul_belajar,
            'file' => $filePath,
        ]);

        return redirect()->route('belajar_detail_admin/index')->with('success', 'Data berhasil ditambahkan');
    }

    public function destroy(BelajarDetailAdmin $belajar)
    {
        if (Storage::exists('public/' . $belajar->gambar)) {
            Storage::delete('public/' . $belajar->gambar);
        }

        $belajar->delete();

        return redirect()->route('belajar_detail_admin/index')->with('success', 'Data berhasil dihapus!');
    }

    public function edit($id)
    {
        $belajar = BelajarDetailAdmin::findOrFail($id);
        
        return view('belajar_detail_admin/edit', compact('belajar'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'belajar_id' => 'required|exists:tbl_belajar,id',
        'judul_belajar' => 'required|string|max:255',
        'file' => 'nullable|file|mimes:pdf,doc,docx,jpg,png,jpeg|max:2048',
    ]);

    $belajar = BelajarDetailAdmin::findOrFail($id);

    $belajar->belajar_id = $request->input('belajar_id');
    $belajar->judul_belajar = $request->input('judul_belajar');

    if ($request->hasFile('file')) {
        if ($belajar->file) {
            Storage::delete('public/' . $belajar->file);
        }

        $belajar->file = $request->file('file')->store('uploads', 'public');
    }

    $belajar->save();

    return redirect()->route('belajar_detail_admin/index')->with('success', 'Detail pelajaran berhasil diperbarui');
}


}