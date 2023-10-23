
<?php
    session_start();
    
    $_SESSION['loggedin'] = false;
    $_SESSION['username'] = "";
    $_SESSION['email'] = "";
    $_SESSION['tipo'] = "";

    // Verifica si el usuario tiene la sesión iniciada
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
        // Accede al nombre de usuario almacenado en la sesión
        $nombreUsuario = $_SESSION['username'];
        $correoUsuario = $_SESSION['email'];
    } else {
        // Destruye la sesión y manda al usuario al login
        session_destroy();
        header('Location: ../index.php');
        exit;
    }


?>