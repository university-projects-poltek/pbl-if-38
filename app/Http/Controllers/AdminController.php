<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Petugas;
use App\Models\Masyarakat;
use App\Models\Laporan;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function petugas()
    {
        $data = Petugas::all(); // Mengambil semua data petugas
        return view('admin.petugas', compact('data'));
    }

    public function editPetugas($id)
    {
        $petugas = Petugas::findOrFail($id); // Cari petugas berdasarkan ID atau tampilkan 404
        return view('admin.edit_petugas', compact('petugas'));
    }

    public function tambahPetugas()
    {
        return view('admin.tambah_petugas', ['petugas' => null]); // Inisialisasi $petugas = null
    }

    public function storePetugas(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'birthplace' => 'required|string|max:100',
            'birthdate' => 'required|date',
            'office' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'email' => 'required|email|unique:petugas,email',
            'address' => 'required|string|max:255',
            'role' => 'required|string|max:50',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi opsional foto
        ]);

        $petugas = Petugas::create($request->except('photo'));

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('public/photos');
            $petugas->photo = $path;
            $petugas->save();
        }

        return redirect()->route('admin.petugas')->with('success', 'Petugas berhasil ditambahkan.');
    }

    public function updatePetugas(Request $request, $id)
    {
        $petugas = Petugas::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'birthplace' => 'required|string|max:100',
            'birthdate' => 'required|date',
            'office' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'email' => 'required|email|unique:petugas,email,' . $id,
            'address' => 'required|string|max:255',
            'role' => 'required|string|max:50',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $petugas->update($request->except('photo'));

        if ($request->hasFile('photo')) {
            if ($petugas->photo) {
                Storage::delete($petugas->photo);
            }

            $path = $request->file('photo')->store('public/photos');
            $petugas->photo = $path;
            $petugas->save();
        }

        return redirect()->route('admin.petugas')->with('success', 'Petugas berhasil diperbarui.');
    }

    public function uploadPhoto(Request $request, $id)
    {
        // Handle the file upload
         $petugas = Petugas::findOrFail($id);
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $path = $file->storeAs('photos', $file->getClientOriginalName(), 'public');
            // Update the photo for the user
            $petugas = Petugas::find($id);
            $petugas->photo = $path;
            $petugas->save();
        }

        return redirect()->back()->with('success', 'Photo updated successfully.');
    }


    public function deletePhoto($id)
    {
        $petugas = Petugas::findOrFail($id);

        if ($petugas->photo) {
            Storage::delete($petugas->photo);
            $petugas->photo = null;
            $petugas->save();

            return back()->with('success', 'Foto berhasil dihapus!');
        }

        return back()->with('error', 'Foto tidak ditemukan!');
    }

    public function masyarakat()
    {
        $data = Masyarakat::all(); // Mengambil semua data masyarakat
        return view('admin.masyarakat', compact('data'));
    }

    public function laporan()
    {
        $data = Laporan::all(); // Mengambil semua data laporan
        return view('admin.laporan', compact('data'));
    }
}
