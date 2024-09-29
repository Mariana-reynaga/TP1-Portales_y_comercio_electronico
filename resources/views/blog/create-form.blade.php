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
                <label for="title" class="form-label">Titulo del articulo</label>
                <input
                    type="text"
                    name="title"
                    id="title"
                    class="form-control"
                    value="{{ old('title') }}"
                >

                @error('title')
                    <div class="text-danger"> {{ $message }} </div>
                @enderror
            </div>

            <div class="container my-3">
                <label for="author" class="form-label">Autor del articulo</label>
                <input
                    type="text"
                    name="author"
                    id="author"
                    class="form-control"
                    value="{{ old('author') }}"
                >

                @error('author')
                    <div class="text-danger"> {{ $message }} </div>
                @enderror
            </div>

            <div class="container my-3">
                <label for="post" class="form-label">Post</label>

                <textarea
                    name="post"
                    id="post"
                    cols="30"
                    rows="10"
                    class="form-control"
                >{{ old('post') }}
                </textarea>

                @error('post')
                    <div class="text-danger"> {{ $message }} </div>
                @enderror
            </div>

            <button type="submit" class="btn border border-primary">Publicar</button>
        </form>
    </div>
@endsection
