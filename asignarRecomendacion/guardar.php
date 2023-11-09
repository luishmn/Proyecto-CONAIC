<?php
include "../conexionDB/conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar que se haya seleccionado un subcriterio
    if (isset($_POST['subcriterioSelect'])) {
        // Conectar a la base de datos
        conecta();

        // Recuperar los valores del formulario
        $claveSubCriterio = $_POST['subcriterioSelect'];
        $recomendacion = $_POST['recomendacion'];

        // Insertar recomendación en la base de datos
        $sql = "INSERT INTO recomendaciones (descripcion, respuesta, fechaInicio, fechaTermino, claveRecomendacion, archivo)
                VALUES ('$recomendacion', '', NOW(), NOW(), '$claveSubCriterio', '')";

        if ($conexion->query($sql) === TRUE) {
            echo "Recomendación asignada correctamente.";
        } else {
            echo "Error al asignar la recomendación: " . $conexion->error;
        }

        // Cerrar la conexión a la base de datos
        $conexion->close();
    } else {
        echo "Por favor, selecciona un subcriterio.";
    }
}
?>
