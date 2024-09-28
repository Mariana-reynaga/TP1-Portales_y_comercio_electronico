<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    // protected $primaryKey = "prod_id";

    public function index(){
        $todosProductos = Producto::all();

        return view('Productos.index', [
            'productos' => $todosProductos
        ]);
    }

    public function idvProd(int $id){
        $productoData = Producto::find($id);

        return view('Productos.individual', [
            'producto' => $productoData
        ]);
    }
}
