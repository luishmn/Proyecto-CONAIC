<?php
    // Incluye la librería PHPMailer
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require '../PHPMailer-master/src/Exception.php';
    require '../PHPMailer-master/src/PHPMailer.php';
    require '../PHPMailer-master/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido_paterno = $_POST["apellidoP"];
    $apellido_materno = $_POST["apellidoM"];
    $cargo = $_POST["cargo"];
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];
    $tipo =$_POST["tipoUsuario"];

    $nombrecompleto=$nombre . " " . $apellido_paterno . " " . $apellido_materno;

    if ($tipo=="normal"){
        $tipo=0;
    }
    else{
        $tipo=1;
    }

    // Conexión a la base de datos MySQL
    include "../conexionDB/conexion.php";
    conecta();





    $para = $correo;
    $asunto = 'CONAIC: BIENVENIDO'; // Asunto del correo
    $imagen = "https://i.postimg.cc/R0fc2zym/logo-CONAIC-letras.png";
    





// Crea una instancia de PHPMailer
$mail = new PHPMailer;

// Configura el servidor SMTP (cambia estos valores por los de tu servidor de correo)
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'oscar23w@gmail.com';
$mail->Password = 'msldjzyqommxdzkc';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

// Configura el remitente y el destinatario
$mail->setFrom('oscar23w@gmail.com', 'Tu Nombre');
$mail->addAddress($para, 'Destinatario');

$mail->Subject = $asunto;
$mail->isHTML(true);



// Aquí incrusta el código HTML en el cuerpo del correo
$mail->Body = '<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Asunto del Correo Electrónico</title>
    <style>


    .mensaje_central{
        background-color: #D4E1E3;
        flex: auto;
        height: 150px;
    }
    p{
        color: black;
        font-size: 15px;
        }
    h2{
        font-size: 20px;
        font-family: Arial, Helvetica, sans-serif;
        margin-left: 5%;
    
    }
    
    .mensaje{
        margin-left: 5%;
        font-family: Arial, Helvetica, sans-serif
    }
    
    .sitioweb{
        font-size: 15px;
        font-family: Arial, Helvetica, sans-serif;
    }
    </style>
</head>
<body>
    <table cellpadding="0" cellspacing="0" border="0" width="100%" style="background-color: #f2f2f2;">
        <tr>
            <td align="center" class="" valign="top">
                <table cellpadding="0" cellspacing="0" border="0" width="600" style="background-color: #ffffff; border: 1px solid #e0e0e0;">
                    <tr>
                        <td align="center"  valign="top" style="padding: 20px;">
                           <div class="mensaje_central">
                            <img src='.$imagen.'  id="logo" alt="solid" height="150px" align="left">
                            <br><br>
                            <p>Consejo Nacional de Acreditación en Informática y Computación.</p>
                             </div>
                             <br><br><br> <br>
                            <h2 align="left">Bienvenido '.$nombrecompleto .'</h2>
                            <br>
                            <p align="left" class="mensaje">Por medio de este correo le hacemos llegar las credenciales de acceso a la página web, contacte al equipo de soporte ante cualquier duda o aclaración.</p>
                            <p align="left" class="mensaje">Correo: '.$correo.'</p>
                            <p align="left" class="mensaje">Contraseña: '.$contrasena.'</p>
                            <br>
                            <p class="sitioweb">Sitio Web</p>
                            <a href="conaic.com">conaic.com</a>
                            <br>
                            <br>
                            <footer>
                                <hr>
                                <p>Todos los derechos reservados 2015-2025</p>
                            </footer>
                            
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>';
    

    

    if ($conexion->connect_error) {
        die("Conexión a la base de datos fallida: " . $conexion->connect_error);
    }

    else{

    if (comprobar($correo, $conexion)==1){
        
        echo "<script>";
        echo "window.location.href = 'error.html';";
        echo "</script>";
    }
    else{
        // Inserción de datos en la tabla 
    $sql = "INSERT INTO usuario (nombre,apellidoPat, apellidoMat, cargo, contrasena,correo,tipo,confirmacion)
    VALUES ('$nombre', '$apellido_paterno', '$apellido_materno', '$cargo','$contrasena','$correo','$tipo',0)";

if ($conexion->query($sql) === TRUE) {
    if ($mail->send()) {
        echo "<script>";
    echo "window.location.href = 'exito.html';";
    echo "</script>";
} else {
    echo "<script>";
    echo "window.location.href = 'error.html';";
    echo "</script>";
}
}  

$conexion->close();
    }
    
}}
else {
        echo "<script>";
        echo "<script>alert('El usuario fue registrado. Espera la confirmacion.' . $conexion->error);</script>";
        echo "window.location.href = 'index_visual_usu.php';";
        echo "</script>";

    echo "<script>alert('El Usuario no fue enviado');</script>";
}

function comprobar($usu,$conec){
    $sql="SELECT * FROM usuario
    WHERE correo='$usu'";
    $result=mysqli_query($conec, $sql);
    if (mysqli_num_rows($result)>0){
        return 1;
    }
    else{return 0;}
}
?>