<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $para = $_POST["correo"]; // Dirección de correo electrónico especificada en el formulario
    $asunto = $_POST["titulo"];
    $mensaje = $_POST["descripcion"];
    $headers = "From: tu_direccion_de_correo@example.com"; // Cambia esto por tu dirección de correo

    if (mail($para, $asunto, $mensaje, $headers)) {
        echo "El mensaje se ha enviado correctamente.";
    } else {
        echo "Error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.";
    }
}
?>
