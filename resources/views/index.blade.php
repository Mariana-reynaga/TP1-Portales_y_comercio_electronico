@extends('layouts.main')

@section('title', 'Wierdo Lamps - Home')

@section('content')
    <div class="container d-flex justify-content-center mt-4 pt-4">

        <div class="d-flex justify-content-between" style="width: 80%">
            <img src="img/lamp-home.webp" alt="" class="rounded" style="width: 60%;">

            <div class="ms-5" style="width: 30%;">
                <h2>Iluminando tu día</h2>
                <p class="fw-normal lh-lg"> <strong>Wierdo Lamps</strong> es un negocio único que ofrece lámparas innovadoras y originales para iluminar tu hogar con estilo. Cada pieza combina diseño contemporáneo y un toque de extravagancia, creando un ambiente acogedor y lleno de personalidad. Desde lámparas de mesa hasta sofisticados apliques de pared, en Wierdo Lamps encontrarás la iluminación perfecta que refleje tu carácter y transforme cualquier espacio en un lugar especial. ¡Deja que tu luz brille con un toque raro y encantador!</p>
            </div>
        </div>
    </div>

    <div class="container-fluid spacer my-5 py-4">
        <div class="container d-flex justify-content-center">
            <div class="d-flex justify-content-evenly w-75">
                <div class="container flex-col">
                    <h3>¿Queres saber más?</h3>
                    <p>Visita nuestro blog para conocer aún más de como mejor decorar tu espacio.</p>
                </div>

                {{-- <button class="btn ms-4 fs-3 expand-view-btn w-25">Ver más</button> --}}
                <div class="container d-flex align-items-center justify-content-center">
                    <a href="{{ route('blog.home') }}" class="btn ms-4 fs-4 expand-view-btn">Ver más</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container d-flex justify-content-center mt-4 pb-4">

        <div class="d-flex justify-content-between" style="width: 80%">
            <div class="me-5" style="width: 30%;">
                <h2>Nuestra propuesta</h2>
                <p class="lh-lg">Nos comprometemos con la sostenibilidad en cada etapa de la fabricación de nuestras lámparas. Utilizamos materiales de origen ético para reducir nuestro impacto ambiental. Nuestros procesos de producción son energéticamente eficientes, aprovechando fuentes renovables siempre que es posible. Además, diseñamos nuestras lámparas para que sean duraderas y reparables, fomentando un ciclo de vida prolongado.</p>
            </div>

            <img src="img/sustainable-home.jpg" alt="" class="rounded" style="width: 60%;">
        </div>
    </div>
@endsection
