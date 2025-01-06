<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    // Method untuk menampilkan form edit (GET request)
    public function edit($id)
    {
        $petugas = Petugas::findOrFail($id);
        return view('admin.edit.petugas', compact('petugas'));
    }

    // Method untuk menangani update data petugas (PUT request)
    public function update(Request $request, $id)
    {
        // Validasi data yang diterima
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:petugas,email,' . $id,
            // Tambahkan validasi lain sesuai kebutuhan
        ]);

        // Temukan petugas berdasarkan ID
        $petugas = Petugas::findOrFail($id);

        // Update data petugas
        $petugas->name = $request->input('name');
        $petugas->email = $request->input('email');
        // Update atribut lain sesuai kebutuhan

        // Simpan perubahan
        $petugas->save();

        // Redirect kembali ke halaman daftar petugas atau halaman lain
        return redirect()->route('admin.petugas.index')->with('success', 'Data petugas berhasil diperbarui.');
    }

    // Method untuk menghapus data petugas (DELETE request)
    public function destroy($id)
    {
        // Temukan petugas berdasarkan ID
        $petugas = Petugas::findOrFail($id);

        // Hapus data petugas
        $petugas->delete();

        // Redirect kembali ke halaman daftar petugas atau halaman lain
        return redirect()->route('admin.petugas')->with('success', 'Data petugas berhasil dihapus.');
    }
}
