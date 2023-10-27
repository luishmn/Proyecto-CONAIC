<?php
// Conectar a la base de datos
// Conectar a la base de datos
include "../conexionDB/conexion.php";
    conecta();

    // Verifica la conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

// Obtener el arreglo serializado y deserializarlo
$arreglo_serializado = $_POST["arre"];
$arreglo = json_decode($arreglo_serializado, true);

$tamano = count($arreglo);

for ($i = 0; $i < $tamano; $i += 2) {
    // Mostrar en la consola el par de elementos (claveRespuesta y respuesta)
    $claveRespuesta = $arreglo[$i];
    $respuesta = $arreglo[$i + 1];
    
    // Modificar la consulta SQL para actualizar si ya existe una fila con la misma clave
    $sql = "INSERT INTO respuestas (respuesta, numPregunta, claveRespuesta) 
    VALUES ('$respuesta', 1, '$claveRespuesta')
    ON DUPLICATE KEY UPDATE respuesta = VALUES(respuesta)";
    
    if ($conexion->query($sql) === TRUE) {
        echo "Respuesta guardada con éxito para Clave: $claveRespuesta, Respuesta: $respuesta<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }
}

// Cerrar la conexión a la base de datos
$conexion->close();

echo "Respuestas guardadas con éxito";
?>

