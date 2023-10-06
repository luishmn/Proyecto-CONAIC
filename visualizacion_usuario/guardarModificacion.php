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
    SET nombre = '$nombre',
        apellidoPat = '$apellido_paterno',
        apellidoMat = '$apellido_materno',
        cargo = '$cargo',
        contrasena = '$contrasena',
        tipo = '$tipo'
    WHERE correo = '$correo'";

    if ($conn->query($sql) === TRUE) {

        echo "<script>";
        echo "alert('Usuario modificado correctamente. ');";
        echo "window.location.href = 'index_visual_usu.php';";
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