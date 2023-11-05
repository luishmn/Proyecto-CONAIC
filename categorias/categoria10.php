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
    <title>Categoría 10</title>
    <link rel="stylesheet" href="autoevaluacion.css">
    <script src="enviarConsulta.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <script>
        $(document).ready(function() {
            $.ajax({
                type: "GET",
                url: "recuperar_respuestas10.php",
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

            
        
            $(document).ready(function() {
                $("#guardarRespuesta1").click(function() {
                    var id1 = "RS10-1-1A1";
                    var respuesta1 = $("#RS10-1-1A1").val();

                    var id2 = "R10-1-1";
                    var respuesta2 = $("#R10-1-1").val();

                    var arreglo = [id1,respuesta1, id2,respuesta2];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta2").click(function() {

                    var id3 = "RS10-1-2A1";
                    var respuesta3 = $("#RS10-1-2A1").val();

                    var id4 = "R10-1-2";
                    var respuesta4 = $("#R10-1-2").val();

                    var arreglo = [id3,respuesta3, id4,respuesta4];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta3").click(function() {

                    var id5 = "RS10-1-3A1";
                    var respuesta5 = $("#RS10-1-3A1").val();

                    var id6 = "R10-1-3";
                    var respuesta6 = $("#R10-1-3").val();

                    var arreglo = [id5,respuesta5, id6,respuesta6];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta4").click(function() {

                    var id7 = "RS10-1-4A1";
                    var respuesta7 = $("#RS10-1-4A1").val();

                    var arreglo = [id7,respuesta7];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta5").click(function() {

                    var id8 = "RS10-2-1A1";
                    var respuesta8 = $("#RS10-2-1A1").val();

                    var id9 = "R10-2-1";
                    var respuesta9 = $("#R10-2-1").val();

                    var arreglo = [id8,respuesta8, id9,respuesta9];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta6").click(function() {

                    var id10 = "RS10-2-2A1";
                    var respuesta10 = $("#RS10-2-2A1").val();

                    var id11 = "R10-2-2";
                    var respuesta11 = $("#R10-2-2").val();

                    var arreglo = [id10,respuesta10, id11,respuesta11];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta7").click(function() {

                    var id12 = "RS10-3-1A1";
                    var respuesta12 = $("#RS10-3-1A1").val();

                    var id13 = "R10-3-1";
                    var respuesta13 = $("#R10-3-1").val();

                    var id14 = "RS10-3-1A2";
                    var respuesta14 = $("#RS10-3-1A2").val();

                    var id15 = "R10-3-1A1";
                    var respuesta15 = $("#R10-3-1A1").val();

                    var arreglo = [id12,respuesta12, id13,respuesta13, id14,respuesta14, id15,respuesta15];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta8").click(function() {

                    var id16 = "RS10-3-2A1";
                    var respuesta16 = $("#RS10-3-2A1").val();

                    var arreglo = [id16,respuesta16];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta9").click(function() {

                    var id17 = "RS10-3-3A1";
                    var respuesta17 = $("#RS10-3-3A1").val();

                    var id18 = "R10-3-3";
                    var respuesta18 = $("#R10-3-3").val();

                    var arreglo = [id17,respuesta17, id18,respuesta18];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta10").click(function() {

                    var id19 = "R10-3-4";
                    var respuesta19 = $("#R10-3-4").val();

                    var arreglo = [id19,respuesta19];
                    console.log(arreglo)
                    
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
                <div class="texto"> <?php echo $nombre; ?></div>
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
            <div class="titulo_categoria">Categoría 10: Gestión administrativa y financiamiento</div>

            <div>
                <div class="parrafo" id="10.1">
                    <p>
                        10.1 Planeación, evaluación y organización. La Facultad, escuela, división 
                        o departamento cuentan con instrumentos de planeación, evaluación y 
                        organización que le permitan tener una eficaz y eficiente gestión administrativa.
                    </p>
                </div>
                <div class="preguntasCategoria" id="SC_10.1.1">
                    <p>10.1.1. ¿Se cuenta con un Programa de Desarrollo Institucional (PDI) 
                        y con programas a mediano y corto plazo derivados del PDI? </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS10-1-1A1">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <br>

                    <p>En caso afirmativo mencione los puntos principales.                     </p>
                    <textarea id="R10-1-1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
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
                        <button class="botonSubirPDF" id="botonSubir-10.1.1"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-10.1.1"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta1">Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="SC_10.1.2">
                    <p>10.1.2. La planeación del programa debe ser realizada por el personal académico.</p>
                    <p>¿La planeación del programa (incluyendo el plan presupuestal) es realizada 
                        por su personal académico?</p>
                    
                    <div class="opcMult" °>
                        <select name="select" id="RS10-1-2A1">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <br>

                    <p>En caso afirmativo, describa cómo se realiza:                    </p>
                    <textarea id="R10-1-2" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                    <p>Evaluación.</p>
                    
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
                        <button class="botonSubirPDF" id="botonSubir-10.1.2"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-10.1.2"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta2">Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="SC_10.1.3">
                    <p>10.1.3. ¿Se efectúan sistemáticamente evaluaciones integrales 
                        para conocer el grado de cumplimiento de las metas de los 
                        programas a largo, mediano y corto plazo que permitan la 
                        toma de decisiones?</p>
                    <div class="opcMult" °>
                        <select name="select" id="RS10-1-3A1">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <br>

                    <p>En caso afirmativo, describa cómo se realiza:                    </p>
                    <textarea id="R10-1-3" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                    
                    <p>Organización.</p>
                    
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
                        <button class="botonSubirPDF" id="botonSubir-10.1.3"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-10.1.3"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta3">Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="SC_10.1.4">
                    <p>10.1.4 ¿La institución tiene establecida una normatividad clara 
                        y precisa que relacione las actividades administrativas con las 
                        académicas y se encuentra operacionalizada a través de reglamentos 
                        y manuales (de organización y procedimientos)?</p>
                    <div class="opcMult" °>
                        <select name="select" id="RS10-1-4A1">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <br>

                    <p><li>En caso afirmativo proporcione una copia de este.</li></p>
                    <p><li>En caso afirmativo proporcione una copia o copias de los documentos 
                        (puedes subir más de un archivo).</li></p>
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
                        <button class="botonSubirPDF" id="botonSubir-10.1.4"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-10.1.4"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta4">Guardar</button></div>
                </div>
            </div>

            <div>
                <div class="parrafo" id="10.2">
                    <p>
                        10.2 Recursos humanos administrativos, de apoyo y de servicio. La 
                        institución debe valorar la función académico - administrativa y 
                        tendrá la obligación de tener al personal más capacitado en la 
                        administración de las actividades académicas.

                    </p>
                </div>
                <div class="preguntasCategoria" id="SC_10.2.1">
                    <p>10.2.1 ¿Tiene establecida la Institución una normatividad que defina los 
                        requisitos para quienes ejercen funciones académico-administrativas?
                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS10-2-1A1">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <br>
                    
                    <p>En caso afirmativo explique en qué consisten.</p>
                    <textarea id="R10-2-1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                    
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
                        <button class="botonSubirPDF" id="botonSubir-10.2.1"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-10.2.1"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta5">Guardar</button></div>
                </div>
                <div class="preguntasCategoria" id="SC_10.2.">
                    <p>10.2.2 Las actividades académicas no deben estar subordinadas a los procesos administrativos.</p>
                    
                    <p>En la práctica, ¿hay actividades académicas subordinadas a procesos administrativos?</p>
                    <div class="opcMult" °>
                        <select name="select" id="RS10-2-2A1">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <br>

                    <p>En caso afirmativo, mencione las más importantes:</p>                    
                    <textarea id="R10-2-2" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
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
                        <button class="botonSubirPDF" id="botonSubir-10.2.1"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-10.2.1"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta6">Guardar</button></div>
                </div>
            </div>

            <div>
                <div class="parrafo" id="10.3">
                    <p>
                        10.3 Recursos financieros. Deben existir criterios claramente establecidos 
                        para la determinación de gastos de mantenimiento y operación de laboratorios, 
                        talleres y demás infraestructura.
                    </p>
                </div>
                <div class="preguntasCategoria" id="SC_10.3.1">
                    <p>10.3.1 Cuando en la institución exista una política definida para la asignación 
                        del presupuesto, el programa debe hacer un análisis de ella y ver si es 
                        congruente con sus necesidades. En caso de que no lo sea, debe elaborar 
                        un modelo adecuado de sus necesidades que considere, entre otras cosas, 
                        salarios, mejorar al personal académico, gastos de operación, inversiones, 
                        compra de nuevos equipos y sustitución de los existentes, así como 
                        ampliaciones a la planta física.</p>

                    <p>La institución tiene claramente definidas las políticas y criterios para la 
                        asignación del presupuesto del programa.</p>

                    <div class="opcMult" °>
                        <select name="select" id="RS10-3-1A1">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <br>

                    <p>En caso afirmativo describa brevemente cuáles son:</p>
                    <textarea id="R10-3-1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                    <p>¿Se han realizado análisis de estas para ver si son congruentes con 
                        las necesidades de la institución?
                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS10-3-1A2">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>

                    <p>En caso afirmativo mencione las principales decisiones que se han 
                        tomado con relación a las políticas de
                        asignación presupuestal:</p>
                    <textarea id="R10-3-1A1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
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
                        <button class="botonSubirPDF" id="botonSubir-10.3.1"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-10.3.1"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta7">Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="SC_10.3.2">
                    <p>10.3.2 El programa debe tener de manera explícita un plan presupuestal 
                        acorde con sus necesidades de operación y planes de desarrollo.</p>
                    <p>El programa cuenta con un plan presupuestal acorde con sus necesidades 
                        y planes de desarrollo:</p>
                    <div class="opcMult" °>
                        <select name="select" id="RS10-3-2A1">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>

                    <p><li>En caso afirmativo proporcione una copia de este.</li></p>
                    <p><li>En caso afirmativo proporcione una copia o copias de los 
                        documentos (puedes subir más de un archivo).
                    </li></p>
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
                        <button class="botonSubirPDF" id="botonSubir-10.3.2"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-10.3.2"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta8">Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="SC_10.3.3">
                    <p>10.3.3 ¿El programa cuenta con criterios claramente establecidos para 
                        la determinación de gastos de mantenimiento y operación de 
                        laboratorios y talleres?</p>
                    <div class="opcMult" °>
                        <select name="select" id="RS10-3-3A1">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>

                    <p>En caso afirmativo mencione los más importantes.</p>
                    <textarea id="R10-3-3" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
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
                        <button class="botonSubirPDF" id="botonSubir-10.3.3"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-10.3.3"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta9">Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="SC_10.3.4">
                    <p>10.3.4 El programa debe tener definidos claramente sus costos globales 
                        de operación, a través de los gastos en sueldos y salarios del personal 
                        que participe, así como sus gastos de operación y las inversiones para 
                        la compra de nuevos equipos y sustitución de estos.
                    </p>

                    <p>Será muy conveniente que presente un análisis de los costos de operación 
                        del programa (sueldos y salarios, gastos de operación y mantenimiento, 
                        depreciación del equipo, gasto estimado por renta de las instalaciones, etc.) 
                        y lo relacione con los beneficios obtenidos (No. de estudiantes atendidos, 
                        servicios brindados, etc.). Aunque este análisis no es fácil de realizar, ni se 
                        puede hacer en forma exacta pues algunas estimaciones son subjetivas, se 
                        debe procurar obtener aproximaciones muy útiles para la distribución o 
                        redistribución de los recursos.</p>
                    <textarea id="R10-3-4" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
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
                        <button class="botonSubirPDF" id="botonSubir-10.3.4"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-10.3.4"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta10">Guardar</button></div>
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
                <button id="botonSubirChido" class="cargar-pdf" data-id="10.1.1">
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

