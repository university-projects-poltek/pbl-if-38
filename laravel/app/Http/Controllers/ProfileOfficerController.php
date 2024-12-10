<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        return view('edit-profile', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $user->update($request->all());
        return redirect()->back()->with('success', 'Profil berhasil diperbarui!');
    }

    public function updatePhoto(Request $request)
    {
        $request->validate(['photo' => 'required|image|mimes:jpg,jpeg,png,svg|max:2048']);
        $user = Auth::user();

        $path = $request->file('photo')->store('photos', 'public');
        $user->update(['photo_url' => $path]);

        return redirect()->back()->with('success', 'Foto profil berhasil diperbarui!');
    }

    public function deletePhoto()
    {
        $user = Auth::user();
        $user->update(['photo_url' => null]);
        return redirect()->back()->with('success', 'Foto profil berhasil dihapus!');
    }
}
