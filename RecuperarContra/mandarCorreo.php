<?php
    $correo = $_POST['correo'];
    $codigo = $_POST['codigo'];

    $codigoRec = $POST['codigoRec'];

    include "../conexionDB/conexion.php";
    conecta();

 

    if ($conexion->connect_error) {
            die("Conexión fallida: " . $conexion->connect_error);
    }
    // Obtener los datos del registro seleccionado
    $sql_usuario = "SELECT * FROM Usuario WHERE correo = '$correo'";
    $result_usuario = $conexion->query($sql_usuario);

    if ($result_usuario->num_rows > 0) {
        $row = $result_usuario->fetch_assoc();
        //se reciben las variables desde js
        

        $para = $correo; // Dirección de correo electrónico especificada en el formulario
        $asunto = "Código de recuperación"; // Asunto del correo
        $mensaje = "Tu código de confirmación es:".$codigo; // Cuerpo del correo
        $headers = "From: tu_direccion_de_correo@example.com"; // Cambia esto por tu dirección de correo

        if (mail($para, $asunto, $mensaje, $headers)) {
            $response = array("message" => "El mensaje se ha enviado correctamente");
            echo json_encode($response);
        } else {
            $response = array("message" => "Error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.");
            echo json_encode($response);
        }
        
    } 
    else {
        $response = array("message" => "No existe el correo");
            echo json_encode($response);
    }
    
    $conexion->close();
?>
