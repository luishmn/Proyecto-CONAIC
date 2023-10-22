<?php
if (isset($_POST['nombreUsuario'])) {
    $nombreUsuario = $_POST['nombreUsuario'];

    //$nombreUsuario = "oscar92623@gmail.com";

    // Conexión a la base de datos
    include "../conexionDB/conexion.php";
    conecta();

    // Verifica la conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Realiza la consulta a la base de datos
    $query = "SELECT claveSubCriterio FROM asignacionsubcriterio WHERE correo = '$nombreUsuario'";
    $resultado = $conexion->query($query);

    // Procesa el resultado y almacena las coincidencias en un array
    $coincidencias = array();
    if ($resultado) {
        while ($fila = $resultado->fetch_assoc()) {
            $coincidencias[] = $fila['claveSubCriterio'];
        }
        $resultado->free();
    } else {
        echo "Error en la consulta: " . $conexion->error;
    }

    // Cierra la conexión a la base de datos
    $conexion->close();

    // Devuelve las coincidencias como una respuesta JSON
    echo json_encode($coincidencias);
} else {
    // Maneja la situación en la que no se proporcionó el nombre de usuario.
}
?>
