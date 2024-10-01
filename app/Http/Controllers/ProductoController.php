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
            'prod_name'=>'required | min:10 | max:30',
            'prod_price'=>'required | numeric | min:2500',
            'prod_stock' => 'required| numeric | min:0',
            'prod_material' => 'required',
            'prod_description'=>'required | min: 50 | max:250'
        ],[
            'name.required' => 'El nombre es requerido.',
            'name.min' => 'El nombre debe tener un minimo de 10 caracteres.',
            'name.max' => 'El nombre debe tener un maximo de 30 caracteres.',
            // //
            'price.required' => 'El precio es requerido.',
            'price.numeric' => 'El precio debe ser numerico.',
            'price.min' => 'El precio debe ser como minimo $2500.',
            // //
            'stock.required' => 'El stock es requerido.',
            'stock.numeric' => 'El stock debe ser numerico.',
            'stock.min' => 'El stock debe ser como minimo 0.',
            ////
            'prod_material'=>'El material es requerido.',
            ////
            'prod_description.required'=>'La descripción es requerida.',
            'prod_description.min'=>'La descripción debe tener un minimo de 50 caracteres.',
            'prod_description.max'=>'La descripción debe tener un maximo de 250 caracteres.'

        ]);

        $input = $req->only(['prod_name','prod_price','prod_stock', 'prod_material','prod_description']);

        Producto::create($input);

        return redirect()
               ->route('productos.admin')
               ->with('feedback.notif.admin', 'Lampara <b>"'.e($input['prod_name']).'"</b> fue creada exitosamente');
    }

    public function editProductView(int $id){
        $productoData = Producto::find($id);

        return view('Productos.edit-form', [
            'producto' => $productoData
        ]);
    }

    public function editProduct(Request $req, int $id){
        $req->validate([
            'prod_name'=>'required | min:10 | max:30',
            'prod_price'=>'required | numeric | min:2500',
            'prod_stock' => 'required| numeric | min:0',
            'prod_material' => 'required',
            'prod_description'=>'required | min: 50 | max:250'
        ],[
            'name.required' => 'El nombre es requerido.',
            'name.min' => 'El nombre debe tener un minimo de 10 caracteres.',
            'name.max' => 'El nombre debe tener un maximo de 30 caracteres.',
            // //
            'price.required' => 'El precio es requerido.',
            'price.numeric' => 'El precio debe ser numerico.',
            'price.min' => 'El precio debe ser como minimo $2500.',
            // //
            'stock.required' => 'El stock es requerido.',
            'stock.numeric' => 'El stock debe ser numerico.',
            'stock.min' => 'El stock debe ser como minimo 0.',
            ////
            'prod_material'=>'El material es requerido.',
            ////
            'prod_description.required'=>'La descripción es requerida.',
            'prod_description.min'=>'La descripción debe tener un minimo de 50 caracteres.',
            'prod_description.max'=>'La descripción debe tener un maximo de 250 caracteres.'

        ]);

        $input = $req->only(['prod_name','prod_price', 'prod_stock', 'prod_material' ,'prod_description']);
        $producto = Producto::findOrFail($id);

        //Actualiza con lo que tenemos en input
        $producto->update($input);

        return redirect()
               ->route('productos.admin')
               ->with('feedback.notif.admin', 'Lampara <b>"'.e($input['prod_name']).'"</b> fue editada exitosamente');
    }

    public function deleteProduct(int $id){
        $producto = Producto::findOrFail($id);

        $producto -> delete();

        return redirect()
            ->route('productos.admin')
            ->with('feedback.notif.admin', 'El producto <b>"'.e($producto['prod_name']).'"</b> se elimino con exito');
    }

}
