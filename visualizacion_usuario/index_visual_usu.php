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
    <link rel="stylesheet" href="visualizar_usuario.css">
    <script src="visualizar_usuarios.js"></script>
    <title>Usuarios</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">


</head>
<body>
    
     
    <div id="logoFondo"> <!-- ESTE ES EL DIV QUE TIENE EL LOGO QUE APARECE AL FONDO, CUBRE TODA LA PANTALLA ASI QUE POR ESO DENTRO DE EL SE PONEN OTROS ELEMENTOS -->
       
    

    <header>
        <div class="barra-superior"><!-- ESTE ES EL DIV DE LA BARRA SUPERIOR -->
        <a href="/PrincipalAdministrador/index.php" class="enlace-inicio" ><i class="fas fa-home"></i></a>

     
        
            <label class="L1">Usuarios</label>

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
                <input type="text" id="busqueda" class="input_busqueda"  placeholder="Buscar usuarios">             
                <div class="buscar_icono_fondo">
                    <button class="buscar_icono"></button>
                    
                    
                </div>  

            </div>

            <div class="botones">
                <button id="Registrar" class="boton_registrar"><i class="fa-solid fa-user-plus"></i>Registrar</button>
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
                        <input type="text" id="correo" class="form_input" placeholder=" " name="correo" >
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
                        necesita de 8 a 20 caracteres, una letra minúscula, una mayúscula, un número y no debe de contener espacios.</div>
                    </div>
                </div>

                <br><br><br><br>

                <div class="form_c10_1">
                    <button type="submit" id="registrar"><i class="fa-solid fa-user-plus"></i>Registrar usuario</button>
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
                        necesita de 8 a 20 caracteres, una letra minúscula, una mayúscula, un número y no debe de contener espacios.
                        </div>
                    </div>
                </div>

                <br><br><br>

                
                <div class="form_c10">
                    <button type="submit" id="editar"> <i class="fa-solid fa-floppy-disk"></i>     Guardar    </button>
                    <button type="button" id="Eliminar"><i class="fas fa-trash"></i>Eliminar</button>
                </div>
                <br><br>
                <br>
                
                
                <br><br>

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
   
    $sql = "SELECT nombre, apellidoPat, apellidoMat, cargo, contrasena, correo, tipo FROM Usuario";
    $result = $conexion->query($sql);
    ?>
    
    <div class="nombres_columnas">
    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellido paterno</th>
            <th>Apellido materno</th>
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
        confirmButtonColor: '#197B7A',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Eliminar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = '../eliminarUsuarios/eliminar_usuario.php?correo_traslado=' + correoElim;
        }
    });

    // Evita que el formulario se envíe automáticamente
    return false;
});

        
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

    //var tituloAlerta = document.getElementById ("tituloError");
    //var descripcionAlerta = document.getElementById ("descripcionError");
    
    

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
        
        const allowedDomains = ['gmail.com', 'hotmail.com', 'yahoo.com', 'outlook.com', 'edu'," zacatecssur.tecnm.mx"];
        let validDomain = false;
        const [textoAntesArroba, dominio] = email.split('@');
        
    
        for (let i = 0; i < allowedDomains.length; i++) {
            if (email.includes(allowedDomains[i])) {
                validDomain = true;
                break;
            }
        }
      
      if (nombre.trim() === "" || apellidoM.trim() === "" || apellidoP.trim() ==="" || cargo.trim() ==="" || email.trim() === "" || contrasena.trim() === "" || contrasenaV.trim() ===""){
            Swal.fire({
                title: 'Llena todos los campos',
                text: 'Asegúrate de llenar todos los campos',
                icon: 'error',
                confirmButtonText: 'Cerrar',
                confirmButtonColor: '#197B7A' 
            });
      }

      else if(textoAntesArroba.trim() === "") {
        Swal.fire({
            title: "Correo electrónico no válido",
            text: "Debe haber texto antes del '@' en el correo electrónico.",
            icon: "error",
            confirmButtonText: 'Cerrar',
            confirmButtonColor: '#197B7A' 
        });
        return;
    }


        else if(!validDomain) {
        Swal.fire({
            title: "Correo electrónico no válido",
            text: "El correo electrónico debe ser de un dominio permitido (ej@gmail.com).",
            icon: "error",
            confirmButtonText: 'Cerrar',
            confirmButtonColor: '#197B7A' 
        });
        return;
      }
       else if (email.includes(' ')) {
        Swal.fire({
            title: "Correo electrónico no válido",
            text: "El correo electrónico no debe contener espacios intermedios.",
            icon: "error",
            confirmButtonText: 'Cerrar',
            confirmButtonColor: '#197B7A'
        });
        return;
    }

        else if(!email.includes('@')) {
            Swal.fire({
                title: "Correo electrónico no válido",
                text: "El correo electrónico debe contener '@'.",
                icon: "error",
                confirmButtonText: 'Cerrar',
                confirmButtonColor: '#197B7A' 
            });
            return;
        }
        
    

        else if (textoAntesArroba.trim() === "") {
        Swal.fire({
            title: "Correo electrónico no válido",
            text: "Debe haber texto antes del '@' en el correo electrónico.",
            icon: "error",
            confirmButtonText: 'Cerrar',
            confirmButtonColor: '#197B7A' 
        });
        return;
    }

        else if  (!email.includes('.com')) {
            Swal.fire({
                title: "Correo electrónico no válido",
                text: "El correo electrónico debe contener '.com'.",
                icon: "error",
                confirmButtonText: 'Cerrar',
                confirmButtonColor: '#197B7A'
            });
            return;
        }

        else if (!email.endsWith(`@${dominio}`)) {
        Swal.fire({
            title: "Correo electrónico no válido",
            text: "El correo electrónico debe mantener el orden: texto, '@', dominio.",
            icon: "error",
            confirmButtonText: 'Cerrar',
            confirmButtonColor: '#197B7A' 
        });
        return;
    }

        

      else if (nombre.length > 20){
        Swal.fire({
                title: "Nombre muy largo",
                text: "El nombre debe tener máximo 20 caracteres",
                icon: 'error',
                confirmButtonText: 'Cerrar',
                confirmButtonColor: '#197B7A' 
            });
      }
      else if (apellidoM.length > 20){
        Swal.fire({
                title: "Apellido muy largo",
                text: "El apellido Materno debe tener máximo 20 caracteres",
                icon: 'error',
                confirmButtonText: 'Cerrar',
                confirmButtonColor: '#197B7A' 
            });
      }
      else if (apellidoP.length > 20){
        Swal.fire({
                title: "Apellido muy largo",
                text: "El apellido Paterno debe tener máximo 20 caracteres",
                icon: 'error',
                confirmButtonText: 'Cerrar',
                confirmButtonColor: '#197B7A' 
            });
      }

      else if (cargo.length > 40){
        Swal.fire({
                title: "Cargo muy largo",
                text: "El cargo debe tener máximo 40 caracteres",
                icon: 'error',
                confirmButtonText: 'Cerrar',
                confirmButtonColor: '#197B7A' 
            });
      }
      else if (contrasena != contrasenaV) {
        Swal.fire({
                title: "Contraseñas diferentes",
                text: "Las contraseñas no coinciden",
                icon: 'error',
                confirmButtonText: 'Cerrar',
                confirmButtonColor: '#197B7A' 
            });
      } 
      else if (contrasena.length < 8){
        Swal.fire({
                title: "Contraseña muy corta",
                text: "La contraseña debe tener al menos 8 caracteres",
                icon: 'error',
                confirmButtonText: 'Cerrar',
                confirmButtonColor: '#197B7A' 
            });
      }
      else if (contrasena.length > 20){
        Swal.fire({
                title: "Contraseña muy larga",
                text: "La contraseña debe tener máximo 20 caracteres",
                icon: 'error',
                confirmButtonText: 'Cerrar',
                confirmButtonColor: '#197B7A' 
            });
      }

      else if (!contrasena.match(mayusculas)){
        Swal.fire({
                title:"Faltan mayúsculas",
                text: "La contraseña debe tener al menos una letra mayúscula",
                icon: 'error',
                confirmButtonText: 'Cerrar',
                confirmButtonColor: '#197B7A' 
            });
      }
      else if (!contrasena.match(minusculas)){
        Swal.fire({
                title:"Faltan minúsculas",
                text: "La contraseña debe tener al menos una letra minúscula",
                icon: 'error',
                confirmButtonText: 'Cerrar',
                confirmButtonColor: '#197B7A' 
            });
      }

      else if (!contrasena.match(numeros)){
        Swal.fire({
                title:"Faltan números",
                text: "La contraseña debe tener al menos un número",
                icon: 'error',
                confirmButtonText: 'Cerrar',
                confirmButtonColor: '#197B7A' 
            });
      }

      else if (/\s/.test(contrasena)) {
        Swal.fire({
                title:"Espacios en contraseña",
                text: "La contraseña no debe tener espacios",
                icon: 'error',
                confirmButtonText: 'Cerrar',
                confirmButtonColor: '#197B7A' 
            });
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
        
        Swal.fire({
            title: 'Campos vacíos',
            text: 'Por favor llena todos los campos',
            icon: 'error',
            confirmButtonColor: '#197B7A'
            })
      }
      else if (nombre1.length > 20){
        Swal.fire({
        title: 'Nombre muy largo',
        text: 'El Nombre debe tener máximo 20 caracteres',
        icon: 'error',
        confirmButtonColor: '#197B7A'
        })
      }
      else if (apellidoM1.length > 20){
        Swal.fire({
        title: 'Apellido muy largo',
        text: 'El Apellido Materno debe tener máximo 20 caracteres',
        icon: 'error',
        confirmButtonColor: '#197B7A'
        })
      }
      else if (apellidoP1.length > 20){
        Swal.fire({
        title: 'Apellido muy largo',
        text: 'El Apellido Paterno debe tener máximo 20 caracteres',
        icon: 'error',
        confirmButtonColor: '#197B7A'
        })
      }
      else if (cargo1.length > 40){
        Swal.fire({
        title: 'Cargo muy largo',
        text: 'El Cargo debe tener máximo 40 caracteres',
        icon: 'error',
        confirmButtonColor: '#197B7A'
        })
      }
    //   else if (cargo1.length > 40){
    //     tituloAlerta1.textContent = "Nombre de cargo";
    //     descripcionAlerta1.textContent = "El cargo debe tener maximo 40 caracteres";
    //     mostrarDialogo1();
    //     Swal.fire({
    //     title: 'Apellido muy largo',
    //     text: 'El Apellido Paterno debe tener maximo 20 caracteres',
    //     icon: 'error',
    //     confirmButtonColor: '#197B7A'
    //     })
    //   }
      else if (contrasena1 != contrasenaV1) {
        Swal.fire({
        title: 'Contraseñas diferentes',
        text: 'Las Contraseñas no coinciden',
        icon: 'error',
        confirmButtonColor: '#197B7A'
        })
      } 
      else if (contrasena1.length < 8){
        Swal.fire({
        title: 'Contraseña muy corta',
        text: 'La Contraseña debe tener al menos 8 caracteres',
        icon: 'error',
        confirmButtonColor: '#197B7A'
        })
      }
      else if (contrasena1.length > 20){
        Swal.fire({
        title: 'Contraseña muy larga',
        text: 'La Contraseña debe tener máximo 20 caracteres',
        icon: 'error',
        confirmButtonColor: '#197B7A'
        })
      }

      else if (!contrasena1.match(mayusculas1)){
        Swal.fire({
        title: 'Faltan mayúsculas',
        text: 'La contraseña debe de tener al menos una letra mayúscula',
        icon: 'error',
        confirmButtonColor: '#197B7A'
        })
      }
      else if (!contrasena1.match(minusculas1)){
        Swal.fire({
        title: 'Faltan minúsculas',
        text: 'La Contraseña debe tener al menos una letra minúscula',
        icon: 'error',
        confirmButtonColor: '#197B7A'
        })
      }

      else if (!contrasena1.match(numeros1)){
        Swal.fire({
        title: 'Faltan números',
        text: 'La Contraseña debe tener al menos un número',
        icon: 'error',
        confirmButtonColor: '#197B7A'
        })
      }
      else if (/\s/.test(contrasena1)) {
        Swal.fire({
        title: 'Espacios en Contraseña',
        text: 'La Contraseña no debe tener espacios',
        icon: 'error',
        confirmButtonColor: '#197B7A'
        })
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

<script>

        const elementos = document.querySelectorAll('.tabla');

    // Agrega un manejador de eventos "mouseenter" a cada elemento
    elementos.forEach(elemento => {
        elemento.addEventListener('mouseenter', () => {
            // El mouse está sobre este elemento
            Swal.fire({
                    backdrop: false,
                    text: 'Para editar un usuario haga doble clic.',
                    confirmButtonColor: '#197B7A',
                    timer: 5000,
                    timerProgressBar: true,
                    position: "bottom-end",
                    showConfirmButton: false
                });
        });
    });
</script>