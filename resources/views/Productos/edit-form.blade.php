@extends('layouts.admin')

@section('title', $producto->prod_name)

@section('content')
    <div class="container mt-4 mb-4">
        <a href="/admin/lamparas" class="btn volver-btn fw-bold">Volver</a>
    </div>

    <div class="container">
        <h1 class="mb-3">Editar {{$producto->prod_name}}</h1>

        @if ($errors->any())
            <div class="container alert alert-danger" role="alert">
                Los datos ingresados no son validos.
            </div>
        @endif

        <div class="container shadow-sm p-3 mb-3 rounded">
            <form action="{{ route('productos.editar', ['id'=> $producto->prod_id] ) }}" method="post">
                @csrf

                @method('PUT')

                <div class="container-fluid d-flex flex-row justify-content-evenly">
                    <div class="w-50">
                        <div class="container my-3">
                            <label for="prod_name" class="form-label fw-semibold fs-5">Titulo del Producto</label>
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
                            <label for="prod_price" class="form-label fw-semibold fs-5">Precio del Producto</label>
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
                            <label for="prod_stock" class="form-label fw-semibold fs-5">Stock del Producto</label>
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
                    </div>

                    <div class="w-50">
                        <div class="container my-3">
                            <label for="prod_material" class="form-label fw-semibold fs-5">Material del producto</label>
                            <input
                                type="text"
                                name="prod_material"
                                id="prod_material"
                                class="form-control"
                                value="{{ old('prod_material', $producto->prod_material) }}"
                            >

                            @error('prod_material')
                                <div class="text-danger"> {{ $message }} </div>
                            @enderror
                        </div>

                        <div class="container my-3">
                            <label for="prod_description" class="form-label fw-semibold fs-5">Descripción del Producto</label>
                            <textarea name="prod_description"
                                      id="prod_description"
                                      cols="30"
                                      rows="10"
                                      class="form-control"
                                      > {{ old('prod_description',$producto->prod_description) }}</textarea>

                            @error('prod_description')
                                <div class="text-danger"> {{ $message }} </div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="container d-flex justify-content-center">
                    <button type="submit" class="btn btn-outline-primary px-4 py-3">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
