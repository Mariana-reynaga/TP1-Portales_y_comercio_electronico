@extends('layouts.admin')

@section('title', 'Admin Blog')

@section('content')
    <div class="container my-4 border-bottom pb-4">
        <h2 class="mb-2">Articulos</h2>

        <a href="{{ route('blog.create.view') }}" class="btn border border-primary mt-2">Crear un nuevo articulo</a>
    </div>

    <div class="container">
        <div class="row row-cols-4 gx-3 gy-4">

            @foreach ( $blogs as $articulo )
            <div class="col">
                <div class="card shadow-sm p-3 mb-3 rounded" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $articulo->blog_title }}</h5>
                    </div>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Author: {{ $articulo->blog_author }}</li>
                        <li class="list-group-item">Tags: {{ $articulo->blog_tags }}</li>
                    </ul>

                    <div class="container d-flex justify-content-around my-2">
                        <a href="{{ route('blog.editar.view', ["id" => $articulo->blog_id]) }}"
                            class="btn btn-outline-primary">Editar</a>

                        <form action="{{ route('blog.eliminar', ['id'=> $articulo->blog_id] ) }}" method="POST">
                            @csrf

                            @method('DELETE')

                            <input type="submit"
                            onclick="return confirm('¿Estas seguro de borrar la articulo?')"
                            class="btn btn-danger"
                            value="eliminar"
                            >

                        </form>
                    </div>
                </div>
            </div>

            @endforeach

        </div>
    </div>
@endsection

