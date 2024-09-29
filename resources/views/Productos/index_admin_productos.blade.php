@extends('layouts.admin')

@section('title', 'Productos Admin')

@section('content')

<div class="container my-4">
        <h2 class="mb-2">Lamparas</h2>

        <a href="{{ route('productos.create.view') }}" class="btn border border-primary">Crear un nuevo producto</a>
    </div>


    <div class="container">
        <div class="row row-cols-4 gx-3 gy-4">

            @foreach ( $productos as $lampara )


                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $lampara->name }}</h5>
                            <p class="card-text">${{ $lampara->price }}</p>

                            <div class="container d-flex justify-content-around">
                                <a href="{{ route('productos.editar.view', ["id" => $lampara->prod_id]) }}"
                                   class="btn bg-primary">Editar</a>

                                <form action="{{ route('productos.eliminar', ['id'=> $lampara->prod_id] ) }}" method="POST">
                                    @csrf

                                    @method('DELETE')

                                    <input type="submit"
                                    onclick="return confirm('¿Estas seguro de borrar la pelicula?')"
                                    class="btn btn-danger"
                                    value="eliminar"
                                    >

                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
