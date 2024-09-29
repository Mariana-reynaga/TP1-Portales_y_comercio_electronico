@extends('layouts.admin')

@section('title', $producto->name)

@section('content')
    <div class="container">
        <h1>Editar {{$producto->name}}</h1>

        @if ($errors->any())
            <div class="container alert alert-danger" role="alert">
                Los datos ingresados no son validos.
            </div>
        @endif
        <form action="{{ route('productos.editar', ['id'=> $producto->prod_id] ) }}" method="post">
            @csrf

            @method('PUT')

            <div class="container my-3">
                <label for="name" class="form-label">Titulo del Producto</label>
                <input
                    type="text"
                    name="name"
                    id="name"
                    class="form-control"
                    value="{{ old('name',$producto->name) }}"
                >

                @error('name')
                    <div class="text-danger"> {{ $message }} </div>
                @enderror
            </div>

            <div class="container my-3">
                <label for="price" class="form-label">price del Producto</label>
                <input
                    type="number"
                    name="price"
                    id="price"
                    class="form-control"
                    value="{{ old('price',$producto->price) }}"
                >

                @error('price')
                    <div class="text-danger"> {{ $message }} </div>
                @enderror
            </div>

            <div class="container my-3">
                <label for="stock" class="form-label">Stock del Producto</label>
                <input
                    type="number"
                    name="stock"
                    id="stock"
                    class="form-control"
                    value="{{ old('stock',$producto->stock) }}"
                >

                @error('stock')
                    <div class="text-danger"> {{ $message }} </div>
                @enderror
            </div>

            <button type="submit" class="btn border border-primary">Actualizar</button>
        </form>
    </div>
@endsection
