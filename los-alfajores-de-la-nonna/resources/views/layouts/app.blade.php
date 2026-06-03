<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'El Dulce de la Nona')</title>

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
                    Llevamos el auténtico sabor de la repostería artesanal directamente a tu mesa.
                    Registrados en Miami, Florida, preparamos cada docena de alfajores a pedido,
                    manteniendo viva la receta y el amor que nos enseñó la nonna.
                </p>
                
                <!-- NUEVO BOTÓN ACERCA DE MÍ -->
                <a href="/sobre-mi" class="inline-block border border-rosa-pastel text-rosa-pastel hover:bg-rosa-pastel hover:text-chocolate font-bold py-2 px-6 rounded-full transition-colors text-sm shadow-sm">
                    Acerca de mí &rarr;
                </a>
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
                        losalfajoresdelanona@hotmail.com
                    </li>

                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-rosa-fuerte" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        +1 (305) 555-0123
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

            <!-- Columna 3: Encargos personalizados -->
            <div>
                <h4 class="text-xl font-bold text-rosa-pastel mb-4">
                    Encargos personalizados
                </h4>

                <p class="text-sm leading-relaxed opacity-90 text-crema">
                    Cada pedido se prepara con cuidado y de forma artesanal. Una vez enviado el formulario,
                    te contactaremos para confirmar disponibilidad, detalles y entrega.
                </p>
            </div>
        </div>

        <!-- Copyright -->
        <div class="mt-12 pt-6 border-t border-chocolate-claro text-center text-sm opacity-60">
            <p>&copy; 2026 El Dulce de la Nona. Todos los derechos reservados.</p>
        </div>
    </footer>

</body>

</html>