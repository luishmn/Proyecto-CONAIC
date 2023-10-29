<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $carpeta_destino = "pdfs/"; // Ruta donde se guardarán los PDFs
    $claveSubCriterio = $_POST["claveSubCriterio"];
    $archivo = $_FILES["archivo"];

    if ($archivo["error"] === UPLOAD_ERR_OK) {
        $nombre_temporal = $archivo["tmp_name"];
        $nombre_archivo = $archivo["name"];
        $extension = pathinfo($nombre_archivo, PATHINFO_EXTENSION);

        if (strtolower($extension) === "pdf") {
            // Generar un nombre único para el PDF
            $clavePDF = uniqid("pdf_") . ".pdf";
            $ruta_destino = $carpeta_destino . $clavePDF;
            $claveUnica=$clavePDF;

            if (move_uploaded_file($nombre_temporal, $ruta_destino)) {
                // El archivo se ha cargado y guardado con éxito en la carpeta
                // Ahora, vamos a guardar la información en la base de datos

                include "../conexionDB/conexion.php";
                conecta();

                // Verifica la conexión
                if ($conexion->connect_error) {
                    die("Error de conexión: " . $conexion->connect_error);
                }

                if ($conexion->connect_error) {
                    die("Error de conexión: " . $conexion->connect_error);
                }

                // Consulta SQL para insertar en la tabla "documentos"
                $nombrePDF = mysqli_real_escape_string($conexion, $nombre_archivo);
                $sql = "INSERT INTO subcriteriospdf (claveSubCriterio, clavePDF, nombrePDF) VALUES ('$claveSubCriterio', '$claveUnica', '$nombrePDF')";

                if ($conexion->query($sql) === TRUE) {
                    $mensaje_alerta = "El archivo se a guardado correctamente: " . $conexion->error;
                } else {
                    echo "Error al insertar datos en la base de datos: " . $conexion->error;
                    $mensaje_alerta = "El archivo se a guardado correctamente: " . $conexion->error;
                }

                $conexion->close();
            } else {
                // Error al mover el archivo
                $mensaje_alerta = "Error al mover el archivo a la carpeta de destino." . $conexion->error;
            }
        } else {
            // Error: El archivo no es un PDF
            $mensaje_alerta = "Error: El archivo debe ser un PDF.". $conexion->error;
        }
    } else {
        // Error en la carga del archivo
        $mensaje_alerta ="Error al cargar el archivo." . $conexion->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Alerta</title>
</head>
<body>

<?php
if (isset($mensaje_alerta)) {
    echo "<script>alert('$mensaje_alerta'); window.history.back();;</script>";
}
?>

</body>
</html>