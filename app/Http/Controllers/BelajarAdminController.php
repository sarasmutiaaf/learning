<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Belajar;
use App\Models\BelajarDetail;
use Illuminate\Support\Facades\Storage;

class BelajarAdminController extends Controller
{
    public function index()
    {
        $tbl_belajar = Belajar::all();
        return view('/admin/belajar_admin', compact('tbl_belajar')); // Pastikan file belajar.blade.php sudah ada di resources/views/user
    }

    public function create()
    {
        return view('/belajar/create'); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'judul_detail.*' => 'required|string|max:255',
            'file.*' => 'nullable|file|mimes:pdf,doc,docx,jpg,png|max:5120'
        ]);
    
        $gambarPath = null;
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('belajar_images', 'public');
        }
    
        $data = Belajar::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarPath,
        ]);
    
        $details = [];
        if ($request->has('judul_detail')) {
            foreach ($request->judul_detail as $index => $judulDetail) {
                $filePath = null;
                if ($request->hasFile("file.$index")) {
                    $filePath = $request->file("file.$index")->store('belajar_files', 'public');
                }
    
                $details[] = BelajarDetail::create([
                    'belajar_id' => $data->id,
                    'judul_belajar' => $judulDetail,
                    'file' => $filePath,
                ]);
            }
        }
    
        return redirect()->back()->with([
            'success' => 'Pelajaran dan detail berhasil ditambahkan!',
            'data' => $data->toArray(),
            'detail' => collect($details)->toArray(),
        ]);
    }

    public function destroy(Belajar $belajar)
    {
        if (Storage::exists('public/' . $belajar->gambar)) {
            Storage::delete('public/' . $belajar->gambar);
        }

        $belajar->delete();

        return redirect()->route('belajar/index')->with('success', 'Pelajaran berhasil dihapus!');
    }

    public function edit($id)
    {
        $belajar = Belajar::findOrFail($id);
        $details = BelajarDetail::where('belajar_id', $id)->get();
    
        return view('belajar/edit', compact('belajar', 'details'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'judul_detail.*' => 'nullable|string|max:255',
            'file.*' => 'nullable|mimes:pdf|max:5120', // Hanya file PDF max 5MB
        ]);
    
        // **1. Update data utama**
        $belajar = Belajar::findOrFail($id);
        $belajar->judul = $request->input('judul');
        $belajar->deskripsi = $request->input('deskripsi');
    
        if ($request->hasFile('gambar')) {
            if ($belajar->gambar) {
                Storage::delete("public/{$belajar->gambar}");
            }
            $belajar->gambar = $request->file('gambar')->store('belajar_images', 'public');
        }
        $belajar->save();
    
        // **2. Simpan semua ID yang ada di form**
        $detailIDs = $request->detail_id ?? []; // Ambil semua ID yang dikirim dari form
    
        // **3. Hapus detail yang tidak ada di form**
        BelajarDetail::where('belajar_id', $belajar->id)
            ->whereNotIn('id', $detailIDs)
            ->delete();
    
        // **4. Update atau Tambah Detail**
        if ($request->has('judul_detail')) {
            foreach ($request->judul_detail as $index => $judulDetail) {
                if (!empty($judulDetail)) {
                    $detail = isset($request->detail_id[$index]) ? BelajarDetail::find($request->detail_id[$index]) : new BelajarDetail();
                    $detail->belajar_id = $belajar->id;
                    $detail->judul_belajar = $judulDetail;
    
                    if ($request->hasFile("file.{$index}")) {
                        if ($detail->file) {
                            Storage::delete("public/{$detail->file}");
                        }
                        $detail->file = $request->file("file.{$index}")->store('belajar_files', 'public');
                    }
    
                    $detail->save();
                }
            }
        }
    
        return redirect()->route('belajar/index')->with('success', 'Pelajaran berhasil diperbarui');
    }
}