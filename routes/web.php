<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\IzinnController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Halaman Utama
Route::get('/', function () {
    return view('welcome');
});

// Dashboard
Route::get('/home', function () {
    return view('dashboard');
})->name('dashboard');

// Rute Login
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']); // Menangani proses login

// Rute Register
Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::post('/register', [AuthenticatedSessionController::class, 'daftar']); // Menangani form register

// Rute Logout
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// Resource Routes
Route::resource('menu', AkunController::class);
Route::resource('akun', AkunController::class);
Route::resource('note', NoteController::class);
Route::resource('izinn', IzinnController::class);

require __DIR__ . '/auth.php';
