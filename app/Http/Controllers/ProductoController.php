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

    public function idvProd(int $id){
        $productoData = Producto::find($id);

        return view('Productos.individual', [
            'producto' => $productoData
        ]);
    }

    public function indexAdmin(){
        $todosProductos = Producto::all();

        return view('Productos.index_admin_productos', [
            'productos' => $todosProductos
        ]);
    }

    public function createProductView(){
        return view('Productos.create-form');
    }

    public function createProduct(Request $req){
        $req->validate([
            'name'=>'required | min:10 | max:30',
            'price'=>'required | numeric | min:2500',
            'stock' => 'required| numeric | min:0'
        ],[
            'name.required' => 'El nombre es requerido',
            'name.min' => 'El nombre debe tener un minimo de 10 caracteres',
            'name.max' => 'El nombre debe tener un maximo de 30 caracteres',
            // //
            'price.required' => 'El precio es requerido',
            'price.numeric' => 'El precio debe ser numerico',
            'price.min' => 'El precio debe ser como minimo $2500',
            // //
            'stock.required' => 'El stock es requerido',
            'stock.numeric' => 'El stock debe ser numerico',
            'stock.min' => 'El stock debe ser como minimo 0',
        ]);

        $input = $req->only(['name','price','stock']);

        // agarra los parametros y los guarda en la base de datos
        Producto::create($input);

        return redirect()
               ->route('productos.admin')
               ->with('feedback.notif', 'Lampara <b>"'.e($input['name']).'"</b> fue creada exitosamente');
    }

    public function editProductView(int $id){
        $productoData = Producto::find($id);

        return view('Productos.edit-form', [
            'producto' => $productoData
        ]);
    }
}
