<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin User',
            'username' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'), // Ganti dengan password yang aman
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Officer User',
            'username' => 'officer',
            'email' => 'officer@example.com',
            'password' => Hash::make('password'), // Ganti dengan password yang aman
            'role' => 'officer',
        ]);
    }
}