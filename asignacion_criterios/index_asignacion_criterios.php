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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignación de Criterios</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="style.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<?php
function obtenerClaveSubCriterioDesdeBD($subcriterio,$conexion) {
    
    // Establece la conexión a la base de datos (ajusta esto según tu configuración)
    

    // Escapa el nombre del subcriterio para evitar inyección SQL (ajusta esto según tus necesidades)
    $subcriterio = $conexion->real_escape_string($subcriterio);

    // Consulta para obtener la clave del subcriterio
    $query = "SELECT claveSubCriterio FROM SubCriterio WHERE nombre = '$subcriterio'";
    $result = $conexion->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['claveSubCriterio'];
    } else {
        return "Clave no encontrada"; // Manejo de errores si el subcriterio no se encuentra
    }

    // Cierra la conexión a la base de datos
    $conexion->close();
}
function obtenerClaveCategoriaDesdeBD($categoria, $conexion) {
    $categoria = $conexion->real_escape_string($categoria);
    $query = "SELECT claveCategoria FROM Categoria WHERE nombre = '$categoria'";
    $result = $conexion->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['claveCategoria'];
    } else {
        return "Clave no encontrada";
    }
}

function obtenerClaveCriterioDesdeBD($criterio, $conexion) {
    $criterio = $conexion->real_escape_string($criterio);
    $query = "SELECT claveCriterio FROM Criterio WHERE nombre = '$criterio'";
    $result = $conexion->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['claveCriterio'];
    } else {
        return "Clave no encontrada";
    }
}




include "../conexionDB/conexion.php";
conecta();
if(!$conexion){
    echo "<script>alert('Ocurrió un error al conectar con la Base de Datos. Vuelva a iniciar sesión.');</script>";
} 



// Obtener categorías y sus criterios desde la base de datos
$query = "SELECT c.nombre as categoria, ci.nombre as criterio, s.nombre as subcriterio
          FROM Categoria c
          INNER JOIN CriteriosCategoria cc ON c.claveCategoria = cc.claveCategoria
          INNER JOIN Criterio ci ON cc.claveCriterio = ci.claveCriterio
          LEFT JOIN CriteriosSubCriterio cs ON ci.claveCriterio = cs.claveCriterio
          LEFT JOIN SubCriterio s ON cs.claveSubCriterio = s.claveSubCriterio
          ORDER BY c.claveCategoria, ci.claveCriterio, s.claveSubCriterio";
$result = $conexion->query($query);

$categorias = array();

while ($row = $result->fetch_assoc()) {
    $categoria = $row['categoria'];
    $criterio = $row['criterio'];
    $subcriterio = $row['subcriterio'];

    if (!isset($categorias[$categoria])) {
        $categorias[$categoria] = array();
    }

    if (!isset($categorias[$categoria][$criterio])) {
        $categorias[$categoria][$criterio] = array();
    }

    if ($subcriterio) {
        $categorias[$categoria][$criterio][] = $subcriterio;
    }
}




?>

    <div id="logoFondo"> <!-- ESTE ES EL DIV QUE TIENE EL LOGO QUE APARECE AL FONDO, CUBRE TODA LA PANTALLA ASI QUE POR ESO DENTRO DE EL SE PONEN OTROS ELEMENTOS -->
       

    <header>
        <div class="barra-superior"><!-- ESTE ES EL DIV DE LA BARRA SUPERIOR -->
        <a href="/PrincipalAdministrador/index.php" class="enlace-inicio" ><i class="fas fa-home"></i></a>

     
        
            <label class="L1">Asignar criterios</label>

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

    <div class="contenedor_busqueda">
        <div class="rectangulo_busqueda">
            <input type="text" id="busqueda" class="input_busqueda"  placeholder="Buscar usuarios">             
        </div>
        <div class="buscar_icono_fondo">
            <button class="buscar_icono"></button>
        </div>

        <!-- <div class="rectangulo_usuario"> -->
        <!-- <span class="buscador_usuario">Busca un Usuario</span> -->
        <ul class="options" id="options">
            <?php
            
                $query = "SELECT nombre, apellidoPat, cargo FROM Usuario";
                $result = $conexion->query($query);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $nombreUsuario = $row['nombre'];
                        $apellidoPatUsuario = $row['apellidoPat'];
                        $cargoUsuario = $row['cargo'];
                        echo '<li id="lista" data-nombre="' . $nombreUsuario . '" data-apellidoPat="' . $apellidoPatUsuario . '" data-cargo="' . $cargoUsuario . '">' . $nombreUsuario . ' ' . $apellidoPatUsuario . ' (' . $cargoUsuario . ')</li>';
                    }
                }
            ?>
        </ul>
            <div class="selected-value"></div>
        <!-- </div> -->
    </div>




    <!-- <div class="usuario_seleccionado">
        <p>Ningun usuario ha sido seleccionado</p>
    </div>   -->

    </br>
    <section class="article">
        <div class="rectangulo_categorias">
            <h2>Categorías y Criterios</h2>
        </div>

        <?php
        foreach ($categorias as $categoria => $criterios) {
            $claveCategoria = obtenerClaveCategoriaDesdeBD($categoria, $conexion);
            echo '<details class="details">';
            echo '<summary class="categoria">' .$claveCategoria. '. ' .$categoria . '</summary>';
            
            foreach ($criterios as $criterio => $subcriterios) {
                $claveCriterio = obtenerClaveCriterioDesdeBD($criterio, $conexion);
                echo '<details class="criterios">';
                echo '<summary class="criterio">' . $claveCriterio . ' - ' . $criterio . '</summary>';
                echo '<ul class="criterios">';
                foreach ($subcriterios as $subcriterio) {
                    $claveSubCriterio = obtenerClaveSubCriterioDesdeBD($subcriterio,$conexion);
                    echo '<li><label class="check_criterios"><input type="checkbox" data-clave="' . $claveSubCriterio . '"><i></i> ' . $claveSubCriterio . ' - ' . $subcriterio . '</label></li>';

                }


                echo '</ul>';
                echo '</details>';
            }

            echo '</details>';
        }
        $conexion->close();
        ?>

    </section>

    <div class="container">
        <button class="boton_asignar"  id="guardar">Guardar</button>
    </div>
        <img src="../imagenes/logo_Fondo.png" id="imgLogoFondo" alt="Conaic ITSZaS" class="logo" width="336" height="198">
    <footer class="footer">
        <br><br>

 
    </footer>



</body>



</html>



