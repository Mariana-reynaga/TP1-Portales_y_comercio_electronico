@extends('layouts.main')

@section('title', 'Blog')

@section('content')
    <div class="container bg-secondary my-3">
        <h2>Esto es la pag de blog</h2>
    </div>

    <div class="container">
        <div class="row row-cols-4  gy-4">

            @foreach ( $blogs as $posts )
                <div class="col mx-3">
                    <div class="card" style="width: 18rem; min-height: 15rem;">
                        <div class="card-body d-flex flex-column justify-content-evenly">
                            <h5 class="card-title">{{ $posts->blog_title }}</h5>
                            <p class="card-text">Autor: {{ $posts->blog_author }}</p>

                            <a href="{{ route('blog.article', ["id" => $posts->blog_id]) }}" class="btn bg-primary">Leer</a>

                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

@endsection
