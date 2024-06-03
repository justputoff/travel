<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PaymentController;
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

Route::middleware(['auth'])->group(function () {
    // User
    Route::get('user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::get('user/index', [UserController::class, 'index'])->name('user.index');
    Route::get('user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('user/store', [UserController::class, 'store'])->name('user.store');
    Route::put('user/update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::delete('user/destroy/{id}', [UserController::class, 'destroy'])->name('user.destroy');

    // Destination
    Route::get('destination', [DestinationController::class, 'index'])->name('destination.index');
    Route::get('destination/create', [DestinationController::class, 'create'])->name('destination.create');
    Route::post('destination', [DestinationController::class, 'store'])->name('destination.store');
    Route::get('destination/{id}', [DestinationController::class, 'show'])->name('destination.show');
    Route::get('destination/{id}/edit', [DestinationController::class, 'edit'])->name('destination.edit');
    Route::put('destination/{id}', [DestinationController::class, 'update'])->name('destination.update');
    Route::delete('destination/{id}', [DestinationController::class, 'destroy'])->name('destination.destroy');

    // Package
    Route::get('packages', [PackageController::class, 'index'])->name('packages.index');
    Route::get('packages/create', [PackageController::class, 'create'])->name('packages.create');
    Route::post('packages', [PackageController::class, 'store'])->name('packages.store');
    Route::get('packages/{id}', [PackageController::class, 'show'])->name('packages.show');
    Route::get('packages/{id}/edit', [PackageController::class, 'edit'])->name('packages.edit');
    Route::put('packages/{id}', [PackageController::class, 'update'])->name('packages.update');
    Route::delete('packages/{id}', [PackageController::class, 'destroy'])->name('packages.destroy');

    // Bookings
    Route::get('books', [BookController::class, 'index'])->name('books.index');
    Route::get('books/create', [BookController::class, 'create'])->name('books.create');
    Route::post('books', [BookController::class, 'store'])->name('books.store');
    Route::get('books/{id}', [BookController::class, 'show'])->name('books.show');
    Route::get('books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');
    Route::put('books/{id}', [BookController::class, 'update'])->name('books.update');
    Route::delete('books/{id}', [BookController::class, 'destroy'])->name('books.destroy');

    // Payments
    Route::get('payments', [PaymentController::class, 'index'])->name('payments.index');
    Route::get('payments/create', [PaymentController::class, 'create'])->name('payments.create');
    Route::post('payments', [PaymentController::class, 'store'])->name('payments.store');
});

require __DIR__.'/auth.php';
