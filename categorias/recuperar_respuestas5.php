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
$claves = ["RS5-1-1A1","R5-1-1","R5-2-1","R5-2-2","R5-3-1","R5-3-2","RS5-4-1A1",
    "R5-4-1","RS5-4-2A1","R5-4-2","RS5-4-3A1","R5-4-3","RS5-5-1A1","R5-5-1","RS5-5-2A1",
    "R5-5-2","RS5-6-1A1","R5-6-1","RS5-6-1A2","R5-6-1A1","RS5-7-1A1","R5-7-1",
    "R5-7-1A1","R5-7-1A2","R5-7-1A3"];

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
