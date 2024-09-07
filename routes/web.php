<?php

use App\Http\Controllers\PhotosController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('photos.index');
})->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/photos', [PhotosController::class, 'index'])->name('photos.index');
    Route::get('/photos/create', [PhotosController::class, 'create'])->name('photos.create');
    Route::post('/photos', [PhotosController::class, 'store'])->name('photos.store');
    Route::get('/photos/{photo}', [PhotosController::class, 'show'])->name('photos.show');
    Route::delete('/photos/{photo}', [PhotosController::class, 'destroy'])->name('photos.destroy');
    Route::get('/settings', SettingsController::class)->name('settings');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
