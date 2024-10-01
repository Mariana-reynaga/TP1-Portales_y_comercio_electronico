<div>
    <nav class="navbar navbar-expand-lg border border-2 border-top-0 rounded-bottom mb-3 p-3 navbar-color">
        <div class="container-fluid">

            <a href="/" class="navbar-brand fs-4">
                <img src="/img/mushroom-svg.svg" width="30" height="24"  class="d-inline-block" alt="">
                Wierdo Lamps
            </a>

            {{-- menu hamburguesa toggable --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navBar">
                <span class="navbar-toggler-icon"></span>
            </button>

              {{-- botones de navbar ((links)) --}}
              <div class="collapse d-flex justify-content-between navbar-collapse" id="navBar">
                <div>
                    <ul class="navbar-nav">
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
                      <div class="container d-flex flex-row align-items-center">
                          <div class="mx-2">
                              <x-nav-link route="admin.home">Administración</x-nav-link>
                          </div>

                          <form action="{{ route('auth.logout') }}" method="POST">
                              @csrf
                              <button class="btn" type="submit">{{ auth()->user()->name }} Cerrar Sesión</button>
                          </form>
                      </div>
                  @endguest

                </div>

              </div>

        </div>
    </nav>
</div>
