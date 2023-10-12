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

    <div class="container">
    <div class="logo">
      <img src="logo_CONAIC_letras.png" alt="Logo">
    </div>
  </div>
  <div class="buttons">
    <button><img class="button-image small" src="seguimiento.png" alt="Botón 1"></button>
    <button><img class="button-image large" src="autoevaluacion.png" alt="Botón 2"></button>
  </div>
  </div>
  <img class="img1" src="logo_Fondo.png" alt="logo">
</body>
</html>