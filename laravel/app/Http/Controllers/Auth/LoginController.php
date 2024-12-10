<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Menangani proses login
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication was successful
            $request->session()->regenerate();

            // Redirect based on user role
            if (Auth::user()->role === 'admin') {
                session()->flash('success', 'Admin login berhasil!');
                return redirect()->intended('/admin');
            } elseif (Auth::user()->role === 'officer') {
                session()->flash('success', 'Officer login berhasil!');
                return redirect()->intended('/officer');
            }

            // Optional: handle other roles or add a default redirect
            return redirect()->intended('/')->with('success', 'Selamat datang! Anda berhasil login.');
        }

        throw ValidationException::withMessages([
            'username' => ['Username atau password salah. Silakan coba lagi.'],
        ]);
    }

    // Menangani proses logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/login');
    }
}
