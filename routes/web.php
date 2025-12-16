<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('web.index');
Route::get('/about', [HomeController::class, 'about'])->name('web.about');
Route::get('/services', [HomeController::class, 'services'])->name('web.service-list');
Route::get('/service/{slug}', [HomeController::class, 'service'])->name('web.service');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/admin.php';
require __DIR__ . '/auth.php';
