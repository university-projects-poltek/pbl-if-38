<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    // Proses login
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Cari user berdasarkan username
        $user = User::where('username', $request->username)->first();

        // Cek apakah username dan password sesuai
        if ($user && Hash::check($request->password, $user->password)) {
            // Login user
            Auth::login($user);

            // Redirect ke halaman dashboard
            return redirect()->route('dashboard');
        }

        // Jika login gagal
        return back()->withErrors(['login' => 'Username atau password salah.']);
    }

    // Proses logout
    public function logout(Request $request)
    {
        Auth::logout(); // Logout user
        $request->session()->invalidate(); // Invalidasi sesi
        $request->session()->regenerateToken(); // Regenerasi token CSRF

        // Redirect ke halaman login
        return redirect()->route('login');
    }
}
