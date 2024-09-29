@extends('layouts.admin')

@section('title', $producto->name)

@section('content')
    <div class="container">
        <h1>Editar {{$producto->name}}</h1>
        <form action="" method="POST">
            <div class="container my-3">
                <label for="name" class="form-label">Titulo del Producto</label>
                <input
                    type="text"
                    name="name"
                    id="name"
                    class="form-control"
                >
            </div>

            <div class="container my-3">
                <label for="price" class="form-label">price del Producto</label>
                <input
                    type="number"
                    name="price"
                    id="price"
                    class="form-control"
                >
            </div>

            <div class="container my-3">
                <label for="stock" class="form-label">Stock del Producto</label>
                <input
                    type="number"
                    name="stock"
                    id="stock"
                    class="form-control"
                >
            </div>
        </form>
    </div>
@endsection
