<?php
// Verificar si se proporcionó la clave en la URL
if (isset($_GET['clave'])) {
    // Obtener la clave desde la URL
    $clave = $_GET['clave'];

    // Realizar la conexión a la base de datos (reemplaza con tus propios datos)
    include "../conexionDB/conexion.php";
    conecta();

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    $sqlSelect = "SELECT archivo FROM Recomendaciones WHERE claveRecomendacion = '$clave'";

    $resultSelect = $conexion->query($sqlSelect);

    if ($resultSelect->num_rows > 0) {
        // Obtiene la claveRecomendacion
        $row = $resultSelect->fetch_assoc();
        $claveRecomendacion = $row['archivo'];
    

        if ($claveRecomendacion != ""){
            // Directorio donde se encuentra el archivo
            $directorio = 'archivos/';

            // Ruta completa del archivo
            $rutaArchivo = $directorio . $claveRecomendacion;

            if (file_exists($rutaArchivo)) {
                // Intentar eliminar el archivo
                if (unlink($rutaArchivo)) {
                    //echo "El archivo '$claveRecomendacion' ha sido eliminado correctamente.";
                    
                } else {
                    //echo "No se pudo eliminar el archivo '$claveRecomendacion'.";
                }
            } else {
                //echo "El archivo '$claveRecomendacion' no existe en el directorio.";
                
            }

            

        }
        else {
            //echo "no hay archivo asociado";
        }
    } else {
        //echo "No se encontraron filas con el archivo.";
    }

    // Consulta SQL para eliminar la fila
    $sql = "DELETE FROM Recomendaciones WHERE claveRecomendacion = '$clave'";

    // Ejecutar la consulta
    if ($conexion->query($sql) === TRUE) {
        //echo "Fila eliminada correctamente.";
        echo '<script>';
        echo 'window.close();'; // Esto cerrará la ventana actual
        echo '</script>';
    } else {
        //echo "Error al eliminar la fila: " . $conexion->error;
        echo '<script>';
        echo 'window.close();'; // Esto cerrará la ventana actual
        echo '</script>';
    }

    // Cerrar la conexión
    $conexion->close();
} else {
    echo "Clave no proporcionada en la URL.";
    
}
?>
