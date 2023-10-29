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
    <title>Categoria 5</title>
    <link rel="stylesheet" href="autoevaluacion.css">
    <script src="enviarConsulta.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        

        $(document).ready(function() {
            $.ajax({
                type: "GET",
                url: "recuperar_respuestas5.php",
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
                    var id1 = "RS5-1-1A1";
                    var respuesta1 = $("#RS5-1-1A1").val();

                    var id2 = "R5-1-1";
                    var respuesta2 = $("#R5-1-1").val();

                    var arreglo = [id1,respuesta1,id2,respuesta2];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta2").click(function() {
                    var id1 = "R5-2-1";
                    var respuesta1 = $("#R5-2-1").val();

                    var arreglo = [id1,respuesta1];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta3").click(function() {
                    var id1 = "R5-2-2";
                    var respuesta1 = $("#R5-2-2").val();

                    var arreglo = [id1,respuesta1];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta4").click(function() {
                    var id1 = "R5-3-1";
                    var respuesta1 = $("#R5-3-1").val();

                    var arreglo = [id1,respuesta1];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta5").click(function() {
                    var id1 = "R5-3-2";
                    var respuesta1 = $("#R5-3-2").val();

                    var arreglo = [id1,respuesta1];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta6").click(function() {
                    var id1 = "RS5-4-1A1";
                    var respuesta1 = $("#RS5-4-1A1").val();

                    var id2 = "R5-4-1";
                    var respuesta2 = $("#R5-4-1").val();

                    var arreglo = [id1,respuesta1,id2,respuesta2];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta7").click(function() {
                    var id1 = "RS5-4-2A1";
                    var respuesta1 = $("#RS5-4-2A1").val();

                    var id2 = "R5-4-2";
                    var respuesta2 = $("#R5-4-2").val();

                    var arreglo = [id1,respuesta1,id2,respuesta2];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta8").click(function() {
                    var id1 = "RS5-4-3A1";
                    var respuesta1 = $("#RS5-4-3A1").val();

                    var id2 = "R5-4-3";
                    var respuesta2 = $("#R5-4-3").val();

                    var arreglo = [id1,respuesta1,id2,respuesta2];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta9").click(function() {
                    var id1 = "RS5-5-1A1";
                    var respuesta1 = $("#RS5-5-1A1").val();

                    var id2 = "R5-5-1";
                    var respuesta2 = $("#R5-5-1").val();

                    var arreglo = [id1,respuesta1,id2,respuesta2];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta10").click(function() {
                    var id1 = "RS5-5-2A1";
                    var respuesta1 = $("#RS5-5-2A1").val();

                    var id2 = "R5-5-2";
                    var respuesta2 = $("#R5-5-2").val();

                    var arreglo = [id1,respuesta1,id2,respuesta2];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta11").click(function() {
                    var id1 = "RS5-6-1A1";
                    var respuesta1 = $("#RS5-6-1A1").val();

                    var id2 = "R5-6-1";
                    var respuesta2 = $("#R5-6-1").val();

                    var id3 = "RS5-6-1A2";
                    var respuesta3 = $("#RS5-6-1A2").val();

                    var id4 = "R5-6-1A1";
                    var respuesta4 = $("#R5-6-1A1").val();

                    var arreglo = [id1,respuesta1,id2,respuesta2,id3,respuesta3,id4,respuesta4];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta12").click(function() {
                    var id1 = "RS5-7-1A1";
                    var respuesta1 = $("#RS5-7-1A1").val();

                    var id2 = "R5-7-1";
                    var respuesta2 = $("#R5-7-1").val();

                    var id3 = "R5-7-1A1";
                    var respuesta3 = $("#R5-7-1A1").val();

                    var id4 = "R5-7-1A2";
                    var respuesta4 = $("#R5-7-1A2").val();

                    var id5 = "R5-7-1A3";
                    var respuesta5 = $("#R5-7-1A3").val();

                    var arreglo = [id1,respuesta1,id2,respuesta2,id3,respuesta3,id4,respuesta4,id5,respuesta5];
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
                            timer: 5000,
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
            <div class="titulo_categoria">Categoría 5: Formación Integral</div>  
            <div>
                <div class="parrafo" id="5.1">
                    <p>
                        5.1 Desarrollo de emprendedores. Existen estrategias que propicien una actitud emprendedora mediante
                            la operación de programas de Desarrollo de Emprendedores, cursos, talleres, incubadoras de empresas o
                            similares.
                    </p>
                </div>

                <div class="preguntasCategoria" id="SC_5.1.1">
                    <p>5.1.1 ¿Existen estrategias que propicien una actitud emprendedora mediante la operación de programas
                            de Desarrollo de Emprendedores, cursos, talleres, incubadoras de empresas o similares? </p>

                    <div class="opcMult" °>
                        <select name="select" id="RS5-1-1A1">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <br>

                    <p>Si la respuesta es afirmativa, describa brevemente en qué programas y proyectos participan los
                        estudiantes y profesores:
                    </p>
                    <textarea id="R5-1-1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                    <!-- <img src="" alt=""><button>Guardar</button> -->
                    <br><br>
                    <p>Para tal efecto, se requiere conocer:</p>
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
                        <button class="botonSubirPDF" id="botonSubir-5.1.1"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-5.1.1"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta1">Guardar</button></div>
                </div>






                <div class="parrafo" id="5.2">
                    <p>
                        5.2 Actividades culturales. La institución debe contar con instalaciones para el fomento de  actividades
                            culturales y un programa formal para el desarrollo de éstas en las que participen estudiantes del
                            programa educativo. El programa debe garantizar las actividades culturales y deportivas a través de
                            instalaciones propias, en convenio, etc., debe describir las mismas.
                    </p>
                </div>

                <div class="preguntasCategoria" id="SC_5.2.1">
                    <p>5.2.1  Haga una relación de las instalaciones para actividades culturales para el fomento de la vida
                            académica, indicando a cuantos usuarios brindan simultáneamente en cada caso.</p>

                    <textarea id="R5-2-1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

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
                        <button class="botonSubirPDF" id="botonSubir-5.2.1"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-5.2.1"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta2">Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="SC_5.2.2">
                    <p>5.2.2  La institución debe contar un programa formal para el desarrollo de actividades culturales en las
                            que participen estudiantes del programa educativo.
                    </p>
                    <p>
                            Haga una descripción el mismo y una relación de las actividades culturales en las que participan
                            estudiantes del programa educativo, así como el porcentaje en relación a la matrícula del programa
                            educativo
                    </p>


                    <textarea id="R5-2-2" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

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
                        <button class="botonSubirPDF" id="botonSubir-5.2.2"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-5.2.2"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta3">Guardar</button></div>
                </div>
            </div>

            <div>
                <div class="parrafo" id="5.3">
                    <p>
                        5.3 Actividades deportivas. La institución debe contar con instalaciones para el fomento de  actividades
                            deportivas, así como con un programa formal para el desarrollo de éstas en la que participen estudiantes
                            del programa educativo.
                    </p>
                    <p> El programa debe garantizar las actividades culturales y deportivas a través de instalaciones propias, en
                        convenio, etc., debe describir las mismas.
                    </p>                
                </div>

                <div class="preguntasCategoria" id="SC_5.3.1">
                    <p>5.3.1 Haga una relación de las instalaciones para actividades deportivas para el fomento de la vida
                        académica, indicando a cuantos usuarios brindan simultáneamente en cada caso.
                    </p>

                    <textarea id="R5-3-1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
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
                        <button class="botonSubirPDF" id="botonSubir-5.3.1"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-5.3.1"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta4">Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="SC_5.3.2">
                    <p>5.3.2  La institución debe contar un programa formal para el desarrollo de actividades  deportivas en la
                            que participen estudiantes del programa educativo.
                    </p>
                    <p>Haga una descripción el mismo y una relación de las actividades   deportivas en las que participan
                        estudiantes del programa educativo, así como el porcentaje en relación a la matrícula del programa
                        educativo.
                    </p>

                    <textarea id="R5-3-2" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                    <!-- <img src="" alt=""><button>Guardar</button> -->
                    <br><br>
                    <p>En caso afirmativo proporcione una copia o copias de los documentos (puedes subir mas de un archivo).
                    </p>
                    <!-- AQUÍ COMIENZA LA PARTE DE LOS PDF -->
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
                        <button class="botonSubirPDF" id="botonSubir-5.3.2"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-5.3.2"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta5">Guardar</button></div>
                </div>
            </div>

            <div>
                <div class="parrafo" id="5.4">
                    <p> 5.4 Orientación profesional. La institución debe contar con programas específicos de desarrollo
                            tecnológico en la disciplina del programa educativo, en los que participen profesores y estudiantes de
                            licenciatura, así como de eventos científicos y tecnológicos que apoyen el curriculum de la carrera y la
                            inserción adecuada de los estudiantes por egresar al mercado laboral.
                    </p>
                </div>

                <div class="preguntasCategoria" id="SC_5.4.1">
                    <p>5.4.1 ¿Se contemplan programas específicos en que los profesores y los estudiantes desarrollen
                            proyectos de desarrollo tecnológico en informática y computación?
                    </p>

                    <div class="opcMult" °>
                        <select name="select" id="RS5-4-1A1">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <br>

                    <p> Si la respuesta es afirmativa, describa brevemente en qué programas o proyectos participan los
                        estudiantes:
                    </p>

                    <textarea id="R5-4-1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
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
                        <button class="botonSubirPDF" id="botonSubir-5.4.1"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-5.4.1"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta6">Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="SC_5.4.2">
                    <p>5.4.2  ¿Para la orientación profesional se realizan eventos académico-científicos (seminarios, congresos,
                            foros, conferencias y cursos co-curriculares, entre otros)  que apoyan el currículo del programa
                            académico?
                    </p>

                    <div class="opcMult" °>
                        <select name="select" id="RS5-4-2A1">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <br>

                    <textarea id="R5-4-2" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
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
                        <button class="botonSubirPDF" id="botonSubir-5.4.2"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-5.4.2"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta7">Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="SC_5.4.3">
                    <p>5.4.3  ¿Opera un programa de orientación profesional que permita a los estudiantes por egresar,
                            insertarse de manera adecuada en el mercado laboral (cursos y conferencias impartidos por expertos del
                            mercado laboral).
                    </p>

                    <div class="opcMult" °>
                        <select name="select" id="RS5-4-3A1">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <br>

                    <p>En el caso de que se ofrezca este servicio y de que se lleve un registro, proporcionar la información sobre
                        el número de eventos y estudiantes que asistieron en los tres últimos períodos escolares.
                    </p>

                    <textarea id="R5-4-3" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
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
                        <button class="botonSubirPDF" id="botonSubir-5.4.3"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-5.4.3"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta8">Guardar</button></div>
                </div>
            </div>

            <div>
                <div class="parrafo" id="5.5">
                    <p> 5.5  Orientación psicológica. Existe un programa Institucional de Orientación Psicológica para prevención
                            de actitudes de riesgo (adicciones, contra la violencia, educación sexual, entre otros aspectos) o bien para
                            apoyar a los estudiantes cuando soliciten asesoría psicológica, como un programa institucional de
                            orientación vocacional, y de orientación psicológica
                    </p>
                </div>

                <div class="preguntasCategoria" id="SC_5.5.1">
                    <p>5.5.1 ¿Existe un programa Institucional de Orientación Psicológica para prevención de actitudes de riesgo
                            (adicciones, contra la violencia, educación sexual, entre otros aspectos) o bien para apoyar a los
                            estudiantes cuando soliciten asesoría psicológica? 
                    </p>

                    <div class="opcMult" °>
                        <select name="select" id="RS5-5-1A1">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <br>

                    <p> Si la respuesta es afirmativa, describa brevemente en qué programas o proyectos participan los
                        estudiantes:
                    </p>

                    <textarea id="R5-5-1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
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
                        <button class="botonSubirPDF" id="botonSubir-5.5.1"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-5.5.1"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta9">Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="SC_5.5.2">
                    <p>5.5.2  ¿Existe un programa Institucional de Orientación vocacional y de orientación psicopedagógica? 
                    </p>

                    <p> Si la respuesta es afirmativa, describa brevemente en qué consisten los programas.
                    </p>

                    <div class="opcMult" °>
                        <select name="select" id="RS5-5-2A1">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <br>

                    <p> Si la respuesta es afirmativa, describa brevemente en qué consisten los programas.
                    </p>

                    <textarea id="R5-5-2" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
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
                        <button class="botonSubirPDF" id="botonSubir-5.5.2"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-5.5.2"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta10">Guardar</button></div>
                </div>

            </div>

            <div>
                <div class="parrafo" id="5.6">
                    <p> 5.6  Servicios médicos. Debe existir un lugar apropiado que cuente con medicamentos y material
                            requerido para primeros auxilios, que estén al servicio y alcance del personal académico, administrativo y
                            estudiantes.
                    </p>
                </div>

                <div class="preguntasCategoria" id="SC_5.6.1">
                    <p> Para el caso de los programas semi-presenciales o no presenciales, los servicios médicos deben
                        garantizarse a través de estrategias que la propia institución defina y deben describirse y presentar
                        evidencias de las mismas.    
                        ¿Existe un servicio médico o material para primeros auxilios?   
                    </p>

                    <div class="opcMult" °>
                        <select name="select" id="RS5-6-1A1">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <br>

                    <p> En caso afirmativo,  descríbalo brevemente
                    </p>

                    <textarea id="R5-6-1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                    <!-- <img src="" alt=""><button>Guardar</button> -->
                    <br>
                    <p> ¿Este servicio es accesible al personal académico, administrativo y estudiantes?
                    </p>

                    <div class="opcMult" °>
                        <select name="select" id="RS5-6-1A2">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <br>
                    <p> En caso afirmativo sustente su respuesta.
                    </p>

                    <textarea id="R5-6-1A1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               


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
                        <button class="botonSubirPDF" id="botonSubir-5.6.1"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-5.6.1"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta11">Guardar</button></div>
                </div>
            </div>

            <div>
                <div class="parrafo" id="5.7">
                    <p> 5.7  Enlace escuela – familia. Con el propósito de apoyar la formación integral de los estudiantes es
                            conveniente tener comunicación con los padres de familia, por lo que es conveniente definir canales de
                            comunicación adecuados, actividades de inducción y cursos de orientación a los padres, entre otros
                            mecanismos.
                    </p>
                </div>

                <div class="preguntasCategoria" id="SC_5.7.1">
                    <p> 5.7.1 ¿Existe  comunicación con los padres de familia?    
                    </p>

                    <div class="opcMult" °>
                        <select name="select" id="RS5-7-1A1">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <br>

                    <p> Si la respuesta es afirmativa, describa brevemente en qué consisten estos canales de comunicación.
                    </p>

                    <textarea id="R5-7-1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                    <!-- <img src="" alt=""><button>Guardar</button> -->
                    <br>

                    <p> Actividades de inducción a fin de que los padres conozcan a la institución.  
                    </p>

                    <textarea id="R5-7-1A1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                    <!-- <img src="" alt=""><button>Guardar</button> -->

                    <p> Cursos de orientación a los padres 
                    </p>

                    <textarea id="R5-7-1A2" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                    <!-- <img src="" alt=""><button>Guardar</button> -->

                    <p> Otros 
                    </p>

                    <textarea id="R5-7-1A3" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                    <!-- <img src="" alt=""><button>Guardar</button> -->
                    
                    <p> En caso afirmativo proporcione una copia o copias de los documentos (puedes subir mas de un archivo).
                    </p>
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
                        <button class="botonSubirPDF" id="botonSubir-5.7.1"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-5.7.1"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta12">Guardar</button></div>
                </div>
            </div>


        </div>
    </div>
    <br><br><br>

    
       

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
                <button id="botonSubirChido" class="cargar-pdf" data-id="5.1.1">
                    <i class="fas fa-upload"></i> Subir PDF
                </button>

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
                        Swal.fire({
                            title: 'Archivos subidos correctamente.',
                            icon: 'success',
                            confirmButtonColor: '#145070'
                        });
                    } else {
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
