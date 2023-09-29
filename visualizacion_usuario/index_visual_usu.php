<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="visualizar_usuario.css">
    <script src="visualizar_usuarios.js"></script>
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>
    <div id="logoFondo"> <!-- ESTE ES EL DIV QUE TIENE EL LOGO QUE APARECE AL FONDO, CUBRE TODA LA PANTALLA ASI QUE POR ESO DENTRO DE EL SE PONEN OTROS ELEMENTOS -->
       

        <div class="barra-superior"><!-- ESTE ES EL DIV DE LA BARRA SUPERIOR -->
            
            <div class ="tituloPag">
                <p id="textoTituloPag">Visualizar Usuarios</p>
            </div>
        </div>



    
    <br><br><br>
    <!--logo superior-->
    <nav class="nav">
        <img src="../imagenes/logo_CONAIC_letras.png" alt="Conaic ITSZaS" class="logo_letras" width="336" height="198">
    </nav>

    <!--barra de busqueda-->
    <section class="buscar_usuario">
        <form action="">
            <div class="rectangulo_busqueda">
                <input type="text" id="miInput" class="input_busqueda" value="Correo de usuario" onfocus="borrarTexto(this)">             
                <div class="buscar_icono_fondo">
                    <button type="submit" class="buscar_icono">
                    </button></div>
            </div>
        </form>
    </section>
    <br><br><br>

    <?php
  
    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbname = "conaic";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }
   
    $sql = "SELECT nombre, apellidoPat, apellidoMat, cargo, contrasena, correo, tipo FROM usuario";
    $result = $conn->query($sql);
    ?>
    
    <div class="nombres_columnas">
    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Cargo</th>
            <th>Contraseña</th>
            <th>Correo</th>
            <th>Tipo</th>
        </tr>
    </table>
</div>

<div class="contenido">
    <table>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr class='fila-tabla' data-correo='" . $row["correo"] . "'>";
                echo "<td>" . $row["nombre"] . "</td>";
                echo "<td>" . $row["apellidoPat"] . "</td>";
                echo "<td>" . $row["apellidoMat"] . "</td>";
                echo "<td>" . $row["cargo"] . "</td>";
                echo "<td>" . $row["contrasena"] . "</td>";
                echo "<td>" . $row["correo"] . "</td>";
                echo "<td>" . $row["tipo"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "No se encontraron registros.";
        }
        ?>
    </table>


    </div>
    
    <br><br><br>
    <section class="botones">
        <button id="Eliminar" class="boton_eliminar">Eliminar</button> 
        <button id="Registrar" class="boton_registrar">Registrar</button>
    </section>

    
    <img src="../imagenes/logo_Fondo.png" id="imgLogoFondo">
    
    </div>
</body>

</html>


<script>

    function borrarTexto(input) {
        if (input.value === "Clave de usuario") {
            input.value = "";
        }
    }

    function restaurarTexto(input) {
        if (input.value === "") {
            input.value = "Clave de usuario";
        }
    }

    document.getElementById("miInput").addEventListener("focus", function () {
        borrarTexto(this);
    });

    document.getElementById("miInput").addEventListener("blur", function () {
        restaurarTexto(this);
    });


     // Selecciona el botón por su ID
     var botonGuardar = document.getElementById("Registrar");

    // Agrega un manejador de eventos al botón
    botonGuardar.addEventListener("click", function() {
        // Redirecciona al archivo "nuevo.html"
        window.location.href = "../registrar_usuario/registraUsuarios.html";
    });




 

</script>

