<?php
    session_start();
    //$_SESSION['loggedin']= false;
    // Verifica si el usuario ha iniciado sesión
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
        // Accede al nombre de usuario almacenado en la sesión
        $nombreUsuario = $_SESSION['username'];
    } else {
        // Si no ha iniciado sesión, redirige al usuario a la página de inicio de sesión
        header('Location: ../login.php');
        exit;
    }

    $nombre = substr($nombreUsuario, 0, 10);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <div class="barra-superior">

            <div class="menu_usuario">
                <button class="menu_estilo_usuario">
                    <img src="usuario.png" alt="Usuario"> 
                    <div class="texto"> <?php echo $nombreUsuario; ?></div>
                </button>
                <div class="contenido_del_menu_usuarios">
                    <a href="xxxxxx.html">Perfil</a>
                    <a href="xxxxxx.html">Ajustes</a>
                </div>
            </div>


        </div>
    </header>

    <div class="contenedor-botones">

        <button class="btn1">
            <a href="xxxxxx.html">
                <img src="autoevaluacion.png" alt="Autoevaluación">
            </a>
        </button>
    
        <button class="btn2">
            <a href="xxxxxx.html">
                <img src="seguimiento.png" alt="Seguimiento">
            </a>
        </button>
    </div>

    <img class="img2" src="logo_CONAIC_letras.png" alt="">

    <img class="img1" src="logo_Fondo.png" alt="logo">



    
 

    
</body>
</html>