<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "conaic";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexión a la base de datos fallida: " . $conn->connect_error);
    }
    // Inserción de datos en la tabla 
    $sql = "UPDATE usuario
    SET contrasena = '$contrasena'
    WHERE correo = '$correo'";

    if ($conn->query($sql) === TRUE) {

        echo json_encode("<script>");
        echo json_encode("alert('Usuario modificado correctamente. ');");
        echo json_encode("window.location.href = 'index_visual_usu.php';");
        echo json_encode("</script>");
        #header('Location: registraUsuarios.html');
        //exit;
    }  
    else {
        
        echo json_encode("<script>");
        echo json_encode("<script>alert('El usuario fue modificado correctamente.' . $conn->error);</script>");
        //echo "window.location.href = 'editar_usuarios.php';";
        echo json_encode("</script>");
        echo json_encode("Error al registrar datos: " . $conn->error);
    }

    $conn->close();

?>