<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombreEdit"];
    $apellido_paterno = $_POST["apellidoPEdit"];
    $apellido_materno = $_POST["apellidoMEdit"];
    $cargo = $_POST["cargoEdit"];
    $correo = $_POST["correoEdit"];
    $contrasena = $_POST["contrasenaEdit"];
    $tipo =$_POST["tipoUsuarioEdit"];

    if ($tipo=="normal"){
        $tipo=0;
    }
    else{
        $tipo=1;
    }

    include "../conexionDB/conexion.php";
    conecta();

    if ($conexion->connect_error) {
            die("Conexión fallida: " . $conexion->connect_error);
    }
    // Inserción de datos en la tabla 
    $sql = "UPDATE Usuario
    SET nombre = '$nombre',
        apellidoPat = '$apellido_paterno',
        apellidoMat = '$apellido_materno',
        cargo = '$cargo',
        contrasena = '$contrasena',
        tipo = '$tipo'
    WHERE correo = '$correo'";

    if ($conexion->query($sql) === TRUE) {

        echo "<script>";
        echo "alert('Usuario modificado correctamente. ');";
        echo "window.location.href = 'index_visual_usu.php';";
        echo "</script>";
        #header('Location: registraUsuarios.html');
        //exit;
    }  
    else {
        
        echo "<script>";
        echo "<script>alert('El usuario fue modificado correctamente.' . $conexion->error);</script>";
        //echo "window.location.href = 'editar_usuarios.php';";
        echo "</script>";
        echo "Error al registrar datos: " . $conexion->error;
    }

    $conn->close();
} 
?>