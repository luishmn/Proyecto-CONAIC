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
        
            <div class="rectangulo_busqueda">
                <input type="text" id="busqueda" class="input_busqueda"  placeholder="Buscar por correo">             
                <div class="buscar_icono_fondo">
                    <button class="buscar_icono">
                    </button></div>
            </div>
        
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
    <div class="tabla">
        <?php
        if ($result->num_rows > 0) {
           

            while ($row = $result->fetch_assoc()) {
                echo "<div class='fila' data-correo='" . $row["correo"] . "'>";
                echo "<div class='celda'>" . $row["nombre"] . "</div>";
                echo "<div class='celda'>" . $row["apellidoPat"] . "</div>";
                echo "<div class='celda'>" . $row["apellidoMat"] . "</div>";
                echo "<div class='celda'>" . $row["cargo"] . "</div>";
                echo "<div class='celda'>" . $row["contrasena"] . "</div>";
                echo "<div class='celda'>" . $row["correo"] . "</div>";
                
                
                if ($row["tipo"] == 1) {
                    echo "<div class='celda'>Administrador</div>";
                } else {
                    echo "<div class='celda'>Usuario</div>";
                }
            
                echo "</div>";
            }
            }
        
        ?>
    </div>
</div>


    </div>
    
    <br><br><br>
    <section class="botones">
        <button id="Eliminar" class="boton_eliminar">Eliminar</button> 
        <button id="Registrar" class="boton_registrar">Registrar</button>
        <button id="Editar" class="boton_editar">Editar</button>
    </section>

    
    <img src="../imagenes/logo_Fondo.png" id="imgLogoFondo">
    
    </div>
</body>

</html>


<script>

     // Selecciona el botón por su ID
     var botonGuardar = document.getElementById("Registrar");

    // Agrega un manejador de eventos al botón
    botonGuardar.addEventListener("click", function() {
        // Redirecciona al archivo "nuevo.html"
        window.location.href = "../registrar_usuario/registraUsuarios.html";



        function seleccionarFila(fila) {
        // Remueve la clase de selección de todas las filas
        var filas = document.querySelectorAll(".fila-tabla");
        filas.forEach(function (fila) {
            fila.classList.remove("fila-seleccionada");
        });

        // Agrega la clase de selección a la fila clicada
        fila.classList.add("fila-seleccionada");
    }
    });




 

</script>

