<?php
// Conectar a la base de datos
include "../conexionDB/conexion.php";
conecta();

// Verifica la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Configura la codificación de caracteres en la conexión
$conexion->set_charset("utf8mb4");

// Claves a recuperar
$claves = ["R3-1-1","RS3-1-1A1","R3-1-1A1","R3-1-1A2","R3-1-1A3","R3-1-1A4","RS3-1-2A1",
    "R3-1-2","RS3-2-1A1","RS3-2-1A2","RS3-2-1A3","R3-2-2","R3-2-3","RS3-3-1A1","R3-4-1",
    "RS3-5-1A1","RS3-5-1A2","RS3-5-1A3","R3-5-1","RS3-5-1A4","R3-5-1A1","R3-5-1A2",
    "R3-5-2","R3-5-2A1","R3-5-2A2","R3-5-3","R3-6-1","R3-7-1","R3-7-2","R3-7-2A1",
    "RS3-7-3A1","R3-7-3","RS3-7-3A2","R3-7-3A1","RS3-7-3A3","RS3-7-4A1","R3-7-4",
    "RS3-8-1A1","R3-8-2","RS3-8-2A1","RS3-8-2A2","RS3-8-2A3","RS3-8-2A4","RS3-8-2A5",
    "RS3-8-2A6","RS3-8-2A7","R3-8-2A1","RS3-8-3A1","R3-8-3","R3-9-1","R3-9-2"];

// Inicializar un array para las respuestas
$respuestas = [];

// Consulta SQL para obtener las respuestas correspondientes a las claves
foreach ($claves as $clave) {
    $clave = $conexion->real_escape_string($clave); // Escapar la clave

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
        // La respuesta ya está en la codificación correcta
        $respuesta = $row['respuesta'];
    }

    // Agregar la respuesta al array de respuestas
    $respuestas[] = $clave; // Agregar la clave escapada
    $respuestas[] = $respuesta;
}

// Devolver las respuestas como JSON
echo json_encode($respuestas, JSON_UNESCAPED_UNICODE);

// Cerrar la conexión a la base de datos
$conexion->close();
?>
