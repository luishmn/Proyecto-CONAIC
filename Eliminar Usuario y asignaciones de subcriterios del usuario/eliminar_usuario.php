<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "conaic";

$correo = $_POST['correo'];

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
    $sql_delete = "DELETE FROM usuario WHERE correo = '$correo'"; 
    if ($conn->query($sql_delete) === TRUE) {
        echo "Usuario con el correo $correo eliminado exitosamente.";
    } else {
        echo "Error al eliminar al usuario: " . $conn->error;
    }
}

$conn->close();
?>