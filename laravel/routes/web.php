<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\OfficerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\ReportController;

/*
|---------------------------------------------------------------------------
| Web Routes
|---------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/homepage', function () {
    return view('homepage');
});

// Rute login dan logout
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Rute untuk admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/admin/petugas', [AdminController::class, 'petugas'])->name('admin.petugas');
    Route::get('/admin/edit/petugas/{id}', [AdminController::class, 'editPetugas'])->name('admin.edit.petugas');
    Route::post('/admin/petugas/create', [AdminController::class, 'storePetugas'])->name('admin.create.petugas');
    Route::get('/admin/petugas/tambah', [AdminController::class, 'tambahPetugas'])->name('admin.add.petugas'); // Halaman form tambah petugas
    Route::put('/admin/petugas/update/{id}', [AdminController::class, 'updatePetugas'])->name('admin.update.petugas');
    Route::delete('/admin/petugas/delete/{id}', [PetugasController::class, 'destroy'])->name('admin.delete.petugas');
    Route::post('/admin/upload-photo', [AdminController::class, 'uploadPhoto'])->name('admin.upload.photo');
    Route::put('admin/upload/photo/{id}', [AdminController::class, 'uploadPhoto'])->name('admin.upload.photo');
    Route::get('/admin/delete-photo/{id}', [AdminController::class, 'deletePhoto'])->name('admin.delete.photo');
    Route::get('/admin/masyarakat', [AdminController::class, 'masyarakat'])->name('admin.masyarakat');
    Route::get('/admin/laporan', [AdminController::class, 'laporan'])->name('admin.laporan');
});

// Rute untuk officer
Route::middleware(['auth', 'role:officer'])->group(function () {
    Route::get('/officer', function () {
        return view('officer.dashboard');
    })->name('officer.dashboard');
    Route::get('/officer/dashboard', [OfficerController::class, 'index'])->name('officer.dashboard');
    Route::get('/officer/profile', [OfficerController::class, 'profile'])->name('officer.profile');
    Route::get('/officer/table', [OfficerController::class, 'officersTable'])->name('officer.officersTable');
    Route::get('/officer/table/addofficer', [OfficerController::class, 'addOfficer'])->name('officer.addOfficer');
    Route::get('/officer/reports', [OfficerController::class, 'reportsTable'])->name('officer.reportsTable');
    Route::get('/officer/reports', [OfficerController::class, 'reportsTable'])->name('officer.reportsTable');

    Route::get('/officer/reports', [OfficerController::class, 'reportsTable'])->name('reportsTable');
    Route::put('/officer/reports/{id}/status', [OfficerController::class, 'updateReportStatus'])->name('updateReportStatus');

    // Menambahkan route untuk mengedit laporan
    Route::get('/officer/reports/edit/{id}', [OfficerController::class, 'editReport'])->name('editReport'); // Pastikan route ini ada
    
    Route::put('/officer/reports/{id}/{status}', [OfficerController::class, 'updateReportStatus'])->name('updateReportStatus');
    Route::get('/officer/reports', [OfficerController::class, 'reportsTable'])->name('officer.reportsTable');

});
