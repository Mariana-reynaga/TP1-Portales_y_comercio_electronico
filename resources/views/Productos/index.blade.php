@extends('layouts.main')

@section('title', 'Products')

@section('content')
    <div class="container bg-secondary my-3">
        <h2>Esto es la pag de productos</h2>
    </div>

    <div class="container">
        <div class="row row-cols-4 gx-3 gy-4">

            @foreach ( $productos as $lampara )
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $lampara->name }}</h5>
                            <p class="card-text">${{ $lampara->price }}</p>

                            <a href="{{ route('productos.individual', ["id" => $lampara->prod_id]) }}"
                               class="btn bg-primary">ver Mas</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
