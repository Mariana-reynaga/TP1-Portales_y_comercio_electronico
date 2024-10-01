@extends('layouts.admin')

@section('title', 'Admin Home')

@section('content')
    <div class="container mt-5 mb-4  border-bottom border-black">
        <h2>Nuestras lamparas</h2>
        <p class="mt-3">Panel de administración, desde acá se pueden subir productos y artículos, además de editarlos o eliminarlos.</p>
    </div>

    <div class="container p-4 d-flex justify-content-center">
        <div class="shadow-sm p-3 mb-5 bg-body-tertiary rounded mx-3">
            <a href="{{ route('home') }}" class="btn btn-outline-success">Volver a la Página Comercial</a>
        </div>

        <div class="shadow-sm p-3 mb-5 bg-body-tertiary rounded mx-3">
            <a href="{{ route('productos.admin') }}" class="btn btn-outline-success">Administración de productos</a>
        </div>

        <div class="shadow-sm p-3 mb-5 bg-body-tertiary rounded mx-3">
            <a href="{{ route('blog.admin') }}" class="btn btn-outline-success">Administración de blog</a>
        </div>
    </div>
@endsection
