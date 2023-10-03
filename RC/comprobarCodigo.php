<?php
$servername = "localhost";
$username = "root";
$password = " ";
$database = "";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$sql = "SELECT * FROM usuario";
$result = $conn->query($sql);

$data = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

$conn->close();

$codigoRec=file_get_contents('php://input');
echo $codigoRec;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $para = $_POST[$data]; // Dirección de correo electrónico especificada en el formulario
    $asunto = $_POST["Código de Recuperación"];
    $mensaje = $_POST['"Éste es tu código de confirmacion: ",$codigoRec'];
    $headers = "From: tu_direccion_de_correo@example.com"; // Cambia esto por tu dirección de correo

    if (mail($para, $asunto, $mensaje, $headers)) {
        echo "El mensaje se ha enviado correctamente.";
    } else {
        echo "Error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.";
    }
}
?>
