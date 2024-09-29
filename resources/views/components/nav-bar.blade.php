<div>
    <nav class="navbar navbar-expand-lg bg-info mb-3 p-3">
        <div class="container-fluid">
            <a href="/" class="navbar-brand fs-4">Wierdo Lamps</a>

            {{-- menu hamburguesa toggable --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navBar">
                <span class="navbar-toggler-icon"></span>
              </button>

              {{-- botones de navbar ((links)) --}}
              <div class="collapse navbar-collapse justify-content-center" id="navBar">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <x-nav-link route="home">Home</x-nav-link>

                  </li>
                  <li class="nav-item">
                    <x-nav-link route="productos.home">Lamparas</x-nav-link>
                  </li>

                  <li class="nav-item">
                    <x-nav-link route="blog.home">Blog</x-nav-link>
                  </li>
                </ul>
              </div>

              {{-- boton login --}}
              <div class="justify-content-end">

                @guest
                    <x-nav-link route="login">Login</x-nav-link>

                @else
                    <form action="{{ route('auth.logout') }}" method="POST">
                        @csrf
                        <button class="btn" type="submit">{{ auth()->user()->name }} Cerrar Sesión</button>
                    </form>
                @endguest
                {{-- <a href="route" class="btn btn-outline-danger color-red" type="submit">Login</a> --}}
              </div>
        </div>
    </nav>
</div>
