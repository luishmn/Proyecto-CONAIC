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
$claves = ["RS6-1-1A1","R6-1-2","RS6-1-3A1","RS6-2-1A1","RS6-2-2A1","RS6-3-1A1","R6-3-1","R6-3-1A1",
    "R6-3-1A2","R6-3-1A3","R6-3-1A4","RS6-3-1A2","R6-3-1A5","R6-3-1A6","R6-3-1A7","R6-3-1A8","R6-3-1A9",
    "RS6-3-1A3","R6-3-1A10","R6-3-1A11","R6-3-1A12","R6-3-1A13","R6-3-1A14","RS6-3-1A4","R6-3-1A15",
    "R6-3-1A16","RS6-3-2A1","R6-3-3","R6-3-3A1","RS6-3-3A1","RS6-3-3A2","R6-3-3A2","RS6-3-3A3",
    "R6-3-4","R6-3-4A1","RS6-3-4A1","R6-3-5","R6-3-5A1","RS6-3-5A1","R6-3-6","RS6-3-6A1","RS6-3-6A2",
    "RS6-3-6A3","RS6-3-7A1","R6-3-7","R6-3-8","R6-3-8A1","RS6-3-8A1","RS6-3-9A1","R6-3-10","R6-3-10A1",
    "R6-3-10A2","R6-3-11","R6-3-11A1","R6-4-1","cbox1","R6-4-1A1","cbox1","R6-4-1A2","R6-4-2","R6-4-2A1",
    "R6-4-2A2","R6-4-2A3","R6-4-2A4","R6-4-2A5","R6-4-2A6","R6-4-2A7","cbox1","cbox2","cbox3","cbox4",
    "cbox5","cbox6","cbox7","cbox8","R6-4-2A8","R6-4-3","RS6-5-1A1","R6-5-1","cbox5.5.2-1","cbox5.5.2-2",
    "cbox5.5.2-3","cbox5.5.2-4","cbox5.5.2-5","RS6-5-3A1","R6-5-3","RS6-5-4A1","R6-5-4","RS6-5-5A1",
    "R6-5-5","R6-5-6","R6-5-6A1","RS6-6-1A1","R6-6-1"];

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
