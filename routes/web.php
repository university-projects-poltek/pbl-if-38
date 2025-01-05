<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfficerController;
use App\Http\Controllers\ProfileController;
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
    });
});

Route::get('/officer/dashboard', [OfficerController::class, 'indexOfficer'])->name('dashboard');
Route::get('/officer/profile', [OfficerController::class, 'profile'])->name('profile');
Route::get('/officer/table', [OfficerController::class, 'officersTable'])->name('officersTable');
Route::get('/officer/table/addofficer', [OfficerController::class, 'addOfficer'])->name('addOfficer');
Route::get('/officer/reports', [OfficerController::class, 'reportsTable'])->name('reportsTable');
Route::get('/officer/reports/edit/{id}/edit', [OfficerController::class, 'editReport'])->name('editReport');
Route::put('/officer/reports/{id}/{status}', [OfficerController::class, 'updateReportStatus'])->name('updateReportStatus');
