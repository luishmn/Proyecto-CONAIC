<?php
// Conectar a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "conaic";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener el arreglo serializado y deserializarlo
$arreglo_serializado = $_POST["arre"];
$arreglo = json_decode($arreglo_serializado, true);

$tamano = count($arreglo);


for ($i = 0; $i < $tamano; $i += 2) {
    // Mostrar en la consola el par de elementos (claveRespuesta y respuesta)
    $claveRespuesta = $arreglo[$i];
    $respuesta = $arreglo[$i + 1];
    
    // Modificar la consulta SQL para actualizar si ya existe una fila con la misma clave
    $sql = "INSERT INTO respuestas (respuesta, numPregunta, claveRespuesta) 
    VALUES ('$respuesta', 1, '$claveRespuesta')
    ON DUPLICATE KEY UPDATE respuesta = VALUES(respuesta)";
    
    if ($conn->query($sql) === TRUE) {
        echo "Respuesta guardada con éxito para Clave: $claveRespuesta, Respuesta: $respuesta<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Cerrar la conexión a la base de datos
$conn->close();

echo "Respuestas guardadas con éxito";
?>
