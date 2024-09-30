@extends('layouts.admin')

@section('title', 'Crear Articulo')

@section('content')
    <div class="container">
        <h1>Crear Articulo</h1>

        @if ($errors->any())
            <div class="container alert alert-danger" role="alert">
                Los datos ingresados no son validos.
            </div>
        @endif

        <form action="{{ route('blog.create') }}" method="post">
            @csrf

            <div class="container my-3">
                <label for="blog_title" class="form-label">Titulo del articulo</label>
                <input
                    type="text"
                    name="blog_title"
                    id="blog_title"
                    class="form-control"
                    value="{{ old('blog_title') }}"
                >

                @error('blog_title')
                    <div class="text-danger"> {{ $message }} </div>
                @enderror
            </div>

            <div class="container my-3">
                <label for="blog_author" class="form-label">Autor del articulo</label>
                <input
                    type="text"
                    name="blog_author"
                    id="blog_author"
                    class="form-control"
                    value="{{ old('blog_author') }}"
                >

                @error('blog_author')
                    <div class="text-danger"> {{ $message }} </div>
                @enderror
            </div>

            <div class="container my-3">
                <label for="blog_post" class="form-label">Post</label>

                <textarea
                    name="blog_post"
                    id="blog_post"
                    cols="30"
                    rows="10"
                    class="form-control"
                >{{ old('blog_post') }}
                </textarea>

                @error('blog_post')
                    <div class="text-danger"> {{ $message }} </div>
                @enderror
            </div>

            <button type="submit" class="btn border border-primary">Publicar</button>
        </form>
    </div>
@endsection
