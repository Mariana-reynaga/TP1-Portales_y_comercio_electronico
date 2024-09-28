<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, "home"])
    ->name('home');

// Rutas para productos
    // Listado de productos
Route::get('/lamparas', [\App\Http\Controllers\ProductoController::class, "index"])
    ->name('productos.home');

    // Vista Producto individual
Route::get('/lamparas/{id}', [\App\Http\Controllers\ProductoController::class, "idvProd"])
    ->name('productos.individual')
    ->whereNumber('id');


// Rutas para blog
    // Listado de Articulos
Route::get('/blog', [\App\Http\Controllers\BlogController::class, 'index'])
    ->name('blog.home');

    // Vista articulo individual
Route::get('/blog/{id}', [\App\Http\Controllers\BlogController::class, 'article'])
    ->name('blog.article')
    ->whereNumber('id');

// Rutas para Autenticación
