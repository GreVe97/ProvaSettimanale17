<?php

use App\Http\Controllers\AttivitaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgettoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::resource('/progetti', ProgettoController::class);
Route::get('/progetti', [ProgettoController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('progetti');


Route::resource('/attivita', AttivitaController::class)->middleware(['auth', 'verified']);
require __DIR__.'/auth.php';
