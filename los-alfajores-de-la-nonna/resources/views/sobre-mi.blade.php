<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Mí - El Dulce de la Nona</title>
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
                    <img src="{{ asset('img/foto Sofia.jpeg') }}" alt="Foto de Sebastian" class="w-full h-full object-cover">
                </div>
                <h1 class="text-3xl font-bold text-chocolate text-center">Sofia Bonucci</h1>
                <p class="text-rosa-fuerte font-bold tracking-widest uppercase text-sm mt-2 text-center">Fundadora & Pastelera</p>
            </div>

            <!-- Mitad Derecha: Texto -->
            <div class="md:w-3/5 p-8 md:p-12 flex flex-col justify-center">
                <h2 class="text-2xl font-bold mb-4 text-chocolate">¡Hola! Bienvenidos a nuestra cocina.</h2>
                
                <p class="text-chocolate-claro leading-relaxed mb-4">
                    El Dulce de la Nona nació con la idea de compartir esos sabores que nos transportan directo a las meriendas en familia. Cada alfajor que preparamos está hecho a mano, cuidando cada detalle para asegurar que llegue a tus manos tan fresco y perfecto como si lo hubieras hecho en casa.
                </p>

                <!-- Dato Curioso Personalizado -->
                <div class="bg-crema rounded-xl p-6 border-l-4 border-rosa-fuerte mt-4">
                    <h3 class="font-bold text-chocolate mb-2 flex items-center gap-2">
                        <svg class="w-5 h-5 text-rosa-fuerte" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Dato Random
                    </h3>
                    <p class="text-sm text-chocolate-claro italic">
                        Cuando no estoy con las manos en la masa perfeccionando el punto del dulce de leche, muy probablemente me encuentres compitiendo y reconociendo lugares recónditos del mundo en GeoGuessr (¡ya alcancé el nivel 268!). 
                    </p>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer Actualizado -->
    <footer class="bg-chocolate text-crema py-12 border-t-4 border-rosa-fuerte w-full mt-auto">
        <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-10">
            <div>
                <h4 class="text-2xl font-bold text-rosa-pastel mb-4 tracking-wide">El Dulce de la Nona</h4>
                <p class="text-sm leading-relaxed opacity-90 text-crema mb-6">
                    Llevamos el auténtico sabor de la repostería artesanal directamente a tu mesa. Registrados en Miami, Florida, preparamos cada docena de alfajores a pedido, manteniendo viva la receta y el amor que nos enseñó la nonna.
                </p>
            </div>
            <div>
                <h4 class="text-xl font-bold text-rosa-pastel mb-4">Contacto</h4>
                <ul class="text-sm opacity-90 space-y-3">
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-rosa-fuerte" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        losalfajoresdelanona@hotmail.com
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-rosa-fuerte" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        +1 (305) 555-0123
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-rosa-fuerte" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        Miami, Florida, EE.UU.
                    </li>
                </ul>
            </div>
            <div>
                <h4 class="text-xl font-bold text-rosa-pastel mb-4">Encargos personalizados</h4>
                <p class="text-sm leading-relaxed opacity-90 text-crema">
                    Cada pedido se prepara con cuidado y de forma artesanal. Una vez enviado el formulario, te contactaremos para confirmar disponibilidad, detalles y entrega.
                </p>
            </div>
        </div>
        <div class="mt-12 pt-6 border-t border-chocolate-claro text-center text-sm opacity-60">
            <p>&copy; 2026 El Dulce de la Nona. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>