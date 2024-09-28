<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}" >
  </head>
  <body>

    <main>
        <x-nav-bar></x-nav-bar>

        @yield('content')

    </main>

    <script src="{{ url('js/bootstrap.bundle.min.js') }}"></script>
  </body>
</html>
