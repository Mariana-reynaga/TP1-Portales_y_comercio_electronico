<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{

    public function index(){
        $todosProductos = Producto::all();

        return view('Productos.index', [
            'productos' => $todosProductos
        ]);
    }
}
