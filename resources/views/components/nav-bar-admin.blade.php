<div>
    <nav class="navbar navbar-expand-lg border border-2 border-top-0  rounded-bottom mb-3 p-3 navbar-color">
        <div class="container-fluid">
            <a href="/admin" class="navbar-brand fs-4">Administración</a>

            {{-- menu hamburguesa toggable --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navBar">
                <span class="navbar-toggler-icon"></span>
              </button>

              {{-- botones de navbar ((links)) --}}
              <div class="collapse navbar-collapse justify-content-center" id="navBar">
                <ul class="navbar-nav">

                  <li class="nav-item">
                    <x-nav-link route="productos.admin">Lamparas</x-nav-link>
                  </li>

                  <li class="nav-item">
                    <x-nav-link route="blog.admin">Blog Posts</x-nav-link>
                  </li>

                </ul>
              </div>


              {{-- boton logout --}}
              <div class="justify-content-end">
                <form action="{{ route('auth.logout') }}" method="POST">
                    @csrf
                    <button class="btn" type="submit">{{ auth()->user()->name }} Cerrar Sesión</button>
                </form>
              </div>
        </div>
    </nav>
</div>
