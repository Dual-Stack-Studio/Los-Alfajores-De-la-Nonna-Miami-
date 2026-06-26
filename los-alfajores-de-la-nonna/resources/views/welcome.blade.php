@extends('layouts.app')

@section('title', 'El Dulce de la Nona - Alfajores Artesanales en Miami')
@section('meta_description', 'Alfajores artesanales hechos a pedido en Miami. Masa de maicena, dulce de leche y coco rallado. Receta familiar argentina, preparados con amor. $15 la docena. ¡Pedí el tuyo!')

@section('content')

<header class="bg-rosa-pastel shadow-md sticky top-0 z-50">
    <div class="max-w-6xl mx-auto px-4 py-2 flex items-center justify-between">

        <div class="flex items-center">
            <img
                src="{{ asset('img/logo-nonna.png') }}"
                alt="Logo El Dulce de la Nona"
                class="h-24 w-24 md:h-32 md:w-32 rounded-full shadow-md object-cover border-4 border-white transition-transform hover:scale-105">
        </div>

        <div class="hidden md:block">
            <a href="/encargar" class="bg-white hover:bg-crema text-chocolate font-bold py-3 px-8 rounded-full shadow-md transition-colors border-2 border-rosa-fuerte text-lg">
                Hacer pedido
            </a>
        </div>

    </div>
</header>

<main class="max-w-6xl mx-auto px-4 py-12 md:py-20">
    <div class="flex flex-col md:flex-row items-center gap-12">

        <div class="w-full md:w-1/2">
            <div class="relative">
                <div class="absolute inset-0 bg-rosa-pastel rounded-3xl transform rotate-3 scale-105 opacity-50"></div>

                <img
                    src="{{ asset('img/IMG-20260602-WA0002~2.jpg') }}"
                    alt="Alfajores de maicena artesanales"
                    class="relative z-10 w-full h-auto object-cover rounded-3xl shadow-2xl border-4 border-white">
            </div>
        </div>

        <div class="w-full md:w-1/2 flex flex-col justify-center">
            <span class="text-rosa-fuerte font-bold tracking-widest uppercase text-sm mb-2">
                Hechos a pedido en Miami
            </span>

            <h2 class="text-4xl md:text-5xl font-bold mb-6 leading-tight">
                Alfajores artesanales, <br>con sabor a tradición.
            </h2>

            <p class="text-chocolate-claro text-lg mb-6 leading-relaxed">
                Nuestros alfajores de maicena están hechos a mano, uno a uno, siguiendo la receta tradicional de la nonna.
                Una masa suave que se deshace en la boca, dulce de leche generoso y el clásico borde de coco rallado.
                Cada docena se prepara a pedido para que llegue fresca, delicada y lista para disfrutar.
            </p>

            <div class="bg-white p-6 rounded-2xl shadow-sm border border-rosa-pastel inline-block w-fit mb-8">
                <p class="text-3xl font-bold text-rosa-fuerte">
                    $15.00 <span class="text-lg text-chocolate-claro font-normal">/ docena</span>
                </p>
            </div>

            <a href="/encargar" class="bg-chocolate hover:bg-chocolate-claro text-white text-center text-xl font-bold py-4 px-10 rounded-full shadow-lg transition-transform hover:-translate-y-1 w-full md:w-auto">
                Hacer pedido
            </a>
        </div>
    </div>
</main>

<section class="bg-white py-16 border-t border-rosa-pastel">
    <div class="max-w-6xl mx-auto px-4">
        <h3 class="text-3xl font-bold text-center mb-12">
            Pequeños detalles, mucho sabor
        </h3>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="overflow-hidden rounded-2xl shadow-md border border-crema">
                <img
                    src="{{ asset('img/IMG-20260602-WA0001~2.jpg') }}"
                    alt="Detalle de alfajor con dulce de leche"
                    class="w-full h-80 object-cover hover:scale-105 transition-transform duration-500">
            </div>

            <div class="overflow-hidden rounded-2xl shadow-md border border-crema">
                <img
                    src="{{ asset('img/IMG-20260602-WA0003~3.jpg') }}"
                    alt="Alfajores artesanales servidos en tabla"
                    class="w-full h-80 object-cover hover:scale-105 transition-transform duration-500">
            </div>

            <div class="bg-rosa-pastel rounded-2xl p-8 flex flex-col justify-center text-center shadow-md">
                <svg class="w-12 h-12 mx-auto mb-4 text-rosa-fuerte" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                </svg>

                <h4 class="text-2xl font-bold mb-2">
                    Hechos con dedicación
                </h4>

                <p class="text-chocolate text-sm">
                    Cada pedido se prepara de forma artesanal, cuidando la textura, el relleno y ese sabor casero
                    que hace que siempre quieras volver por uno más.
                </p>
            </div>
        </div>
    </div>
</section>

@endsection
