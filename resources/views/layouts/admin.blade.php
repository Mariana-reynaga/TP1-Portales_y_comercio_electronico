<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}" >
</head>
<body>
    <x-nav-bar-admin></x-nav-bar-admin>

    @if (session()->has('feedback.notif.admin'))
        <div class="container alert alert-success alert-dismissible fade show">

            {!! session()->get('feedback.notif.admin') !!}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @yield('content')

    <script src="{{ url('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
