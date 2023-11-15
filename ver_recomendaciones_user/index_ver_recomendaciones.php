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
        <a href="/PrincipalUsuario/index.php" class="enlace-inicio" ><i class="fas fa-home"></i></a>

     
        
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


    <!-- ESTE ES EL FORMULARIO EDITAR RECOMENDACIÓN -->
    <div id="formularioContainer1" class="oculto">

            <!-- Contenido de tu formulario aquí -->
        <form class="from-login"  id="formularioRegistro1" enctype="multipart/form-data">
            <h1 class="centrar" id="titulo">Recomendación</h1>
            <input type="text" id="subcriterioSelect1" name = "subcriterioSelect1" class="oculto">
            <div class="form_group">
            <p id="descripcionContenido">TEXTO DE LA RECOMENDACION</p>
            <script>
                //var $desc = "";
                //var $clave = "";

            </script>

                <textarea name="respuesta" id="respuesta_text" rows="5" placeholder="Escriba su respuesta aqui..."></textarea>
            </div>



            <br>
            <div class="fechas">
                <div class="inicio">
                    <p>Fecha de inicio</p>
                    <input type="date" class="form-control" id="inicio1" value="<?php echo $inic1; ?>">
                </div>
                <div class="fin">
                    <p>Fecha de fin</p>
                    <input type="date" class="form-control" id="fin2" value="<?php echo $final1; ?>">
                </div>
            </div>
            

            <br>
            <!-- AQUÍ COMIENZA LA PARTE DE LOS PDF -->
            <div class="pdfs-options">
                <div class="imgpdfs">
                    <p>
                    <i class="fa-solid fa-file-pdf"></i>                      
                    </p>
                </div>
            
                <div class="Listo">
                    <!--Boton-->
                    <div class="botonesPDFSgroup">

                        <div class="espaciador" id="espaciador"></div>
            
                        <div class="boton-modal1">
                        <Label id="namedoc">No se han subido documentos</Label>

                                                    
                            <button class="botonSubirPDF" id="abrirBoton" type="button"><i class="fa-solid fa-up-right-from-square"></i> Visualizar PDF</button>
                            
                            <button class="botonSubirPDF" id="descargarBoton" type="button"><i class="fas fa-download"></i> Descargar PDF</button>
                            
                            <button class="botonSubirPDF" id="eliminarBoton" type="button"><i class="fas fa-trash"></i> Eliminar el PDF</button>
                             
                           
                        <label for="archivo" class="botonSubirPDF" id="botonSubirPDFs">
                            <i class="fas fa-upload"></i> Selecciona PDF
                            <input type="file" id="archivo" name="archivo" accept=".pdf" style="display: none;">
                        </label>
                            
                           
                            
                        </div>
                    </div>   
                </div>
            </div>
            <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
            
            
            <div class="form_c10_1">
                <button type="button" id="guardarRespuesta20"> <i class="fa-solid fa-floppy-disk"></i> Guardar</button>
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
    
    // Modificar la consulta SQL para seleccionar la columna archivo
    $sql = "SELECT descripcion, respuesta, fechaInicio, fechaTermino, claveRecomendacion, archivo
    FROM recomendaciones
    WHERE claveRecomendacion IN (SELECT claveSubCriterio FROM asignacionSubCriterio WHERE correo = '$correoUsuario');";
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
        var inputSub = document.getElementById('subcriterioSelect1');
        var titulo = document.getElementById('titulo');
        var descripContent = document.getElementById('descripcionContenido') 
        var resp = document.getElementById('respuesta_text');
        var ini = document.getElementById('inicio1');
        var fin = document.getElementById('fin2');
        var nomArch = document.getElementById('namedoc');

        var botonVer = document.getElementById('abrirBoton');
        var botonDes = document.getElementById('descargarBoton');
        var botonEli = document.getElementById('eliminarBoton');
        var espaciador = document.getElementById('espaciador');


        
        
        // Muestra el contenido de la fila en una alerta
        titulo.textContent = 'Recomendación '+ subcriterio;
        descripContent.textContent = descripcion;
        resp.value= respuesta;
        ini.value = fechaIni;
        fin.value = fechaFin;
        inputSub.value = subcriterio;

        if (archivo != ""){
            nomArch.textContent = archivo;
            botonVer.style.display = "block";
            botonDes.style.display = "block";
            botonEli.style.display = "block";
            espaciador.style.display = "none";
        }
        else{
            nomArch.textContent = "No hay archivo";
            botonVer.style.display = "none";
            botonDes.style.display = "none";
            botonEli.style.display = "none";
            espaciador.style.display = "block";
        }
        
        

        document.getElementById("fondoOscuro").style.display = "block";
        document.getElementById("formularioContainer1").style.display = "block";

        
        
       
        
    });

        document.getElementById("fondoOscuro").addEventListener("click", function() {
        // Ocultar el fondo oscuro y el formulario cuando se hace clic fuera del formulario
        document.getElementById("fondoOscuro").style.display = "none";
        document.getElementById("formularioContainer1").style.display = "none";
      
    });
  }
</script>

<script>
    // Obtener el input tipo "file" y la etiqueta <p>
    var inputArchivo = document.getElementById('archivo');
    var nombreDoc = document.getElementById('namedoc');

    // Agregar un evento change al input
    inputArchivo.addEventListener('change', function () {
        // Obtener el nombre del archivo seleccionado
        var nombreArchivo1 = inputArchivo.files[0].name;

        // Actualizar el contenido de la etiqueta <p>
        nombreDoc.textContent =nombreArchivo1;
    });
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
        var abrirBoton = document.getElementById('eliminarBoton');

        // Agregar un evento click al botón
        abrirBoton.addEventListener('click', function() {
            // Crear un enlace oculto

            Swal.fire({
                title: '¿Estás seguro?',
                text: 'Esta acción eliminará el PDF asociado. ¿Deseas continuar?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#197B7A',
                confirmButtonText: 'Eliminar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                // Si el usuario presiona "Eliminar", ejecutar la acción
                if (result.isConfirmed) {
                    var documentoDesc1 = document.getElementById('namedoc');
                    var nuevaURL = '../asignarRecomendacion/eliminarPDF.php?nombreArchivo=' + documentoDesc1.textContent.trim();
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
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('guardarRespuesta20').addEventListener('click', function() {
            event.preventDefault(); // Detener la acción predeterminada del formulario
            

            // Capturar los valores de los campos
            var respuesta = document.getElementById('respuesta_text').value;
            var inicio = document.getElementById('inicio1').value;
            var fin = document.getElementById('fin2').value;
            var archivoInput = document.getElementById('archivo'); // Nuevo input para el archivo
            var inputSub = document.getElementById('subcriterioSelect1').value;
            

            // Validaciones
            if (respuesta.trim() === '') {
                // Mensaje de error para respuesta vacía
                return Swal.fire({
                    title: 'Por favor, responda el apartado',
                    icon: 'error',
                    confirmButtonText: 'Cerrar',
                    confirmButtonColor: '#197B7A' 
                });
            } else if (inicio.trim() === '') {
                // Mensaje de error para fecha de inicio vacía
                return Swal.fire({
                    title: 'Por favor, seleccione fecha de inicio',
                    icon: 'error',
                    confirmButtonText: 'Cerrar',
                    confirmButtonColor: '#197B7A' 
                });
            } else if (fin.trim() === '') {
                // Mensaje de error para fecha de fin vacía
                return Swal.fire({
                    title: 'Por favor, seleccione fecha de fin',
                    icon: 'error',
                    confirmButtonText: 'Cerrar',
                    confirmButtonColor: '#197B7A' 
                });
            }

            // Convertir las fechas a objetos Date
            var fechaInicio = new Date(inicio);
            var fechaFin = new Date(fin);

            // Validar fechas
            if (fechaInicio > fechaFin) {
                // Mensaje de error para fechas inválidas
                return Swal.fire({
                    title: 'Por favor, seleccione fecha válida',
                    text: 'La fecha de inicio no puede ser mayor a la fecha final',
                    icon: 'error',
                    confirmButtonText: 'Cerrar',
                    confirmButtonColor: '#197B7A' 
                });
            }

            // Validar diferencia de años
            var diferenciaAnios = fechaFin.getFullYear() - fechaInicio.getFullYear();
            if (diferenciaAnios > 5) {
                // Mensaje de error para diferencia de años inválida
                return Swal.fire({
                    title: 'Por favor, seleccione fecha válida',
                    text: 'La diferencia entre la fecha de inicio y la fecha final no puede ser mayor a 5 años',
                    icon: 'error',
                    confirmButtonText: 'Cerrar',
                    confirmButtonColor: '#197B7A' 
                });
            }

            // Preparar datos para enviar al servidor
            var formData = new FormData();
            formData.append('respuesta', respuesta);
            formData.append('inicio', inicio);
            formData.append('fin', fin);
            formData.append('idd', inputSub);
            formData.append('archivo', archivoInput.files[0]); // Agregar el archivo

            // Enviar datos al servidor usando AJAX
            $.ajax({
                type: 'POST',
                url: '../asignarRecomendacion/GuardaInfo.php',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    console.log("Datos guardados correctamente");
                    window.location.href = "../asignarRecomendacion/exitoResponder.html";
    
                    //console.log(response.mensaje); // Esto se mostrará en la consola del navegador
    
                },
                error: function(error) {
                    // Manejar errores si los hay
                    console.log(error);
                }
            });

            // Mensaje de éxito
            
            
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
                    text: 'Para responder la recomendación haga doble clic.',
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
