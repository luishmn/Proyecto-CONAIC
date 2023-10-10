<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Incluye la librería PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../PHPMailer-master/src/Exception.php';
require '../../PHPMailer-master/src/PHPMailer.php';
require '../../PHPMailer-master/src/SMTP.php';

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
$mail->addAddress('oscar92623@gmail.com', 'Destinatario');

$mail->Subject = 'Asunto del Correo';
$mail->isHTML(true);

$imagen = "https://i.postimg.cc/R0fc2zym/logo-CONAIC-letras.png";
$nombrecompleto ="Oscar Abel";
$correo ="correo@mail.com";
$contrasena="mskcscon";


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
                            <p>Consejo Nacional de Aceditación en Informática y Computación.</p>
                             </div>
                             <br><br><br> <br>
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

// Envía el correo
if ($mail->send()) {
    echo 'Correo enviado correctamente';
} else {
    echo 'Error al enviar el correo: ' . $mail->ErrorInfo;
}



?>

</body>
</html>