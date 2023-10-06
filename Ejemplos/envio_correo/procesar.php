<?php
    $para = "alanaceistopherrr1@outlook.com"; // Dirección de correo electrónico especificada en el formulario
    $asunto = "titulo"; // Asunto del correo
    $mensaje = "descripcion"; // Cuerpo del correo
    $headers = "From: tu_direccion_de_correo@example.com"; // Cambia esto por tu dirección de correo

    if (mail($para, $asunto, $mensaje, $headers)) {
        echo "El mensaje se ha enviado correctamente.";
    } else {
        echo "Error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.";
    }
?>
