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

        // Verificar si ya existe una fila con la clave de recomendación
        $existingRow = $conexion->query("SELECT * FROM recomendaciones WHERE claveRecomendacion = '$claveSubCriterio'");

        if ($existingRow->num_rows > 0) {
            // Si ya existe, actualizar la recomendación
            $updateSql = "UPDATE recomendaciones SET descripcion = '$recomendacion' WHERE claveRecomendacion = '$claveSubCriterio'";
            if ($conexion->query($updateSql) === TRUE) {
                echo "Recomendación actualizada correctamente.";
            } else {
                echo "Error al actualizar la recomendación: " . $conexion->error;
            }
        } else {
            // Si no existe, insertar una nueva recomendación
            $insertSql = "INSERT INTO recomendaciones (claveRecomendacion, descripcion, respuesta, fechaInicio, fechaTermino, archivo)
                          VALUES ('$claveSubCriterio', '$recomendacion', '', '', '', '')";

            if ($conexion->query($insertSql) === TRUE) {
                echo "Recomendación asignada correctamente.";
            } else {
                echo "Error al asignar la recomendación: " . $conexion->error;
            }
        }

        // Cerrar la conexión a la base de datos
        $conexion->close();
    } else {
        echo "Por favor, selecciona un subcriterio.";
    }
}
?>
