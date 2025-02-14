<?php

// app/Models/Petugas.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'birthplace',
        'birthdate',
        'office',
        'city',
        'email',
        'address',
        'role',
    ];
}
