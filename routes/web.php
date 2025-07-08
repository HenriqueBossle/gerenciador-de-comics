<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ComicController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Grupo com middleware 'web' — necessário para sessões e CSRF
Route::middleware('web')->group(function () {

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

    // Comics
    Route::get('comics', [ComicController::class, 'index'])->name('comics.index');
    Route::get('comics/create', [ComicController::class, 'create']);
    Route::post('comics', [ComicController::class, 'store']);
    Route::get('comics/{id}/edit', [ComicController::class, 'edit']);
    Route::put('comics/{id}', [ComicController::class, 'update']);
    Route::delete('comics/{id}', [ComicController::class, 'destroy']);

    // Categories
    Route::get('categories', [CategoryController::class, 'index']);
    Route::get('categories/create', [CategoryController::class, 'create']);
    Route::post('categories', [CategoryController::class, 'store']);
    Route::get('categories/{id}/edit', [CategoryController::class, 'edit']);
    Route::put('categories/{id}', [CategoryController::class, 'update']);
    Route::delete('categories/{id}', [CategoryController::class, 'destroy']);
});