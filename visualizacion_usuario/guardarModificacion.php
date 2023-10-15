<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido_paterno = $_POST["apellidoP"];
    $apellido_materno = $_POST["apellidoM"];
    $cargo = $_POST["cargo"];
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];
    $tipo =$_POST["tipoUsuario"];

    if ($tipo=="normal"){
        $tipo=0;
    }
    else{
        $tipo=1;
    }

    // Conexión a la base de datos MySQL
    include "../conexionDB/conexion.php";
    conecta();

    if ($conexion->connect_error) {
        die("Conexión a la base de datos fallida: " . $conexion->connect_error);
    }
    // Inserción de datos en la tabla 
    $sql = "UPDATE usuario
    SET nombre = '$nombre',
        apellidoPat = '$apellido_paterno',
        apellidoMat = '$apellido_materno',
        cargo = '$cargo',
        contrasena = '$contrasena',
        tipo = '$tipo'
    WHERE correo = '$correo'";

    if ($conexion->query($sql) === TRUE) {

        echo "<script>";
        
        echo "window.location.href = 'modificadoExito.html';";
        echo "</script>";
        #header('Location: registraUsuarios.html');
        //exit;
    }  
    else {
        
        echo "<script>";
        echo "<script>alert('El usuario fue modificado correctamente.' . $conn->error);</script>";
        //echo "window.location.href = 'editar_usuarios.php';";
        echo "</script>";
        echo "Error al registrar datos: " . $conexion->error;
    }

    $conexion->close();
} 
?>