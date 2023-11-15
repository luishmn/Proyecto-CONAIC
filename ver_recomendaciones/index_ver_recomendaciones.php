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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

            <div class="botones">
                <button id="registrar_recomendacion" class="boton_registrar">Nueva recomendación</button>
            </div>
        
    </section>

    <!-- ESTE ES EL FORMULARIO PARA REGISTRAR UNA NUEVA RECOMENDACION -->
    <div id="formularioContainer" class="oculto">

            <!-- Contenido de tu formulario aquí -->
            <form class="from-login" action="../asignarRecomendacion/guardar.php" id="formularioRegistro" method="post">
            <h1 class="centrar">Asignar recomendación</h1>
            <br>
            <div class="contenedor">
                <div class="form_c1">
                    <div class="form_group">
                        <label for="subcriterioSelect" class="form_label">Seleccione subcriterio:</label>
                        <select name="subcriterioSelect" id="subcriterioSelect">
                        <option disabled selected>Selecciona un subcriterio</option>
                            <?php
                            // Conecta a la base de datos (reemplaza los valores de conexión según tu configuración)
                            include "../conexionDB/conexion.php";
                            conecta();

                            // Verifica la conexión
                            if ($conexion->connect_error) {
                                die("Error de conexión: " . $conexion->connect_error);
                            }

                            // Consulta para obtener las opciones desde la base de datos
                            $sql = "SELECT claveSubCriterio, nombre FROM subcriterio";
                            $result = $conexion->query($sql);
                            $categorias = array(); // Para almacenar todas las categorías
                            $categorias10 = array(); // Para almacenar categorías del 1 al 10

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $nombre = mb_substr($row['nombre'], 0, 50, 'UTF-8') . (mb_strlen($row['nombre'], 'UTF-8') > 50 ? "..." : '');
                                    $opcion = "<option value='" . $row['claveSubCriterio'] . "'>" . $row['claveSubCriterio'] . '-' . $nombre . "</option>";

                                    if (preg_match("/^(10|[1-9])\./", $row['claveSubCriterio'])) {
                                        // Categorías del 1 al 10
                                        $categorias10[] = $opcion;
                                    } else {
                                        // Cualquier otra categoría
                                        $categorias[] = $opcion;
                                    }
                                }

                                usort($categorias10, 'strnatcmp');
                                usort($categorias, 'strnatcmp');
                                echo implode('', $categorias10);
                                echo implode('', $categorias);
                            }

                            $conexion->close();
                            ?>
                        </select>
                    </div>
                </div>
            </div>

            <br>
            <label for="recomendacion" class="form_label">Recomendación:</label>
            <textarea name="recomendacion" id="recomendacion" cols="30" rows="10" class="form-textarea"></textarea>
            
            <br><br><br>
            <div class="form_c10_1">
                <button type="submit" id="asignar">Asignar recomendación</button>
            </div>
        </form>
    </div>

    <!-- ESTE ES EL FORMULARIO EDITAR RECOMENDACIÓN -->
    <div id="formularioContainer1" class="oculto">

            <!-- Contenido de tu formulario aquí -->
        <form class="from-login" action="../asignarRecomendacion/guardar2.php" id="formularioRegistro1" method="post">
            <h1 class="centrar" id="titulo">Recomendación</h1>

            <input type="text" id="subcriterioSelect1" name = "subcriterioSelect1" class="oculto">
            
            <label for="recomendacion" class="form_label">Recomendación:</label>
            <textarea name="recomendacion1" id="recomendacion1" cols="30" rows="5" class="form-textarea"></textarea>
            
            <br><br>
            <label for="">Respuesta:</label>
            <div class="form_group1">
            <p id="respuesta1">No hay respuesta</p>
            </div>

            <div id="fechas">
            <div class="fechas" >
                <div class="inicio">
                    <p>Fecha de inicio</p>
                    <p id="fechaini">DD/MM/YYYY</p>
                </div>
                <div class="fin">
                    <p>Fecha de fin</p>
                    <p id="fechafin">DD/MM/YYYY</p>
                </div>
            </div>
            </div>
            <br>

            <div id="brs"> <br><br><br><br><br></div>

            <!-- AQUÍ COMIENZA LA PARTE DE LOS PDF -->
            <div id="contendArchs">
            <div class="pdfs-options" id="archivosContenedor">
                <div class="imgpdfs">
                    <p>
                        <i class="fa-solid fa-file-pdf"></i>                   
                    </p>
                </div>
            
                <div class="Listo">
                    <!--Boton-->
                    <div class="botonesPDFSgroup">
            
                        <div class="boton-modal1">
                            <Label id="namedoc">Nombre del documento</Label>
                            
                            <button class="botonSubirPDF" id="abrirBoton" type="button"><i class="fa-solid fa-up-right-from-square"></i> Visualizar PDF</button>
                            
                            <button class="botonSubirPDF" id="descargarBoton" type="button"><i class="fas fa-download"></i> Descargar PDF</button>
                            
                        </div>
                    </div>   
                </div>
            </div>
            </div>
            <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
            
            
            
            
            <div class="form_c10_1">
                <button type="submit" id="asignar"><i class="fa-solid fa-floppy-disk"></i>Guardar</button>
            </div>
            <br>
            <div class="form_c10_1">
                <button type="button" id="eliminarRec"><i class="fas fa-trash"></i>Eliminar</button>
            </div>
            
            
        </form>
    </div>

    <div id="fondoOscuro" class="oculto"></div>


    <br><br><br>
    <?php
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
            <th>Recomendación</th>
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
            echo "No se han asignado recomendaciones";

        }
            
        
        ?>
          </div>
    </div>
    
</div>
<br>


</body>
<script> // Script para aparecer y desaparecer el formulario de registro
    document.getElementById("registrar_recomendacion").addEventListener("click", function() {
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
    $(document).ready(function(){
        $('#subcriterioSelect').change(function(){
            var subcriterioSeleccionado = $(this).val();

            // Realizar la solicitud AJAX para obtener la descripción
            $.ajax({
                type: 'POST',
                url: '../asignarRecomendacion/obtener_descripcion.php', // Reemplaza con la ruta correcta a tu archivo PHP
                data: { subcriterio: subcriterioSeleccionado },
                success: function(response){
                    // Llenar el textarea con la descripción obtenida
                    $('#recomendacion').val(response);
                },
                error: function(error){
                    console.log(error);
                }
            });
        });

        $('#asignar').click(function(){
            $('#formularioRegistro').submit();
        });
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
        var subcriterio = celdas[0].textContent ;
        var descripcion = celdas[1].textContent ;
        var respuesta = celdas[2].textContent ;
        var fechaIni = celdas[3].textContent ;
        var fechaFin = celdas[4].textContent ;
        var archivo = celdas[5].textContent ; 
        var titulo = document.getElementById('titulo'); 
        var inputSub = document.getElementById('subcriterioSelect1'); 
        var recomendacion = document.getElementById('recomendacion1');   
        var respuestaCont = document.getElementById('respuesta1');
        var fechaInicio = document.getElementById('fechaini');
        var fechaFinal = document.getElementById('fechafin');
        var documento = document.getElementById('namedoc');
        
            
      
    
        //alert (subcriterio + " - " + descripcion + " - " + respuesta + " - " + fechaIni + " - " + fechaFin + " - " + archivo);
      

        
        // Muestra el contenido de la fila en una alerta
        document.getElementById("fondoOscuro").style.display = "block";
        document.getElementById("formularioContainer1").style.display = "block";
        titulo.textContent = 'Recomendación '+ subcriterio;
        inputSub.value = subcriterio;
        recomendacion.value=descripcion;

        if (respuesta == ""){
            respuestaCont.textContent = "No se ha dado respuesta a esta recomendación."
        }
        else{
            respuestaCont.textContent = respuesta;
        }

        var fechadiagonales = fechaIni.replace(/_/g, ' / ').replace(/-/g, ' / ');
        fechaInicio.textContent = fechadiagonales;
        var fechadiagonales = fechaFin.replace(/_/g, ' / ').replace(/-/g, ' / ');
        fechaFinal.textContent = fechadiagonales;

        if (fechadiagonales == "0000 / 00 / 00"){
            document.getElementById("fechas").style.display = "none";
            document.getElementById("brs").style.display = "block";
            
        }
        else{
            document.getElementById("fechas").style.display = "block";
            document.getElementById("brs").style.display = "none";
        }


        if (archivo == ""){
            documento.textContent = "No se ha subido documento";
            document.getElementById("contendArchs").style.display = "none";
        }
        else{
            documento.textContent = archivo;
            document.getElementById("contendArchs").style.display = "block";
        }
        
    });

        document.getElementById("fondoOscuro").addEventListener("click", function() {
        // Ocultar el fondo oscuro y el formulario cuando se hace clic fuera del formulario
        document.getElementById("fondoOscuro").style.display = "none";
        document.getElementById("formularioContainer1").style.display = "none";
      
    });
  }
</script>


<script>
        // Obtener el botón por su ID
        var botonDescargar = document.getElementById('descargarBoton');

        // Agregar un evento click al botón
        botonDescargar.addEventListener('click', function() {
            // Crear un enlace oculto
            var enlace = document.createElement('a');
            var documentoDesc = document.getElementById('namedoc');
            var ubicacionDoc = '../asignarRecomendacion/archivos/' + documentoDesc.textContent.trim(); // Asegúrate de quitar espacios en blanco

            // Configurar el enlace con la URL del archivo a descargar
            enlace.href = ubicacionDoc;
            
            // Configurar el nombre de descarga
            enlace.download = documentoDesc.textContent.trim(); // Puedes ajustar esto según tus necesidades

            // Añadir el enlace al documento
            document.body.appendChild(enlace);

            // Simular el clic en el enlace para iniciar la descarga
            enlace.click();

            // Eliminar el enlace del documento después de la descarga
            document.body.removeChild(enlace);
        });
</script>

<script>
        // Obtener el botón por su ID
        var abrirBoton = document.getElementById('abrirBoton');

        // Agregar un evento click al botón
        abrirBoton.addEventListener('click', function() {
            // Crear un enlace oculto
            
            var documentoDesc = document.getElementById('namedoc');

            var nuevaURL = '../asignarRecomendacion/abrirPDF.php?clavePDF=' + documentoDesc.textContent.trim();

            // Redirige a la nueva página
            window.open(nuevaURL, '_blank');
            

        });
</script>

<script>
        // Obtener el botón por su ID
        var abrirBoton = document.getElementById('eliminarRec');

        // Agregar un evento click al botón
        abrirBoton.addEventListener('click', function() {
            Swal.fire({
                title: '¿Estás seguro?',
                text: 'Esta acción eliminará la recomendación. ¿Deseas continuar?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#197B7A',
                confirmButtonText: 'Eliminar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                // Si el usuario presiona "Eliminar", ejecutar la acción
                if (result.isConfirmed) {
                    // Crear un enlace oculto
                    var inputSub = document.getElementById('subcriterioSelect1');
                    
                    var documentoDesc = inputSub.value;

                    var nuevaURL = '../asignarRecomendacion/eliminarRecomendacion.php?clave=' + documentoDesc ;

                    // Redirige a la nueva página
                    nuevaVentana = window.open(nuevaURL, '_blank');

                    nuevaVentana.onunload  = function() {
                        // Recargar la ventana actual después de que la nueva ventana se haya cargado completamente
                        location.reload();
                    };
                }
            });
            
            

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
                    text: 'Para abrir una recomendación haga doble clic.',
                    confirmButtonColor: '#197B7A',
                    timer: 5000,
                    timerProgressBar: true,
                    position: "bottom-end",
                    showConfirmButton: false
                });
        });
    });
</script>
</html>
