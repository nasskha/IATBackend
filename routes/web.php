<?php

use App\Http\Controllers\PetController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController; // Toegevoegd

// Home route
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/pets/filter', [HomeController::class, 'filter'])->name('home.filter');

// Pet routes
Route::resource('pets', PetController::class);

// Request routes
Route::resource('requests', RequestController::class);

// Review routes
Route::resource('reviews', ReviewController::class);

// User routes
Route::resource('users', UserController::class);

// Admin routes (alleen voor admins)
Route::prefix('admin')->middleware('isAdmin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::post('/block/{user}', [AdminController::class, 'blockUser'])->name('admin.blockUser');
    Route::post('/unblock/{user}', [AdminController::class, 'unblockUser'])->name('admin.unblockUser');
    Route::delete('/request/{request}', [AdminController::class, 'deleteRequest'])->name('admin.deleteRequest');
});

// Dashboard route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile routes (alleen voor ingelogde gebruikers)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Auth routes
require __DIR__.'/auth.php';
