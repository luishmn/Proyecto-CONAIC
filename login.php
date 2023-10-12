<?php
    session_set_cookie_params(0); // Vida útil de la sesión indefinida
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/login.css">
    <title>Iniciar Sesión</title>
</head>

<body bgcolor="#D4E1E3">
    <img class="logo_Arriba" src="/imagenes/img_login/logo_CONAIC 1.png" alt="logo CONAIC"> 
    
    
    <div class="cajaLogin">
        <div class="login-box">
            <img class="imagen_persona" src="/imagenes/img_login/usuario.png" alt="user_img">
            
            <form method="post" action="">
                <div>
                    <input class="usuario-input" name="usuario" type="text" placeholder="Correo"><br>
                    <input class="pass-input" name="pass" type="password" placeholder="Contraseña"><br>
                    <button type="submit">Iniciar sesión</button>
                </div>
            </form>
            <div class="incognitas">
                <link><a href="recuperar"></a>¿Olvidaste tu contraseña?</link><br>
                <link>Puedes cambiar tu contraseña <a id="recuperar" >aquí</a></link>
            </div>
        </div>
    </div>
    
    
    <div class="social-buttons">
        <a href="https://x.com/difusionconaic?s=20" target="_blank" class="redes-sociales">
            <img src="/imagenes/img_login/twitter.png" alt="Twitter">
        </a>
        <a href="https://www.facebook.com/difusionconaic/?locale=es_LA" target="_blank" class="redes-sociales">
            <img src="/imagenes/img_login/facebook.png" alt="Facebook">
        </a>
        <a href="" target="_blank" class="contacto" data-copy="conaic_@hotmail.com">
            <img src="/imagenes/img_login/correo-electronico.png" alt="Correo">
        </a>
        <a href="https://conaic.net/" target="_blank" class="redes-sociales">
            <img src="/imagenes/img_login/globo.png" alt="Web">
        </a>
        <a href="" target="_blank" class="contacto" data-copy="01 (55) 56157489">
            <img src="/imagenes/img_login/llamada.png" alt="Teléfono">
        </a>
    </div>
    
    <div id="myModal" class="modal">
        <div class="modal-content">
            <p id="modalMessage"></p>
            <button class="close-button" id="closeModal">Aceptar</button>
        </div>
    </div>


    <div id="formularioContainer" class="oculto">

            <!-- Contenido de tu formulario aquí -->
            <form class="from-login" action="recuperarcontra/recuperarcontra.php" id="formularioEditar" method="post">

                <h1 class="centrar">Recuperar contraseña</h1>
                <br>

                <div class="form_c5">
                    <div class="form_group">
                        <input type="email" id="correo" class="form_input" placeholder=" " name="correo"  >
                        <label for="correo" class="form_label">Correo electrónico:</label>
                    </div>

                
                <div class="form_c10">
                    <button type="submit" id="editar">    Recuperar    </button>
                </div>


            
        </form>
    </div>
    <div id="fondoOscuro" class="oculto"></div>
    

    <script src="/js/login.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const socialButtons = document.querySelectorAll(".contacto");
        
            socialButtons.forEach(function (button) {
                button.addEventListener("click", function (e) {
                    e.preventDefault();
                    const copyData = this.getAttribute("data-copy");
        
                    // Crea un elemento de entrada de texto temporal para copiar al portapapeles.
                    const tempInput = document.createElement("input");
                    tempInput.setAttribute("value", copyData);
                    document.body.appendChild(tempInput);
                    tempInput.select();
                    document.execCommand("copy");
                    document.body.removeChild(tempInput);
        
                    
                    alert(`¡"${copyData}" ha sido copiado al portapapeles!`);
                });
            });
        
            // Cierra el modal de error al hacer clic en el botón "Aceptar"
            const closeModalButton = document.getElementById("closeModal");
            closeModalButton.addEventListener("click", function () {
            const errorModal = document.getElementById("myModal");
            errorModal.style.display = "none";
            });
        });

        function showErrorModal(message) {
            const modalMessage = document.getElementById("modalMessage");
            const errorModal = document.getElementById("myModal");
        
            modalMessage.innerHTML = message;
            errorModal.style.display = "block";   
        }

    </script>
    
    
<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = trim($_POST["usuario"]);
        $contra = $_POST["pass"];
        
        if (empty($usuario) || empty($contra)) {
            echo '<script>showErrorModal("Por favor, complete todos los campos.");</script>';
        } elseif (strpos($usuario, ' ') !== false || strpos($contra, ' ') !== false) {
            echo '<script>showErrorModal("Formato incorrecto. El nombre de usuario y la contraseña no deben contener espacios en blanco.");</script>';
        } elseif (strpos($usuario, '@') == false || strpos($usuario, '.com') == false){
            echo '<script>showErrorModal("La dirección de correo introducida no es válida (@) / .com");</script>';
        } else {
        
                global $conexion;

                include "conexionDB/conexion.php";
                conecta();
                if(!$conexion){
                    echo "<script>alert('Ocurrió un error al conectar con la Base de Datos. Vuelva a iniciar sesión.');</script>";
                } 
                else{
                    //echo "<script>alert('Conexión establecida!');</script>";
                    
                    $usuario = mysqli_real_escape_string($conexion, $usuario);
                    $contra = mysqli_real_escape_string($conexion, $contra);

                    $consulta = "SELECT nombre, correo, apellidoPat, contrasena, tipo from usuario where correo = '$usuario'";
                    $resultado = mysqli_query($conexion, $consulta);

                    if(!$resultado){
                        die("Error al consultar los datos: ". mysqli_error($conexion));
                    } else{
                        if (mysqli_num_rows($resultado) >= 1) {
                            $fila = mysqli_fetch_assoc($resultado);
                            $contraseña_bd = $fila['contrasena'];
                            $nombreUsuario_bd = $fila['nombre'];
                            $tipo_bd = $fila['tipo'];

                            if($contra != $contraseña_bd){
                                echo "<script>showErrorModal('La contraseña es incorrecta. Vuelva a intentarlo.');</script>";
                            } else {
                                
                                $_SESSION['loggedin'] = true; // Variable de sesión para indicar que el usuario ha iniciado sesión
                                $_SESSION['username'] = $nombreUsuario_bd; // Almacena el nombre de usuario en la sesión para mandarlo a los principales
                                //princpial de jefe o admin
                                if($tipo_bd == 1) {
                                    echo '<script>window.location.href = "/Principal Administrador/index.php";</script>';
                                    exit;
                                } else{
                                    echo '<script>window.location.href = "/Principal usuario/index.php";</script>';
                                }

                            }
                            /*si el usuario no está verificado no entrar al sistema*/
                            

                            } else {
                                echo "<script>showErrorModal('El usuario con el correo \"$usuario\" no existe en el sistema');</script>";
                        }
                    }
                }
            }
        }
    ?>
    
</body>
<script> // Script para aparecer y desaparecer el formulario de registro
    document.getElementById("recuperar").addEventListener("click", function() {
    // Mostrar el fondo oscuro y el formulario
    document.getElementById("fondoOscuro").style.display = "block";
    document.getElementById("formularioContainer").style.display = "block";
    });

    document.getElementById("fondoOscuro").addEventListener("click", function() {
        // Ocultar el fondo oscuro y el formulario cuando se hace clic fuera del formulario
        document.getElementById("fondoOscuro").style.display = "none";
        document.getElementById("formularioContainer").style.display = "none";
    });
</script>
</html>