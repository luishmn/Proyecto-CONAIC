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
$claves = ["RS1-1-1A1","R1-1-1","RS1-1-1A2","RS1-2-1A1","R1-2-1","RS1-2-1A2","RS1-3-1A1","R1-3-1",
    "RS1-3-1A2","RS1-4-1A1","R1-4-1","RS1-4-2A1","R1-4-2","RS1-4-2A2","R1-4-2A1","RS1-4-3A1",
    "RS1-4-3A2","R1-4-3","R1-4-3A1","R1-5-1","R1-5-1A1","R1-5-3","R1-5-3A1","R1-5-4","R1-5-4A1",
    "R1-5-5","R1-5-5A1","R1-5-6","R1-5-6A1","R1-5-7","R1-5-8","RS1-5-9A1","R1-5-9","R1-6-1",
    "R1-6-2","R1-6-2A1","RS1-7-1A1","R1-7-1","RS1-7-2A1","RS-1-7-2A2","R1-7-2","RS1-7-3A1",
    "R1-7-3","R1-7-3A1","RS1-7-3A2","R1-7-3A2","R1-7-3A3","RS1-7-4A1","R1-7-4","RS1-7-4A2","RS1-8-1A1",
    "RS1-8-1A2","R1-8-1","RS1-8-1A3","R1-8-1A1","RS1-9-1A1","RS1-9-1A2","R1-9-1","R1-9-1A1","R1-9-2",
    "RA1-1","RA1-2","RA1-3","RSA2-1","RSA2-2","RA2-1","RA3-1","RSA4-1","RA4-1","RSA5-1","RA5-1"];

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

