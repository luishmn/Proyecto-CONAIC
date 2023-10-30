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

    // Consulta SQL para obtener el último número de archivo asociado al criterio
    $sql = "SELECT MAX(SUBSTRING_INDEX(clavePDF, '-', -1)) AS ultimo_numero FROM SubCriteriosPDF WHERE claveSubCriterio = '$id'";
    $resultado = $conexion->query($sql);
    $row = $resultado->fetch_assoc();
    $ultimo_numero = $row['ultimo_numero'] ?? 0; // Si no hay registros, se asume 0.

    foreach ($archivos["error"] as $key => $error) {
        if ($error == UPLOAD_ERR_OK) {
            $nombre_temporal = $archivos["tmp_name"][$key];
            $nombre_archivo = $archivos["name"][$key];
            $extension = pathinfo($nombre_archivo, PATHINFO_EXTENSION);

            if ($extension === "pdf") {
                $nuevo_numero = $ultimo_numero + 1; // Incrementa el número
                $nuevo_nombre = "pdf" . $id . "-" . $nuevo_numero . ".pdf"; // Construye el nuevo nombre
                $ruta_destino = $carpeta_destino . $nuevo_nombre;

                if (move_uploaded_file($nombre_temporal, $ruta_destino)) {
                    // Realiza la inserción en la base de datos
                    $claveSubCriterio = $id;

                    // Consulta SQL para insertar datos en la tabla "subcriteriospdf"
                    $sql = "INSERT INTO SubCriteriosPDF (claveSubCriterio, clavePDF, nombrePDF) VALUES ('$claveSubCriterio', '$nuevo_nombre', '$nombre_archivo')";

                    if ($conexion->query($sql) === TRUE) {
                        echo "Datos insertados en la tabla subcriteriospdf correctamente para el archivo '$nuevo_nombre'.<br>";
                        // Actualiza el valor de $ultimo_numero para el próximo archivo
                        $ultimo_numero = $nuevo_numero;
                    } else {
                        echo "Error al insertar datos para el archivo '$nuevo_nombre': " . $conexion->error . "<br>";
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
