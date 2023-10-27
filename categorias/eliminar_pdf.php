<?php
include "../conexionDB/conexion.php";
conecta();

// Verifica la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Obtener la clavePDF desde la URL
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
        $mensaje_alerta = "El PDF ha sido eliminado de la base de datos y de la carpeta ". $conexion->error;
    } else {
        // El archivo PDF no se encontró en la carpeta "pdfs"
        $mensaje_alerta = "El archivo PDF no se encuentra en la carpeta ". $conexion->error;
    }
} else {
    //Error al eliminar el registro en la base de datos
    $mensaje_alerta = "Error al eliminar el PDF de la base de datos ". $conexion->error;
}

$conexion->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Alerta</title>
</head>
<body>

<?php
if (isset($mensaje_alerta)) {
    echo "<script>alert('$mensaje_alerta'); window.location = 'categoria3.php';</script>";
}
?>

</body>
</html>