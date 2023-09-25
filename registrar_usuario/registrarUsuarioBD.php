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
    $sql = "INSERT INTO usuario (nombre,apellidoPat, apellidoMat, cargo, contrasena,correo,tipo,confirmacion)
            VALUES ('$nombre', '$apellido_paterno', '$apellido_materno', '$cargo','$contrasena','$correo','$tipo',0)";

    if ($conn->query($sql) === TRUE) {

        echo "<script>";
        echo "alert('Usuario Resgistrado. Correo enviado');";
        echo "window.location.href = 'registraUsuarios.html';";
        echo "</script>";
        #header('Location: registraUsuarios.html');
        //exit;
    }  
    else {
        
        echo "<script>";
        echo "<script>alert('El usuario fue registrado. Espera la confirmacion.' . $conn->error);</script>";
        echo "window.location.href = 'registraUsuarios.html';";
        echo "</script>";
        #echo "Error al registrar datos: " . $conn->error;
    }

    $conn->close();
} else {
    echo "<script>";
    echo "<script>alert('El Usuario no fue enviado');</script>";
    echo "window.location.href = 'registraUsuarios.html';";
    echo "</script>";

    
}
?>