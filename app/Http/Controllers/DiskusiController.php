<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diskusi;
use Illuminate\Support\Facades\Auth;

class DiskusiController extends Controller
{
    public function index()
    {
        $tbl_diskusi = Diskusi::whereNull('parent_id')
            ->with('replies.user', 'user')
            ->orderBy('created_at', 'desc')
            ->get();
        return view('user.diskusi', compact('tbl_diskusi'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pesan' => 'required|string',
            'belajar_detail_id' => 'required|integer',
            'parent_id' => 'nullable|integer',
        ]);

        Diskusi::create([
            'belajar_detail_id' => $request->belajar_detail_id,
            'user_id' => Auth::id(),
            'pesan' => $request->pesan,
            'level' => $request->parent_id ? 1 : 0,
            'parent_id' => $request->parent_id,
        ]);

        return redirect()->back()->with('success', 'Diskusi berhasil ditambahkan!');
    }

    public function update(Request $request, Diskusi $diskusi)
    {
        if (Auth::id() !== $diskusi->user_id) {
            return redirect()->back()->with('error', 'Anda tidak memiliki izin untuk mengedit diskusi ini.');
        }

        $request->validate([
            'pesan' => 'required|string',
        ]);

        $diskusi->update([
            'pesan' => $request->pesan,
        ]);

        return redirect()->back()->with('success', 'Komentar berhasil diperbarui!');
    }

    public function destroy(Diskusi $diskusi)
    {
        if (Auth::id() !== $diskusi->user_id) {
            return redirect()->back()->with('error', 'Anda tidak memiliki izin untuk menghapus diskusi ini.');
        }

        // Hapus semua balasan juga
        $diskusi->replies()->delete();
        $diskusi->delete();

        return redirect()->back()->with('success', 'Komentar berhasil dihapus!');
    }
}