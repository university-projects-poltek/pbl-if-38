<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard'); // Pastikan Anda memiliki view home.blade.php
    }

    //route Petugas
    public function petugas()
    {
        $data = [
            [
                'Nama' => 'test1',
                'Email' => 'test1@gmail.com',
                'nohp' => '00000000000',
                'location' => 'tempat test1',
                'Role' => 'Petugas',
            ],
            [
                'Nama' => 'test2',
                'Email' => 'test2@gmail.com',
                'nohp' => '11111111111',
                'location' => 'tempat test2',
                'Role' => 'Petugas',
            ],
            [
                'Nama' => 'test3',
                'Email' => 'test3@gmail.com',
                'nohp' => '3333333333',
                'location' => 'tempat test3',
                'Role' => 'Petugas',
            ],
        ];
        return view('admin.petugas', compact('data')); // Pastikan Anda memiliki view home.blade.php
    }
    public function addpetugas()
    {
        return view('admin.addpetugas');
    }
    public function createpetugas()
    {
        return redirect()->route('admin.petugas');
    }
    public function editpetugas()
    {
        return view('admin.editpetugas');
    }
    public function updatepetugas()
    {
        return redirect()->route('admin.petugas');
    }

    //route Masyarakat
    public function masyarakat()
    {
        $data = [
            [
                'Nama' => 'test1',
                'Email' => 'test1@gmail.com',
                'nohp' => '00000000000',
                'location' => 'tempat test1',
                'Role' => 'Petugas',
            ],
            [
                'Nama' => 'test2',
                'Email' => 'test2@gmail.com',
                'nohp' => '11111111111',
                'location' => 'tempat test2',
                'Role' => 'Petugas',
            ],
            [
                'Nama' => 'test3',
                'Email' => 'test3@gmail.com',
                'nohp' => '3333333333',
                'location' => 'tempat test3',
                'Role' => 'Petugas',
            ],
        ];
        return view('admin.masyarakat', compact('data')); // Pastikan Anda memiliki view home.blade.php
    }
    public function laporan()
    {
        $data = [
            [
                'IDLaporan' => '000001',
                'location' => 'tempat test1',
                'Deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            ],
            [
                'IDLaporan' => '000002',
                'location' => 'tempat test2',
                'Deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            ],
            [
                'IDLaporan' => '000003',
                'location' => 'tempat test3',
                'Deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            ],
        ];
        return view('admin.laporan', compact('data')); // Pastikan Anda memiliki view home.blade.php
    }
}
