@extends('layouts.main')

@section('title', 'login')

@section('content')
    {{-- <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mb-3">Ingresar a Administración</h1>

                @if ($errors->any())
                    <div class="container alert alert-danger" role="alert">
                        Los datos ingresados no son validos.
                    </div>
                @endif

                <form action="{{ route('auth.login.process') }}" method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        @csrf

                        <input
                            type="email"
                            name="email"
                            id="email"
                            class="form-control"
                            value="{{old('email')}}"
                        >
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>

                        <input
                            type="password"
                            name="password"
                            id="password"
                            class="form-control"
                        >
                    </div>

                    <button type="submit" class="btn bg-primary my-3">Login</button>
                </form>
            </div>
        </div>
    </div> --}}

    <div class="container border shadow p-3 mb-5 mt-4 bg-body-tertiary rounded w-50">
        <h2 class="py-3 ms-3">Ingresar a Administración</h2>

        <div class="d-flex flex-row justify-content-evenly">
            <div>
                <form action="{{ route('auth.login.process') }}" method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        @csrf

                        <input
                            type="email"
                            name="email"
                            id="email"
                            class="form-control"
                            value="{{old('email')}}"
                        >
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>

                        <input
                            type="password"
                            name="password"
                            id="password"
                            class="form-control"
                        >
                    </div>

                    <button type="submit" class="btn bg-primary my-3">Login</button>
                </form>
            </div>

            <div>
                <img src="/img/img-placeholder.png" style="height: 80%">
            </div>
        </div>
    </div>
@endsection
