@extends('layouts.main')

@section('title', 'Blog')

@section('content')
    <div class="container bg-secondary my-3">
        <h2>Esto es la pag de blog</h2>
    </div>

    <div class="container">
        <div class="row row-cols-4 gx-3 gy-4">

            @foreach ( $blogs as $posts )
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $posts->title }}</h5>
                            <p class="card-text">Autor: {{ $posts->author }}</p>
                            <button class="btn bg-primary" > </button>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

@endsection
