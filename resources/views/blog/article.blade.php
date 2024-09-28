@extends('layouts.main')

@section('title', $articulo->title)

@section('content')
    <h1>{{ $articulo->title }}</h1>
    <p>Autor: {{ $articulo->author }}</p>

    <div class="container bg-secondary">
        <p>{{$articulo->post}}</p>
    </div>
@endsection
