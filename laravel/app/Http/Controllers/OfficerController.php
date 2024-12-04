<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfficerController extends Controller
{
    public function index()
    {
        return view('officer.dashboard'); // Pastikan Anda memiliki view home.blade.php
    }
    public function laporan()
    {
        return view('officer.laporan'); // Pastikan Anda memiliki view home.blade.php
    }
    public function editlaporan()
    {
        return view('officer.editlaporan'); // Pastikan Anda memiliki view home.blade.php
    }
}
