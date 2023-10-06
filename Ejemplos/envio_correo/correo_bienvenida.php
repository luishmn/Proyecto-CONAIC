<?php
// Captura los valores del formulario
$para = "alanaceistopherrr1@outlook.com"; // Dirección de correo electrónico a la que enviar el mensaje
$asunto = "CONAIC: BIENVENIDO"; // Asunto del correo
$contenido = file_get_contents("contenido.html");
$headers = "From: tu_direccion_de_correo@example.com"; // Cambia esto por tu dirección de correo
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Intenta enviar el correo
if (mail($para, $asunto,  $contenido, $headers)) {
    echo "El mensaje se ha enviado correctamente.";
} else {
    echo "Error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.";
}
?>
