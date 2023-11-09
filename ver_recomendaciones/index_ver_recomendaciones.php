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

<meta charset="UTF-8">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="visualizar_recomendaciones.css">
    <script src="visualizar_recomendaciones.js"></script>
    <title>Ver recomendaciones</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">


</head>
<body>
    
     
    <div id="logoFondo"> <!-- ESTE ES EL DIV QUE TIENE EL LOGO QUE APARECE AL FONDO, CUBRE TODA LA PANTALLA ASI QUE POR ESO DENTRO DE EL SE PONEN OTROS ELEMENTOS -->
       
    

    <header>
        <div class="barra-superior"><!-- ESTE ES EL DIV DE LA BARRA SUPERIOR -->
        <a href="/PrincipalAdministrador/index.php" class="enlace-inicio" ><i class="fas fa-home"></i></a>

     
        
            <label class="L1">Recomendaciones</label>

            <button class="menu_estilo_usuario">
                <img src="../PrincipalUsuario/usuario.png" alt="Usuario"> 
                <div class="texto"> <?php echo $nombre; ?></div>
            </button>
        </div>
    </header>

    <br><br><br>
    <!--logo superior-->
    <nav class="nav">
        
        <img src="../imagenes/logo_CONAIC_letras.png" alt="Conaic ITSZaS" class="logo_letras" width="336" height="198" >
        
    </nav>

    <!--barra de busqueda-->
    <section class="buscar_usuario">
        
            <div class="rectangulo_busqueda">
                <input type="text" id="busqueda" class="input_busqueda"  placeholder="Buscar recomendaciones">             
                <div class="buscar_icono_fondo">
                    <button class="buscar_icono"></button>
                    
                    
                </div>  

            </div>
        
    </section>


    <br><br><br>
    <?php
    include "../conexionDB/conexion.php";
    conecta();
    
    
    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }
    
    // Modificar la consulta SQL para seleccionar la columna archivo
    $sql = "SELECT descripcion, respuesta, fechaInicio, fechaTermino, claveRecomendacion, archivo FROM recomendaciones";
    $result = $conexion->query($sql);
    ?>
    
    <div class="nombres_columnas">
    <table>
        <tr>
            <th>Subcriterio</th>
            <th>Descripción</th>
            <th>Respuesta</th>
            <th>Fecha inicio</th>
            <th>Fecha término</th>
            <th>Archivo</th>
        </tr>
    </table>
</div>
<div class="contenido">
    <div class="tabla-container">
    <div class="tabla">
        <?php
        if ($result->num_rows > 0) {
           

            while ($row = $result->fetch_assoc()) {
                // Modificar el código HTML para agregar el contenido de la columna archivo
                echo "<div class='fila' data-busqueda='" . $row["descripcion"] . " " . $row["respuesta"] . " " . $row["fechaInicio"] . " " . $row["fechaTermino"] . " " . $row["claveRecomendacion"] . " " . $row["archivo"] . "'>";
                echo "<div class='celda'>" . $row["claveRecomendacion"] . "</div>";
                echo "<div class='celda'>" . $row["descripcion"] . "</div>";
                echo "<div class='celda'>" . $row["respuesta"] . "</div>";
                echo "<div class='celda'>" . $row["fechaInicio"] . "</div>";
                echo "<div class='celda'>" . $row["fechaTermino"] . "</div>";
                echo "<div class='celda'>" . $row["archivo"] . "</div>";
                echo "</div>";
            }
        }else{
            echo "Hola";

        }
            
        
        ?>
          </div>
    </div>
    
</div>

</body>

</html>