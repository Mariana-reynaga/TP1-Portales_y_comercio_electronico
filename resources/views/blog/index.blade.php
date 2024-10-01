@extends('layouts.main')

@section('title', 'Blog')

@section('content')
<div class="container mt-5 mb-4  border-bottom border-black">
    <h2>Nuestro Blog</h2>
    <p class="mt-3">Somos apasionados por lo que hacemos, por eso te traemos una lista de artículos específicamente curados para que puedas aprender cómo mejor decorar tus espacios e iluminar tu día a día.</p>
</div>

    <div class="container">
        <div class="row row-cols-3 gx-5 gy-4">

            @foreach ( $blogs as $posts )
                <div class="col">
                    <div class="card" style="width: 25rem; min-height: 16rem;">
                        <div class="card-body d-flex flex-column justify-content-evenly">
                            <h3 class="card-title">"{{ $posts->blog_title }}"</h3>

                            <div class="card-text">
                                <div class="d-flex flex-row">
                                    <p class="fw-bold me-2">Autor: </p>
                                    <p class="text-break">{{ $posts->blog_author }}</p>
                                </div>

                                <div class="d-flex flex-row">
                                    <p class="fst-italic me-2">Tags: </p>
                                    <p>{{ $posts->blog_tags }}</p>
                                </div>
                            </div>


                            <a href="{{ route('blog.article', ["id" => $posts->blog_id]) }}" class="btn expand-view-btn">Leer</a>

                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

@endsection
