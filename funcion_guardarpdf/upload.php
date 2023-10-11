<?php
if ($_FILES["archivo"]["error"] == UPLOAD_ERR_OK) {
    $nombre_temporal = $_FILES["archivo"]["tmp_name"];
    $nombre_archivo = $_FILES["archivo"]["name"];
    $carpeta_destino = "pdfs/";
    $id = $_POST["id"]; 

    if (pathinfo($nombre_archivo, PATHINFO_EXTENSION) === "pdf") {
        $nuevo_nombre = "pdf" . $id . ".pdf"; 
        echo $nuevo_nombre;
        move_uploaded_file($nombre_temporal, $carpeta_destino . $nuevo_nombre);
        echo "Archivo PDF cargado exitosamente como '$nuevo_nombre'.";





                // Datos de conexión a la base de datos
        $host = "localhost"; // Cambia esto por el nombre del servidor de la base de datos
        $usuario = "root"; // Cambia esto por tu nombre de usuario de la base de datos
        $contrasena = ""; // Cambia esto por tu contraseña de la base de datos
        $base_de_datos = "CONAIC"; // Cambia esto por el nombre de la base de datos

        // Conexión a la base de datos
        $conexion = new mysqli($host, $usuario, $contrasena, $base_de_datos);

        // Verificar la conexión
        if ($conexion->connect_error) {
            die("Error de conexión a la base de datos: " . $conexion->connect_error);
        }

        // Obtener el valor de id y el nombre del PDF
        $id = $_POST["id"];
        $nombre_pdf = "pdf" . $id . ".pdf"; // Nombre del PDF modificado

        // Consulta SQL para insertar datos en la tabla "subcriteriospdf"
        $sql = "INSERT INTO subcriteriospdf (claveSubCriterio, clavePDF) VALUES ('$id', '$nombre_pdf')";

        if ($conexion->query($sql) === TRUE) {
            echo "Datos insertados en la tabla subcriteriospdf correctamente.";
        } else {
            echo "Error al insertar datos: " . $conexion->error;
        }

        // Cerrar la conexión a la base de datos
        $conexion->close();







    } else {
        echo "Error: El archivo debe ser un PDF.";
    }
} else {
    echo "Error al cargar el archivo.";
}

?>

