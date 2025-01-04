<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReportsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
    {
        DB::table('reports')->insert([
            [
                'photo' => 'foto1.jpg',
                'location' => 'Jakarta',
                'description' => 'Laporan kejadian di Jakarta',
                'impact' => 'Kritis',
                'vehicle_type' => 'Mobil',
                'area' => 'Komersial',
                'weather' => 'Cerah',
                'report_date' => '2023-10-01',
                'status' => 'Diterima',
            ],
            [
                'photo' => 'foto2.jpg',
                'location' => 'Bandung',
                'description' => 'Laporan kejadian di Bandung',
                'impact' => 'Tinggi',
                'vehicle_type' => 'Motor',
                'area' => 'Industri',
                'weather' => 'Hujan',
                'report_date' => '2023-10-02',
                'status' => 'Diterima',
            ],
            [
                'photo' => 'foto3.jpg',
                'location' => 'Surabaya',
                'description' => 'Laporan kejadian di Surabaya',
                'impact' => 'Sedang',
                'vehicle_type' => 'Truk',
                'area' => 'Publik',
                'weather' => 'Badai',
                'report_date' => '2023-10-03',
                'status' => 'Diproses',
            ],
            [
                'photo' => 'foto4.jpg',
                'location' => 'Batam',
                'description' => 'Laporan kejadian di Batam',
                'impact' => 'Kecil',
                'vehicle_type' => 'Bus',
                'area' => 'Perumahan',
                'weather' => 'Beraawan',
                'report_date' => '2023-10-04',
                'status' => 'Selesai',
            ],
            // Tambahkan lebih banyak data sesuai kebutuhan
        ]);
    }
}
