<div>
    <a class="nav-link fs-5"
        {{-- pregunta si el nombre de la ruta y si es el actual, no devuelve nada --}}
        {{ request()->routeIs($route) ? 'active' : '' }}"
        href="{{ route($route) }}"
        {{-- {!! para imprimir atributos en etiquetas html !!} --}}
        {!! request()->routeIs($route) ? 'aria-current="page"' : '' !!} > {{ $slot }} </a>
</div>
