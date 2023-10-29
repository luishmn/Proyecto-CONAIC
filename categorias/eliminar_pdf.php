<!DOCTYPE html>
<html>
<head>
    <title>Eliminar</title>
</head>
<body>
    
<?php
include "../conexionDB/conexion.php";
conecta();

// Verifica la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Verifica si se proporcionó la clavePDF en la URL
if (isset($_GET['clavePDF'])) {
    $clavePDF = $_GET['clavePDF'];

    // Consulta SQL para eliminar el registro de la base de datos
    $sql_delete = "DELETE FROM subcriteriospdf WHERE clavePDF = '$clavePDF'";
    if ($conexion->query($sql_delete) === TRUE) {
        // Eliminación exitosa en la base de datos

        // Ruta al PDF en la carpeta "pdfs"
        $ruta_del_pdf = "pdfs/" . $clavePDF;

        // Verificar que el archivo PDF exista en la carpeta "pdfs"
        if (file_exists($ruta_del_pdf)) {
            // Eliminar el archivo PDF de la carpeta
            unlink($ruta_del_pdf);
            $mensaje_alerta = "El PDF ha sido eliminado de la base de datos y de la carpeta.";
        } else {
            // El archivo PDF no se encontró en la carpeta "pdfs"
            $mensaje_alerta = "El archivo PDF no se encuentra en la carpeta.";
        }
    } else {
        // Error al eliminar el registro en la base de datos
        $mensaje_alerta = "Error al eliminar el PDF de la base de datos.";
    }
} else {
    $mensaje_alerta = "No se proporcionó la clave del PDF en la URL.";
}

$conexion->close();
?>


<script>
        // Cierra la ventana actual después de un breve retraso
        setTimeout(function() {
            window.close();
        }, 0); // Cambia 2000 a la cantidad de milisegundos que deseas esperar antes de cerrar la ventana
    </script>

</body>
</html>
