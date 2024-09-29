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

                            <a href="{{ route('productos.editar.view', ["id" => $lampara->prod_id]) }}"
                               class="btn bg-primary">Editar</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
