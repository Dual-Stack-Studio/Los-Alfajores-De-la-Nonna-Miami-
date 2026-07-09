<!DOCTYPE html>
<html lang="es" style="color-scheme: light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'El Dulce de la Nona')</title>
    <meta name="description" content="@yield('meta_description', 'Alfajores artesanales hechos a pedido en Miami. Masa de maicena, dulce de leche generoso y borde de coco. Preparados con receta tradicional argentina. ¡Hacé tu pedido!')">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('img/logo-nonna.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('img/logo-nonna.png') }}">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'El Dulce de la Nona')">
    <meta property="og:description" content="@yield('meta_description', 'Alfajores artesanales hechos a pedido en Miami. Masa de maicena, dulce de leche generoso y borde de coco. Preparados con receta tradicional argentina. ¡Hacé tu pedido!')">
    <meta property="og:image" content="{{ asset('img/IMG-20260602-WA0002~2.jpg') }}">
    <meta property="og:locale" content="es_US">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'El Dulce de la Nona')">
    <meta name="twitter:description" content="@yield('meta_description', 'Alfajores artesanales hechos a pedido en Miami. Masa de maicena, dulce de leche generoso y borde de coco. Preparados con receta tradicional argentina. ¡Hacé tu pedido!')">
    <meta name="twitter:image" content="{{ asset('img/IMG-20260602-WA0002~2.jpg') }}">

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'crema': '#FFF6F0',
                        'rosa-pastel': '#F6CCD6',
                        'rosa-fuerte': '#D87A8D',
                        'chocolate': '#4A2A18',
                        'chocolate-claro': '#7A4B31',
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-crema text-chocolate font-sans antialiased min-h-screen flex flex-col">

    @yield('content')

    <footer class="bg-chocolate text-crema py-12 border-t-4 border-rosa-fuerte w-full">
        <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-10">

            <!-- Columna 1: Acerca del negocio + Botón Sobre Mí -->
            <div>
                <h4 class="text-2xl font-bold text-rosa-pastel mb-4 tracking-wide">
                    El Dulce de la Nona
                </h4>

                <p class="text-sm leading-relaxed opacity-90 text-crema mb-6">
                    Alfajores artesanales hechos a pedido en Miami, con una receta familiar que sabe a hogar. Cada docena se prepara con paciencia, dulce de leche generoso y ese toque especial que convierte un simple bocado en un recuerdo.
                </p>

                <!-- NUEVO BOTÓN ACERCA DE MÍ -->
                @if (!request()->is('sobre-mi'))
                <a href="/sobre-mi" class="inline-block border border-rosa-pastel text-rosa-pastel hover:bg-rosa-pastel hover:text-chocolate font-bold py-2 px-6 rounded-full transition-colors text-sm shadow-sm">
                    Conoce nuestra historia &rarr;
                </a>
                @endif
            </div>

            <!-- Columna 2: Contacto -->
            <div>
                <h4 class="text-xl font-bold text-rosa-pastel mb-4">
                    Contacto
                </h4>

                <ul class="text-sm opacity-90 space-y-3">
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-rosa-fuerte" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        pedidos@losalfajoresdelanona.com
                    </li>

                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-rosa-fuerte" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        +1 (754) 275-0615
                    </li>

                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-rosa-fuerte" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        Miami, Florida, EE.UU.
                    </li>
                </ul>
            </div>

            <!-- Columna 3: Pedidos personalizados -->
            <div>
                <h4 class="text-xl font-bold text-rosa-pastel mb-4">
                    Pedidos personalizados
                </h4>

                <p class="text-sm leading-relaxed opacity-90 text-crema">
                    Preparamos cada pedido especialmente para ti. Envíanos tu pedido y nos pondremos en contacto para confirmar la fecha de entrega y todos los detalles, así tus alfajores llegan frescos, cuidados y listos para disfrutar.
                </p>
            </div>
        </div>

    <!-- Botón flotante de WhatsApp -->
    <a href="https://wa.me/17542750615" target="_blank" rel="noopener noreferrer"
        class="fixed bottom-6 right-6 z-50 bg-green-500 hover:bg-green-600 text-white rounded-full shadow-lg p-4 flex items-center justify-center transition-transform hover:scale-110"
        aria-label="Contactar por WhatsApp">
        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
        </svg>
    </a>

        <!-- Copyright -->
        <div class="mt-12 pt-6 border-t border-chocolate-claro text-center text-sm opacity-60">
            <p>&copy; 2026 El Dulce de la Nona. Todos los derechos reservados.</p>
            <p class="mt-2 opacity-70">Desarrollado por Luciana Bonucci & Sebastián Rodríguez</p>
            <p class="mt-3">
                <a href="{{ route('privacidad') }}" class="underline hover:opacity-100 transition-opacity">Política de Privacidad</a>
            </p>
        </div>
    </footer>

</body>

</html>