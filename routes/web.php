<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NowayController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\Product;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Japikole', [NowayController::class, 'show']);

Route::get('/users/list', [UserController::class, 'index'])->middleware('auth');

Route::get('/products', [ProductController::class, 'index'])->name('products.index')->middleware('auth');

Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show')->middleware('auth');

Route::get('/products/edit/{product}', [ProductController::class, 'edit'])->name('products.edit')->middleware('auth');

Route::post('/products/{product}', [ProductController::class, 'update'])->name('products.update')->middleware('auth');

Route::post('/products', [ProductController::class, 'store'])->name('products.store')->middleware('auth');

Route::get('/products/create', [ProductController::class, 'create'])->name('products.create')->middleware('auth');

Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy')->middleware('auth');

Route::delete('/users/{user}', [UserController::class, 'destroy'])->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
