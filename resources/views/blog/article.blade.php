@extends('layouts.main')

@section('title', $articulo->blog_title)

@section('content')
    <h1>{{ $articulo->blog_title }}</h1>
    <p>Autor: {{ $articulo->blog_author }}</p>

    <div class="container bg-secondary">
        <p>{{$articulo->blog_post}}</p>
    </div>
@endsection
