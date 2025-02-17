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
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return redirect('/login');
});
Route::get('/home', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/register', [AuthenticatedSessionController::class, 'daftar'])->name('register');


Route::resource('menu', AkunController::class);

Route::resource('akun', AkunController::class);
Route::resource('note', NoteController::class);


Route::resource('izinn', IzinnController::class);

require __DIR__ . '/auth.php';



