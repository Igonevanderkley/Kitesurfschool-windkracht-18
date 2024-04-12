<?php

use App\Http\Controllers\ProfileController;
use App\Models\Packages;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ReservationController;

Route::get('/', [HomepageController::class, 'index'])->name('homepage');

Route::get('reserve/{slug}', [ReservationController::class, 'index'])->name('reservation');

Route::get('personal-information', function () {
    return view('personal-information');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
