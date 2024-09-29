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
Route::get('/login', [\App\Http\Controllers\AuthController::class, 'logInForm'])
    ->name('login');

    // ruta para autentificar credenciales
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'loginProcess'])
    ->name('auth.login.process');

    // Cerrar Session
Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logoutProcess'])
    ->name('auth.logout');


// Pagina de admin
    // lleva a la pág. home de admin
Route::get('/admin', [\App\Http\Controllers\HomeController::class, "adminHome"])
    ->name('admin.home')
    ->middleware('auth');

    // lleva al listado de productos
Route::get('/admin/lamparas', [\App\Http\Controllers\ProductoController::class, "indexAdmin"])
    ->name('productos.admin')
    ->middleware('auth');

    // Ir al formulario de crear producto
Route::get('/admin/lamparas/create', [\App\Http\Controllers\ProductoController::class, "createProductView"])
    ->name('productos.create.view')
    ->middleware('auth');

    // Subir un producto
Route::post('/admin/lamparas/create', [\App\Http\Controllers\ProductoController::class, "createProduct"])
    ->name('productos.create')
    ->middleware('auth');

    // Edición de un producto
Route::get('/admin/lamparas/{id}', [\App\Http\Controllers\ProductoController::class, "editProductView"])
    ->name('productos.editar.view')
    ->whereNumber('id')
    ->middleware('auth');

    // lleva al listado de blogs
Route::get('/admin/blog', [\App\Http\Controllers\BlogController::class, 'indexAdminBlog'])
    ->name('blog.admin')
    ->middleware('auth');
