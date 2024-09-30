@extends('layouts.admin')

@section('title', 'Admin Blog')

@section('content')
    <div class="container my-4">
        <h2 class="mb-2">Articulos</h2>

        <a href="{{ route('blog.create.view') }}" class="btn border border-primary">Crear un nuevo articulo</a>
    </div>


    <div class="container">
        <div class="row row-cols-4 gx-3 gy-4">

            @foreach ( $blogs as $articulo )


                <div class="col">
                    <div class="card" style="width: 18rem;">

                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $articulo->blog_title }}</h5>
                                    <p class="card-text">Autor: {{ $articulo->blog_author }}</p>

                                    <a href="{{ route('blog.editar.view', ["id" => $articulo->blog_id]) }}" class="btn bg-primary">Editar</a>

                                    <form action="{{ route('blog.eliminar', ['id'=> $articulo->blog_id] ) }}" method="POST">
                                        @csrf

                                        @method('DELETE')

                                        <input type="submit"
                                        onclick="return confirm('¿Estas seguro de borrar el articulo?')"
                                        class="btn btn-danger"
                                        value="Eliminar"
                                        >

                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection

