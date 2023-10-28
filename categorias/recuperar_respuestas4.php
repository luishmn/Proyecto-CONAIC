<?php
// Conectar a la base de datos
include "../conexionDB/conexion.php";
    conecta();

    // Verifica la conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

// Claves a recuperar
$claves = ["RS4-1-1"];

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
