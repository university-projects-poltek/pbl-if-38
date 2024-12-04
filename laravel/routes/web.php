<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfficerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
// use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('officer.dashboard');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/profile', function () {
    return view('officer.profileOfficer');
});

Route::get('/petugas', function () {
    return view('officer.petugas');
});

// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/dashboard', [OfficerController::class, 'index'])->name('dashboard');
Route::get('/laporan', [OfficerController::class, 'laporan'])->name('laporan');
Route::get('/editlaporan', [OfficerController::class, 'editlaporan'])->name('editlaporan');
// Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
// Route::get('/edit-profile', [ProfileController::class, 'edit'])->name('profile.edit');
// Route::put('/edit-profile', [ProfileController::class, 'update'])->name('profile.update');
// Route::put('/update-photo', [ProfileController::class, 'updatePhoto'])->name('profile.photo.update');
// Route::delete('/delete-photo', [ProfileController::class, 'deletePhoto'])->name('profile.photo.delete');

//routes Admin
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/petugas', [AdminController::class, 'petugas'])->name('admin.petugas');
Route::get('/admin/petugas/add', [AdminController::class, 'addpetugas'])->name('admin.add.petugas');
Route::post('/admin/petugas/create', [AdminController::class, 'createpetugas'])->name('admin.create.petugas');
Route::get('/admin/petugas/edit/{id}', [AdminController::class, 'editpetugas'])->name('admin.edit.petugas');
Route::post('/admin/petugas/update', [AdminController::class, 'updatepetugas'])->name('admin.update.petugas');
Route::get('/admin/masyarakat', [AdminController::class, 'masyarakat'])->name('admin.masyarakat');
Route::get('/admin/laporan', [AdminController::class, 'laporan'])->name('admin.laporan');
