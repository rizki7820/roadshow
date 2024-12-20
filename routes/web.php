<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/home', function () {
    return view('dashboard');
})->name('dashboard');


Route::resource('menu', Cakun::class);

Route::resource('akun', AkunController::class);
Route::resource('note', NoteController::class);

Route::get('/izin/create', [IzinController::class, 'create'])->name('izin.create');
Route::post('/izin', [IzinController::class, 'store'])->name('izin.store');
Route::get('/izin', [IzinController::class, 'index'])->name('izin.index');



