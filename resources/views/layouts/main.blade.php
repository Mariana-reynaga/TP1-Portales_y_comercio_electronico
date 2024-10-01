<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <link rel="icon" type="image/x-icon" href="/img/mushroom-svg.svg">

    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}" >
    <link rel="stylesheet" href="/css/estilos.css" >
  </head>
  <body>

    <main>
        <x-nav-bar></x-nav-bar>

        @if (session()->has('feedback.notif.danger'))
            <div class="container alert alert-danger alert-dismissible fade show">

                {!! session()->get('feedback.notif.danger') !!}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

        @elseif (session()->has('feedback.notif.sucess'))
            <div class="container alert alert-success alert-dismissible fade show">

                {!! session()->get('feedback.notif.sucess') !!}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @yield('content')

    </main>

    <script src="{{ url('js/bootstrap.bundle.min.js') }}"></script>

    <footer class="py-5 mt-4">
        <div class="container d-flex justify-content-center">
            <div class="d-flex flex-column text-center text-light">
                <h4>TP1 - Portales y comercio electronico</h4>
                <p>DWM4AP</p>
                <p>Alumno: Mariana Reynaga</p>
            </div>
        </div>
    </footer>
  </body>

</html>
