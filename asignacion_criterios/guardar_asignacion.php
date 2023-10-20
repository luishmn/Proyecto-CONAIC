<?php
try {
    $data = json_decode(file_get_contents('php://input'), true);

    $nombreUsuario = $data['usuario'];
    $apellidoPatUsuario = $data['apellidoPat'];
    $cargoUsuario = $data['cargo'];

    if (empty($nombreUsuario) || empty($apellidoPatUsuario) || empty($cargoUsuario)) {
        echo json_encode(array('success' => false, 'message' => 'Faltan datos obligatorios.'));
        exit();
    }

    include "../conexionDB/conexion.php";
    conecta();
    if (!$conexion) {
        echo json_encode(array('success' => false, 'message' => 'Error al conectar con la Base de Datos. Vuelva a iniciar sesión.'));
        exit();
    }
    
    $sql = "SELECT correo FROM Usuario WHERE nombre = '$nombreUsuario' AND apellidoPat = '$apellidoPatUsuario' AND cargo = '$cargoUsuario'";
    $result = $conexion->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $correoUsuario = $row['correo'];

        $clavesSubcriterios = $data['subcriterios'];


        if (empty($clavesSubcriterios)) {
            echo json_encode(array('success' => false, 'message' => 'No se seleccionaron subcriterios.'));
            exit();
        }



        $sql = "SELECT claveSubCriterio FROM AsignacionSubCriterio WHERE correo = '$correoUsuario'";
        $result = $conexion->query($sql);

        if ($result->num_rows > 0) {
            $criteriosRelacionados = [];
            while ($row = $result->fetch_assoc()) {
                $criteriosRelacionados[] = $row['claveSubCriterio'];
            }


            $criteriosAEliminar = array_diff($criteriosRelacionados, $clavesSubcriterios);

       
            foreach ($criteriosAEliminar as $claveAEliminar) {
                $sql = "DELETE FROM AsignacionSubCriterio WHERE correo = '$correoUsuario' AND claveSubCriterio = '$claveAEliminar'";
                $conexion->query($sql);
            }
        }


        foreach ($clavesSubcriterios as $claveSubcriterio) {
            $claveSubcriterio = mysqli_real_escape_string($conexion, $claveSubcriterio);
            $correoUsuario = mysqli_real_escape_string($conexion, $correoUsuario);
        

            $checkSql = "SELECT COUNT(*) AS count FROM AsignacionSubCriterio WHERE claveSubCriterio = '$claveSubcriterio' AND correo = '$correoUsuario'";
            $checkResult = $conexion->query($checkSql);
            $checkRow = $checkResult->fetch_assoc();
            $count = $checkRow['count'];
        
        
            if ($count == 0) {
                $sql = "INSERT INTO AsignacionSubCriterio (claveSubCriterio, correo) VALUES ('$claveSubcriterio', '$correoUsuario')";
                if (!$conexion->query($sql)) {
                    error_log("Error al insertar la relación: " . $conexion->error);
                    continue;
                }
            }
        }
        
        echo json_encode(array('success' => true, 'message' => 'Asignación guardada con éxito.'));
    } else {
        echo json_encode(array('success' => false, 'message' => 'Usuario no encontrado.'));
    }

    $conexion->close();
} catch (Exception $e) {
    header('Content-Type: application/json');
    echo json_encode(array('success' => false, 'message' => $e->getMessage()));
}
?>
