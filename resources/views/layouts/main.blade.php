<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>

    <main>
        <x-nav-bar></x-nav-bar>

      <div class="container bg-primary">
        <h1 class="text-white">meow</h1>
      </div>

      @yield('content')

    </main>

    <script src="js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
