<?php
include "../conexionDB/conexion.php";
conecta();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica la conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Obtener otros valores del formulario
    $respuesta = $_POST['respuesta'];
    $inicio = $_POST['inicio'];
    $fin = $_POST['fin'];
    $idd = $_POST['idd'];

    // Procesar el archivo cargado
    $nombreArchivo = $_FILES['archivo']['name'];
    $rutaArchivo = 'archivos/' . $idd . "-" . $nombreArchivo; // Directorio donde se guardará el archivo

    // Mueve el archivo a la carpeta especificada
    move_uploaded_file($_FILES['archivo']['tmp_name'], $rutaArchivo);

    // Actualiza la base de datos con el nombre del archivo

    if ($nombreArchivo ==""){
        $sql = "UPDATE recomendaciones 
            SET respuesta = '$respuesta', fechaInicio = '$inicio', fechaTermino = '$fin'
            WHERE claveRecomendacion = '$idd'";

        // Ejecutar la consulta
        if ($conexion->query($sql) === TRUE) {
            echo "Respuestas actualizadas con éxito";
        } else {
            echo "Error al actualizar datos: " . $conexion->error;
        }
    }

    else{
        echo $idd;
        $sql = "SELECT archivo FROM recomendaciones WHERE claveRecomendacion = '$idd'";
        $resultado = $conexion->query($sql);
       

        if ($resultado->num_rows > 0) {
            // Si hay resultados, obtener el valor de la columna 'archivo'
            $fila = $resultado->fetch_assoc();
            $valorArchivo = $fila["archivo"];

            echo "El valor de la columna 'archivo' para el idd $idd es: $valorArchivo";

            $archivo_a_eliminar = 'archivos/'.$valorArchivo;

            // Verificar si el archivo existe antes de intentar eliminarlo
            if (file_exists($archivo_a_eliminar)) {
                // Intentar eliminar el archivo
                if (unlink($archivo_a_eliminar)) {
                    echo 'El archivo fue eliminado correctamente.';
                } else {
                    echo 'Error al intentar eliminar el archivo.';
                }
            } else {
                echo 'El archivo no existe.';
            }

            
        } 
        
        else {
            echo "No se encontraron resultados para el idd $idd";
        }

        $nameArch =  $idd . "-" . $nombreArchivo;
        $sql = "UPDATE recomendaciones 
            SET respuesta = '$respuesta', fechaInicio = '$inicio', fechaTermino = '$fin', archivo = '$nameArch'
            WHERE claveRecomendacion = '$idd'";

        // Ejecutar la consulta
        if ($conexion->query($sql) === TRUE) {
            echo "Respuestas actualizadas con éxito";
        } else {
            echo "Error al actualizar datos: " . $conexion->error;
        }
    }


    

    // Cerrar la conexión a la base de datos
    $conexion->close();
}
?>
