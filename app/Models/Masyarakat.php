<?php

namespace App\Models;  // Pastikan namespace sesuai

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{
    use HasFactory;

    protected $table = 'masyarakat'; // Jika tabelnya berbeda
    protected $fillable = ['Nama', 'Email', 'nohp']; // Sesuaikan dengan kolom tabel
}
