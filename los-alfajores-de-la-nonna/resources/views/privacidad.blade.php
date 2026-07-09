@extends('layouts.app')

@section('title', 'Política de Privacidad - El Dulce de la Nona')
@section('meta_description', 'Política de privacidad de El Dulce de la Nona. Conocé cómo manejamos tus datos personales de acuerdo a la Florida Digital Bill of Rights.')

@section('content')

<main class="max-w-3xl mx-auto px-4 py-16">

    <a href="/" class="inline-flex items-center text-rosa-fuerte font-bold hover:text-chocolate mb-10 transition-colors">
        &larr; Volver al inicio
    </a>

    <h1 class="text-4xl font-bold text-chocolate mb-2">Política de Privacidad</h1>
    <p class="text-sm text-chocolate-claro mb-10">Última actualización: julio de 2026</p>

    <div class="space-y-10 text-chocolate-claro leading-relaxed">

        <section>
            <h2 class="text-xl font-bold text-chocolate mb-3">1. Quién somos</h2>
            <p>
                El Dulce de la Nona es un emprendimiento de repostería artesanal domiciliaria ubicado en Miami, Florida, EE.UU.
                Operamos bajo la Florida Cottage Food Law (F.S. § 500.80). Podés contactarnos en:
                <a href="mailto:pedidos@losalfajoresdelanona.com" class="text-rosa-fuerte underline hover:text-chocolate transition-colors">pedidos@losalfajoresdelanona.com</a>
                o al <strong>+1 (754) 275-0615</strong>.
            </p>
        </section>

        <section>
            <h2 class="text-xl font-bold text-chocolate mb-3">2. Qué datos recopilamos</h2>
            <p>Al completar el formulario de encargo, recopilamos:</p>
            <ul class="list-disc list-inside mt-2 space-y-1">
                <li>Nombre completo</li>
                <li>Correo electrónico</li>
                <li>Número de teléfono</li>
                <li>Dirección de entrega</li>
                <li>Detalle del pedido y fecha solicitada</li>
            </ul>
            <p class="mt-3">No recopilamos datos de pago a través de este sitio. El pago se coordina directamente al confirmar el pedido.</p>
        </section>

        <section>
            <h2 class="text-xl font-bold text-chocolate mb-3">3. Para qué usamos tus datos</h2>
            <p>Utilizamos tu información exclusivamente para:</p>
            <ul class="list-disc list-inside mt-2 space-y-1">
                <li>Confirmar y coordinar tu pedido</li>
                <li>Enviarte un correo de confirmación</li>
                <li>Contactarte ante cualquier cambio o consulta sobre tu encargo</li>
            </ul>
            <p class="mt-3">No usamos tus datos para marketing, no los vendemos, ni los compartimos con terceros.</p>
        </section>

        <section>
            <h2 class="text-xl font-bold text-chocolate mb-3">4. Cuánto tiempo guardamos tus datos</h2>
            <p>
                Conservamos la información de tu pedido por un período máximo de <strong>12 meses</strong> desde la fecha del encargo,
                período necesario para atender consultas posteriores. Transcurrido ese tiempo, los datos son eliminados.
            </p>
        </section>

        <section>
            <h2 class="text-xl font-bold text-chocolate mb-3">5. Tus derechos (Florida Digital Bill of Rights)</h2>
            <p>De acuerdo con la Florida Digital Bill of Rights (SB 262, vigente desde julio de 2023), tenés derecho a:</p>
            <ul class="list-disc list-inside mt-2 space-y-1">
                <li>Saber qué datos personales tenemos sobre vos</li>
                <li>Solicitar la corrección de datos incorrectos</li>
                <li>Solicitar la eliminación de tus datos</li>
                <li>Obtener una copia de tus datos en formato portátil</li>
            </ul>
            <p class="mt-3">
                Para ejercer cualquiera de estos derechos, escribinos a
                <a href="mailto:pedidos@losalfajoresdelanona.com" class="text-rosa-fuerte underline hover:text-chocolate transition-colors">pedidos@losalfajoresdelanona.com</a>.
                Responderemos dentro de los 45 días hábiles.
            </p>
        </section>

        <section>
            <h2 class="text-xl font-bold text-chocolate mb-3">6. Cookies</h2>
            <p>
                Este sitio no utiliza cookies de seguimiento ni herramientas de analítica de terceros.
                Solo se utilizan cookies técnicas esenciales para el funcionamiento del formulario (token CSRF de seguridad).
            </p>
        </section>

        <section>
            <h2 class="text-xl font-bold text-chocolate mb-3">7. Seguridad</h2>
            <p>
                El sitio opera bajo HTTPS. Los datos del formulario se transmiten de forma cifrada y se utilizan
                exclusivamente para el procesamiento del pedido. No almacenamos datos en bases de datos externas.
            </p>
        </section>

        <section>
            <h2 class="text-xl font-bold text-chocolate mb-3">8. Cambios a esta política</h2>
            <p>
                Podemos actualizar esta política ocasionalmente. La fecha de última actualización siempre se indica al inicio de esta página.
                El uso continuado del sitio tras cualquier cambio implica la aceptación de la política vigente.
            </p>
        </section>

        <section class="bg-rosa-pastel/30 border border-rosa-pastel rounded-2xl p-6">
            <h2 class="text-xl font-bold text-chocolate mb-3">9. Aviso Cottage Food (Florida F.S. § 500.80)</h2>
            <p class="font-medium">
                Los productos de El Dulce de la Nona son elaborados en un domicilio particular y no están sujetos a las regulaciones de seguridad alimentaria del Estado de Florida.
            </p>
            <p class="mt-2 text-sm italic">
                "Made in a Florida Cottage Food Operation that is not subject to Florida's food safety regulations."
            </p>
        </section>

    </div>
</main>

@endsection
