<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/services', [PageController::class, 'services'])->name('services');

Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

Route::get('/mission', [PageController::class, 'mission'])->name('mission');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/users', [AdminController::class, 'index'])->name('admin.users');
});

Route::post('register', [RegisterController::class, 'register']);
