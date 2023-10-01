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


$sql = "SELECT id, nombre, correo FROM usuarios WHERE id LIKE ? OR nombre LIKE ? OR correo LIKE ?";
$stmt = $conn->prepare($sql);
$likeBusqueda = "%" . $busqueda . "%";
$stmt->bind_param("sss", $likeBusqueda, $likeBusqueda, $likeBusqueda);
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