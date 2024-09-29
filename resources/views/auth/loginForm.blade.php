@extends('layouts.main')

@section('title', 'login')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mb-3">Ingresar a Administración</h1>

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
    </div>
@endsection
