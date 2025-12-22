<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\PasswordResetController;
use App\Http\Controllers\Admin\Auth\RegisterController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Category\CategoryServiceController;
use App\Http\Controllers\Admin\Category\DocumentGroupController;
use App\Http\Controllers\Admin\Category\SubCategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use Illuminate\Support\Facades\Route;

Route::get('login', [LoginController::class, 'create'])->name('login');

Route::middleware('guest')->prefix('admin')->name('admin.')->group(function () {
    Route::get('register', [RegisterController::class, 'create'])->name('register');
    Route::post('register', [RegisterController::class, 'store']);

    Route::get('login', [LoginController::class, 'create'])->name('login');
    Route::post('login', [LoginController::class, 'store']);

    Route::get('forgot-password', [PasswordResetController::class, 'create'])->name('password.request');
    Route::post('forgot-password', [PasswordResetController::class, 'store'])->name('password.email');
});

Route::get('/admin/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('admin.dashboard');

Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    Route::post('logout', [LoginController::class, 'destroy'])->name('logout');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::put('password', [ProfileController::class, 'password'])->name('password.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::prefix('categories')
        ->name('categories.')
        ->controller(CategoryController::class)
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('/', 'store')->name('store');
            Route::put('/{category}', 'update')->name('update');
            Route::delete('/{category}', 'destroy')->name('destroy');

            Route::get('/form/{id?}', 'form')->name('form');
            Route::get('/datatable', 'dataTable')->name('datatable');
            Route::patch('/{category}/toggle-status', 'toggleStatus')->name('toggle-status');
        });

    Route::prefix('subcategories')
        ->name('subcategories.')
        ->controller(SubCategoryController::class)
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('/', 'store')->name('store');
            Route::put('/{subcategory}', 'update')->name('update');
            Route::delete('/{subcategory}', 'destroy')->name('destroy');

            Route::get('/form/{id?}', 'form')->name('form');
            Route::get('/datatable', 'dataTable')->name('datatable');
            Route::patch('/{subcategory}/toggle-status', 'toggleStatus')->name('toggle-status');
        });

    Route::prefix('category-services')
        ->name('category-services.')
        ->controller(CategoryServiceController::class)
        ->group(function () {
            Route::get('/datatable', 'dataTable')->name('datatable');
            Route::get('/form/{category}/{id?}', 'form')->name('form');
            Route::get('/{category}', 'index')->name('index');
            Route::post('/{category}', 'store')->name('store');
            Route::put('/{categoryService}', 'update')->name('update');
            Route::patch('/{categoryService}/toggle-status', 'toggleStatus')->name('toggle-status');
        });

    Route::prefix('document-groups')
        ->name('document-groups.')
        ->controller(DocumentGroupController::class)
        ->group(function () {
            Route::get('/datatable', 'dataTable')->name('datatable');
            Route::get('/form/{category}/{id?}', 'form')->name('form');
            Route::get('/{category}', 'index')->name('index');
            Route::post('/{category}', 'store')->name('store');
            Route::put('/{categoryService}', 'update')->name('update');
            Route::patch('/{categoryService}/toggle-status', 'toggleStatus')->name('toggle-status');
        });

    Route::prefix('settings')
        ->name('settings.')
        ->controller(SettingsController::class)
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('/', 'store')->name('store');
        });

    Route::prefix('partners')
        ->name('partners.')
        ->controller(PartnerController::class)
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('/', 'store')->name('store');
            Route::put('/{partner}', 'update')->name('update');
            Route::delete('/{partner}', 'destroy')->name('destroy');

            Route::get('/form/{id?}', 'form')->name('form');
            Route::get('/datatable', 'dataTable')->name('datatable');
            Route::patch('/{partner}/toggle-status', 'toggleStatus')->name('toggle-status');
        });

    Route::prefix('booking')
        ->name('booking.')
        ->controller(BookingController::class)
        ->group(function () {
            Route::get('/datatable', 'dataTable')->name('datatable');
            Route::post('/status', 'updateStatus')->name('status.update');
        });
});
