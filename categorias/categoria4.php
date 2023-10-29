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
    <title>Categoria 4</title>
    <link rel="stylesheet" href="autoevaluacion.css">
    <script src="enviarConsulta.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            $.ajax({
                type: "GET",
                url: "recuperar_respuestas4.php",
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
                    var id1 = "RS4-1-1";
                    var respuesta1 = $("#RS4-1-1").val();

                    var arreglo = [id1,respuesta1];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });


                $("#guardarRespuesta2").click(function() {
                    var id2 = "RS4-1-1A1";
                    var respuesta2 = $("#RS4-1-1A1").val();

                    var arreglo = [id2,respuesta2];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });


                $("#guardarRespuesta3").click(function() {

                    var id3 = "RS4-1-1A2";
                    var respuesta3 = $("#RS4-1-1A2").val();

                    var arreglo = [id3,respuesta3];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });


                $("#guardarRespuesta4").click(function() {
                    var id4 = "R4-1-1A3";
                    var respuesta4 = $("#R4-1-1A3").val();

                    var arreglo = [id4,respuesta4];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });


                $("#guardarRespuesta5").click(function() {

                    var id5 = "RS4-1-1A4";
                    var respuesta5 = $("#RS4-1-1A4").val();

                    var id6 = "R4-1-1A5";
                    var respuesta6 = $("#R4-1-1A5").val();

                    var arreglo = [id5,respuesta5,id6,respuesta6];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });


                $("#guardarRespuesta6").click(function() {

                    var id7 = "RS4-1-1A6";
                    var respuesta7 = $("#RS4-1-1A6").val();

                    var id8 = "R4-1-1A7";
                    var respuesta8 = $("#R4-1-1A7").val();

                    var id9 = "R4-1-1A8";
                    var respuesta9 = $("#R4-1-1A8").val();

                    var arreglo = [id7,respuesta7,id8,respuesta8,id9,respuesta9];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });


                $("#guardarRespuesta7").click(function() {
                    var id10 = "RS4-1-1A9";
                    var respuesta10 = $("#RS4-1-1A9").val();

                    var id11 = "R4-1-1A10";
                    var respuesta11 = $("#R4-1-1A10").val();

                    var arreglo = [id10,respuesta10,id11,respuesta11];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });


                $("#guardarRespuesta8").click(function() {

                    var id12 = "RS4-1-1A11";
                    var respuesta12 = $("#RS4-1-1A11").val();

                    var id13 = "R4-1-1A12";
                    var respuesta13 = $("#R4-1-1A12").val();

                    var id14 = "R4-1-1A13";
                    var respuesta14 = $("#R4-1-1A13").val();

                    var arreglo = [id12,respuesta12,id13,respuesta13,id14,respuesta14];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

 
                $("#guardarRespuesta9").click(function() {

                    var id15 = "RS4-1-1A14";
                    var respuesta15 = $("#RS4-1-1A14").val();

                    var id16 = "R4-1-1A15";
                    var respuesta16 = $("#R4-1-1A15").val();

                    var arreglo = [id15,respuesta15,id16,respuesta16];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });


                $("#guardarRespuesta10").click(function() {
                    var id17 = "RS4-1-1A16";
                    var respuesta17 = $("#RS4-1-1A16").val();

                    var id18 = "R4-1-1A17";
                    var respuesta18 = $("#R4-1-1A17").val();

                    var arreglo = [id17,respuesta17,id18,respuesta18];
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
            <div class="titulo_categoria">Categoría 4: Evaluación del aprendizaje</div>  
            <div>
                <div class="parrafo" id="4.1">
                    <p>
                        4.1 Metodología de Evaluación continua. En este criterio debe evaluarse la pertinencia del
                        método de
                        evaluación aplicado y los objetivos del plan de estudios. En este sentido el criterio contempla
                        varios aspectos que se deben cuidar, entre ellos: el que debe incluirse el uso de la computadora
                        durante el proceso de enseñanza aprendizaje, en los cursos que por su naturaleza así lo
                        requieran;
                        debe contar con estrategias que aseguren el cumplimiento de cada asignatura del plan de
                        estudios;
                        incluir métodos de enseñanza diferentes a los tradicionales; la evaluación del desempeño del
                        estudiante debe hacerse con la combinación de varios mecanismos; contar con mecanismos de
                        retroalimentación para mejorar el proceso de enseñanza-aprendizaje; contemplar la enseñanza de
                        un
                        idioma extranjero; así como contar con mecanismos de medición de las competencias de los
                        estudiantes
                        al finalizar su trayectoria escolar de acuerdo a su perfil de egreso.
                    </p>
                </div>

                <div class="preguntasCategoria" id="SC_4.1.1">
                    <p>4.1.1 Debe incluirse el uso de la computadora durante el proceso de enseñanza aprendizaje, en los
                        cursos que por su naturaleza así lo requieran. </p>
                    <p>¿El programa cuenta con estadísticas del uso de las herramientas de cómputo por parte de los
                        estudiantes?</p>

                    <div class="opcMult" °>
                        <select name="select" id="RS4-1-1">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <br>

                    <p>En caso afirmativo, proporcione la siguiente información para los últimos cuatro períodos
                        escolares:
                    </p>
                    <!-- <img src="" alt=""><button>Guardar</button> -->
                    <br><br>
                    <div class="Listo">
                        <img src="/imagenes/pdf.png" alt="">
                        <button>Seleccionar archivos</button>
                        <!-- <button>Cargar</button>  -->
                    </div>
                    <div class="btnListo"><button id="guardarRespuesta1">Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="SC_4.1.2">
                    <p>4.1.2 Debe cubrirse al menos el 90% de los programas de las asignaturas del plan de estudio.</p>

                    <p>¿Se cuenta con datos estadísticos que muestren el porcentaje que se cubre de cada asignatura con
                        respecto a lo que señala el programa?</p>
                    <div class="opcMult" °>
                        <select name="select" id="RS4-1-1A1" >
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <br>
                    <p>En caso afirmativo, incluir los resultados en la siguiente tabla</p>
                    <!-- <img src="" alt=""><button>Guardar</button> -->
                    <br><br>
                    <div class="Listo">
                        <img src="/imagenes/pdf.png" alt="">
                        <button>Seleccionar archivos</button>
                        <!-- <button>Cargar</button>  -->
                    </div>
                    <div class="btnListo"><button id="guardarRespuesta2">Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="SC_4.1.3">
                    <p>4.1.3 Todo programa debe establecer que en varios cursos se incluyan, en parte o en la totalidad
                        de su desarrollo, métodos de enseñanza diferentes a los tradicionales de exposición oral del
                        profesor, tales como el uso de audiovisuales, multimedios, aulas interactivas, desarrollo de
                        proyectos, prácticas de laboratorio, etc., así como otro tipo de actividades orientadas a
                        mejorar el proceso enseñanza-aprendizaje.</p>

                    <p>¿En la impartición de los cursos de las asignaturas del plan de estudios se emplean métodos
                        diferentes al tradicional de exposición oral del profesor? (apoyos audiovisuales, multimedios,
                        aulas interactivas, desarrollo de proyectos, prácticas de laboratorio, etc.):</p>
                    <div class="opcMult" °>
                        <select name="select" id="RS4-1-1A2">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <br>
                    <p>En caso afirmativo indique:</p>
                    <!-- <img src="" alt=""><button>Guardar</button> -->
                    <br><br>
                    <div class="Listo">
                        <img src="/imagenes/pdf.png" alt="">
                        <button>Seleccionar archivos</button>
                        <!-- <button>Cargar</button>  -->
                    </div>
                    <div class="btnListo"><button id="guardarRespuesta3">Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="SC_4.1.4">
                    <p>4.1.4 La calidad en el desempeño del estudiante durante su permanencia en el programa debe
                        evaluarse mediante la combinación de varios mecanismos, tales como exámenes, tareas, problemas
                        para resolver, prácticas de laboratorio, trabajos e informes, y debe considerar sus habilidades
                        en aspectos como: comunicación oral y escrita, administración de proyectos, ética profesional y
                        sustentabilidad.</p>

                    <p>Con objeto de verificar el rigor académico en la evaluación del aprendizaje, el responsable del
                        programa deberá hacer acopio de una muestra representativa del siguiente material elaborado por
                        los estudiantes, para ser revisado en la visita:</p>



                    <p>
                        <li>Exámenes calificados de cada asignatura de todos los semestres (3 por cada asignatura: 1
                            peor
                            calificación, 2 regular, 3 mejor).</li>
                    </p>

                    <p>
                        <li>Series de ejercicios, tareas y otros trabajos utilizados en el proceso de enseñanza
                            aprendizaje.</li>
                    </p>

                    <p>
                        <li>Prácticas y reportes de los laboratorios que se imparten.</li>
                    </p>

                    <p>
                        <li>Notas de clase.</li>
                    </p>

                    <p>Describa brevemente la manera como se desarrollan las habilidades en: comunicación oral y
                        escrita,
                        administración de proyectos, sustentabilidad, compromiso social y ética profesional de los
                        estudiantes,
                        así como los apoyos institucionales que existen para ello (cursos de redacción, etc.):
                    </p>

                    <textarea name="R4-1-1A3" id="R4-1-1A3" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>
                    <!-- <img src="" alt=""><button>Guardar</button> -->
                    <br><br>
                    <div class="Listo">
                        <img src="/imagenes/pdf.png" alt="">
                        <button>Seleccionar archivos</button>
                        <!-- <button>Cargar</button>  -->
                    </div>
                    <div class="btnListo"><button id="guardarRespuesta4">Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="SC_4.1.5">
                    <p>4.1.5 Se debe contar con mecanismos de retroalimentación que permitan, a partir de las
                        evaluaciones de los estudiantes, llevar a cabo acciones encaminadas a mejorar el proceso
                        enseñanza-aprendizaje. Certificación de competencias bajo normas nacionales o internacionales
                        según el perfil de TIC a evaluar (A,B, C o D).</p>

                    <p>¿Los estudiantes realizan evaluaciones de los cursos?</p>
                    <div class="opcMult" °>
                        <select name="select" id="RS4-1-1A4">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <br>
                    <p>En caso afirmativo, describa la manera como se divulgan los resultados de las evaluaciones de los
                        cursos
                        y las acciones que se toman para mejorarlas:</p>
                    <textarea name="R4-1-1A5" id="R4-1-1A5" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>
                    <!-- <img src="" alt=""><button>Guardar</button> -->
                    <br><br>
                    <div class="Listo">
                        <img src="/imagenes/pdf.png" alt="">
                        <button>Seleccionar archivos</button>
                        <!-- <button>Cargar</button>  -->
                    </div>
                    <div class="btnListo"><button id="guardarRespuesta5">Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="SC_4.1.6">
                    <p>4.1.6 Debe contarse con una estrategia de enseñanza y práctica de un idioma extranjero.</p>
                    <p>¿El plan de estudios marca como un requisito, que los estudiantes tengan o adquieran un cierto
                        grado de dominio de un idioma extranjero?</p>
                    <div class="opcMult" °>
                        <select name="select" id="RS4-1-1A6">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <br>
                    <p>En caso afirmativo describa brevemente en qué consiste este requisito:
                    </p>
                    <textarea name="R4-1-1A7" id="R4-1-1A7" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>

                    <p>¿Qué mecanismos / estrategias se utilizan para que los estudiantes adquieran un cierto grado de
                        dominio de
                        un idioma extranjero?</p>
                        <textarea name="R4-1-1A8" id="R4-1-1A8" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>
                    <!-- <img src="" alt=""><button>Guardar</button> -->
                    <br><br>
                    <div class="Listo">
                        <img src="/imagenes/pdf.png" alt="">
                        <button>Seleccionar archivos</button>
                        <!-- <button>Cargar</button>  -->
                    </div>
                    <div class="btnListo"><button id="guardarRespuesta6">Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="SC_4.1.7">
                    <p>4.1.7 ¿Existe un mecanismo de medición sobre las competencias desarrolladas por los estudiantes
                        al finalizar su trayectoria académica de acuerdo a su perfil de egreso? Certificación de
                        competencias bajo normas nacionales o internacionales según el perfil de TIC a evaluar para
                        Licenciatura y TSU reflejados en los modelos curriculares actualizados 2014 de ANIEI-CONAIC.</p>
                    <div class="opcMult" °>
                        <select name="select" id="RS4-1-1A9">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <br>

                    <p>En caso afirmativo, describa el mecanismo de medición:</p>

                    <textarea name="R4-1-1A10" id="R4-1-1A10" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>
                    <!-- <img src="" alt=""><button>Guardar</button> -->
                    <br><br>
                    <div class="Listo">
                        <img src="/imagenes/pdf.png" alt="">
                        <button>Seleccionar archivos</button>
                        <!-- <button>Cargar</button>  -->
                    </div>
                    <div class="btnListo"><button id="guardarRespuesta7">Guardar</button></div>
                </div>
            </div>

            <div>
                <div class="parrafo" id="4.2">
                    <p>
                        4.2 Estímulos al rendimiento académico. Con el objeto de mejorar el desempeño de los
                        estudiantes, todo programa deberá considerar un programa de becas de apoyo económico a los
                        estudiantes que muestren capacidad académica, con objeto de estimularlos para que dediquen el
                        mayor tiempo posible a sus estudios, así como por lo menos con un sistema de estímulos y/o
                        reconocimientos al desarrollo académico de los estudiantes a lo largo de la carrera; ambos
                        mecanismos deben ser efectivos y conocidos por la comunidad académica.
                    </p>
                </div>

                <div class="preguntasCategoria" id="SC_4.2.1">
                    <p>4.2.1 ¿Hay programa de becas para estudiantes?</p>
                    <div class="opcMult" °>
                        <select name="select" id="RS4-1-1A11">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <br>

                    <p>En caso afirmativo, describa los requisitos para el otorgamiento de las becas y los tipos de
                        becas que se
                        otorgan a los estudiantes:
                    </p>
                    <textarea name="R4-1-1A12" id="R4-1-1A12" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>

                    <p>Describa para los últimos tres períodos escolares, los montos de becas y becas préstamo, así como
                        el número de estudiantes beneficiados:</p>
                    <textarea name="R4-1-1A13" id="R4-1-1A13" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>
                    <!-- <img src="" alt=""><button>Guardar</button> -->
                    <br><br>
                    <div class="Listo">
                        <img src="/imagenes/pdf.png" alt="">
                        <button>Seleccionar archivos</button>
                        <!-- <button>Cargar</button>  -->
                    </div>
                    <div class="btnListo"><button id="guardarRespuesta8">Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="SC_4.2.2">
                    <p>4.2.2 ¿Se otorgan estímulos y/o reconocimiento al buen desempeño académico de los estudiantes?
                    </p>

                    <div class="opcMult" °>
                        <select name="select" id="RS4-1-1A14">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <br>

                    <p>Enumerarlos, indicando si se otorgan a nivel institución (I), Unidad Académica (A), Programa (P).
                    </p>
                    <textarea name="R4-1-1A15" id="R4-1-1A15" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>

                    <!-- <img src="" alt=""><button>Guardar</button> -->
                    <br><br>
                    <div class="Listo">
                        <img src="/imagenes/pdf.png" alt="">
                        <button>Seleccionar archivos</button>
                        <!-- <button>Cargar</button>  -->
                    </div>
                    <div class="btnListo"><button id="guardarRespuesta9">Guardar</button></div>
                </div>
            </div>

            <div>
                <div class="parrafo" id="4.3">
                    <p>
                        4.3 Evaluación de atributos de egreso. Describir el método de evaluación de los atributos de
                        egreso con la evidencia correspondiente, para asegurar el logro de los mismos.
                    </p>
                </div>
                <div class="preguntasCategoria" id="SC_4.3.1">
                    <p>4.3.1 ¿El Programa Educativo cuenta con un método o conjunción de métodos que le permita asegurar
                        la evaluación de atributos de egreso, que garanticen el logro de éstos en los egresados?</p>

                    <div class="opcMult" °>
                        <select name="select" id="RS4-1-1A16">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <br>

                    <p>En caso afirmativo llenar la Tabla 1. Evaluación de atributos de egreso y su cumplimiento
                        (tomando como
                        base la tabla Tabla 1. Atributos del egresado Competencias de graduación planificadas SEUOL
                        ACCORD /
                        CONAIC). Explicar brevemente el método o método de evaluación empleados.</p>
                    <textarea name="R4-1-1A17" id="R4-1-1A17" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>
                    <!-- <img src="" alt=""><button>Guardar</button> -->
                    <br><br>
                    <div class="Listo">
                        <img src="/imagenes/pdf.png" alt="">
                        <button>Seleccionar archivos</button>
                        <!-- <button>Cargar</button>  -->
                    </div>
                    <div class="btnListo"><button id="guardarRespuesta10">Guardar</button></div>
                </div>
            </div>


        </div>
    </div>
    <br><br><br>
</body>




</html>