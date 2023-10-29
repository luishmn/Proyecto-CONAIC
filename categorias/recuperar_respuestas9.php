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
$claves = ["R9-1-1","R9-1-2","R9-1-3","R9-1-4","RS9-1-5A1","R9-1-5","R9-1-6","R9-1-7","R9-1-8","R9-1-8A1","R9-1-9",
"R9-1-9A1","R9-1-10","R9-1-11","R9-1-12","R9-1-12A1","RS9-1-1A1","RS9-1-1A2","RS9-1-13A1","R9-1-13","R9-2-1","R9-2-2",
"R9-2-3","R9-2-3A1","R9-2-4","R9-2-4A1","R9-2-5","R9-2-6","RS9-2-7A1","R9-2-7","RS9-2-7A2","RS9-2-7A3","RS9-2-7A4",
"R9-2-7A1","R9-2-7A2","R9-2-8","R9-2-9","R9-2-9A1","R9-2-9A2","RS9-2-10A1","RS9-2-10A2","R9-2-11","R9-2-12","R9-2-12A1",
"R9-2-12A2","R9-2-12A3","RS9-2-13A1","R9-2-13","RS9-2-14A1","R9-2-14"];

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
