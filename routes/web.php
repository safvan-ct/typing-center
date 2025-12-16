<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('web.index');
Route::get('/about', [HomeController::class, 'about'])->name('web.about');
Route::get('/service-list', [ServiceController::class, 'index'])->name('web.service-list');

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

Route::get('/{slug}', [ServiceController::class, 'show'])->name('web.service-details');

Route::fallback(function () {
    return view('web.404');
});
