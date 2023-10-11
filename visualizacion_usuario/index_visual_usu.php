<meta charset="UTF-8">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="visualizar_usuario.css">
    <script src="visualizar_usuarios.js"></script>
    <title>Usuarios</title>
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
        <a href="../Principal%20Administrador/index.php">
        <img src="../imagenes/logo_CONAIC_letras.png" alt="Conaic ITSZaS" class="logo_letras" width="336" height="198" >
        </a>
    </nav>

    <!--barra de busqueda-->
    <section class="buscar_usuario">
        
            <div class="rectangulo_busqueda">
                <input type="text" id="busqueda" class="input_busqueda"  placeholder="Buscar usuarios">             
                <div class="buscar_icono_fondo">
                    <button class="buscar_icono"></button>
                    
                    
                </div>  

            </div>

            <div class="botones">
                <button id="Registrar" class="boton_registrar">Registrar</button>
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
                            <label for="apellidoP" class="form_label">Apellido paterno:</label>
                        </div>
                    </div>
                    <div class="form_c3">
                        <div class="form_group">
                            <input type="text" id="apellidoM" class="form_input" placeholder=" " name="apellidoM"
                                >
                            <label for="apellidoM" class="form_label">Apellido materno:</label>
                        </div>
                    </div>
                </div>

                <br><br><br><br>

                <div class="contenedor">
                    <div class="form_c4">
                        <div class="form_group">
                            <input type="text" id="cargo" class="form_input" placeholder=" " name="cargo" >
                            <label for="cargo" class="form_label">Cargo desempeñado:</label>
                        </div>
                    </div>

                    <div class="form_c9">
                        <select name="tipoUsuario" id="tipoUsuario" class="form_input" >
                            <option value="normal">Usuario normal</option>
                            <option value="admin">Usuario administrador</option>
                        </select>

                    </div>
                </div>

                <br><br><br><br>

                <div class="form_c5">
                    <div class="form_group">
                        <input type="email" id="correo" class="form_input" placeholder=" " name="correo" >
                        <label for="correo" class="form_label">Correo electrónico:</label>
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
                            <label for="contrasenaV" class="form_label">Confirmar contraseña:</label>
                        </div>
                    </div>

                    <div class="form_c8">
                        <button id="verpassword" disabled><img src="../imagenes/verPassword.png" alt=""
                                id="ojo"></button>
                        <script src="verpassword.js"></script>
                    </div>

                    <div class="form_c81">
                        <button id="instrucciones" class="instrucciones-button" disabled>!</button>
                        <div id="instruccionesContainer" class="instrucciones-container">Contraseña:  
                              Necesita de 8 a 20 caracteres, una letra minúscula, una mayúscula, un número y no debe contener espacios</div>
                    </div>
                </div>

                <br><br><br><br>

                <div class="form_c10_1">
                    <button type="submit" id="registrar">Registar usuario</button>
                </div>

                <div id="cuadroDialogo" class="oculto" >
                    <span id="cerrarDialogo" class="cerrar" onclick="cerrarDialogo()">&times;</span>
                    <br><br>
                    <h2 id="tituloError">Error</h2>
                    <p id="descripcionError">Existe algún error en uno de los apartados</p>
                    <br>
                    <button id="botonError" type="button" onclick="cerrarDialogo()">Cerrar</button>                
                </div>

            
        </form>
    </div>

    <!-- ESTE ES EL FORMULARIO PARA EDITAR UN USUARIO -->
    <div id="formularioContainerEditar" class="oculto">

            <!-- Contenido de tu formulario aquí -->
            <form class="from-login" action="guardarModificacion.php" id="formularioEditar" method="post">

                <h1 class="centrar">Editar usuario</h1>
                <br>

                <div class="contenedor">
                    <div class="form_c1">
                        <div class="form_group">
                            <input type="text" id="nombreEdit" class="form_input" placeholder=" " name="nombre" >
                            <label for="nombre" class="form_label">Nombre:</label>
                        </div>
                    </div>
                    <div class="form_c2">
                        <div class="form_group">
                            <input type="text" id="apellidoPEdit" class="form_input" placeholder=" " name="apellidoP"
                                >
                            <label for="apellidoP" class="form_label">Apellido paterno:</label>
                        </div>
                    </div>
                    <div class="form_c3">
                        <div class="form_group">
                            <input type="text" id="apellidoMEdit" class="form_input" placeholder=" " name="apellidoM"
                                >
                            <label for="apellidoM" class="form_label">Apellido materno:</label>
                        </div>
                    </div>
                </div>

                <br><br><br><br>

                <div class="contenedor">
                    <div class="form_c4">
                        <div class="form_group">
                            <input type="text" id="cargoEdit" class="form_input" placeholder=" " name="cargo" >
                            <label for="cargo" class="form_label">Cargo desempeñado:</label>
                        </div>
                    </div>

                    <div class="form_c9">
                        <select name="tipoUsuario" id="tipoUsuarioEdit" class="form_input" >
                            <option value="normal">Usuario normal</option>
                            <option value="admin">Usuario administrador</option>
                        </select>

                    </div>
                </div>

                <br><br><br><br>

                <div class="form_c5">
                    <div class="form_group">
                        <input type="email" id="correoEdit" class="form_input" placeholder=" " name="correo" readonly >
                        <label for="correo" class="form_label">Correo electrónico:</label>
                    </div>
                </div>

                <br><br><br><br>

                <div class="contenedor">
                    <div class="form_c6">
                        <div class="form_group">
                            <input type="password" id="contrasenaEdit" class="form_input" placeholder=" " name="contrasena"
                                >
                            <label for="contrasena" class="form_label">Contraseña:</label>
                        </div>
                    </div>

                    <div class="form_c7">
                        <div class="form_group">
                            <input type="password" id="contrasenaVEdit" class="form_input" placeholder=" "
                                name="contrasenaV" >
                            <label for="contrasenaV" class="form_label">Confirmar contraseña:</label>
                        </div>
                    </div>

                    <div class="form_c8">
                        <button id="verpasswordEdit" disabled><img src="../imagenes/verPassword.png" alt=""
                                id="ojoEdit"></button>
                        <script src = "verpassEdit.js"></script>
                    </div>
                    <div class="form_c81">
                        <button id="instrucciones1" class="instrucciones1-button" disabled>!</button>
                        <div id="instruccionesContainer1" class="instrucciones-container1">Contraseña:  
                              Necesita de 8 a 20 caracteres, una letra minúscula, una mayúscula, un número y no debe contener espacios
                        </div>
                    </div>
                </div>

                <br><br><br><br>

                
                <div class="form_c10">
                    <button type="submit" id="editar">    Guardar    </button>
                </div>
                <br>
                <br>
                <br>
                <br>
                <div>
                <button id="Eliminar" type="button" class="boton_eliminar" >   Eliminar   </button> 
                </div>


                <div id="cuadroDialogoEdit" class="oculto">
                    <span id="cerrarDialogo" class="cerrar" onclick="cerrarDialogo1()">&times;</span>
                    <br><br>
                    <h2 id="tituloErrorEdit">Error</h2>
                    <p id="descripcionErrorEdit">Existe algún error en uno de los apartados</p>
                    <br>
                    <button id="botonErrorEdit" type="button" onclick="cerrarDialogo1()">Cerrar</button>                
                </div>

            
        </form>
    </div>

    <div id="fondoOscuro" class="oculto"></div>



    <br><br><br>

    <?php
  
    include "../conexionDB/conexion.php";
    conecta();

    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }
   
    $sql = "SELECT nombre, apellidoPat, apellidoMat, cargo, contrasena, correo, tipo FROM usuario";
    $result = $conexion->query($sql);
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
                echo "<div class='fila' data-busqueda='" . $row["nombre"] . " " . $row["apellidoPat"] . " " . $row["apellidoMat"] . " " . $row["correo"] . " " . $row["cargo"] . "'>";
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


    
    

    
    <img src="../imagenes/logo_Fondo.png" id="imgLogoFondo">

    <footer>
        <br><br>
    </footer>
  
    

</body>

</html>

<script>
    // Obtener el botón por su ID
    var botonElim = document.getElementById('Eliminar');

    botonElim.addEventListener('click', function(event) {
        // Aquí puedes realizar alguna acción cuando se hace clic en el botón
        var correoEliminar = document.getElementById("correoEdit");
        var correoElim = correoEliminar.value;
        Swal.fire({
        title: '¿Estás seguro?',
        text: '¿Quieres eliminar al usuario con el correo ' + correoElim + '?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Cancelar',
        cancelButtonText: 'Aceptar'
      }).then((result) => {
        if (!result.isConfirmed) {
            window.location.href = '../eliminarUsuarios/eliminar_usuario.php?correo_traslado=' + correoElim;
        
        }
      });
  
      // Evita que el formulario se envíe automáticamente
      return false;
    }
    
        
        
        
    );
        
</script>

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
      else if (nombre.length > 20){
        tituloAlerta.textContent = "Nombre muy largo";
        descripcionAlerta.textContent = "El nombre debe tener maximo 20 caracteres";
        mostrarDialogo();
      }
      else if (apellidoM.length > 20){
        tituloAlerta.textContent = "Apellido muy largo";
        descripcionAlerta.textContent = "El apellido Materno debe tener maximo 20 caracteres";
        mostrarDialogo();
      }
      else if (apellidoP.length > 20){
        tituloAlerta.textContent = "Apellido muy largo";
        descripcionAlerta.textContent = "El apellido Paterno debe tener maximo 20 caracteres";
        mostrarDialogo();
      }
      else if (cargo.length > 40){
        tituloAlerta.textContent = "Nombre de cargo";
        descripcionAlerta.textContent = "El cargo debe tener maximo 40 caracteres";
        mostrarDialogo();
      }
      else if (cargo.length > 40){
        tituloAlerta.textContent = "Nombre de cargo";
        descripcionAlerta.textContent = "El cargo debe tener maximo 40 caracteres";
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

      else if (/\s/.test(contrasena)) {
        tituloAlerta.textContent = "Espacios en contraseña";
        descripcionAlerta.textContent = "La contraseña no debe tener espacios";
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

<script> //SCRIPT PARA VALIDAR EL FORMULARIO DE EDITAR
    function mostrarDialogo1() {
    document.getElementById("cuadroDialogoEdit").style.display = "block";
    }

    function cerrarDialogo1() {
    document.getElementById("cuadroDialogoEdit").style.display = "none";
    }

    var alerta1 = document.getElementById("cuadroDialogoEdit"); //CERRAR ALERTA AL HACER CLIC EN CUALQUIER LUGAR DE LA PANTALLA
    document.addEventListener("click", function (event) {

    if (event.target !== alerta1 && !alerta1.contains(event.target)) {
        alerta1.style.display = "none";
    }
    });

    var mayusculas1 = /[A-Z]/;
    var minusculas1 = /[a-z]/;
    var numeros1 = /\d/;
    var especiales1 = /[\W_]/;

    var tituloAlerta1 = document.getElementById ("tituloErrorEdit");
    var descripcionAlerta1 = document.getElementById ("descripcionErrorEdit");
    
    

    document.addEventListener("DOMContentLoaded", function() {
    const formulario1 = document.getElementById("formularioEditar");
  
    formulario1.addEventListener("submit", function(event) {
      // Evita que el formulario se envíe automáticamente
      event.preventDefault();
  
        
      // Realiza la validación de los campos aquí
        const contrasena1 = document.getElementById("contrasenaEdit").value;
        const contrasenaV1 = document.getElementById("contrasenaVEdit").value;
        var nombre1 = document.getElementById ("nombreEdit").value;
        var email1 = document.getElementById ("correoEdit").value;
        var cargo1 = document.getElementById ("cargoEdit").value;
        var apellidoM1 = document.getElementById ("apellidoMEdit").value;
        var apellidoP1 = document.getElementById ("apellidoPEdit").value;

      
    
      if (nombre1.trim() === "" || apellidoM1.trim() === "" || apellidoP1.trim() ==="" || cargo1.trim() ==="" || email1.trim() === "" || contrasena1.trim() === "" || contrasenaV1.trim() ===""){
        
        tituloAlerta1.textContent = "Llena todos los campos";
        descripcionAlerta1.textContent = "Asegurate de llenar todos los campos";
        mostrarDialogo1();
      }
      else if (nombre1.length > 20){
        tituloAlerta1.textContent = "Nombre muy largo";
        descripcionAlerta1.textContent = "El nombre debe tener maximo 20 caracteres";
        mostrarDialogo1();
      }
      else if (apellidoM1.length > 20){
        tituloAlerta1.textContent = "Apellido muy largo";
        descripcionAlerta1.textContent = "El apellido Materno debe tener maximo 20 caracteres";
        mostrarDialogo1();
      }
      else if (apellidoP1.length > 20){
        tituloAlerta1.textContent = "Apellido muy largo";
        descripcionAlerta1.textContent = "El apellido Paterno debe tener maximo 20 caracteres";
        mostrarDialogo1();
      }
      else if (cargo1.length > 40){
        tituloAlerta1.textContent = "Nombre de cargo";
        descripcionAlerta1.textContent = "El cargo debe tener maximo 40 caracteres";
        mostrarDialogo1();
      }
      else if (cargo1.length > 40){
        tituloAlerta1.textContent = "Nombre de cargo";
        descripcionAlerta1.textContent = "El cargo debe tener maximo 40 caracteres";
        mostrarDialogo1();
      }
      else if (contrasena1 != contrasenaV1) {
        tituloAlerta1.textContent = "Contraseñas diferentes";
        descripcionAlerta1.textContent = "Las contraseñas no coinciden";
        mostrarDialogo1();
      } 
      else if (contrasena1.length < 8){
        tituloAlerta1.textContent = "Contraseña muy corta";
        descripcionAlerta1.textContent = "La contraseña debe tener al menos 8 caracteres";
        mostrarDialogo1();
      }
      else if (contrasena1.length > 20){
        tituloAlerta1.textContent = "Contraseña muy larga";
        descripcionAlerta1.textContent = "La contraseña debe tener menos de 20 caracteres";
        mostrarDialogo1();
      }

      else if (!contrasena1.match(mayusculas1)){
        tituloAlerta1.textContent = "Faltan mayusculas";
        descripcionAlerta1.textContent = "La contraseña debe tener al menos una letra mayuscula";
        mostrarDialogo1();
      }
      else if (!contrasena1.match(minusculas1)){
        tituloAlerta1.textContent = "Faltan minusculas";
        descripcionAlerta1.textContent = "La contraseña debe tener al menos una letra minuscula";
        mostrarDialogo1();
      }

      else if (!contrasena1.match(numeros1)){
        tituloAlerta1.textContent = "Faltan números";
        descripcionAlerta1.textContent = "La contraseña debe tener al menos un número";
        mostrarDialogo1();
      }
      else if (/\s/.test(contrasena1)) {
        tituloAlerta1.textContent = "Espacios en contraseña";
        descripcionAlerta1.textContent = "La contraseña no debe tener espacios";
        mostrarDialogo1();
        }
      

      else {
        // Si los campos son válidos, envía el formulario
        formulario1.submit();

        
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
  // Obtén todas las filas de la tabla
  var filas = document.querySelectorAll(".fila");

  // Agrega un evento de clic a cada fila para resaltarla
  for (var i = 0; i < filas.length; i++) {
    filas[i].addEventListener("click", function() {
      // Elimina la clase 'seleccionada' de todas las filas
      for (var j = 0; j < filas.length; j++) {
        filas[j].classList.remove("seleccionada");
      }

      // Agrega la clase 'seleccionada' a la fila clickeada
      this.classList.add("seleccionada");
    });

    // Agrega un evento de doble clic para mostrar el contenido de la fila en una alerta
    filas[i].addEventListener("dblclick", function() {
      // Obtén el contenido de las celdas de la fila
        var celdas = this.getElementsByClassName("celda");
        var nombreSelect = celdas[0].textContent ;
        var apellidopSelect = celdas[1].textContent ;
        var apellidomSelect = celdas[2].textContent ;
        var cargoSelect = celdas[3].textContent ;
        var tipoSelect = celdas[6].textContent ;
        var correoSelect = celdas[5].textContent ;
        var contrasenaSelect = celdas[4].textContent ;
        


        if (tipoSelect === "Administrador"){
            
            document.getElementById("tipoUsuarioEdit").selectedIndex = 1;
        }
        else{
            document.getElementById("tipoUsuarioEdit").selectedIndex = 0;
        }
       
            
      

      // Muestra el contenido de la fila en una alerta
        document.getElementById("fondoOscuro").style.display = "block";
        document.getElementById("formularioContainerEditar").style.display = "block";
        document.getElementById("nombreEdit").value = nombreSelect;
        document.getElementById("apellidoPEdit").value = apellidopSelect;
        document.getElementById("apellidoMEdit").value = apellidomSelect;
        document.getElementById("cargoEdit").value = cargoSelect;
        //document.getElementById("tipoUsuarioEdit").value = tipoSelect;
        document.getElementById("correoEdit").value = correoSelect;
        document.getElementById("contrasenaEdit").value = contrasenaSelect;
        document.getElementById("contrasenaVEdit").value = contrasenaSelect;
    });

        document.getElementById("fondoOscuro").addEventListener("click", function() {
        // Ocultar el fondo oscuro y el formulario cuando se hace clic fuera del formulario
        document.getElementById("fondoOscuro").style.display = "none";
        document.getElementById("formularioContainerEditar").style.display = "none";
      
    });
  }
</script>

<script>
        const botonInstrucciones = document.getElementById('instrucciones');
        const instruccionesContainer = document.getElementById('instruccionesContainer');
        const botonInstrucciones1 = document.getElementById('instrucciones1');
        const instruccionesContainer1 = document.getElementById('instruccionesContainer1');

        botonInstrucciones.addEventListener('mouseenter', function() {
            instruccionesContainer.style.display = 'block';
        });

        botonInstrucciones.addEventListener('mouseleave', function() {
            instruccionesContainer.style.display = 'none';
        });
        botonInstrucciones1.addEventListener('mouseenter', function() {
            instruccionesContainer1.style.display = 'block';
        });

        botonInstrucciones1.addEventListener('mouseleave', function() {
            instruccionesContainer1.style.display = 'none';
        });
</script>

