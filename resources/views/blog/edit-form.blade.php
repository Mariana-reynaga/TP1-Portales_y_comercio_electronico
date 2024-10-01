@extends('layouts.admin')

@section('title', $articulo->blog_title)

@section('content')
    <div class="container mt-4 mb-4">
        <a href="/admin/blog" class="btn volver-btn fw-bold">Volver</a>
    </div>

    <div class="container">
        <h1>Editar {{$articulo->blog_title}}</h1>

        @if ($errors->any())
            <div class="container alert alert-danger" role="alert">
                Los datos ingresados no son validos.
            </div>
        @endif

        <div class="container shadow-sm p-3 mb-3 rounded">
            <form action="{{ route('blog.editar', ['id'=> $articulo->blog_id] ) }}" method="post">
                @csrf

                @method('PUT')

                <div class="container-fluid d-flex flex-row justify-content-evenly">

                    <div class="w-50">
                        <div class="container my-3">
                            <label for="blog_title" class="form-label fw-semibold fs-5">Titulo del articulo</label>
                            <input
                                type="text"
                                name="blog_title"
                                id="blog_title"
                                class="form-control"
                                value="{{ old('blog_title', $articulo->blog_title) }}"
                            >

                            @error('blog_title')
                                <div class="text-danger"> {{ $message }} </div>
                            @enderror
                        </div>

                        <div class="container my-3">
                            <label for="blog_author" class="form-label fw-semibold fs-5">Autor del articulo</label>
                            <input
                                type="text"
                                name="blog_author"
                                id="blog_author"
                                class="form-control"
                                value="{{ old('blog_author', $articulo->blog_author) }}"
                            >

                            @error('blog_author')
                                <div class="text-danger"> {{ $message }} </div>
                            @enderror
                        </div>

                        <div class="container my-3">
                            <label for="blog_tags" class="form-label fw-semibold fs-5">Tags del articulo</label>
                            <input
                                type="text"
                                name="blog_tags"
                                id="blog_tags"
                                class="form-control"
                                value="{{ old('blog_tags', $articulo->blog_tags) }}"
                            >

                            @error('blog_tags')
                                <div class="text-danger"> {{ $message }} </div>
                            @enderror
                        </div>


                    </div>

                    <div class="w-50">

                        <div class="container my-3">
                            <label for="blog_post" class="form-label fw-semibold fs-5">Post</label>
                            <textarea name="blog_post"
                                      id="blog_post"
                                      cols="30"
                                      rows="10"
                                      class="form-control"
                                      > {{ old('blog_post',$articulo->blog_post) }}</textarea>

                            @error('blog_post')
                                <div class="text-danger"> {{ $message }} </div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="container d-flex justify-content-center">
                    <button type="submit" class="btn btn-outline-primary px-4 py-3">Actualizar articulo</button>
                </div>
            </form>
        </div>
    </div>
@endsection
