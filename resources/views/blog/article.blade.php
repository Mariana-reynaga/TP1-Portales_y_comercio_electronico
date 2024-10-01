@extends('layouts.main')

@section('title', $articulo->blog_title)

@section('content')
    <div class="container mt-4 mb-5">
        <a href="/blog" class="btn volver-btn fw-bold">Volver</a>
    </div>

    <div class="container mt-5">
        <div class="container-fluid d-flex justify-content-center border-bottom pb-4">
            <img src="/img/banner-blog.jpg" alt="" class="img-fluid rounded" style="width: 80%; height:35vh;">
        </div>


        <h1 class="mt-3">"{{ $articulo->blog_title }}"</h1>

        <div class="d-flex flex-row mt-3">
            <div class="d-flex flex-row me-3">
                <p class="fw-bold me-2">Autor: </p>
                <p>{{ $articulo->blog_author }}</p>
            </div>

            <div class="d-flex flex-row">
                <p class="fst-italic me-2">Tags: </p>
                <p>{{ $articulo->blog_tags }}</p>
            </div>
        </div>

        <div class="container p-3 border-top border-bottom rounded mt-3">
            <p class="lh-lg">{{ $articulo->blog_post }}</p>
        </div>
    </div>
@endsection
