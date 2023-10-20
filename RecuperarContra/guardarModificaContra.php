<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST["contra3"];
    $contrasena = $_POST["contrasena1"];



    include "../conexionDB/conexion.php";
    conecta();
    

    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }


  
    // Inserción de datos en la tabla 
    $sql = "UPDATE Usuario
    SET contrasena = '$contrasena'
    WHERE correo = '$correo'";

    if ($conn->query($sql) === TRUE) {

        echo "<script>";
        echo "window.location.href = 'exito.html';";
        echo "</script>";
        #header('Location: registraUsuarios.html');
        //exit;
    }  
    else {
        
        echo "<script>";
        echo "<script>alert('El usuario fue modificado correctamente.' . $conn->error);</script>";
        //echo "window.location.href = 'editar_usuarios.php';";
        echo "</script>";
        echo "Error al registrar datos: " . $conn->error;
    }

    $conn->close();
} 
?>