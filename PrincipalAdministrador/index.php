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
    <img class="logo_Arriba" src="/imagenes/img_login/logo_CONAIC 1.png" alt="logo CONAIC">

    <header>
        <div class="barra-superior"><!-- ESTE ES EL DIV DE LA BARRA SUPERIOR -->
            
            <div class="menu_desplegable">
                <button class="menu_arte">
                    <img src="imagenes/menu_desplegable.png" alt="Menu desplegable"> 
                </button>
                <div class="contenido_del_menu">
                    <a href="../visualizacion_usuario/index_visual_usu.php">Usuarios</a>
                    <a href="../asignacion_criterios/index_asignacion_criterios.php">Asignar criterios</a>
                </div>
            </div>


            <div class="menu_usuario">
                <button class="menu_estilo_usuario">
                    <img src="../PrincipalUsuario/Usuario.png" alt="Usuario"> 
                    <div class="texto"> <?php echo $nombre; ?> </div>
                </button>
                <div class="contenido_del_menu_usuarios">
                    <a href="/PrincipalUsuario/deslogear.php">Salir de la cuenta</a>
                </div>
            </div>


        </div>
    </header>

    <div class="contenedor-botones">
        <button class="btn1">
            <a href="../categorias/categoria1.php">
                <img src="imagenes/autoevaluacion.png" alt="Autoevaluación">
            </a>
        </button>
    
        <button class="btn2">
            <a href="../ver_recomendaciones/index_ver_recomendaciones.php">
                <img src="imagenes/seguimiento.png" alt="Seguimiento">
            </a>
        </button>
    </div>

    <img class="img1" src="imagenes/logo_Fondo.png" alt="logo">



    
 

    
</body>
</html>