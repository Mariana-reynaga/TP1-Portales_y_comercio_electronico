@extends('layouts.main')

@section('title', $producto->name)

@section('content')
    <div class="container my-3">
        <a href="/lamparas" class="btn btn-outline-primary">Volver</a>
    </div>

    <div class="container d-flex">
        <div class="container shadow p-3 mb-5 bg-body-tertiary rounded">
            <img src="/img/img-placeholder.png" class="card-img-top" alt="...">
        </div>

        <div class="container">
            <h2>{{ $producto->prod_name }}</h2>
            <p class="fw-bold">${{ $producto->prod_price }}</p>

            <div class="border-top border-bottom border-black">
                <p class="my-3">{{ $producto->prod_description }}</p>
            </div>
        </div>
@endsection
