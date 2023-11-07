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
    
    

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <script>var correoUsuario = "<?php echo $correoUsuario; ?>";</script>
    <script>var tipoUsuario = "<?php echo $tipo; ?>";</script>

    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anexos</title>
    <link rel="stylesheet" href="autoevaluacion.css">
    <script src="enviarConsulta.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <script>


        $(document).ready(function() {
            $.ajax({
                type: "GET",
                url: "recuperar_respuestasAnexos.php",
                success: function(data) {
                    var respuestas = JSON.parse(data); // Parsea el JSON como una matriz

                    const tamAry=respuestas.length;
                    var respuesta1 = respuestas[0]; // Accede a la primera respuesta
                    var respuesta2 = respuestas[1]; // Accede a la segunda respuesta


                    for (let i = 0; i <tamAry; i += 2) {
                        var localizacion="#"+respuestas[i]
                        if (localizacion.startsWith("#RS")){
                            var resp = respuestas[i+1];
                            verificar(localizacion,resp)
                        }
                        else{
                            //incerta en input
                            $(localizacion).val(respuestas[i+1]);
                            console.log(localizacion)

                        }

                    }
                    // Llamamos a la función verificar y pasamos respuesta1 como argumento
                                 
        }

            });

        function verificar(loc,respuesta1) {
            console.log(loc)
            if (respuesta1 === "si") {
                $(loc+" option[value='si']").prop("selected", true);
            }
            if (respuesta1 === "no") {
                $(loc+" option[value='no']").prop("selected", true);
            }
            if (respuesta1 === " ") {
                $(loc+" option").prop("selected", false);
                }
            }
        });

        $(document).ready(function() {
        $("#guardarRespuesta1").click(function() {
            var id1 = "RA1";
            var respuesta1 = $("#RA1").val();

            var arreglo = [id1,respuesta1];
            BDatos(arreglo)

        });

        $("#guardarRespuesta2").click(function() {
            var id1 = "RA2";
            var respuesta1 = $("#RA2").val();
            var arreglo = [id1,respuesta1];
            BDatos(arreglo)

        });

        $("#guardarRespuesta3").click(function() {
            var id1 = "RA3";
            var respuesta1 = $("#RA3").val();
            var id2 = "RA3-A1";
            var respuesta2 = $("#RA3-A1").val();
            var id3 = "RA3-A2";
            var respuesta3 = $("#RA3-A2").val();
            var id4 = "RA3-A3";
            var respuesta4 = $("#RA3-A3").val();

            var arreglo = [id1,respuesta1,id2,respuesta2,id3,respuesta3,id4,respuesta4];
            BDatos(arreglo)

        });


        function BDatos(arreglo){
                $.ajax({
                    type: "POST", 
                    url: "guardar_respuesta.php",
                    data: {
                        arre: JSON.stringify(arreglo) // Debe coincidir con el nombre del índice esperado en el servidor
                    },
                    success: function(response) {
                        Swal.fire({
                                backdrop: false,
                                text: 'Guardado correctamente',
                                confirmButtonColor: '#197B7A',
                                timer: 1000,
                                timerProgressBar: true,
                                position: "bottom-end",
                                showConfirmButton: false
                            });
                    }
                });

            }



    });

        


    </script>
</head>

<body>
    

    <header>
        <div class="barra-superior"><!-- ESTE ES EL DIV DE LA BARRA SUPERIOR -->
        <a href="" class="enlace-inicio" id="enviarInicio"><i class="fas fa-home"></i></a>

     
        
            <label class="L1">Autoevaluación</label>

            <button class="menu_estilo_usuario">
                <img src="../PrincipalUsuario/usuario.png" alt="Usuario"> 
                <div class="texto"> <?php echo $nombreUsuario; ?></div>
            </button>

        

            
        </div>
    </header>


    <img src="logo_CONAIC_letras.png" class="logoArriba">

    <div class="lablCat">
                <label class="catE">Categorías</label><br>
        </div>
    <div class="todo">
        
        <div class="cuadro2">
            <div>
                <div class="elemetosMenuLateral" id="1">
                    <hr>
                    <a href="categoria1.php">
                        <p class="parrafo1">Categoría 1 <i class="fas fa-arrow-right" ></i></p>
                    </a> 
                </div>
                <div class="elemetosMenuLateral" id="2">
                    <hr>
                    <a href="categoria2.php">
                        <p class="parrafo1">Categoría 2 <i class="fas fa-arrow-right" ></i></p>
                    </a>
                </div>
                <div class="elemetosMenuLateral" id="3">
                    <hr>
                    <a href="categoria3.php">
                        <p class="parrafo1">Categoría 3 <i class="fas fa-arrow-right" ></i></p>
                    </a>
                </div>
                <div class="elemetosMenuLateral" id="4">
                    <hr>
                    <a href="categoria4.php">
                        <p class="parrafo1">Categoría 4  <i class="fas fa-arrow-right" ></i></p>
                    </a>
                </div>
                <div class="elemetosMenuLateral" id="5">
                    <hr>
                    <a href="categoria5.php">
                        <p class="parrafo1">Categoría 5 <i class="fas fa-arrow-right" ></i></p>
                    </a>
                </div>
                <div class="elemetosMenuLateral" id="6">
                    <hr>
                    <a href="categoria6.php">
                        <p class="parrafo1">Categoría 6 <i class="fas fa-arrow-right" ></i></p>
                    </a>
                </div>
                <div class="elemetosMenuLateral" id="7">
                    <hr>
                    <a href="categoria7.php">
                        <p class="parrafo1">Categoría 7 <i class="fas fa-arrow-right" ></i></p>
                    </a>
                </div>
                <div class="elemetosMenuLateral" id="8">
                    <hr>
                    <a href="categoria8.php">
                        <p class="parrafo1">Categoría 8 <i class="fas fa-arrow-right" ></i></p>
                    </a>
                </div>
                <div class="elemetosMenuLateral" id="9">
                    <hr>
                    <a href="categoria9.php">
                        <p class="parrafo1">Categoría 9 <i class="fas fa-arrow-right" ></i></p>
                    </a>
                </div>
                <div class="elemetosMenuLateral" id="10">
                    <hr>
                    <a href="categoria10.php">
                        <p class="parrafo1">Categoría 10 <i class="fas fa-arrow-right" ></i></p>
                    </a>
                </div>
                <div class="elemetosMenuLateral" id="11">
                    <hr>
                    <a href="anexos.php">
                        <p class="parrafo1">Anexos <i class="fas fa-arrow-right" ></i></p>
                    </a>
                </div>
                <br>
            </div>
        </div>

        <div class="cuadroCate">
            <div class="titulo_categoria">Anexos</div>

            <div>
                <div class="parrafo" id="11.1">
                    <p>
                        ANEXO 1
                    </p>
                </div>
                <div class="preguntasCategoria" id="SC_11.1.1">
                    <p>Estudiantes que aprobaron el EGEL-CENEVAL
                     </p>
                    <p>
                    <a href="../Documentos/CATEGORIA11/1_1.docx" class="etiquetaDescarga">Descargar formato</a>
                </p> 
                <p>
                    <a href="../Documentos/CATEGORIA11/1_2.docx" class="etiquetaDescarga">Descargar formato</a>
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
                        <button class="botonSubirPDF" id="botonSubir-subanexo1"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-subanexo1"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                </div>

            <div>
                <div class="parrafo" id="11.2">
                    <p>
                        ANEXO 2
                    </p>
                </div>
                <div class="preguntasCategoria" id="SC_11.2.1">
                    <p>Estructura Financiera de la Facultad, Escuela, División o Departamento
                    </p>
                    <p>
                    <a href="../Documentos/CATEGORIA11/2.docx" class="etiquetaDescarga">Descargar formato</a>
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
                        <button class="botonSubirPDF" id="botonSubir-subanexo2"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-subanexo2"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
            
            </div>

            <div>
                <div class="parrafo" id="11.3">
                    <p>
                        ANEXO 3
                    </p>
                </div>
                <div class="preguntasCategoria" id="SC_11.3.1">
                    <p>Nota: Llenar sólo en caso de re-acreditación.                    </p>
                    <p>Seguimiento de Recomendaciones</p>
                    <p>Recomendaciones al programa académico</p>
                    <p>El anexo 3 relativo a las recomendaciones es para el instrumento que se utilice en la visita de campo.
                    </p>
                    <p>
                    <a href="../Documentos/CATEGORIA11/3_1.docx" class="etiquetaDescarga">Descargar formato</a>
                </p> 
                <p>
                    <a href="../Documentos/CATEGORIA11/3_2.docx" class="etiquetaDescarga">Descargar formato</a>
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
                        <button class="botonSubirPDF" id="botonSubir-subanexo3"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-subanexo3"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                </div>
            </div>


        </div>
    </div>
    </div>



     <!-- Ventanas emergentes de los PDF Copiar -->



     <div id="subirarchivos" class="oculto">
            <br>
            <form class="from-login1" action="../funcion_guardarpdf/upload.php" method="post" enctype="multipart/form-data" id="uploadForm">
            <h2>Subir PDF</h2>
                <label class="custom-file-label">
                    <input type="file" name="archivo[]" accept=".pdf" class="custom-file-input" id="file-input1" multiple>
                    
                    <span class="icon"><i class="fa fa-file-pdf-o"></i></span> Seleccionar PDF
                </label>
                <div id="selected-files1" class="titulosArchs">
                </div>
                <br>
                <button id="botonSubirChido" class="cargar-pdf" data-id="anexo1">
                    <i class="fas fa-upload"></i> Subir PDF
                </button>

                <!-- Esta es la imagen de carga -->
                <img id="imgcarga" class="oculto" src="../imagenes/cargando.webp" alt="Cargando..." />
                <!-- ----------->
                

                <br><br>
            </form>
    </div>

    <div id="tablaConPDF-subcriterio" class="oculto">
        <form class="from-login" action="recuperarcontra/recuperarcontra.php" id="formularioEditar" method="post">
            <h1>Archivos PDF</h1>
            <table id="tablaPDFs" class="tablaspdf">
                
            </table>
        </form>
    </div>
    
    <div id="fondoOscuro" class="oculto"></div>

    <!-- Hasta aquí -->


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
        document.getElementById("subirarchivos").style.display = "none";
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
    document.addEventListener("DOMContentLoaded", function () {
        var imagenCargando = document.getElementById("imgcarga");
        var button = document.querySelector(".cargar-pdf");
        var form = document.getElementById("uploadForm");

        button.addEventListener("click", function (e) {
            e.preventDefault();

            var id = this.getAttribute("data-id");
            var fileInput = form.querySelector("input[type='file']");
            var files = fileInput.files;

            if (files.length === 0) {
                Swal.fire({
                    title: 'Selecciona al menos un archivo.',
                    icon: 'error',
                    confirmButtonColor: '#145070'
                });

                return;
            }

            var formData = new FormData();

            for (var i = 0; i < files.length; i++) {
                formData.append("archivo[]", files[i]);
            }

            formData.append("id", id);

            var xhr = new XMLHttpRequest();
            

            
            //ESTO ES PARA LA ANIMACION DE CARGA DE SUBIR ARCHIVOS
            button.className = "oculto";
            imagenCargando.classList.remove("oculto");
            imagenCargando.classList.add("loading-gif");
            //HASTA AQUÍ
            

            xhr.open("POST", "../funcion_guardarpdf/upload.php", true);

            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        function limpiarSeleccion() {
                            const selectedFiles = document.getElementById('selected-files1');
                            const fileItem = document.createElement('div');
                            selectedFiles.innerHTML = ''; // Limpiar la lista de archivos seleccionados
                            fileItem.textContent = "";
                            selectedFiles.appendChild(fileItem);           
                            
                        };
                        
                        limpiarSeleccion();

                        //ESTO ES PARA LA ANIMACION DE CARGA DE SUBIR ARCHIVOS
                        button.className = "cargar-pdf";
                        imagenCargando.classList.remove("loading-gif");
                        imagenCargando.classList.add("oculto");
                        //HASTA AQUÍ

                        Swal.fire({
                            title: 'Archivos subidos correctamente.',
                            icon: 'success',
                            confirmButtonColor: '#145070'
                        });
                    } else {
                        
                        //ESTO ES PARA LA ANIMACION DE CARGA DE SUBIR ARCHIVOS
                        button.className = "cargar-pdf";
                        imagenCargando.classList.remove("loading-gif");
                        imagenCargando.classList.add("oculto");
                        //HASTA AQUÍ


                        Swal.fire({
                            title: 'Error de carga.',
                            icon: 'error',
                            confirmButtonColor: '#145070'
                        });
                    }
                }
            };

            xhr.send(formData);
        });
    });
</script>

<script>
        const fileInput = document.getElementById('file-input1');
        const selectedFiles = document.getElementById('selected-files1');

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


<script>
    document.addEventListener("DOMContentLoaded", function() {
        const botonesSubir = document.querySelectorAll(".botonSubirPDF");
        const botonChido = document.getElementById("botonSubirChido");

        
        function subirPDF() {
            // Mostrar el fondo oscuro y la tabla
            const idBoton1 = event.target.id;
            var idbuscar1 = idBoton1.replace(/^botonSubir-/, '');
            document.getElementById("fondoOscuro").style.display = "block";
            document.getElementById("subirarchivos").style.display = "block";
            botonChido.dataset.id = idbuscar1;
            
        


            
            //alert ("Se presionó el botón con id: " + idBoton);
            document.getElementById("fondoOscuro").addEventListener("click", function() {
            // Ocultar el fondo oscuro y el formulario cuando se hace clic fuera del formulario
            document.getElementById("fondoOscuro").style.display = "none";
            document.getElementById("subirarchivos").style.display = "none";
        });
        }
        botonesSubir.forEach(function(boton) {
            boton.addEventListener("click", subirPDF);
        });
    });
</script>

