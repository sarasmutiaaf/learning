<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserAdminController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $users = User::when($keyword, function ($query) use ($keyword) {
            return $query->where('nama', 'like', "%{$keyword}%")
                     ->orWhere('email', 'like', "%{$keyword}%");
        })->get();
    
        return view('admin/user_admin', compact('users'));
    }
    
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->route('admin.index')->with('success', 'User berhasil dihapus');
    }
    
}