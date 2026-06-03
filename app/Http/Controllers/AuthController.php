<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // tampilkan halaman login
    public function showLogin()
    {
        return view('auth.login');
    }

    // proses login
    public function login(Request $request)
{
    if (Auth::attempt([
        'email' => $request->email,
        'password' => $request->password
    ])) {
        return redirect('/admin/dashboard');
    }

    return back()->with('error', 'Email atau password salah');
}

    // logout
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}