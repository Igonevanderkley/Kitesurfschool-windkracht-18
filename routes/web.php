<?php

use App\Http\Controllers\ProfileController;
use App\Models\Packages;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $packages = Packages::all();
    return view('homepage', [
        'packages' => $packages
    ]);
});

Route::get('reserveren/{slug}', function ($packageId) {
    $chosenPackage = Packages::find($packageId);
    return view('reserveren', [
        'chosenPackage' => $chosenPackage
    ]);
});

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
