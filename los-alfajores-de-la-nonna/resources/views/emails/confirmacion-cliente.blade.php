<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Confirmación de pedido</title>
</head>

<body style="font-family: Arial, sans-serif; background-color: #f8f3ee; padding: 20px; color: #3a2a1a;">
    <div style="max-width: 600px; margin: auto; background: #ffffff; padding: 25px; border-radius: 12px;">

        <h2 style="color: #8b4a2f;">¡Gracias por tu pedido!</h2>

        <p>
            Hola {{ $datos['nombre'] ?? 'querida/o cliente' }},
        </p>

        <p>
            Hemos recibido tu pedido en <strong>El Dulce de la Nona</strong>.
            En breve nos pondremos en contacto contigo para confirmar los detalles de entrega.
        </p>

        <hr style="border: none; border-top: 1px solid #e6d8cc; margin: 20px 0;">

        <h3 style="color: #8b4a2f;">Resumen de tu pedido</h3>

        <p><strong>Producto:</strong> Alfajores artesanales</p>
        <p><strong>Teléfono:</strong> {{ $datos['telefono'] }}</p>
        <p><strong>Dirección de entrega:</strong> {{ $datos['direccion'] }}</p>
        <p><strong>Fecha deseada de entrega:</strong> {{ $datos['fecha_entrega'] }}</p>

        <div style="margin-top: 16px;">
            <p><strong>Detalle del pedido:</strong></p>
            <div style="background-color: #f8f3ee; padding: 14px; border-radius: 8px; border: 1px solid #e6d8cc; white-space: pre-line;">
                {{ $datos['pedido'] }}
            </div>
        </div>

        <hr style="border: none; border-top: 1px solid #e6d8cc; margin: 20px 0;">

        <p>
            Gracias por confiar en nosotras.
            Tu pedido será preparado con mucho cariño.
        </p>

        <p style="margin-top: 25px;">
            <strong>El Dulce de la Nona</strong>
        </p>
    </div>
</body>

</html>