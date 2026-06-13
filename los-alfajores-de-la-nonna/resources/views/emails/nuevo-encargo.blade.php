<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Nuevo pedido recibido</title>
</head>

<body style="font-family: Arial, sans-serif; background-color: #FFF6F0; color: #4A2A18; padding: 20px;">

    <div style="max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 16px; padding: 24px; border: 2px solid #F6CCD6;">

        <h1 style="color: #4A2A18; text-align: center;">
            Nuevo pedido recibido
        </h1>

        <p style="font-size: 16px;">
            Has recibido un nuevo pedido desde la web de <strong>El Dulce de la Nona</strong>.
        </p>

        <hr style="border: none; border-top: 1px solid #F6CCD6; margin: 24px 0;">

        <p><strong>Nombre:</strong> {{ $datos['nombre'] }}</p>
        <p><strong>Email:</strong> {{ $datos['email'] }}</p>
        <p><strong>Teléfono:</strong> {{ $datos['telefono'] }}</p>
        <p><strong>Dirección de entrega:</strong> {{ $datos['direccion'] }}</p>
        <p><strong>Fecha deseada de entrega:</strong> {{ $datos['fecha_entrega'] }}</p>

        <div style="margin-top: 24px;">
            <p><strong>Detalle del pedido:</strong></p>
            <div style="background-color: #FFF6F0; padding: 16px; border-radius: 12px; border: 1px solid #F6CCD6; white-space: pre-line;">
                {{ $datos['pedido'] }}
            </div>
        </div>

        <hr style="border: none; border-top: 1px solid #F6CCD6; margin: 24px 0;">

        <p style="font-size: 14px; color: #7A4B31;">
            Recuerda contactar con el cliente para confirmar disponibilidad, horario y forma de entrega.
        </p>
    </div>

</body>

</html>