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
    <link rel="stylesheet" href="/PrincipalUsuario/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <div class="logo">
            <img src="logo_CONAIC_letras.png" alt="Logo">
        </div>
    </div>
    <div id="myModal" class="modal">
        <div class="modal-content">
            <p id="modalMessage"></p>
            <button class="close-button" id="closeModal">Volver</button>
        </div>
    </div>

    <script>
    // Cierra el modal de error al hacer clic en el botón "Aceptar"
    const closeModalButton = document.getElementById("closeModal");
            closeModalButton.addEventListener("click", function () {
            const errorModal = document.getElementById("myModal");
            errorModal.style.display = "none";
            window.location.href ='/PrincipalUsuario/index.php';
            
        });

        function showErrorModal(message) {
        const modalMessage = document.getElementById("modalMessage");
        const errorModal = document.getElementById("myModal");
    
        modalMessage.innerHTML = message;
        errorModal.style.display = "block";
    }
    function redirigirCate(digito){
        console.log(digito);
        
        if(digito == "1."){
            window.location.href = "/categorias/categoria1.php";
        }else if(digito == "2."){
            window.location.href = "/categorias/categoria2.php";            
        }else if(digito == "3."){
            window.location.href = "/categorias/categoria3.php";
        }else if(digito == "4."){
            window.location.href = "/categorias/categoria4.php";
        }else if(digito == "5"){
            window.location.href = "/categorias/categoria5.php";
        }else if(digito == "6."){
            window.location.href = "/categorias/categoria6.php";
        }else if(digito == "7."){
            window.location.href = "/categorias/categoria7.php";
        }else if(digito == "8."){
            window.location.href = "/categorias/categoria8.php";            
        }else if(digito == "9."){
            window.location.href = "/categorias/categoria9.php";
        }else if(digito == "10"){
            window.location.href = "/categorias/categoria10.php";
        }
        
    }

</script>


<?php
    //border-right: 4px solid #D4E1E3;
    $_SESSION['loggedin'] = true;
    //$_SESSION['loggedin']= false;
    // Verifica si el usuario ha iniciado sesión
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
        // Accede al nombre de usuario almacenado en la sesión
        $nombreUsuario = $_SESSION['username'];
        $correoUsuario = $_SESSION['email'];
        
        //echo $nombreUsuario."<br>";
        //echo $correoUsuario;

        include "../conexionDB/conexion.php";
        conecta();
        if (!$conexion) {
            echo json_encode(array('success' => false, 'message' => 'Error al conectar con la Base de Datos. Vuelva a iniciar sesión.'));
           
        }
        else{
            
            $consulta = "SELECT claveSubCriterio, correo  tipo from asignacionsubcriterio where correo = '$correoUsuario'";
            $resultado = mysqli_query($conexion, $consulta);

            if(!$resultado){
                die("Error al consultar los datos: ". mysqli_error($conexion));
            } else{
                if (mysqli_num_rows($resultado) >= 1) {
                    $fila = mysqli_fetch_assoc($resultado);
                    $Cat_subcriterio = $fila['claveSubCriterio'];
                   
                    $Digitos = substr($Cat_subcriterio, 0, 2);
                    echo "<script>redirigirCate($Digitos);</script>";
                    
                    
                    //echo "Se han encontrado resultados <br>";
                    //echo "Clave: ".$Cat_subcriterio;
                    

                }else{
                    echo '<script>showErrorModal("No se han encontrado criterios asignados para este usuario. Vuelva a la página principal");</script>';
                }
            }
        }
    }
?>
</body>
</html>

