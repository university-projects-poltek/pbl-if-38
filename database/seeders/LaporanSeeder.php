<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Laporan;

class LaporanSeeder extends Seeder
{
    public function run()
    {
        Laporan::create([
            'IDLaporan' => 1,
            'location' => 'Jalan A',
            'Deskripsi' => 'Deskripsi laporan pertama',
        ]);

        // Tambahkan data lainnya
    }
}