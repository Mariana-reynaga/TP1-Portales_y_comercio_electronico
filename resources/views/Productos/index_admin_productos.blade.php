@extends('layouts.admin')

@section('title', 'Productos Admin')

@section('content')

    <div class="container my-4 border-bottom pb-4">
        <h2 class="mb-2">Lamparas</h2>

        <a href="{{ route('productos.create.view') }}" class="btn border border-primary mt-2">Crear un nuevo producto</a>
    </div>


    <div class="container">
        <div class="row row-cols-4 gx-3 gy-3">

            @foreach ( $productos as $lampara )

                <div class="col">
                    <div class="card shadow-sm p-3 mb-3 rounded" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $lampara->prod_name }}</h5>
                        </div>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">${{ $lampara->prod_price }}</li>
                            <li class="list-group-item">Stock: {{ $lampara->prod_stock }}</li>
                        </ul>

                        <div class="container d-flex justify-content-around my-2">
                            <a href="{{ route('productos.editar.view', ["id" => $lampara->prod_id]) }}"
                                class="btn btn-outline-primary">Editar</a>

                            <form action="{{ route('productos.eliminar', ['id'=> $lampara->prod_id] ) }}" method="POST">
                                @csrf

                                @method('DELETE')

                                <input type="submit"
                                onclick="return confirm('¿Estas seguro de borrar la lampara?')"
                                class="btn btn-danger"
                                value="eliminar"
                                >

                            </form>
                        </div>
                    </div>
                </div>

            @endforeach

        </div>
    </div>
@endsection
