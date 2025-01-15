<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfficerController;
// use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\auth\RegisterController;

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


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('user.homepage');
    })->name('home');
    
    Route::get('/officer/dashboard', [OfficerController::class, 'indexOfficer'])->name('dashboard');
    Route::get('/officer/profile', [OfficerController::class, 'profile'])->name('profile');
    Route::get('/officer/table', [OfficerController::class, 'officersTable'])->name('officersTable');
    Route::get('/officer/table/addofficer', [OfficerController::class, 'addOfficer'])->name('addOfficer');
    Route::get('/officer/reports', [OfficerController::class, 'reportsTable'])->name('reportsTable');
    Route::get('/officer/reports/edit/{id}/edit', [OfficerController::class, 'editReport'])->name('editReport');
    Route::put('/officer/reports/{id}/{status}', [OfficerController::class, 'updateReportStatus'])->name('updateReportStatus');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    Route::get('/location', function () {
        return view('location');
    })->name('location');
    Route::get('/camera', function () {
        return view('camera');
    })->name('camera');
    Route::get('/history', function () {
        return view('history');
    })->name('history');
    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');

    Route::get('/admin/petugas', [AdminController::class, 'petugas'])->name('admin.petugas');
    Route::get('/admin/edit/petugas/{id}', [AdminController::class, 'editPetugas'])->name('admin.edit.petugas');
    Route::post('/admin/petugas/create', [AdminController::class, 'storePetugas'])->name('admin.create.petugas');
    Route::get('/admin/petugas/tambah', [AdminController::class, 'tambahPetugas'])->name('admin.add.petugas'); // Halaman form tambah petugas
    Route::put('/admin/petugas/update/{id}', [AdminController::class, 'updatePetugas'])->name('admin.update.petugas');
    Route::delete('/admin/petugas/delete/{id}', [AdminController::class, 'destroy'])->name('admin.delete.petugas');
    Route::post('/admin/upload-photo', [AdminController::class, 'uploadPhoto'])->name('admin.upload.photo');
    Route::put('admin/upload/photo/{id}', [AdminController::class, 'uploadPhoto'])->name('admin.upload.photo');
    Route::get('/admin/delete-photo/{id}', [AdminController::class, 'deletePhoto'])->name('admin.delete.photo');
    Route::get('/admin/masyarakat', [AdminController::class, 'masyarakat'])->name('admin.masyarakat');
    Route::get('/admin/laporan', [AdminController::class, 'laporan'])->name('admin.laporan');
});
