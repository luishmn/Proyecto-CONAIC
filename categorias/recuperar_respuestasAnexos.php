<?php
// Conectar a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "conaic";

// Crear una conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Claves a recuperar
$claves = ["RA1","RA2","RA3","RA3-A1","RA3-A2","RA3-A3"];

// Inicializar un array para las respuestas
$respuestas = [];

// Consulta SQL para obtener las respuestas correspondientes a las claves
foreach ($claves as $clave) {
    $sql = "SELECT respuesta FROM respuestas WHERE claveRespuesta = '$clave'";
    
    // Ejecutar la consulta
    $result = $conn->query($sql);
    

    if ($result === false) {
        die("Error en la consulta: " . $conn->error);
    }

    // Obtener la respuesta
    $respuesta = "";

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Convertir la respuesta a minúsculas y eliminar espacios en blanco
        $respuesta = strtolower(trim($row['respuesta']));
    }

    // Agregar la respuesta al array de respuestas
    $respuestas[] = $clave;
    $respuestas[] = $respuesta;
}

// Devolver las respuestas como JSON
echo json_encode($respuestas);

// Cerrar la conexión a la base de datos
$conn->close();
?>
