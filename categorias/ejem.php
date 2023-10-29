<?php
    session_start();
    //$_SESSION['loggedin']= false;
    // Verifica si el usuario ha iniciado sesión
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
        // Accede al nombre de usuario almacenado en la sesión
        $nombreUsuario = $_SESSION['username'];
        $correoUsuario = $_SESSION['email'];
        $tipo = $_SESSION['tipo'];
    } else {
        // Si no ha iniciado sesión, redirige al usuario a la página de inicio de sesión
        header('Location: ../index.php');
        exit;
    }

    $nombre = substr($nombreUsuario, 0, 10);

    include "../conexionDB/conexion.php";
    conecta();
    if(!$conexion){
        echo "<script>alert('Ocurrió un error al conectar con la Base de Datos. Vuelva a iniciar sesión.');</script>";
    }
    

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script>var correoUsuario = "<?php echo $correoUsuario; ?>";</script>
    <script>var tipoUsuario = "<?php echo $tipo; ?>";</script>

    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoria 2</title>
    <link rel="stylesheet" href="autoevaluacion.css">
    <script src="enviarConsulta.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">


</head>

<body>
    <div class="todo">

        <div class="cuadroCate">
            <div class="titulo_categoria">Categoría 2: Estudiantes</div>

            <div>
                <div class="parrafo" id ="2.1">
                    <p>
                        2.1 Selección. Es necesario que exista claridad en la selección de aspirantes al programa educativo, por lo que debe existir de forma explícita, los criterios de admisión que indique el mínimo de condiciones que los estudiantes de nuevo ingreso deben cumplir para ser admitidos al programa.

                    </p>
                

                    <!-- <img src="" alt=""><button>Guardar</button> -->
                    
                    <!-- AQUÍ COMIENZA LA PARTE DE LOS PDF -->
                    <br><br>
                    <div class="pdfs-options">
                        <div class="imgpdfs">
                            <label >
                                <i class="fas fa-file-pdf"></i> 
                            </label>
                        </div>
                    
                    <div class="Listo">
                        <!--Boton-->
                
                    <div class="botonesPDFSgroup">
                
                    <div class="boton-modal1">
                        <label for="btn-modal1">
                            <i class="fas fa-upload"></i> Subir PDF
                        </label>
                    </div>
                    <!--Fin de Boton-->

                    
                    <!--Ventana Modal-->
                    <input type="checkbox" id="btn-modal1">
                        <div class="container-modal1">
                            <div class="content-modal1">
                                <h2>Subir tu PDF</h2>
                                <form method="POST" action="subir_pdf.php" enctype="multipart/form-data">
                                    <label class="custom-file-label">
                                        <input type="file" name="archivo" accept=".pdf" class="custom-file-input" id="file-input" multiple>
                                        <span class="icon"><i class="fa fa-file-pdf-o"></i></span> Seleccionar PDF
                                        <input type="hidden" name="claveSubCriterio" value="2.1.1">
                                    </label>
                                    <div class="selected-files" id="selected-files"></div>
                                    <br>

                                    <input type="submit" value="Cargar PDF" class="submitPDF">
                                    <br><br>
                                    <label for="btn-modal1" class="cerrar1">Cerrar</label>
                                    <input type="hidden" name="claveSubCriterio" value="2.1.1"> <!-- Clave fija -->
                
                                </form>                            
                            </div>
                        </div>
                        </div>
                        <!--Fin de Ventana Modal-->

                        <!-- Botón -->
                        <!-- AQUÍ COMIENZA LA PARTE DE LOS PDF -->
                    <br><br>



                    <div class="pdfs-options">
                    <button class ="botonesMostrarPDF" id="subcriterio-2.1.1">Mostrar PDF</button>                   
                    </div>


                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                        
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->

                    <div class="btnListo"><button id="guardarRespuesta1">Guardar</button></div>
                </div>
                
















            <div>
                <div class="parrafo" id="2.2">
                    <p>
                        2.2 Ingreso (estudiantes de nuevo ingreso).  Se requiere conocer las características de  los estudiantes de nuevo ingreso para canalizarlos a programas de apoyo, con el fin de prevenir situaciones de riesgo (reprobación y deserción).

                    </p>
                </div>
                    <!-- AQUÍ COMIENZA LA PARTE DE LOS PDF -->
                    <br><br>
                    <div class="pdfs-options">
                    <button class ="botonesMostrarPDF" id="subcriterio-2.2.1">Mostrar PDF</button>                   
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta2">Guardar</button></div>
                </div>



        </div>    
    </div>





    
    <div id="tablaConPDF-subcriterio" class="oculto">
        <form class="from-login" action="recuperarcontra/recuperarcontra.php" id="formularioEditar" method="post">
            <h1>Archivos PDF</h1>
            <table id="tablaPDFs" class="tablaspdf">
                
            </table>
        </form>
    </div>
    
    <div id="fondoOscuro" class="oculto"></div>


</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    document.addEventListener("visibilitychange", function() {
    if (document.hidden) {
        // El usuario cambió a otra pestaña o aplicación
        document.getElementById("fondoOscuro").style.display = "none";
        document.getElementById("tablaConPDF-subcriterio").style.display = "none";
    } else {
        // El usuario volvió a esta pestaña
        console.log("El usuario volvió a esta pestaña");
        }
    });

</script>

<script>
    function actualizartablas(idtabla) {
        const tablaPDFs = document.getElementById('tablaPDFs');
        const claveSubcriterio = idtabla; 

        // Realizar una solicitud AJAX para obtener los datos de la tabla
        fetch(`tablas.php?claveSubcriterio=${claveSubcriterio}`)
            .then(response => response.text())  // Cambia "text" a "json" si generas JSON
            .then(data => {
                // Actualizar el contenido de la tabla con los datos obtenidos
                tablaPDFs.innerHTML = data;
            })
            .catch(error => {
                console.error('Error al obtener los datos de la tabla:', error);
            });
        
    };
    
    
</script>

<script> // Script para aparecer y desaparecer tabla con los PDF, no modificar
    document.addEventListener("DOMContentLoaded", function() {
        const botonesMostrarPDF = document.querySelectorAll(".botonesMostrarPDF");
        
        function mostrarPDF() {
            // Mostrar el fondo oscuro y la tabla
            const idBoton = event.target.id;
            var idbuscar = idBoton.replace(/^subcriterio-/, '');
            document.getElementById("fondoOscuro").style.display = "block";
            document.getElementById("tablaConPDF-subcriterio").style.display = "block";
            actualizartablas(idbuscar);
        


            
            //alert ("Se presionó el botón con id: " + idBoton);
            document.getElementById("fondoOscuro").addEventListener("click", function() {
            // Ocultar el fondo oscuro y el formulario cuando se hace clic fuera del formulario
            document.getElementById("fondoOscuro").style.display = "none";
            document.getElementById("tablaConPDF-subcriterio").style.display = "none";
        });
        }
        botonesMostrarPDF.forEach(function(boton) {
            boton.addEventListener("click", mostrarPDF);
        });
    });

</script>

<script>
        const fileInput = document.getElementById('file-input');
        const selectedFiles = document.getElementById('selected-files');

        fileInput.addEventListener('change', function() {
            selectedFiles.innerHTML = ''; // Limpiar la lista de archivos seleccionados

            const files = fileInput.files;
            for (let i = 0; i < files.length; i++) {
                const fileName = files[i].name;
                const fileItem = document.createElement('div');
                fileItem.textContent = fileName;
                selectedFiles.appendChild(fileItem);
            }
        });
</script>


<?php
$conexion->close();
?>