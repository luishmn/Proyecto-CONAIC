<?php
if (isset($_GET['correo_traslado'])) {
    $valor = $_GET['correo_traslado'];
    $correo = $valor;
} else {
    echo "No se proporcionó ningún valor a través de la URL.";
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "conaic";



$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$correo = $conn->real_escape_string($correo);
$sql_check = "SELECT correo FROM usuario WHERE correo = '$correo'"; 
$result_check = $conn->query($sql_check);



if ($result_check->num_rows == 0) {
    echo "El usuario con el correo $correo no existe en la base de datos.";


} else {
    $sql_delete = "DELETE FROM asignacionsubcriterio WHERE correo = '$correo'"; 
    
    if ($conn->query($sql_delete) === TRUE) {
        $sql_delete = "DELETE FROM usuario WHERE correo = '$correo'"; 
        if ($conn->query($sql_delete) === TRUE) {
            header("Location: ../visualizacion_usuario/index_visual_usu.php");
            exit;
            echo "Usuario Eliminado correctamente";
        }
    } else {
        echo "Error al eliminar al usuario: " . $conn->error;
    }
}

$conn->close();
?>