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
        // Validasi data login
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('username', 'password');

        // Mencoba login dengan kredensial yang diberikan
        if (Auth::attempt($credentials)) {
            // Jika login berhasil, regenerasi session
            $request->session()->regenerate();

            // Redirect berdasarkan role pengguna
            if (Auth::user()->role === 'admin') {
                session()->flash('success', 'Admin login berhasil!');
                return redirect()->route('admin.dashboard'); // Redirect ke dashboard admin
            } elseif (Auth::user()->role === 'officer') {
                session()->flash('success', 'Officer login berhasil!');
                return redirect()->route('officer.dashboard'); // Redirect ke dashboard officer
            }

            // Jika role tidak dikenali, arahkan ke homepage atau halaman default
            return redirect()->route('home')->with('success', 'Selamat datang! Anda berhasil login.');
        }

        // Jika login gagal, lemparkan error validasi
        throw ValidationException::withMessages([
            'username' => ['Username atau password salah. Silakan coba lagi.'],
        ]);
    }

    // Menangani proses logout
    public function logout(Request $request)
    {
        Auth::logout(); // Logout pengguna
        $request->session()->invalidate(); // Menghapus session
        $request->session()->regenerateToken(); // Regenerasi CSRF token

        return redirect()->route('login'); // Redirect kembali ke halaman login
    }
}
