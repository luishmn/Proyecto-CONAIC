<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $carpeta_destino = "../categorias/pdfs/";
    $id = $_POST["id"];
    $archivos = $_FILES["archivo"];

   
    include "../conexionDB/conexion.php";
    conecta();
    if(!$conexion){
        echo "<script>alert('Ocurrió un error al conectar con la Base de Datos. Vuelva a iniciar sesión.');</script>";
    }

    foreach ($archivos["error"] as $key => $error) {
        if ($error == UPLOAD_ERR_OK) {
            $nombre_temporal = $archivos["tmp_name"][$key];
            $nombre_archivo = $archivos["name"][$key];
            $extension = pathinfo($nombre_archivo, PATHINFO_EXTENSION);
            $clavePDF = uniqid("pdf_") . ".pdf";

            if ($extension === "pdf") {
                $nuevo_nombre = $clavePDF; // Utiliza un identificador único para cada archivo
                $ruta_destino = $carpeta_destino . $nuevo_nombre;

                if (move_uploaded_file($nombre_temporal, $ruta_destino)) {
                    // Realiza la inserción en la base de datos
                    $claveSubCriterio = $id; // Utiliza el valor de $id como claveSubCriterio
                    //$clavePDF = $nuevo_nombre; // Utiliza el nombre del archivo como clavePDF
                   

                    // Consulta SQL para insertar datos en la tabla "subcriteriospdf"
                    $sql = "INSERT INTO SubCriteriosPDF (claveSubCriterio, clavePDF, nombrePDF) VALUES ('$claveSubCriterio', '$clavePDF', '$nombre_archivo')";

                    if ($conexion->query($sql) === TRUE) {
                        echo "Datos insertados en la tabla subcriteriospdf correctamente para el archivo '$clavePDF'.<br>";
                    } else {
                        echo "Error al insertar datos para el archivo '$clavePDF': " . $conexion->error . "<br>";
                    }
                } else {
                    echo "Error al mover el archivo a la carpeta de destino.<br>";
                }
            } else {
                echo "Error: El archivo '$nombre_archivo' debe ser un PDF.<br>";
            }
        } elseif ($error == UPLOAD_ERR_NO_FILE) {
            // No se seleccionó ningún archivo para cargar
        } else {
            echo "Error al cargar el archivo.<br>";
        }
    }

    // Cerrar la conexión a la base de datos
    $conexion->close();
}
?>
