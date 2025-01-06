<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    // Tentukan nama tabel, jika tidak mengikuti konvensi plural dari nama model
    protected $table = 'laporan';  // Nama tabel di database

    // Tentukan kolom yang dapat diisi (fillable)
    protected $fillable = ['IDLaporan', 'location', 'Deskripsi']; // Sesuaikan dengan kolom yang ada
}


