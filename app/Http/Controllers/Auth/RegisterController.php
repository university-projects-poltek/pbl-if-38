<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $this->validateRegister($request);

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hash the password
            'role' => $request->role ?? 'user',
        ]);

        return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login.');
    }

    protected function validateRegister(Request $request)
    {
        // Validate the required fields
        $request->validate(
            [
                'username' => 'required|string|max:255|unique:users,username',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:8|confirmed',
            ],
            [
                'username.required' => 'Username wajib diisi.',
                'username.string' => 'Username harus berupa teks.',
                'username.max' => 'Username tidak boleh lebih dari 255 karakter.',
                'username.unique' => 'Username sudah digunakan, silakan pilih yang lain.',

                'email.required' => 'Email wajib diisi.',
                'email.email' => 'Format email tidak valid.',
                'email.unique' => 'Email sudah terdaftar, silakan gunakan email lain.',

                'password.required' => 'Password wajib diisi.',
                'password.min' => 'Password minimal harus 8 karakter.',
                'password.confirmed' => 'Konfirmasi password tidak cocok.',
            ]
        );
    }
}
