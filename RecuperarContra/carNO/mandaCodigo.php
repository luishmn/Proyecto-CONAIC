<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigoRecuperacion = $_POST['codigo'];
    $destinatario = "almarazsofia29@gmail.com";
    $asunto = "Código de Recuperación";
    $mensaje = "Recupera tu contraseña con el siguiente código: " . $codigoRecuperacion;
    $cabeceras = "From: pruebaConaic@gmai.com";

    if (mail($destinatario, $asunto, $mensaje, $cabeceras)) {
        echo "Correo enviado correctamente.";
    } else {
        echo "Error al enviar el correo.";
    }
} else {
    echo "Acceso no autorizado.";
}
?>
