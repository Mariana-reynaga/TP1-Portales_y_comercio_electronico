<div>
    <nav class="navbar navbar-expand-lg bg-info mb-3 p-3">
        <div class="container-fluid">
            <a href="" class="navbar-brand fs-4">Lamparas</a>

            {{-- menu hamburguesa toggable --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navBar">
                <span class="navbar-toggler-icon"></span>
              </button>

              {{-- botones de navbar ((links)) --}}
              <div class="collapse navbar-collapse justify-content-center" id="navBar">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link fs-5" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link fs-5" href="#">Lamparas</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link fs-5" href="#">Blog</a>
                  </li>
                </ul>
              </div>

              {{-- boton login --}}
              <div class="justify-content-end">
                <a href="#" class="btn btn-outline-danger color-red" type="submit">Login</a>
              </div>
        </div>
    </nav>
</div>
