@extends('layouts.app')

@section('title', 'Sobre Mí - El Dulce de la Nona')
@section('meta_description', 'Conocé a Sofia, la pastelera detrás de El Dulce de la Nona. Alfajores artesanales hechos en Miami con receta familiar argentina y mucho amor.')

@section('content')

<!-- Navegación simple -->
<header class="bg-rosa-pastel shadow-md sticky top-0 z-50">
    <div class="max-w-6xl mx-auto px-4 py-2 flex items-center justify-between">
        <a href="/" class="flex items-center transition-transform hover:scale-105">
            <img src="{{ asset('img/logo-nonna.png') }}" alt="Logo El Dulce de la Nona" class="h-16 w-16 md:h-20 md:w-20 rounded-full shadow-md object-cover border-2 border-white">
        </a>

        <div class="flex gap-4">
            <a href="/" class="text-chocolate font-bold hover:text-rosa-fuerte transition-colors flex items-center">
                &larr; Volver a la Tienda
            </a>
        </div>
    </div>
</header>

<!-- Contenido Principal -->
<main class="flex-grow max-w-4xl mx-auto px-4 py-16 w-full">
    <div class="bg-white rounded-3xl shadow-xl overflow-hidden border-2 border-rosa-pastel flex flex-col md:flex-row">

        <!-- Mitad Izquierda: Foto / Avatar -->
        <div class="md:w-2/5 bg-rosa-pastel flex flex-col items-center justify-center p-10">
            <div class="w-48 h-48 bg-crema rounded-full border-4 border-white shadow-lg flex items-center justify-center mb-6 overflow-hidden">
                <!-- LLAMADA A TU CARPETA PUBLIC/IMG -->
                <img src="{{ asset('img/foto Sofia.jpeg') }}" alt="Foto de Sofia" class="w-full h-full object-cover">
            </div>

            <h1 class="text-3xl font-bold text-chocolate text-center">
                Sofia Bonucci
            </h1>

            <p class="text-rosa-fuerte font-bold tracking-widest uppercase text-sm mt-2 text-center">
                Fundadora & Pastelera
            </p>
        </div>

        <!-- Mitad Derecha: Texto -->
        <div class="md:w-3/5 p-8 md:p-12 flex flex-col justify-center">
            <h2 class="text-2xl font-bold mb-4 text-chocolate">
                Una receta de familia, hecha con el corazón
            </h2>

            <p class="text-chocolate-claro leading-relaxed mb-4">
                El Dulce de la Nona nace de una receta tradicional que aprendí desde pequeña,
                entre tardes en familia, manos llenas de harina y el aroma dulce que salía de
                la cocina de mi nonna.
            </p>

            <p class="text-chocolate-claro leading-relaxed mb-4">
                Hacer alfajores con ella no era solo preparar algo rico: era compartir tiempo,
                aprender con paciencia y descubrir que los sabores también guardan recuerdos.
                Cada masa, cada relleno y cada detalle llevan un pedacito de esa historia.
            </p>

            <p class="text-chocolate-claro leading-relaxed mb-4">
                Hoy preparo cada pedido de forma artesanal, respetando esa esencia familiar y
                cuidando que cada alfajor llegue fresco, delicado y con ese sabor casero que
                invita a volver.
            </p>

            <!-- Historia Personal -->
            <div class="bg-crema rounded-xl p-6 border-l-4 border-rosa-fuerte mt-4">
                <h3 class="font-bold text-chocolate mb-2 flex items-center gap-2">
                    <svg class="w-5 h-5 text-rosa-fuerte" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 1.343-3 3 0 2.25 3 5 3 5s3-2.75 3-5c0-1.657-1.343-3-3-3z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 21C7.03 17.667 4 13.97 4 10a8 8 0 1116 0c0 3.97-3.03 7.667-8 11z"></path>
                    </svg>
                    Nuestra esencia
                </h3>

                <p class="text-sm text-chocolate-claro italic">
                    Más que una receta, es un recuerdo de infancia convertido en algo para compartir.
                    Cada alfajor está hecho a pedido, con dedicación, tradición y el cariño de una
                    cocina familiar.
                </p>
            </div>
        </div>
    </div>
</main>

@endsection