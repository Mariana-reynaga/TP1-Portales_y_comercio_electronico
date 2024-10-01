@extends('layouts.main')

@section('title', $producto->name)

@section('content')
    <div class="container mt-4 mb-5">
        <a href="/lamparas" class="btn volver-btn fw-bold">Volver</a>
    </div>

    <div class="container d-flex mt-4">
        <div class="container shadow p-3 mb-5 bg-body-tertiary rounded">
            <img src="/img/img-placeholder.png" class="card-img-top" alt="...">
        </div>

        <div class="container ms-3">
            <h2>{{ $producto->prod_name }}</h2>
            <h4 class="fw-bold">${{ $producto->prod_price }}</h4>

            <div class="d-flex flex-row mt-3">
                <p class="fw-bold me-2 fs-5">Material:</p>
                <p class="fs-5">{{ $producto->prod_material }}</p>
            </div>

            <div class="d-flex flex-row">
                <p class="fw-bold me-2 fs-5">Stock:</p>
                <p class="fs-6 border rounded p-1">{{ $producto->prod_stock }}</p>
            </div>

            <div class="border-top border-bottom border-black">
                <p class="my-3">{{ $producto->prod_description }}</p>
            </div>
        </div>
    </div>
@endsection
