<?php

include "../conexionDB/conexion.php";
            conecta();
        
if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
}

$busqueda = $_GET['q'];


$sql = "SELECT id, nombre, correo FROM Usuarios WHERE id LIKE ? OR nombre LIKE ? OR correo LIKE ?";
$stmt = $conexion->prepare($sql);
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
$conexion->close();
?>