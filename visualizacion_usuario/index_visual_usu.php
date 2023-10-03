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
                <p id="textoTituloPag">Usuarios</p>
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

    

    <!-- ESTE ES EL FORMULARIO PARA REGISTRAR UN NUEVO USUARIO -->
    <div id="formularioContainer" class="oculto">

            <!-- Contenido de tu formulario aquí -->
            <form class="from-login" action="registrarUsuarioBD.php" id="formularioRegistro" method="post">

                <h1 class="centrar">Registrar usuario</h1>
                <br>

                <div class="contenedor">
                    <div class="form_c1">
                        <div class="form_group">
                            <input type="text" id="nombre" class="form_input" placeholder=" " name="nombre" >
                            <label for="nombre" class="form_label">Nombre:</label>
                        </div>
                    </div>
                    <div class="form_c2">
                        <div class="form_group">
                            <input type="text" id="apellidoP" class="form_input" placeholder=" " name="apellidoP"
                                >
                            <label for="apellidoP" class="form_label">Apellido Paterno:</label>
                        </div>
                    </div>
                    <div class="form_c3">
                        <div class="form_group">
                            <input type="text" id="apellidoM" class="form_input" placeholder=" " name="apellidoM"
                                >
                            <label for="apellidoM" class="form_label">Apellido Materno:</label>
                        </div>
                    </div>
                </div>

                <br><br><br><br>

                <div class="contenedor">
                    <div class="form_c4">
                        <div class="form_group">
                            <input type="text" id="cargo" class="form_input" placeholder=" " name="cargo" >
                            <label for="cargo" class="form_label">Cargo Desempeñado:</label>
                        </div>
                    </div>

                    <div class="form_c9">
                        <select name="tipoUsuario" id="tipoUsuario" class="form_input" >
                            <option value="normal">Usuario Normal</option>
                            <option value="admin">Usuario Administrador</option>
                        </select>

                    </div>
                </div>

                <br><br><br><br>

                <div class="form_c5">
                    <div class="form_group">
                        <input type="email" id="correo" class="form_input" placeholder=" " name="correo" >
                        <label for="correo" class="form_label">Correo Electronico:</label>
                    </div>
                </div>

                <br><br><br><br>

                <div class="contenedor">
                    <div class="form_c6">
                        <div class="form_group">
                            <input type="password" id="contrasena" class="form_input" placeholder=" " name="contrasena"
                                >
                            <label for="contrasena" class="form_label">Contraseña:</label>
                        </div>
                    </div>

                    <div class="form_c7">
                        <div class="form_group">
                            <input type="password" id="contrasenaV" class="form_input" placeholder=" "
                                name="contrasenaV" >
                            <label for="contrasenaV" class="form_label">Confirmar Contraseña:</label>
                        </div>
                    </div>

                    <div class="form_c8">
                        <button id="verpassword" disabled><img src="../imagenes/verPassword.png" alt=""
                                id="ojo"></button>
                        <script src="../registrar_usuario/verpassword.js"></script>
                    </div>
                </div>

                <br><br><br><br>

                <div class="form_c10">
                    <button type="submit" id="registrar">Registar Usuario</button>
                </div>

                <div id="cuadroDialogo" class="oculto">
                    <span id="cerrarDialogo" class="cerrar" onclick="cerrarDialogo()">&times;</span>
                    <br><br>
                    <h2 id="tituloError">Error</h2>
                    <p id="descripcionError">Existe algun error en algo</p>
                    <br>
                    <button id="botonError" type="button" onclick="cerrarDialogo()">Cerrar</button>                
                </div>

            
        </form>
    </div>

    <div id="fondoOscuro" class="oculto"></div>



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
    <div class="tabla-container">
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


    </div>
    
    
    <div class="botones">
        <button id="Eliminar" class="boton_eliminar">Eliminar</button> 
        <button id="Registrar" class="boton_registrar">Registrar</button>
        <button id="Editar" class="boton_editar">Editar</button>
        </div>

    
    <img src="../imagenes/logo_Fondo.png" id="imgLogoFondo">
  
    

</body>

</html>

<script> //SCRIPT PARA VALIDAR EL FORMULARIO DE REGISTRO
    function mostrarDialogo() {
    document.getElementById("cuadroDialogo").style.display = "block";
    }

    function cerrarDialogo() {
    document.getElementById("cuadroDialogo").style.display = "none";
    }

    var alerta = document.getElementById("cuadroDialogo"); //CERRAR ALERTA AL HACER CLIC EN CUALQUIER LUGAR DE LA PANTALLA
    document.addEventListener("click", function (event) {

    if (event.target !== alerta && !alerta.contains(event.target)) {
        alerta.style.display = "none";
    }
    });

    var mayusculas = /[A-Z]/;
    var minusculas = /[a-z]/;
    var numeros = /\d/;
    var especiales = /[\W_]/;

    var tituloAlerta = document.getElementById ("tituloError");
    var descripcionAlerta = document.getElementById ("descripcionError");
    
    

    document.addEventListener("DOMContentLoaded", function() {
    const formulario = document.getElementById("formularioRegistro");
  
    formulario.addEventListener("submit", function(event) {
      // Evita que el formulario se envíe automáticamente
      event.preventDefault();
  
      // Realiza la validación de los campos aquí
        const contrasena = document.getElementById("contrasena").value;
        const contrasenaV = document.getElementById("contrasenaV").value;
        var nombre = document.getElementById ("nombre").value;
        var email = document.getElementById ("correo").value;
        var cargo = document.getElementById ("cargo").value;
        var apellidoM = document.getElementById ("apellidoM").value;
        var apellidoP = document.getElementById ("apellidoP").value;

      
    
      if (nombre.trim() === "" || apellidoM.trim() === "" || apellidoP.trim() ==="" || cargo.trim() ==="" || email.trim() === "" || contrasena.trim() === "" || contrasenaV.trim() ===""){
        tituloAlerta.textContent = "Llena todos los campos";
        descripcionAlerta.textContent = "Asegurate de llenar todos los campos";
        mostrarDialogo();
      }
      else if (contrasena != contrasenaV) {
        tituloAlerta.textContent = "Contraseñas diferentes";
        descripcionAlerta.textContent = "Las contraseñas no coinciden";
        mostrarDialogo();
      } 
      else if (contrasena.length < 8){
        tituloAlerta.textContent = "Contraseña muy corta";
        descripcionAlerta.textContent = "La contraseña debe tener al menos 8 caracteres";
        mostrarDialogo();
      }
      else if (contrasena.length > 20){
        tituloAlerta.textContent = "Contraseña muy larga";
        descripcionAlerta.textContent = "La contraseña debe tener menos de 20 caracteres";
        mostrarDialogo();
      }

      else if (!contrasena.match(mayusculas)){
        tituloAlerta.textContent = "Faltan mayusculas";
        descripcionAlerta.textContent = "La contraseña debe tener al menos una letra mayuscula";
        mostrarDialogo();
      }
      else if (!contrasena.match(minusculas)){
        tituloAlerta.textContent = "Faltan minusculas";
        descripcionAlerta.textContent = "La contraseña debe tener al menos una letra minuscula";
        mostrarDialogo();
      }

      else if (!contrasena.match(numeros)){
        tituloAlerta.textContent = "Faltan números";
        descripcionAlerta.textContent = "La contraseña debe tener al menos un número";
        mostrarDialogo();
      }
      

      else {
        // Si los campos son válidos, envía el formulario
        formulario.submit();

        
      }
    });
  });
  
</script>



<script> // Script para aparecer y desaparecer el formulario de registro
    document.getElementById("Registrar").addEventListener("click", function() {
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

<script>


    




    function seleccionarFila(fila) {
        // Remueve la clase de selección de todas las filas
        var filas = document.querySelectorAll(".fila-tabla");
        filas.forEach(function (fila) {
            fila.classList.remove("fila-seleccionada");
        });

        // Agrega la clase de selección a la fila clicada
        fila.classList.add("fila-seleccionada");
    }
    


 

</script>

