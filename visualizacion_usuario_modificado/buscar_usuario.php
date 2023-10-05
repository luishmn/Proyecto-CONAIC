<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'conaic';


$conn = new mysqli($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$busqueda = $_GET['q'];


$sql = "SELECT nombre, apellidoPat, apellidoMat, cargo, contrasena, correo, tipo FROM usuario WHERE nombre LIKE ? OR apellidoPat LIKE ? OR apellidoMat LIKE ?  OR cargo LIKE ? OR contrasena LIKE ? OR correo LIKE ? OR tipo LIKE ?";
$stmt = $conn->prepare($sql);
$likeBusqueda = "%" . $busqueda . "%";
$stmt->bind_param("sssssss", $likeBusqueda, $likeBusqueda, $likeBusqueda, $likeBusqueda, $likeBusqueda, $likeBusqueda, $likeBusqueda);
$stmt->execute();

$result = $stmt->get_result();
$usuarios = array();

while ($row = $result->fetch_assoc()) {
    $usuarios[] = $row;
}

echo json_encode($usuarios);

$stmt->close();
$conn->close();
?>