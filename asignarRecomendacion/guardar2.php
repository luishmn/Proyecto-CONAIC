<?php
include "../conexionDB/conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar que se haya seleccionado un subcriterio
    if (isset($_POST['subcriterioSelect1'])) {
        // Conectar a la base de datos
        conecta();

        // Recuperar los valores del formulario
        $claveSubCriterio = $_POST['subcriterioSelect1'];
        $recomendacion = $_POST['recomendacion1'];

        // Verificar si ya existe una fila con la clave de recomendación
        $existingRow = $conexion->query("SELECT * FROM recomendaciones WHERE claveRecomendacion = '$claveSubCriterio'");

        if ($existingRow->num_rows > 0) {
            // Si ya existe, actualizar la recomendación
            $updateSql = "UPDATE recomendaciones SET descripcion = '$recomendacion' WHERE claveRecomendacion = '$claveSubCriterio'";
            if ($conexion->query($updateSql) === TRUE) {
                echo "<script>";
                echo "window.location.href = 'exitoActualizarRec.html';";
                echo "</script>";
            } else {
                echo "<script>";
                echo "window.location.href = 'error.html';";
                echo "</script>";
            }
        } else {
            // Si no existe, insertar una nueva recomendación
            $insertSql = "INSERT INTO recomendaciones (claveRecomendacion, descripcion, respuesta, fechaInicio, fechaTermino, archivo)
                          VALUES ('$claveSubCriterio', '$recomendacion', '', '', '', '')";

            if ($conexion->query($insertSql) === TRUE) {
                echo "<script>";
                echo "window.location.href = 'exitoGuardarRec.html';";
                echo "</script>";
            } else {
                echo "<script>";
                echo "window.location.href = 'error.html';";
                echo "</script>";
            }
        }

        // Cerrar la conexión a la base de datos
        $conexion->close();
    } else {
        echo "<script>";
        echo "window.location.href = 'error.html';";
        echo "</script>";
    }
}
?>
