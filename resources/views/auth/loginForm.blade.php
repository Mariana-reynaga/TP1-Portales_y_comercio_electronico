@extends('layouts.main')

@section('title', 'login')

@section('content')


    <div class="container border shadow p-3 mb-5 mt-4 bg-body-tertiary rounded w-50">
        <h2 class="py-3 ms-3">Ingresar a Administración</h2>

        <div class="d-flex flex-row justify-content-evenly">
            <div class="w-50">
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

                    <button type="submit" class="btn expand-view-btn px-4 py-2 my-3 fs-5">Login</button>
                </form>
            </div>

            <div>
                <img src="/img/girafa-login.png" style="height: 300px">
            </div>
        </div>
    </div>
@endsection
