<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Código de recuperación</title>
    <link rel="stylesheet" href="estiloCodigoC.css">
</head>
<body>
    <div class="logoFondo"> <!-- ESTE ES EL DIV QUE TIENE EL LOGO QUE APARECE AL FONDO, CUBRE TODA LA PANTALLA ASI QUE POR ESO DENTRO DE EL SE PONEN OTROS ELEMENTOS -->
        <img src="..\imagenes\logo_Fondo.png" class="imgLogoFondo">
    </div>

    <div class="logoLetras"> <!--este es el logo con las letres coinaic itszas-->
        <img src="..\imagenes\logo_CONAIC_letras.png" class="imgLogoLetras">
    </div>


    <div class="cuadro">
        <div class="cuadro">
            <div>
                <p class="P1">¿Olvidaste tu contraseña?</p>
            </div>
    
            <div>
                <input class="correoInput" type="email" id="correo" >
            </div>
    
            <div class="correoI">
                <img src="..\imagenes\correo_Codigo.png" alt="logo de correo">
            </div>
    
            <div>
                <p class="P2">Ingresa el código que se envió a tu correo electrónico</p>
            </div>
    
         

            <!-- espcios para ingresar el codigo-->
            <div>
                <form action="comparandoCodigo.js" method="post">
                <input class="from_1" type="text" id="c1" maxlength="1" required oninput="moverEnfoque(this, 'c2')">
                <input class="from_2" type="text" id="c2" maxlength="1" required oninput="moverEnfoque(this, 'c3')">
                <input class="from_3" type="text" id="c3" maxlength="1" required oninput="moverEnfoque(this, 'c4')">
                <input class="from_4" type="text" id="c4" maxlength="1" required oninput="moverEnfoque(this, 'c5')">
                <input class="from_5" type="text" id="c5" maxlength="1" required oninput="moverEnfoque(this, 'c6')">
                <input class="from_6" type="text" id="c6" maxlength="1" required>        
                </form>
            </div>
            <div class="boton1">
                <button type="button" id="obtenerCodigo" class="from_boton1">Enviar código</button>
            </div>

            <div class="boton2">
                <button type="button" id="compararCodigo" class="from_boton2">Comprobar</button>
            </div>


    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="comparandoCodigo.js"></script>

</body>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST["correo"];
    echo "<script>";
    echo "document.getElementById(\"correo\").value = \"$correo\";";
    echo "</script>";


}

?>

<script>
        document.addEventListener("DOMContentLoaded", function() {
            // Obtener el botón por su ID
            var boton = document.getElementById("obtenerCodigo");

            // Simular un clic en el botón
            boton.click();
        });
    </script>

</html>
