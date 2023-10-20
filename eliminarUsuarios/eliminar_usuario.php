<?php
if (isset($_GET['correo_traslado'])) {
    $valor = $_GET['correo_traslado'];
    $correo = $valor;
} else {
    echo "No se proporcionó ningún valor a través de la URL.";
}

include "../conexionDB/conexion.php";
            conecta();
        
            if ($conexion->connect_error) {
                    die("Conexión fallida: " . $conexion->connect_error);
            }

$correo = $conexion->real_escape_string($correo);
$sql_check = "SELECT correo FROM Usuario WHERE correo = '$correo'"; 
$result_check = $conexion->query($sql_check);



if ($result_check->num_rows == 0) {
    echo "El usuario con el correo $correo no existe en la base de datos.";


} else {
    $sql_delete = "DELETE FROM AsignacionSubCriterio WHERE correo = '$correo'"; 
    
    if ($conexion->query($sql_delete) === TRUE) {
        $sql_delete = "DELETE FROM Usuario WHERE correo = '$correo'"; 
        if ($conexion->query($sql_delete) === TRUE) {
            header("Location: ../visualizacion_usuario/index_visual_usu.php");
            exit;
            echo "Usuario Eliminado correctamente";
        }
    } else {
        echo "Error al eliminar al usuario: " . $conexion->error;
    }
}

$conexion->close();
?>