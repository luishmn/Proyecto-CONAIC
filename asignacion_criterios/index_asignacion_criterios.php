<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asiganción de Criterios</title>
    <link rel="stylesheet" href="style.css">
    <script src="style.js"></script>
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
       

        <div class="barra-superior"><!-- ESTE ES EL DIV DE LA BARRA SUPERIOR -->
            
            <div class ="tituloPag">
                <p id="textoTituloPag">Asignar Criterios</p>
            </div>
        </div>



    
    <br><br><br>
    <!--logo superior-->
    <nav class="nav">
        <a href="../Principal%20Administrador/index.php">
        <img src="../imagenes/logo_CONAIC_letras.png" alt="Conaic ITSZaS" class="logo_letras" width="336" height="198" >
        </a>
    </nav>

    <div class="rectangulo_principal">
    <span class="selected-option">Selecciona un Usuario</span>
    <ul class="options">
        <?php
      
        $query = "SELECT nombre, apellidoPat, cargo FROM Usuario";
        $result = $conexion->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $nombreUsuario = $row['nombre'];
                $apellidoPatUsuario = $row['apellidoPat'];
                $cargoUsuario = $row['cargo'];
                echo '<li data-nombre="' . $nombreUsuario . '" data-apellidoPat="' . $apellidoPatUsuario . '" data-cargo="' . $cargoUsuario . '">' . $nombreUsuario . ' ' . $apellidoPatUsuario . ' (' . $cargoUsuario . ')</li>';
            }
        }
        ?>
    </ul>
    <div class="selected-value"></div>
</div>



    <div class="usuario_seleccionado">
        <p>Ningun usuario ha sido seleccionado</p>
    </div>  

    </br>
    <section class="article">
        <div class="rectangulo_principal">
            <h2>Categorías y Criterios</h2>
        </div>

        <?php
        foreach ($categorias as $categoria => $criterios) {
            echo '<details class="details">';
            echo '<summary class="categoria">' . $categoria . '</summary>';
            
            foreach ($criterios as $criterio => $subcriterios) {
                echo '<details class="criterios">';
                echo '<summary class="criterio">' . $criterio . '</summary>';
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



    <button class="boton_asignar"  id="guardar">Guardar</button>
    <img src="../imagenes/logo_Fondo.png" id="imgLogoFondo" alt="Conaic ITSZaS" class="logo" width="336" height="198">
    <footer class="footer">
        <br><br>

 
    </footer>



</body>



</html>



