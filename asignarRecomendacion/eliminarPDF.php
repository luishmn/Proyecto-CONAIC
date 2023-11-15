<?php
// Verificar si se ha proporcionado el nombre del archivo en la URL
if (isset($_GET['nombreArchivo'])) {
    // Obtener el nombre del archivo desde la URL
    $nombreArchivo = $_GET['nombreArchivo'];

    // Directorio donde se encuentra el archivo
    $directorio = 'archivos/';

    // Ruta completa del archivo
    $rutaArchivo = $directorio . $nombreArchivo;

    include "../conexionDB/conexion.php";
    conecta();

    $sqlSelect = "SELECT claveRecomendacion FROM Recomendaciones WHERE archivo = '$nombreArchivo'";
    $resultSelect = $conexion->query($sqlSelect);

    if ($resultSelect->num_rows > 0) {
        // Obtiene la claveRecomendacion
        $row = $resultSelect->fetch_assoc();
        $claveRecomendacion = $row['claveRecomendacion'];
    
        // Consulta UPDATE para actualizar la fila específica
        $sqlUpdate = "UPDATE Recomendaciones SET archivo = '' WHERE claveRecomendacion = '$claveRecomendacion'";
    
        if ($conexion->query($sqlUpdate) === TRUE) {
            //echo "Fila actualizada correctamente.";
        } else {
           //echo "Error al actualizar la fila: " . $conexion->error;
        }
    } else {
        //echo "No se encontraron filas con el archivo.";
    }

    $conexion->close();



    // Verificar si el archivo existe antes de intentar eliminarlo
    if (file_exists($rutaArchivo)) {
        // Intentar eliminar el archivo
        if (unlink($rutaArchivo)) {
            //echo "El archivo '$nombreArchivo' ha sido eliminado correctamente.";
            echo '<script>';
            echo 'window.close();'; // Esto cerrará la ventana actual
            echo '</script>';
        } else {
            echo "No se pudo eliminar el archivo '$nombreArchivo'.";
        }
    } else {
        //echo "El archivo '$nombreArchivo' no existe en el directorio.";
        echo '<script>';
        echo 'window.close();'; // Esto cerrará la ventana actual
        echo '</script>';
    }
} else {
    echo "Nombre de archivo no proporcionado en la URL.";
    
}
?>
