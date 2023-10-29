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
$claves = ["RS7-1-1A1","R7-1-1","RS7-2-2A1","R7-1-2","RS7-1-3A1","R7-1-3","RS7-1-4A1","R7-1-4",
    "RS7-1-5A1","R7-1-5","RS7-2-1A1","R7-2-1","RS7-2-2A1","RS7-2-3A1","R7-2-3","RS7-3-1A1",
    "R7-3-1","R7-3-1A1","R7-3-2","RS7-4-1A1","R7-4-1","RS7-4-1A2","R7-4-1A1","RS7-5-1A1",
    "RS7-5-1A1","R7-5-1","R7-6-1","RS7-6-2A1","R7-6-2","RS7-6-3A1","R7-6-3","RS7-6-4A1",
    "R7-6-4","RS7-6-5A1","R7-6-5"];

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
