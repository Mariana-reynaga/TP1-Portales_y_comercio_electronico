<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, "home"])->name('home');

// Rutas para productos
Route::get('/lamparas', [\App\Http\Controllers\ProductoController::class, "index"])->name('productos.home');

// Rutas para blog
Route::get('/blog', [\App\Http\Controllers\BlogController::class, 'index'])->name('blog.home');
