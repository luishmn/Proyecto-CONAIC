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
    <title>Categoría 2</title>
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
                url: "recuperar_respuestas2.php",
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
                    var id2 ="RS2-1-1A1";
                    var respuesta2 = $("#RS2-1-1A1").val();
                    var id3 ="R2-1-1A1";
                    var respuesta3 = $("#R2-1-1A1").val();

                    var id4 ="RS2-1-1A2";
                    var respuesta4 = $("#RS2-1-1A2").val();
                    var id5 ="R2-1-1A2";
                    var respuesta5 = $("#R2-1-1A2").val();

                    var id6 ="RS2-1-1A3";
                    var respuesta6 = $("#RS2-1-1A3").val();

                    var id8 ="R2-1-1A4";
                    var respuesta8 = $("#R2-1-1A4").val();

                    var id9 ="RS2-1-1A5";
                    var respuesta9 = $("#RS2-1-1A5").val();

                    var id11 ="RS2-1-1A6";
                    var respuesta11 = $("#RS2-1-1A6").val();



                    var arreglo = [id2,respuesta2,id3,respuesta3,id4,respuesta4,id5,respuesta5,id6,respuesta6,id8,respuesta8,id9,respuesta9,id11,respuesta11];
                    
                    BDatos(arreglo)
                    
                });

            $("#guardarRespuesta2").click(function() {
                var id1 = "RS2-2-1";
                var respuesta1 = $("#RS2-2-1").val();
                var id2 ="R2-2-1";
                var respuesta2 = $("#R2-2-1").val();

                var arreglo = [id1,respuesta1,id2,respuesta2];
                BDatos(arreglo)

            });

            $("#guardarRespuesta3").click(function() {
                var id1 = "RS2-2-2";
                var respuesta1 = $("#RS2-2-2").val();
                var id2 ="R2-2-2";
                var respuesta2 = $("#R2-2-2").val();

                var arreglo = [id1,respuesta1,id2,respuesta2];
                BDatos(arreglo)

            });

            $("#guardarRespuesta4").click(function() {
                var id1 = "RS2-2-3";
                var respuesta1 = $("#RS2-2-3").val();
                var id2 ="R2-2-3";
                var respuesta2 = $("#R2-2-3").val();

                var arreglo = [id1,respuesta1,id2,respuesta2];
                BDatos(arreglo)

            });

            $("#guardarRespuesta5").click(function() {
                var id1 = "RS2-2-4";
                var respuesta1 = $("#RS2-2-4").val();
                var id2 ="R2-2-4";
                var respuesta2 = $("#R2-2-4").val();

                var arreglo = [id1,respuesta1,id2,respuesta2];
                BDatos(arreglo)

            });

            $("#guardarRespuesta6").click(function() {
                var id1 = "RS2-2-5";
                var respuesta1 = $("#RS2-2-5").val();
                var id2 ="R2-2-5";
                var respuesta2 = $("#R2-2-5").val();

                var arreglo = [id1,respuesta1,id2,respuesta2];
                BDatos(arreglo)

            });

            $("#guardarRespuesta7").click(function() {
                var id1 = "RS2-2-6";
                var respuesta1 = $("#RS2-2-6").val();
                var id2 ="R2-2-6";
                var respuesta2 = $("#R2-2-6").val();

                var arreglo = [id1,respuesta1,id2,respuesta2];
                BDatos(arreglo)

            });

            $("#guardarRespuesta8").click(function() {
                var id1 = "RS2-2-7";
                var respuesta1 = $("#RS2-2-7").val();
                var id2 ="R2-2-7";
                var respuesta2 = $("#R2-2-7").val();

                var arreglo = [id1,respuesta1,id2,respuesta2];
                BDatos(arreglo)

            });

            $("#guardarRespuesta9").click(function() {
                var id1 = "RS2-2-8";
                var respuesta1 = $("#RS2-2-8").val();
                var id2 ="R2-2-8";
                var respuesta2 = $("#R2-2-8").val();

                var arreglo = [id1,respuesta1,id2,respuesta2];
                BDatos(arreglo)

            });

            $("#guardarRespuesta10").click(function() {
                var id1 = "RS2-3-1";
                var respuesta1 = $("#RS2-3-1").val();
                var arreglo = [id1,respuesta1];
                BDatos(arreglo)

            });

            $("#guardarRespuesta11").click(function() {
                var id1 = "RS2-3-2";
                var respuesta1 = $("#RS2-3-2").val();
                var id2 ="R2-3-2A1";
                var respuesta2 = $("#R2-3-2A1").val();

                var arreglo = [id1,respuesta1,id2,respuesta2];
                BDatos(arreglo)

            });

            $("#guardarRespuesta12").click(function() {
                var id1 = "RS2-3-3";
                var respuesta1 = $("#RS2-3-3").val();
                var id2 ="R2-3-3";
                var respuesta2 = $("#R2-3-3").val();

                var arreglo = [id1,respuesta1,id2,respuesta2];
                BDatos(arreglo)

            });

            $("#guardarRespuesta13").click(function() {
                var id1 = "RS2-3-4";
                var respuesta1 = $("#RS2-3-4").val();
                var arreglo = [id1,respuesta1];
                BDatos(arreglo)

            });

            $("#guardarRespuesta14").click(function() {
                var id1 = "R2-4-1";
                var respuesta1 = $("#R2-4-1").val();
                var id2 = "R2-4-1A1";
                var respuesta2 = $("#R2-4-1A1").val();
                var id3 = "R2-4-1A2";
                var respuesta3 = $("#R2-4-1A2").val();
                var id4 = "R2-4-1A3";
                var respuesta4 = $("#R2-4-1A3").val();

                var arreglo = [id1,respuesta1,id2,respuesta2,id3,respuesta3,id4,respuesta4];
                BDatos(arreglo)

            });

            $("#guardarRespuesta15").click(function() {
                var id1 = "R2-5-1";
                var respuesta1 = $("#R2-5-1").val();
                var id2 = "RS2-5-1A1";
                var respuesta2 = $("#RS2-5-1A1").val();
                var id3 = "R2-5-1A1";
                var respuesta3 = $("#R2-5-1A1").val();
                var id4 = "R2-5-1A2";
                var respuesta4 = $("#R2-5-1A2").val();
                var id5 = "R2-5-1A3";
                var respuesta5 = $("#R2-5-1A3").val();
                var id6 = "R2-5-1A4";
                var respuesta6 = $("#R2-5-1A4").val();
                var id7 = "R2-5-1A5";
                var respuesta7 = $("#R2-5-1A5").val();
                var id8 = "R2-5-1A6";
                var respuesta8 = $("#R2-5-1A6").val();
                var id9 = "R2-5-1A7";
                var respuesta9 = $("#R2-5-1A7").val();
                var id10 = "R2-5-1A8";
                var respuesta10 = $("#R2-5-1A8").val();
                var id11 = "R2-5-1A9";
                var respuesta11 = $("#R2-5-1A9").val();

                var id12 = "RS2-5-1A10";
                var respuesta12 = $("#RS2-5-1A10").val();
                var id13 = "R2-5-1A10";
                var respuesta13 = $("#R2-5-1A10").val();
                
                var id14 = "RS2-5-1A11";
                var respuesta14 = $("#RS2-5-1A11").val();
                var id15 = "R2-5-1A11";
                var respuesta15 = $("#R2-5-1A11").val();

                var id16 = "RS2-5-1A12";
                var respuesta16 = $("#RS2-5-1A12").val();

                var id17 = "R2-5-1A12";
                var respuesta17 = $("#R2-5-1A12").val();

                var id18 = "R2-5-1A13";
                var respuesta18 = $("#R2-5-1A13").val();

                var arreglo = [id1,respuesta1,id2,respuesta2,id3,
                respuesta3,id4,respuesta4,id5,respuesta5,id6,
                respuesta6,id7,respuesta7,id8,respuesta8,id9,
                respuesta9,id10,respuesta10,id11,respuesta11,
                id12,respuesta12,id13,respuesta13,id14,respuesta14,
                id15,respuesta15,id16,respuesta16,id17,respuesta17,
                id18,respuesta18];
                console.log(arreglo)
                BDatos(arreglo)

            });

            $("#guardarRespuesta16").click(function() {
                var id1 = "R2-5-2";
                var respuesta1 = $("#R2-5-2").val();
                var id2 = "RS2-5-2A1";
                var respuesta2 = $("#RS2-5-2A1").val();
                var id3 = "R2-5-2A1";
                var respuesta3 = $("#R2-5-2A1").val();
                var arreglo = [id1,respuesta1,id2,respuesta2,id3,respuesta3];
                BDatos(arreglo)

            });

            $("#guardarRespuesta17").click(function() {
                var id1 = "R2-5-3";
                var respuesta1 = $("#R2-5-3").val();
                var id2 = "RS2-5-3A1";
                var respuesta2 = $("#RS2-5-3A1").val();
                var id3 = "R2-5-3A1";
                var respuesta3 = $("#R2-5-3A1").val();
                var arreglo = [id1,respuesta1,id2,respuesta2,id3,respuesta3];
                BDatos(arreglo)

            });

            $("#guardarRespuesta18").click(function() {
                var id1 = "RS2-5-4";
                var respuesta1 = $("#RS2-5-4").val();
                var id2 ="R2-5-4";
                var respuesta2 = $("#R2-5-4").val();

                var arreglo = [id1,respuesta1,id2,respuesta2];
                BDatos(arreglo)

            });

            

            $("#guardarRespuesta19").click(function() {
                var id1 = "RS2-6-1";
                var respuesta1 = $("#RS2-6-1").val();
                var id2 ="R2-6-1";
                var respuesta2 = $("#R2-6-1").val();

                var arreglo = [id1,respuesta1,id2,respuesta2];
                BDatos(arreglo)

            });

            $("#guardarRespuesta20").click(function() {
                var id1 = "RS2-7A1";
                var respuesta1 = $("#RS2-7A1").val();
                var id2 = "R2-7A1";
                var respuesta2 = $("#R2-7A1").val();
                var id3 = "RS2-7A2";
                var respuesta3 = $("#RS2-7A2").val();
                var id4 = "R2-7A2";
                var respuesta4 = $("#R2-7A2").val();
                var arreglo = [id1,respuesta1,id2,respuesta2,id3,respuesta3,id4,respuesta4];
                BDatos(arreglo)

            });

            $("#guardarRespuesta21").click(function() {
                var id1 ="R2-7-1";
                var respuesta1 = $("#R2-7-1").val();
                var arreglo = [id1,respuesta1];
                BDatos(arreglo)

            });

            $("#guardarRespuesta22").click(function() {
                var id1 ="R2-7-2";
                var respuesta1 = $("#R2-7-2").val();
                var arreglo = [id1,respuesta1];
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
            <div class="titulo_categoria">Categoría 2: Estudiantes</div>

            <div>
                <div class="parrafo" id ="2.1">
                    <p>
                        2.1 Selección. Es necesario que exista claridad en la selección de aspirantes al programa educativo, por lo que debe existir de forma explícita, los criterios de admisión que indique el mínimo de condiciones que los estudiantes de nuevo ingreso deben cumplir para ser admitidos al programa.

                    </p>
                </div>
                <div class="preguntasCategoria" id="SC_2.1.1">
                    <p>2.1.1 Se requiere que los estudiantes que ingresan al programa académico cumpla con un mínimo de condiciones en cuanto a conocimientos, actitudes y habilidades, por lo que deben existir en forma explícita los criterios de selección que se emplean.                   

                        Existencia de un perfil del aspirante a ingresar al programa.
                        
                        Estar establecido que los aspirantes presenten un examen de admisión institucional, que permita que sólo sean aceptados quienes cumplan con el mínimo de conocimientos y habilidades requeridas.
                        De los puntos anteriores debe existir información escrita en forma de guía o manual para los aspirantes.
                        </p>
                        

                    <p>¿Existe publicado un perfil del aspirante a ingresar al programa?

                        </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-1-1A1">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <br>
                    </p>En caso afirmativo proporcione una copia o copias de los documentos (puedes subir más de un archivo).

                    <p>

                    <p>¿Se ha fijado un promedio mínimo para ser admitido al programa?
                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-1-1A2">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <br>
                    <p>En caso afirmativo, es de</p>
                    <textarea id="R2-1-1A2" rows="2" placeholder="Escribe tu respuesta aquí..."></textarea>

                    <p>¿El aspirante al programa debe presentar examen de admisión?

                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-1-1A3">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <br>

                    <p>Explique brevemente en qué consisten:
                    <p>
                            <a href="../Documentos/CATEGORIA2/2.1.1_1.docx" class="etiquetaDescarga">Descargar formato</a>
                    </p>


                    </p>
                    <textarea id="R2-1-1A4" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>

                    <p>¿Se proporciona información por escrito al aspirante a ingresar de las calificaciones obtenidas en su examen de admisión?

                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-1-1A5">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <br>

                    <p>¿El programa cuenta con datos estadísticos de los aspirantes a ingresar, así como de los admitidos?

                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-1-1A6">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <br>
                    <p>
                    En caso afirmativo proporcione la siguiente información:
                        <p>
                    <p>En caso de que los espacios no sean suficientes, anexar la tabla según sea el caso y subirlo en un
                        archivo PDF con la información completa, subirlo en cualquier parte de este apartado donde se
                        puedan subir archivos, al final verificarlo en su menú de autoevaluación en historial de archivos
                        de autoevaluación, para su conocimiento los evaluadores verán todos sus archivos subidos por
                        apartado nombrándolos adecuadamente.


                    </p>
                    <p>
                            <a href="../Documentos/CATEGORIA2/2.1.1_2.docx" class="etiquetaDescarga">Descargar formato</a>
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
                        <button class="botonSubirPDF" id="botonSubir-2.1.1"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-2.1.1"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->



                    <div class="btnListo"><button id="guardarRespuesta1">Guardar</button></div>
                </div>
                







            <div>
                <div class="parrafo" id="2.2">
                    <p>
                    2.2 Ingreso (estudiantes de nuevo ingreso).  Se requiere conocer las características de los estudiantes de nuevo ingreso para canalizarlos a programas de apoyo, con el fin de prevenir situaciones de riesgo (reprobación y deserción).
                    </p>
                </div>
                <div class="preguntasCategoria" id="SC_2.2.1">
                    <p>2.2.1 ¿Se toman en cuenta los resultados del examen nacional previo a la licenciatura?
                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-2-1">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <p>
                    En caso afirmativo proporcione una copia o copias de los documentos (puedes subir más de un archivo). 
                    </p>
                    <br>
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
                        <button class="botonSubirPDF" id="botonSubir-2.2.1"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-2.2.1"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->



                    

                    <div class="btnListo"><button id="guardarRespuesta2">Guardar</button></div>
                </div>








                <div class="preguntasCategoria" id="SC_2.2.2">
                    <p>2.2.2 ¿Se tiene en cuenta el rendimiento académico en el nivel precedente para canalizar a los estudiantes a programas de apoyo?
                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-2-2">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <p>
                    En caso afirmativo proporcione una copia o copias de los documentos (puedes subir más de un archivo).
                    </p>
                    <br>
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
                        <button class="botonSubirPDF" id="botonSubir-2.2.2"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-2.2.2"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->

                    <div class="btnListo"><button id="guardarRespuesta3">Guardar</button></div>



                </div>

                <div class="preguntasCategoria" id="SC_2.2.3">
                    <p>2.2.3 ¿Se efectúan entrevistas y/ o encuestas a los estudiantes de nuevo ingreso?
                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-2-3">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <p>
                    En caso afirmativo proporcione una copia o copias de los documentos (puedes subir más de un archivo). 
                    </p>
                    <br>
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
                        <button class="botonSubirPDF" id="botonSubir-2.2.3"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-2.2.3"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta4">Guardar</button></div>
                </div>


                <div class="preguntasCategoria" id="SC_2.2.4">
                    <p>2.2.4 ¿Se aplica un instrumento para obtener datos socioeconómicos de los estudiantes de nuevo ingreso?

                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-2-4">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <p>
                    En caso afirmativo proporcione una copia o copias de los documentos (puedes subir más de un archivo).
                    </p>
                    <br>
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
                        <button class="botonSubirPDF" id="botonSubir-2.2.4"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-2.2.4"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta5">Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="SC_2.2.5">
                    <p>2.2.5 ¿Se efectúan análisis e investigación educativa a partir de los resultados de las características de los estudiantes de nuevo ingreso, para implementar programas de apoyo?

                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-2-5">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <p>
                    En caso afirmativo proporcione una copia o copias de los documentos (puedes subir más de un archivo). 
                    </p>
                    <br>
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
                        <button class="botonSubirPDF" id="botonSubir-2.2.5"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-2.2.5"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta6">Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="SC_2.2.6">
                    <p>2.2.6 ¿Existe un programa de inducción para estudiantes de nuevo ingreso?

                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-2-6">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    
                    <p>
                    En caso afirmativo proporcione una copia o copias de los documentos (puedes subir más de un archivo).
                    </p>
                    <br>
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
                        <button class="botonSubirPDF" id="botonSubir-2.2.6"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-2.2.6"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta7">Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="SC_2.2.7">
                    <p>2.2.7 ¿En particular, los estudiantes reciben la inducción necesaria para el manejo del entorno de aprendizaje cuando se utilizan contenidos de los cursos del plan de estudios, con apoyo de plataformas de aprendizaje?

                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-2-7">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    </p>En cualquier caso, explique brevemente.
                    <p>
                    <br>
                    <textarea id="R2-2-7" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>
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
                        <button class="botonSubirPDF" id="botonSubir-2.2.7"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-2.2.7"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta8">Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="SC_2.2.8">
                    <p>2.2.8 ¿El programa educativo cuenta con estudios que evidencien que los estudiantes tienen el perfil requerido para estudiar de manera autónoma, que destaque la responsabilidad, habilidades de investigación y el ser autodidácticas?

                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-2-8">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    </p>En cualquier caso, explique brevemente.
                    <p>
                    <br>
                    <textarea id="R2-2-8" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>

                    <p>
                    En caso afirmativo proporcione una copia o copias de los documentos (puedes subir más de un archivo).
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
                        <button class="botonSubirPDF" id="botonSubir-2.2.8"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-2.2.8"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta9">Guardar</button></div>
                </div>

            




            </div>

            <div>
                <div class="parrafo" id="2.3">
                    <p>
                        2.3 Trayectoria Escolar. Los estudiantes deben contar con un plan de seguimiento de su desempeño durante su estancia en el programa de estudios, así como recibir la retroalimentación correspondiente para mejorarla. Tendencia comprobada de disminución de índices de reprobación y deserción.

                    </p>
                </div>
                <div class="preguntasCategoria" id="SC_2.3.1">
                    <p>2.3.1 ¿Existe un plan de seguimiento y desempeño de la estancia de los estudiantes en el programa de estudios?
                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-3-1">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <br>
                    <p>En caso afirmativo proporcione una copia o copias 
                        de los documentos (puedes subir más de un archivo).

                    </p>

                    <p>¿El estudiante recibe retroalimentación para 
                        mejorar su estancia en el programa de estudios?
                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-3-2">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <br>
                    
                    <p>En caso afirmativo, describa cómo recibe el 
                        estudiante la retroalimentación sobre su desempeño:
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
                        <button class="botonSubirPDF" id="botonSubir-2.3.1"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-2.3.1"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta10">Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="SC_2.3.2">

                    <p>2.3.2 ¿Existe una tendencia clara de disminución de los índices de reprobación?
                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-3-2">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <p>En caso afirmativo proporcione y justifique los indicadores correspondientes.
                    </p>
                    <textarea id="R2-3-2A1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>
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
                        <button class="botonSubirPDF" id="botonSubir-2.3.2"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-2.3.2"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta11">Guardar</button></div>
                </div>  

                
                <div class="preguntasCategoria" id="SC_2.3.3">
                    <p>2.3.3 ¿Existe una tendencia clara de disminución de los índices de deserción?
                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-3-3">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <p>En caso afirmativo proporcione y justifique los indicadores correspondientes.</p>
                    <br>
                    <textarea id="R2-3-3" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>
                    <p>En caso afirmativo proporcione una copia o copias de los documentos (puedes subir más de un archivo).</p>

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
                        <button class="botonSubirPDF" id="botonSubir-2.3.3"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-2.3.3"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta12">Guardar</button></div>
                </div>
            </div>

            <div>
                <div class="parrafo" id="2.4">
                    <p>
                        2.4 Tamaño de los grupos. El tamaño de los grupos no debe ser en ningún caso mayor de 60 estudiantes, y preferentemente debe ser como máximo de 45 estudiantes. Si no se cumple esta condición, se debe garantizar la atención a los estudiantes.

                    </p>
                </div>
                <div class="preguntasCategoria" id="SC_2.4.1">
                    <p>2.4.1 Proporcionar el tamaño promedio de los grupos de los últimos dos años:
                    </p>
                    <textarea id="R2-4-1" rows="2" placeholder="Escribe tu respuesta aquí..."></textarea>
                    <p>¿Cuántos grupos en los últimos dos años tuvieron más de 60 estudiantes?
                    </p>
                    <textarea id="R2-4-1A1" rows="2" placeholder="Escribe tu respuesta aquí..."></textarea>
                    <p>¿Cuántos grupos en los últimos dos años tuvieron más de 45 estudiantes?

                    </p>
                    <textarea  id="R2-4-1A2" rows="2" placeholder="Escribe tu respuesta aquí..."></textarea>
                    <p>Describir cómo se garantiza la atención a los estudiantes en grupos con más de 45 estudiantes.

                    </p>
                    <textarea id="R2-4-1A3" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>
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
                        <button class="botonSubirPDF" id="botonSubir-2.4.1"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-2.4.1"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta14">Guardar</button></div>
                </div>  
                
                
                </div>
            </div>

            <div>
                <div class="parrafo" id="2.5">
                    <p>
                        2.5 Titulación. Debe existir uno o varios reglamentos de estudiantes, que consideren los siguientes aspectos: Mecanismos de acreditación y evaluación de materias, Derechos y obligaciones del estudiante y Mecanismos de Titulación. También deben tener reglamentadas las opciones de titulación y un procedimiento que garantice la calidad de los trabajos de titulación. En los requisitos de titulación el puntaje obtenido en la prueba TOEFL o equivalente sea de por lo menos 500 puntos o equivalente en otros medios de evaluación formal.


                    </p>
                </div>
                <div class="preguntasCategoria" id="SC_2.5.1">
                    <p>2.5.1 Debe existir uno o varios reglamentos de estudiantes, que consideren los siguientes aspectos: 
                        Mecanismos de acreditación y evaluación de materias
                        Derechos y obligaciones del estudiante
                        Mecanismos de Titulación.
                    </p>
                    <p>¿Se cuenta con un reglamento de estudiantes?
                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-5-1A1">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <p>En caso afirmativo proporcione una copia o copias de los documentos (puedes subir más de un archivo).</p>
                    <br>
                    <textarea id="R2-5-1A1" rows="2" placeholder="Escribe tu respuesta aquí..."></textarea>
                    <p>Número límite de oportunidades para acreditar una materia ya sea por haberla cursado, por haber presentado exámenes a título de suficiencia, o por algún otro mecanismo:
                    </p>
                    <textareaid="R2-5-1A2" rows="2" placeholder="Escribe tu respuesta aquí..."></textarea>

                    <p>Número máximo de exámenes extraordinarios, a título o similares a lo largo de la carrera, de una misma asignatura:
                    </p>
                    <textarea id="R2-5-1A3" rows="2" placeholder="Escribe tu respuesta aquí..."></textarea>

                    <p>Número máximo de exámenes extraordinarios, a título o similares a lo largo de la carrera, de todas las asignaturas cursadas:
                    </p>
                    <textarea id="R2-5-1A4" rows="2" placeholder="Escribe tu respuesta aquí..."></textarea>

                    <p>Número máximo de años, semestre o períodos escolares en que el estudiante pueda terminar de cubrir los créditos del Programa diferenciando si es estudiante de tiempo completo (TC) o de tiempo parcial (TP).
                    </p>
                    <textarea id="R2-5-1A5" rows="2" placeholder="Escribe tu respuesta aquí..."></textarea>

                    <p>TC:
                    </p>
                    <textarea id="R2-5-1A6" rows="2" placeholder="Escribe tu respuesta aquí..."></textarea>

                    <p>TP:
                    </p>
                    <textarea id="R2-5-1A7" rows="2" placeholder="Escribe tu respuesta aquí..."></textarea>

                    <p>Principales motivos para dar de baja automática a un estudiante:
                    </p>
                    <textarea id="R2-5-1A8" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>

                    <p>¿Cómo y cuándo se entera el estudiante del contenido del reglamento de estudiantes (en caso de que exista)?
                    </p>
                    <textarea id="R2-5-1A9"  rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>

                    <p>¿El estudiante puede participar en los cuerpos colegiados de la institución?
                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-5-1A10">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <br>

                    <p>Con voz
                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-5-1A11">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <br>

                    <p>Con voto
                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-5-1A12">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <br>

                    <p>Indique brevemente los requisitos para ello:
                    </p>
                    <textarea id="R2-5-1A13" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>
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
                        <button class="botonSubirPDF" id="botonSubir-2.5.1"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-2.5.1"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta15">Guardar</button></div>
                </div>  

                <div class="preguntasCategoria" id="SC_2.5.2">
                    <p>2.5.2 La institución debe tener reglamentadas las opciones de titulación, tanto en requisitos como en procedimiento.
                    </p>
                    <p>¿Existe un reglamento que indique las opciones de titulación, tanto en requisitos como en procedimiento?
                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-5-2A1">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <p>En caso afirmativo proporcione una copia o copias de los documentos (puedes subir más de un archivo).</p>
                    <br>

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
                        <button class="botonSubirPDF" id="botonSubir-2.5.2"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-2.5.2"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta16">Guardar</button></div>
                </div>


                <div class="preguntasCategoria" id="SC_2.5.3">
                    <p>2.5.3 Deben existir procedimientos que garanticen la calidad de los trabajos de titulación en el que participen las academias o algún grupo colegiado designado para tal fin y con participación externa.
                    </p>
                    <p>¿Existe un procedimiento para garantizar la calidad de los trabajos de titulación?
                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-5-3A1">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <br>
                    <p>En caso afirmativo indique en qué consiste y quiénes participan en el mismo:</p>
                    <textarea id="R2-5-3A1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>

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
                        <button class="botonSubirPDF" id="botonSubir-2.5.3"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-2.5.3"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta17">Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="SC_2.5.4">
                    <p>2.5.4 El puntaje obtenido en la prueba TOEFL o equivalente sea de por lo menos 500 puntos o equivalente en otros medios de evaluación formal como requisito de titulación.
                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-5-4">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <br>
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
                        <button class="botonSubirPDF" id="botonSubir-2.5.4"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-2.5.4"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button  id="guardarRespuesta18">Guardar</button></div>
                </div>

                
                </div>
            <div>
                <div class="parrafo" id="2.6">
                    <p>
                        2.6 Índices de rendimiento escolar por cohorte generacional. El índice de deserción deberá manifestar una tendencia al decremento, y deberán existir estadísticas confiables para observarla. Nunca menor del 20 % de eficiencia terminal.
                    </p>
                </div>
                <div class="preguntasCategoria" id="SC_2.6.1">
                    <p>2.6.1 ¿Cuenta el programa con datos que permitan analizar el flujo de estudiantes en los diferentes períodos escolares y conocer índices de deserción por período?
                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-6-1">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <br>

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
                        <button class="botonSubirPDF" id="botonSubir-2.6.1"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-2.6.1"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta19">Guardar</button></div>
                </div>
            </div>

            <div>
                <div class="parrafo" id="2.7">
                    <p>
                        2.7 Movilidad internacional de estudiantes.
                    </p>
                </div>
                <div class="preguntasCategoria" id="SC_2.7.1">
                    <p>¿Existe un proceso formal para la movilidad internacional de estudiantes (tanto de envío como de recepción)?
                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-7A1">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <br>
                    <p>¿Hay un reglamento para dicho proceso?<p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-7A2">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <p>Haga un breve resumen del proceso indicando quienes participan en él, así como las responsabilidades que tienen.</p>

                    <br>
                    <textarea id="R2-7A2" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>

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
                        <button class="botonSubirPDF" id="botonSubir-2.7.1"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-2.7.1"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta20">Guardar</button></div>
                </div>
                
                <div class="preguntasCategoria" id="SC_2.7.1">
                    <p>2.7.1 Indicar las movilidades en envío y recepción de los estudiantes en los últimos cinco años.
                    </p>
                    <p>
                            <a href="../Documentos/CATEGORIA2/2.7.1.docx" class="etiquetaDescarga">Descargar formato</a>
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
                
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta21">Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="SC_2.7.2">
                    <p>2.7.2. Indicar los productos y resultados obtenidos de estas movilidades en envío y recepción de los estudiantes en los últimos cinco años.
                    </p>
                    <textarea id="R2-7-2" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>
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
                        <button class="botonSubirPDF" id="botonSubir-2.7.2"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-2.7.2"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta22">Guardar</button></div>
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
                <button id="botonSubirChido" class="cargar-pdf" data-id="2.1.1">
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


