<?php
    session_start();
    //$_SESSION['loggedin']= false;
    // Verifica si el usuario ha iniciado sesión
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
        // Accede al nombre de usuario almacenado en la sesión
        $nombreUsuario = $_SESSION['username'];
        $correoUsuario = $_SESSION['email'];
    } else {
        // Si no ha iniciado sesión, redirige al usuario a la página de inicio de sesión
        header('Location: ../index.php');
        exit;
    }

    $nombre = substr($nombreUsuario, 0, 10);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <div class="barra-superior">

            <<div class="menu_usuario">
                <button class="menu_estilo_usuario">
                    <img src="Usuario.png" alt="Usuario"> 
                    <div class="texto"> <?php echo $nombre; ?> </div>
                </button>
                <div class="contenido_del_menu_usuarios">
                    <a href="/PrincipalUsuario/deslogear.php">Salir de la cuenta</a>
                </div>
            </div>

        </div>
    </header>

    <div class="container">
        <div class="logo">
            <img src="logo_CONAIC_letras.png" alt="Logo">
        </div>
    </div>
    <div class="buttons">
    <a href="/PrincipalUsuario/verificaCriterios.php">
        <button class="imagenOPS"><img class="button-image small" src="autoevaluacion.png" alt="Botón 1"></button>
    
    <a  href="../ver_recomendaciones_user/index_ver_recomendaciones.php">
        <button class="imagenOPS"><img class="button-image large" src="seguimiento.png" id="autoeval" alt="Botón 2"></button>
    
</div>
    <img class="img1" src="logo_Fondo.png" alt="logo">


    

</body>
</html>