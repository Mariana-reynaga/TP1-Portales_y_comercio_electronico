@extends('layouts.main')

@section('title', 'Products')

@section('content')
    <div class="container mt-5 mb-4  border-bottom border-black">
        <h2>Nuestras lamparas</h2>
        <p class="mt-3">Nos esforzamos por iluminar tu vida y tus momentos especiales. Nuestras lámparas ofrecen una luz de calidad para que tus espacios se sientan tuyos.</p>
    </div>

    <div class="container">
        <div class="row row-cols-3 row-cols-xxl-4 gx-10 gy-4">

            @foreach ( $productos as $lampara )
                <div class="col">
                    <div class="card" style="width: 20rem;">
                        <img src="img/bunny-lamp.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $lampara->prod_name }}</h5>
                            <p class="card-text">${{ $lampara->prod_price }}</p>

                            <a href="{{ route('productos.individual', ["id" => $lampara->prod_id]) }}"
                               class="btn expand-view-btn">Ver más</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
