<?php
// obtener_descripcion.php

// Verifica si se ha recibido el subcriterio correctamente
if (!isset($_POST['subcriterio'])) {
    echo "Error: No se recibió el subcriterio.";
    exit;
}


include "../conexionDB/conexion.php";
conecta();

// Verifica la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Obtiene el subcriterio seleccionado desde la solicitud POST
$subcriterioSeleccionado = $_POST['subcriterio'];

// Evitar inyección SQL usando declaraciones preparadas
$sql = "SELECT descripcion FROM recomendaciones WHERE claveRecomendacion = ?";
$stmt = $conexion->prepare($sql);

// Verifica si la preparación de la consulta fue exitosa
if ($stmt) {
    // Vincula el parámetro
    $stmt->bind_param("s", $subcriterioSeleccionado);

    // Ejecuta la consulta
    $stmt->execute();

    // Vincula el resultado
    $stmt->bind_result($descripcion);

    // Obtiene el resultado
    $stmt->fetch();

    // Cierra la declaración preparada
    $stmt->close();

    // Verifica si se obtuvo una descripción
    if (!empty($descripcion)) {
        // Devuelve la descripción como respuesta a la solicitud AJAX
        echo $descripcion;
    } else {
        // Si no se encuentra ninguna descripción, puedes devolver un mensaje o un valor predeterminado
        echo "No se encontró ninguna descripción para el subcriterio seleccionado.";
    }
} else {
    // Si hay un error en la preparación de la consulta
    echo "Error en la preparación de la consulta.";
}

// Cierra la conexión a la base de datos
$conexion->close();
?>
