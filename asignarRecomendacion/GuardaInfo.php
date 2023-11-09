<?php
include "../conexionDB/conexion.php";
conecta();

// Verifica la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
$respuesta = $_POST['respuesta'];
$inicio = $_POST['inicio'];
$fin = $_POST['fin'];
$idd= $_POST['idd'];
$sql = "UPDATE recomendaciones 
        SET respuesta = '$respuesta', fechaInicio = '$inicio', fechaTermino = '$fin' 
        WHERE claveRecomendacion = '$idd'";

// Ejecutar la consulta
if ($conexion->query($sql) === TRUE) {
    echo "Respuestas actualizadas con éxito";
} else {
    echo "Error al actualizar datos: " . $conexion->error;
}

// Cerrar la conexión a la base de datos
$conexion->close();

echo "Respuestas guardadas con éxito";
?>

?>
