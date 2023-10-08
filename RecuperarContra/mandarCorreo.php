<?php
    $correo = $_POST['correo'];
    $codigo = $_POST['codigo'];

    $codigoRec = $POST['codigoRec'];

    //se abre la bd
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "conaic";

    // Conectar nuevamente a la base de datos
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
    }
    // Obtener los datos del registro seleccionado
    $sql_usuario = "SELECT * FROM usuario WHERE correo = '$correo'";
    $result_usuario = $conn->query($sql_usuario);

    if ($result_usuario->num_rows > 0) {
        $row = $result_usuario->fetch_assoc();
        //se reciben las variables desde js
        

        $para = $correo; // Dirección de correo electrónico especificada en el formulario
        $asunto = "Código de Recuperación"; // Asunto del correo
        $mensaje = "Tu Codigo de Confirmación es:".$codigo; // Cuerpo del correo
        $headers = "From: tu_direccion_de_correo@example.com"; // Cambia esto por tu dirección de correo

        if (mail($para, $asunto, $mensaje, $headers)) {
            echo  json_encode("El mensaje se ha enviado correctamente.");
        } else {
            echo json_encode("Error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.");
        }
    } 
    else {
        echo json_encode("No se encontraron registros para el correo seleccionado.");
    }
    
    $conn->close();
?>
