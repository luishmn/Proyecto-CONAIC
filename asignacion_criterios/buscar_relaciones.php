<?php
try {
    include "../conexionDB/conexion.php";
    conecta();

    if (!$conexion) {
        echo json_encode(array('success' => false, 'message' => 'Error al conectar con la Base de Datos. Vuelva a iniciar sesión.'));
        exit();
    }
    $data = json_decode(file_get_contents('php://input'), true);

    
    $nombreUsuario = $data['usuario'];
    $apellidoPatUsuario = $data['apellidoPat'];
    $cargoUsuario = $data['cargo'];
 
  

    if (empty($nombreUsuario) || empty($apellidoPatUsuario) || empty($cargoUsuario)) {
        echo json_encode(array('success' => false, 'message' => 'Faltan datos obligatorios.'));
        exit();
    }

 
    $sql = "SELECT claveSubCriterio FROM AsignacionSubCriterio WHERE correo IN (
        SELECT correo FROM Usuario WHERE nombre = '$nombreUsuario' AND apellidoPat = '$apellidoPatUsuario' AND cargo = '$cargoUsuario'
    )";

    $result = $conexion->query($sql);

    if ($result) {
        $clavesSubcriterios = array();

        while ($row = $result->fetch_assoc()) {
            $clavesSubcriterios[] = $row['claveSubCriterio'];
        }

        echo json_encode(array('success' => true, 'clavesSubcriterios' => $clavesSubcriterios));
    } else {
        echo json_encode(array('success' => false, 'message' => 'Error al buscar relaciones.'));
    }

    
    $conexion->close();
} catch (Exception $e) {
    echo json_encode(array('success' => false, 'message' => $e->getMessage()));
}
?>
