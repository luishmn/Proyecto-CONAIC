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
$claves = ["RS10-1-1A1","R10-1-1","RS10-1-2A1","R10-1-2","RS10-1-3A1","R10-1-3","RS10-1-4A1","RS10-2-1A1",
"R10-2-1","RS10-2-2A1","R10-2-2","RS10-3-1A1","R10-3-1","RS10-3-1A2","R10-3-1A1","RS10-3-2A1","RS10-3-3A1",
"R10-3-3","R10-3-4"];

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
