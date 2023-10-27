<?php
// Conectar a la base de datos
include "../conexionDB/conexion.php";
    conecta();

    // Verifica la conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

// Claves a recuperar
$claves = ["R2-1-1", "RS2-1-1A1", "R2-1-1A1","RS2-1-1A2","R2-1-1A2","RS2-1-1A3","R2-1-1A3",
"R2-1-1A4","RS2-1-1A5","R2-1-1A5","RS2-1-1A6","R2-1-1A6","R2-1-1A7",
"RS2-2-1","R2-2-1","RS2-2-2","R2-2-2","RS2-2-3","R2-2-3","RS2-2-4","R2-2-4",
"RS2-2-5","R2-2-5","RS2-2-6","R2-2-6","RS2-2-7","R2-2-7","RS2-2-8","R2-2-8",
"RS2-3-1","RS2-3-2","R2-3-2A1","RS2-3-3","R2-3-3","RS2-3-4","R2-4-1","R2-4-1A1",
"R2-4-1A2","R2-4-1A3","R2-5-1","RS2-5-1A1","R2-5-1A1","R2-5-1A2","R2-5-1A3",
"R2-5-1A4","R2-5-1A5","R2-5-1A6","R2-5-1A7","R2-5-1A8","R2-5-1A9","RS2-5-1A10",
"R2-5-1A10","RS2-5-1A11","R2-5-1A11","RS2-5-1A12","R2-5-1A12","R2-5-1A13",
"R2-5-2","RS2-5-2A1","R2-5-2A1","R2-5-3","RS2-5-3A1","R2-5-3A1",
"RS2-5-4","R2-5-4","RS2-6-1","R2-6-1","RS2-7A1","R2-7A1","RS2-7A2","R2-7A2",
"R2-7-1","R2-7-2"];

// Inicializar un array para las respuestas
$respuestas = [];

// Consulta SQL para obtener las respuestas correspondientes a las claves
foreach ($claves as $clave) {
    $sql = "SELECT respuesta FROM respuestas WHERE claveRespuesta = '$clave'";
    
    // Ejecutar la consulta
    $result = $conexion->query($sql);

    if ($result === false) {
        die("Error en la consulta: " . $conexion->error);
    }

    // Obtener la respuesta
    $respuesta = "";

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Convertir la respuesta a minúsculas y eliminar espacios en blanco
        $respuesta = strtolower(trim($row['respuesta']));
    }

    
    // Agregar la respuesta al array de respuestas
    $respuestas[] = $clave;
    $respuestas[] = $respuesta;
}

// Devolver las respuestas como JSON
echo json_encode($respuestas);

// Cerrar la conexión a la base de datos
$conexion->close();
?>
