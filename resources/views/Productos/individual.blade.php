@extends('layouts.main')

@section('title', $producto->name)

@section('content')
    <div class="container bg-secondary my-3">
        <h2>Esto es la pag individual de {{ $producto->name }}</h2>
        
    </div>
@endsection
