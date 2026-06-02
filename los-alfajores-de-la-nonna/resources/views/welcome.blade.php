<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Dulce de la Nona - Encargos</title>
    <!-- Script de Tailwind -->
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
<body class="bg-crema text-chocolate font-sans antialiased selection:bg-rosa-pastel selection:text-chocolate">

    <!-- Navegación -->
    <!-- Navegación -->
    <header class="bg-rosa-pastel shadow-md sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-4 py-2 flex items-center justify-between">
            
            <!-- Logo Grande (Sin texto) -->
            <div class="flex items-center">
                <img src="{{ asset('img/logo-nonna.png') }}" alt="Logo El Dulce de la Nona" class="h-24 w-24 md:h-32 md:w-32 rounded-full shadow-md object-cover border-4 border-white transition-transform hover:scale-105">
            </div>

            <!-- Botón de Encargo a la derecha -->
            <div class="hidden md:block">
                <a href="/encargar" class="bg-white hover:bg-crema text-chocolate font-bold py-3 px-8 rounded-full shadow-md transition-colors border-2 border-rosa-fuerte text-lg">
                    Hacer Encargo
                </a>
            </div>

        </div>
    </header>

    <!-- Sección Hero (El Producto Estrella) -->
    <main class="max-w-6xl mx-auto px-4 py-12 md:py-20">
        <div class="flex flex-col md:flex-row items-center gap-12">
            
            <!-- Foto Principal Gigante -->
            <div class="w-full md:w-1/2">
                <div class="relative">
                    <!-- Decoración de fondo -->
                    <div class="absolute inset-0 bg-rosa-pastel rounded-3xl transform rotate-3 scale-105 opacity-50"></div>
                    <!-- Imagen 1 actualizada -->
                    <img src="{{ asset('img/IMG-20260602-WA0002~2.jpg') }}" alt="Alfajores de maicena premium" class="relative z-10 w-full h-auto object-cover rounded-3xl shadow-2xl border-4 border-white">
                </div>
            </div>

            <!-- Textos de Venta -->
            <div class="w-full md:w-1/2 flex flex-col justify-center">
                <span class="text-rosa-fuerte font-bold tracking-widest uppercase text-sm mb-2">Edición Artesanal</span>
                <h2 class="text-4xl md:text-5xl font-bold mb-6 leading-tight">La receta tradicional, <br>llevada a la perfección.</h2>
                
                <p class="text-chocolate-claro text-lg mb-6 leading-relaxed">
                    Nuestros alfajores de maicena se deshacen en la boca. Rellenos con el más puro dulce de leche, borde de coco rallado fresco y un delicado toque de láminas de oro comestible. Cada docena es preparada exclusivamente a pedido para garantizar su frescura absoluta.
                </p>

                <div class="bg-white p-6 rounded-2xl shadow-sm border border-rosa-pastel inline-block w-fit mb-8">
                    <p class="text-3xl font-bold text-rosa-fuerte">$15.00 <span class="text-lg text-chocolate-claro font-normal">/ docena</span></p>
                </div>

                <a href="/encargar" class="bg-chocolate hover:bg-chocolate-claro text-white text-center text-xl font-bold py-4 px-10 rounded-full shadow-lg transition-transform hover:-translate-y-1 w-full md:w-auto">
                    Solicitar mi docena
                </a>
            </div>
        </div>
    </main>

    <!-- Galería de Detalles -->
    <section class="bg-white py-16 border-t border-rosa-pastel">
        <div class="max-w-6xl mx-auto px-4">
            <h3 class="text-3xl font-bold text-center mb-12">El arte está en los detalles</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Foto 2 actualizada -->
                <div class="overflow-hidden rounded-2xl shadow-md border border-crema">
                    <img src="{{ asset('img/IMG-20260602-WA0001~2.jpg') }}" alt="Detalle del dulce de leche" class="w-full h-80 object-cover hover:scale-105 transition-transform duration-500">
                </div>
                <!-- Foto 3 actualizada -->
                <div class="overflow-hidden rounded-2xl shadow-md border border-crema">
                    <img src="{{ asset('img/IMG-20260602-WA0003~3.jpg') }}" alt="Alfajores en tabla de madera" class="w-full h-80 object-cover hover:scale-105 transition-transform duration-500">
                </div>
                <!-- Un pequeño cuadro de texto para equilibrar -->
                <div class="bg-rosa-pastel rounded-2xl p-8 flex flex-col justify-center text-center shadow-md">
                    <svg class="w-12 h-12 mx-auto mb-4 text-rosa-fuerte" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                    <h4 class="text-2xl font-bold mb-2">Ingredientes Premium</h4>
                    <p class="text-chocolate text-sm">Usamos materias primas de la más alta calidad, sin conservantes ni saborizantes artificiales. 100% sabor casero.</p>
                </div>
            </div>
        </div>
    </section>
<!-- Footer -->
    <footer class="bg-chocolate text-crema py-12 border-t-4 border-rosa-fuerte">
        <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-10">

            <!-- Acerca del Negocio -->
            <div>
                <h4 class="text-2xl font-bold text-rosa-pastel mb-4 tracking-wide">El Dulce de la Nona</h4>
                <p class="text-sm leading-relaxed opacity-90 text-crema">
                    Llevamos el auténtico sabor de la repostería artesanal directamente a tu mesa. Registrados en Miami, Florida, preparamos cada docena de alfajores a pedido, manteniendo viva la receta y el amor que nos enseñó la nona.
                </p>
            </div>

            <!-- Contacto -->
            <div>
                <h4 class="text-xl font-bold text-rosa-pastel mb-4">Contacto</h4>
                <ul class="text-sm opacity-90 space-y-3">
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-rosa-fuerte" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        hola@eldulcedelanona.com
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

            <!-- Redes Sociales -->
            <div>
                <h4 class="text-xl font-bold text-rosa-pastel mb-4">Síguenos en Redes</h4>
                <div class="flex gap-4">
                    <!-- Botón Instagram -->
                    <a href="#" class="bg-crema text-chocolate p-3 rounded-full hover:bg-rosa-fuerte hover:text-white transition-all transform hover:-translate-y-1 shadow-lg">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </a>
                    <!-- Botón Facebook -->
                    <a href="#" class="bg-crema text-chocolate p-3 rounded-full hover:bg-rosa-fuerte hover:text-white transition-all transform hover:-translate-y-1 shadow-lg">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg>
                    </a>
                </div>
            </div>

        </div>
        
        <!-- Línea inferior Copyright -->
        <div class="mt-12 pt-6 border-t border-chocolate-claro text-center text-sm opacity-60">
            <p>&copy; 2026 El Dulce de la Nona. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>