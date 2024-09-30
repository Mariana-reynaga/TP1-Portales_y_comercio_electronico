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
                <label for="prod_name" class="form-label">Titulo del Producto</label>
                <input
                    type="text"
                    name="prod_name"
                    id="prod_name"
                    class="form-control"
                    value="{{ old('prod_name',$producto->prod_name) }}"
                >

                @error('prod_name')
                    <div class="text-danger"> {{ $message }} </div>
                @enderror
            </div>

            <div class="container my-3">
                <label for="prod_price" class="form-label">price del Producto</label>
                <input
                    type="number"
                    name="prod_price"
                    id="prod_price"
                    class="form-control"
                    value="{{ old('prod_price',$producto->prod_price) }}"
                >

                @error('prod_price')
                    <div class="text-danger"> {{ $message }} </div>
                @enderror
            </div>

            <div class="container my-3">
                <label for="prod_stock" class="form-label">Stock del Producto</label>
                <input
                    type="number"
                    name="prod_stock"
                    id="prod_stock"
                    class="form-control"
                    value="{{ old('prod_stock',$producto->prod_stock) }}"
                >

                @error('prod_stock')
                    <div class="text-danger"> {{ $message }} </div>
                @enderror
            </div>

            <button type="submit" class="btn border border-primary">Actualizar</button>
        </form>
    </div>
@endsection
