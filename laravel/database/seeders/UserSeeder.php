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
        // Memastikan 'admin' tidak ada sebelum membuatnya
        if (!User::where('username', 'admin')->exists()) {
            User::create([
                'name' => 'Admin User',
                'username' => 'admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('admin123'), // Ganti dengan password yang aman
                'role' => 'admin',
            ]);
        }

        // Memastikan 'officer' tidak ada sebelum membuatnya
        if (!User::where('username', 'officer')->exists()) {
            User::create([
                'name' => 'Officer User',
                'username' => 'officer',
                'email' => 'officer@example.com',
                'password' => Hash::make('officer123'), // Ganti dengan password yang aman
                'role' => 'officer',
            ]);
        }
    }
}
