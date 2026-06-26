@extends('layouts.app')

@section('title', 'Hacer un Encargo - El Dulce de la Nona')
@section('meta_description', 'Hacé tu pedido de alfajores artesanales en Miami. Completá el formulario y nos ponemos en contacto para confirmar fecha de entrega y detalles.')

@section('content')

<main class="flex-grow flex flex-col justify-center items-center py-12 px-4 w-full">
    <div class="max-w-xl w-full">

        <a href="/" class="inline-flex items-center text-rosa-fuerte font-bold hover:text-chocolate mb-8 transition-colors">
            &larr; Volver a la tienda
        </a>

        <div class="bg-white rounded-3xl shadow-xl overflow-hidden border-2 border-rosa-pastel">

            <div class="bg-rosa-pastel p-6 text-center">
                <h2 class="text-3xl font-bold text-chocolate">Haz tu encargo</h2>
                <p class="text-sm mt-2 opacity-80">
                    Completa tus datos y cuéntanos qué necesitas. Te contactaremos para confirmar el pedido.
                </p>
            </div>

            @if (session('exito'))
                <div class="mx-8 mt-6 bg-green-100 border border-green-300 text-green-800 px-4 py-3 rounded-lg text-sm font-semibold">
                    {{ session('exito') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="mx-8 mt-6 bg-red-100 border border-red-300 text-red-800 px-4 py-3 rounded-lg text-sm">
                    <p class="font-bold mb-1">Revisa los siguientes campos:</p>
                    <ul class="list-disc list-inside space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('encargos.store') }}" method="POST" class="p-8 space-y-6" novalidate>
                @csrf

                <div>
                    <label for="nombre" class="block text-sm font-bold mb-2">
                        Tu nombre completo
                    </label>

                    <input
                        id="nombre"
                        type="text"
                        name="nombre"
                        value="{{ old('nombre') }}"
                        required
                        placeholder="Ej: María González"
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-rosa-fuerte focus:ring-2 focus:ring-rosa-pastel transition-all">

                    @error('nombre')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="email" class="block text-sm font-bold mb-2">
                        Correo electrónico
                    </label>

                    <input
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        placeholder="Ej: tunombre@email.com"
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-rosa-fuerte focus:ring-2 focus:ring-rosa-pastel transition-all">

                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="telefono" class="block text-sm font-bold mb-2">
                        Teléfono de contacto
                    </label>

                    <input
                        id="telefono"
                        type="text"
                        name="telefono"
                        value="{{ old('telefono') }}"
                        required
                        placeholder="Ej: +1 305 000 0000"
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-rosa-fuerte focus:ring-2 focus:ring-rosa-pastel transition-all">

                    @error('telefono')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="direccion" class="block text-sm font-bold mb-2">
                        Dirección de entrega
                    </label>

                    <input
                        id="direccion"
                        type="text"
                        name="direccion"
                        value="{{ old('direccion') }}"
                        required
                        placeholder="Calle, número, apartamento, ciudad o zona..."
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-rosa-fuerte focus:ring-2 focus:ring-rosa-pastel transition-all">

                    @error('direccion')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="fecha_entrega" class="block text-sm font-bold mb-2">
                        Fecha deseada de entrega
                    </label>

                    <input
                        id="fecha_entrega"
                        type="date"
                        name="fecha_entrega"
                        value="{{ old('fecha_entrega') }}"
                        min="{{ $fechaMinimaEntrega }}"
                        required
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-rosa-fuerte focus:ring-2 focus:ring-rosa-pastel transition-all">

                    <p class="text-xs text-chocolate-claro mt-2">
                        Los pedidos deben realizarse con un mínimo de 48 horas de anticipación.
                    </p>

                    @error('fecha_entrega')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="pedido" class="block text-sm font-bold mb-2">
                        Detalle del pedido
                    </label>

                    <textarea
                        id="pedido"
                        name="pedido"
                        rows="6"
                        required
                        placeholder="Ej: Quiero media docena de alfajores de maicena."
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-rosa-fuerte focus:ring-2 focus:ring-rosa-pastel transition-all resize-none">{{ old('pedido') }}</textarea>

                    <p class="text-xs text-chocolate-claro mt-2">
                        Puedes indicar cantidad, tipo de presentación, horario preferido o cualquier detalle importante.
                    </p>

                    @error('pedido')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button
                    type="submit"
                    class="w-full bg-chocolate hover:bg-[#3a2012] text-white text-lg font-bold py-4 rounded-full shadow-lg transition-transform hover:-translate-y-1">
                    Enviar encargo
                </button>
            </form>
        </div>
    </div>
</main>

@endsection