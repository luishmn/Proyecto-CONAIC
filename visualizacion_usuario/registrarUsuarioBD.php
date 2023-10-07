<?php
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
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "conaic";
    $conn = new mysqli($servername, $username, $password, $dbname);





    $para = $correo;
    $asunto = 'CONAIC: BIENVENIDO'; // Asunto del correo
    $contenidoImagen = file_get_contents("../imagenes/logo_CONAIC_letras.png");
    $imagen = base64_encode($contenidoImagen);
    $mensaje ='<!DOCTYPE html>
    <html lang="en">
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
                                <p>Consejo Nacional de Aceditación en Informática y Computación.</p>
                                 </div>
                                 <br><br>
                                <h2 align="left">Bienvenido '.$nombrecompleto .'</h2>
                                <br>
                                <p align="left" class="mensaje">Por medio de este correo le hacemos llegar las credenciales de acceso a la pagina web, cualquier duda no dude en contactar al equipo de soporte.</p>
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
    $headers = "From: tu_direccion_de_correo@example.com"; // Cambia esto por tu dirección de correo
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    

    if ($conn->connect_error) {
        die("Conexión a la base de datos fallida: " . $conn->connect_error);
    }

    else{

    if (comprobar($correo, $conn)==1){
        echo "<script>";
        echo "alert('Este correo Ya fue utilizado');";
        echo "window.location.href = 'index_visual_usu.php';";
        echo "</script>";
    }
    else{
        // Inserción de datos en la tabla 
    $sql = "INSERT INTO usuario (nombre,apellidoPat, apellidoMat, cargo, contrasena,correo,tipo,confirmacion)
    VALUES ('$nombre', '$apellido_paterno', '$apellido_materno', '$cargo','$contrasena','$correo','$tipo',0)";

if ($conn->query($sql) === TRUE) {
if (mail($para, $asunto, $mensaje, $headers)) {
    echo "<script>";
    echo "alert('Usuario Resgistrado. Correo enviado');";
    echo "window.location.href = 'index_visual_usu.php';";
    echo "</script>";
} else {
    echo "<script>";
    echo "alert('Usuario No Fue Registrado');";
    echo "window.location.href = 'index_visual_usu.php';";
    echo "</script>";
}
}  

$conn->close();
    }
    
}}
else {
        echo "<script>";
        echo "<script>alert('El usuario fue registrado. Espera la confirmacion.' . $conn->error);</script>";
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