<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NowayController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;


Route::get('/', [WelcomeController::class, 'index']);

Route::get('/Japikole', [NowayController::class, 'show']);
Route::get('/users/list', [UserController::class, 'index'])->middleware('auth');
Route::resource('products', ProductController::class)->middleware('auth');
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
