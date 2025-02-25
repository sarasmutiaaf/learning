<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    // Register
    public function register(Request $request)
    {
        $request->validate([
            'usn' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users',
            'pwd' => 'required|string|min:6'
        ]);

        $user = User::create([
            'nama' => $request->usn,
            'email' => $request->email,
            'password' => Hash::make($request->pwd)
        ]);

        return redirect()->back()->with([
            'message' => 'User registered successfully'
        ]);
        // return response()->json(['message' => 'User registered successfully'], 201);
    }

    // Login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            // return response()->json([
            //     'message' => 'Login successful',
            //     'user' => $user
            // ]);
            return redirect()->route('dashboard');
        }

        return response()->json(['message' => 'Invalid credentials'], 401);
    }

    // Logout
    // public function logout()
    // {
    //     Auth::logout();
    //     return response()->json(['message' => 'Logged out successfully']);
    // }

    public function logout(Request $request)
{
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/login');
}

}