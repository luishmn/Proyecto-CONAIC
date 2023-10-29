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
    <title>Categoria 7</title>
    <link rel="stylesheet" href="autoevaluacion.css">
    <script src="enviarConsulta.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
                var id1 = "RS7-1-1A1";
                var respuesta1 = $("#RS7-1-1A1").val();

                var id2 = "R7-1-1";
                var respuesta2 = $("#R7-1-1").val();

                var arreglo = [id1,respuesta1,id2,respuesta2];
                console.log(arreglo)
                
                BDatos(arreglo)
            });

            $("#guardarRespuesta2").click(function() {
                var id1 = "RS7-2-2A1";
                var respuesta1 = $("#RS7-2-2A1").val();

                var id2 = "R7-1-2";
                var respuesta2 = $("#R7-1-2").val();

                var arreglo = [id1,respuesta1,id2,respuesta2];
                console.log(arreglo)
                
                BDatos(arreglo)
            });

            $("#guardarRespuesta3").click(function() {
                var id1 = "RS7-1-3A1";
                var respuesta1 = $("#RS7-1-3A1").val();

                var id2 = "R7-1-3";
                var respuesta2 = $("#R7-1-3").val();

                var arreglo = [id1,respuesta1,id2,respuesta2];
                console.log(arreglo)
                
                BDatos(arreglo)
            });

            $("#guardarRespuesta4").click(function() {
                var id1 = "RS7-1-4A1";
                var respuesta1 = $("#RS7-1-4A1").val();

                var id2 = "R7-1-4";
                var respuesta2 = $("#R7-1-4").val();

                var arreglo = [id1,respuesta1,id2,respuesta2];
                console.log(arreglo)
                
                BDatos(arreglo)
            });

            $("#guardarRespuesta5").click(function() {
                var id1 = "RS7-1-5A1";
                var respuesta1 = $("#RS7-1-5A1").val();

                var id2 = "R7-1-5";
                var respuesta2 = $("#R7-1-5").val();

                var arreglo = [id1,respuesta1,id2,respuesta2];
                console.log(arreglo)
                
                BDatos(arreglo)
            });

            $("#guardarRespuesta6").click(function() {
                var id1 = "RS7-2-1A1";
                var respuesta1 = $("#RS7-2-1A1").val();

                var id2 = "R7-2-1";
                var respuesta2 = $("#R7-2-1").val();

                var arreglo = [id1,respuesta1,id2,respuesta2];
                console.log(arreglo)
                
                BDatos(arreglo)
            });

            $("#guardarRespuesta7").click(function() {
                var id1 = "RS7-2-2A1";
                var respuesta1 = $("#RS7-2-2A1").val();

                var arreglo = [id1,respuesta1];
                console.log(arreglo)
                
                BDatos(arreglo)
            });

            $("#guardarRespuesta8").click(function() {
                var id1 = "RS7-2-3A1";
                var respuesta1 = $("#RS7-2-3A1").val();

                var id2 = "R7-2-3";
                var respuesta2 = $("#R7-2-3").val();

                var arreglo = [id1,respuesta1,id2,respuesta2];
                console.log(arreglo)
                
                BDatos(arreglo)
            });

            $("#guardarRespuesta9").click(function() {
                var id1 = "RS7-3-1A1";
                var respuesta1 = $("#RS7-3-1A1").val();

                var id2 = "R7-3-1";
                var respuesta2 = $("#R7-3-1").val();
                
                var id3 = "R7-3-1A1";
                var respuesta3 = $("#R7-3-1A1").val();

                var arreglo = [id1,respuesta1,id2,respuesta2,id3,respuesta3];
                console.log(arreglo)
                
                BDatos(arreglo)
            });

            $("#guardarRespuesta10").click(function() {
                var id1 = "R7-3-2";
                var respuesta1 = $("#R7-3-2").val();

                var arreglo = [id1,respuesta1];
                console.log(arreglo)
                
                BDatos(arreglo)
            });

            $("#guardarRespuesta11").click(function() {
                var id1 = "RS7-4-1A1";
                var respuesta1 = $("#RS7-4-1A1").val();

                var id2 = "R7-4-1";
                var respuesta2 = $("#R7-4-1").val();

                var id3 = "RS7-4-1A2";
                var respuesta3 = $("#RS7-4-1A2").val();

                var id4 = "R7-4-1A1";
                var respuesta4 = $("#R7-4-1A1").val();

                var arreglo = [id1,respuesta1,id2,respuesta2,id3,respuesta3,id4,respuesta4];
                console.log(arreglo)
                
                BDatos(arreglo)
            });

            $("#guardarRespuesta12").click(function() {
                var id1 = "RS7-5-1A1";
                var respuesta1 = $("#RS7-5-1A1").val();

                var id2 = "RS7-5-1A1";
                var respuesta2 = $("#RS7-5-1A1").val();

                var id3 = "R7-5-1";
                var respuesta3 = $("#R7-5-1").val();

                var arreglo = [id1,respuesta1,id2,respuesta2,id3,respuesta3];
                console.log(arreglo)
                
                BDatos(arreglo)
            });

            $("#guardarRespuesta13").click(function() {
                var id1 = "R7-6-1";
                var respuesta1 = $("#R7-6-1").val();

                var arreglo = [id1,respuesta1];
                console.log(arreglo)
                
                BDatos(arreglo)
            });
            
            $("#guardarRespuesta14").click(function() {
                var id1 = "RS7-6-2A1";
                var respuesta1 = $("#RS7-6-2A1").val();

                var id2 = "R7-6-2";
                var respuesta2 = $("#R7-6-2").val();

                var arreglo = [id1,respuesta1,id2,respuesta2];
                console.log(arreglo)
                
                BDatos(arreglo)
            });

            $("#guardarRespuesta15").click(function() {
                var id1 = "RS7-6-3A1";
                var respuesta1 = $("#RS7-6-3A1").val();

                var id2 = "R7-6-3";
                var respuesta2 = $("#R7-6-3").val();

                var arreglo = [id1,respuesta1,id2,respuesta2];
                console.log(arreglo)
                
                BDatos(arreglo)
            });

            $("#guardarRespuesta16").click(function() {
                var id1 = "RS7-6-4A1";
                var respuesta1 = $("#RS7-6-4A1").val();

                var id2 = "R7-6-4";
                var respuesta2 = $("#R7-6-4").val();

                var arreglo = [id1,respuesta1,id2,respuesta2];
                console.log(arreglo)
                
                BDatos(arreglo)
            });

            $("#guardarRespuesta17").click(function() {
                var id1 = "RS7-6-5A1";
                var respuesta1 = $("#RS7-6-5A1").val();

                var id2 = "R7-6-5";
                var respuesta2 = $("#R7-6-5").val();

                var arreglo = [id1,respuesta1,id2,respuesta2];
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
            <div class="titulo_categoria">Categoría 7: Vinculación - Extensión

            </div>

            <div>
                <div class="parrafo" id="7.1">
                    <p>
                        7.1 Vinculación con los sectores público, privado y social. 
                        En forma explícita, el programa debe tener estrategias de 
                        vinculación con los sectores social y productivo, con alcances 
                        nacionales o internacionales, así como el seguimiento y la 
                        valoración de los resultados correspondientes.
                    </p>
                </div>
            </div>
        
            
            <div class="preguntasCategoria" id="SC_7.1.1">
                <div class="opcMult" °>
                    <select name="select" id="RS7-1-1A1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <br>

                <p>7.1.1 En caso afirmativo, indique el tipo de seguimiento 
                    y la valoración de los resultados correspondientes.
                </p>
                <textarea id="R7-1-1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                <div class="btnListo"><button id="guardarRespuesta1">Guardar</button></div>

            </div>

            <div class="preguntasCategoria" id="SC_7.1.2">
                <p>7.1.2 Deben existir convenios de colaboración con entidades 
                    externas que apoyen a las funciones sustantivas del quehacer 
                    universitario y que tengan resultados tangibles.
                </p>
                <p>¿Existen convenios de colaboración en operación?</p>

                <div class="opcMult" °>
                    <select name="select" id="RS7-2-2A1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <br>

                <p>En caso afirmativo, descríbalos brevemente e 
                    indique qué resultados tangibles se tienen.
                </p>
                <textarea id="R7-1-2" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                <div class="btnListo"><button id="guardarRespuesta2">Guardar</button></div>

            </div>

            <div class="preguntasCategoria" id="SC_7.1.3">
                <p>7.1.3 ¿Se tiene establecida una normativa para efectuar 
                    las prácticas y estadías profesionales, en el
                    espacio de trabajo?  
                </p>

                <div class="opcMult" °>
                    <select name="select" id="RS7-1-3A1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <br>

                <p>En caso afirmativo, descríbalos brevemente</p>
                <textarea id="R7-1-3" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                <div class="btnListo"><button id="guardarRespuesta3">Guardar</button></div>
            </div>

            <div class="preguntasCategoria" id="SC_7.1.4">
                <p>7.1.4 Existen programas de formación de estudiantes mediante 
                    becas otorgadas por las empresas para realizar actividades técnicas 
                    en proyectos específicos o bien para que sean capacitados en temas
                    disciplinarios emergentes  propios de la disciplina del programa y/o 
                    tengan acceso a equipos especializados con tecnología de punta; 
                    elementos que facilitan su inserción en el mercado laboral.
                </p>

                <div class="opcMult" °>
                    <select name="select" id="RS7-1-4A1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <br>

                <p>En caso afirmativo, descríbalos brevemente e 
                    indique qué resultados tangibles se tienen.
                </p>
                <textarea id="R7-1-4" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                <div class="btnListo"><button id="guardarRespuesta4">Guardar</button></div>
                
            </div>


            <div class="preguntasCategoria" id="SC_7.1.5">
                <p>7.1.5 Existen mecanismos e instrumentos para medir el 
                    alcance de la vinculación de la IES con el sector
                    productivo. 
                </p>

                <div class="opcMult" °>
                    <select name="select" id="RS7-1-5A1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <br>

                <p>En caso afirmativo, descríbalos brevemente e 
                    indique qué resultados tangibles se tienen.
                </p>
                <textarea id="R7-1-5" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

                <p>En caso afirmativo proporcione una copia o copias de los 
                    documentos (puedes subir más de un archivo).
                </p>
                <!-- <img src="" alt=""><button>Guardar</button> -->
                <br><br>
                <div class="Listo">
                    <img src="/imagenes/pdf.png" alt="">
                    <button>Seleccionar archivos</button>
                    <!-- <button>Cargar</button>  -->
                </div>
                <div class="btnListo"><button id="guardarRespuesta5">Guardar</button></div> 
            </div>


            <div>
                <div class="parrafo" id="7.2">
                    <p>
                        7.2 Seguimiento de egresados. Debe existir un programa de 
                        seguimiento de egresados y un mecanismo para que las opiniones 
                        de éstos sean consideradas en la reestructuración del plan de estudios.
                    </p>
                </div>
            </div>


            <div class="preguntasCategoria" id="SC_7.2.1">
                <p>7.2.1 ¿El programa cuenta con un mecanismo para el 
                    seguimiento de egresados que incluya encuestas a
                    empleadores para conocer el desempeño laboral de 
                    los egresados en el campo laboral y encuestas a los
                    propios egresados para conocer su opinión sobre el plan 
                    de estudios que cursaron; así como mecanismos para que 
                    los resultados de las encuestas se tomen en consideración 
                    para la reestructuración del plan de estudios ?
                </p>

                <div class="opcMult" °>
                    <select name="select" id="RS7-2-1A1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <br>

                <p>En caso afirmativo describa brevemente en qué 
                    consiste y algunos de los resultados obtenidos.
                </p>
                <textarea id="R7-2-1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                <div class="btnListo"><button id="guardarRespuesta6">Guardar</button></div>


            </div>

            <div class="preguntasCategoria" id="SC_7.2.2">
                <p>7.2.2 ¿Existen bases de datos actualizadas de los 
                    egresados del programa académico?
                </p>

                <div class="opcMult" °>
                    <select name="select" id="RS7-2-2A1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <br>
                <div class="btnListo"><button id="guardarRespuesta7">Guardar</button></div>
            </div>


            <div class="preguntasCategoria" id="SC_7.2.3">
                <p>7.2.3 ¿ Se efectúan encuestas periódicas a los egresados para  
                    conocer su  situación laboral y el grado de
                    satisfacción respecto a la pertinencia del  programa?
                </p>

                <div class="opcMult" °>
                    <select name="select" id="RS7-2-3A1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <br>

                <p>En caso afirmativo describa brevemente algunos 
                    de los resultados obtenidos.
                </p>
                <textarea id="R7-2-3" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               


                <p>En caso afirmativo proporcione una copia o copias de los 
                    documentos (puedes subir más de un archivo).
                </p>
                <!-- <img src="" alt=""><button>Guardar</button> -->
                <br><br>
                <div class="Listo">
                    <img src="/imagenes/pdf.png" alt="">
                    <button>Seleccionar archivos</button>
                    <!-- <button>Cargar</button>  -->
                </div>
                <div class="btnListo"><button id="guardarRespuesta8">Guardar</button></div>

            </div>


            <div>
                <div class="parrafo" id="7.3">
                    <p>
                        7.3 Intercambio académico Consiste en la existencia de convenios vigentes 
                        y en operación de intercambio académico con otras instituciones educativas 
                        nacionales y extranjeras, que permitan desarrollar programas de movilidad 
                        de estudiantes, que coadyuven a su formación integral, así como de docentes 
                        e investigadores que participen individualmente o en redes de colaboración 
                        para la mejora del programa académico.

                    </p>
                </div>
            </div>


            <div class="preguntasCategoria" id="SC_7.3.1">
                <p>7.3.1 ¿Existen estos convenios?
                </p>

                <div class="opcMult" °>
                    <select name="select" id="RS7-3-1A1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <br>

                <p>En caso afirmativo describa brevemente en qué consisten 
                    estos convenios  y presente evidencias de operación de los mismos.
                </p>
                <textarea id="R7-3-1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

                <p>Presente la lista de estudiantes y profesores del programa 
                    educativo que han participado en movilidad académica.
                </p>
                <textarea id="R7-3-1A1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

                <p>En caso afirmativo proporcione una copia o copias de los 
                    documentos (puedes subir más de un archivo).
                </p>
                <!-- <img src="" alt=""><button>Guardar</button> -->
                <br><br>
                <div class="Listo">
                    <img src="/imagenes/pdf.png" alt="">
                    <button>Seleccionar archivos</button>
                    <!-- <button>Cargar</button>  -->
                </div>
                <div class="btnListo"><button id="guardarRespuesta9">Guardar</button></div>
                
            </div>


            <div class="preguntasCategoria" id="SC_7.3.2">
                <p>7.3.2 ¿Cuáles son los impactos del intercambio académico 
                    en la mejora del programa educativo?
                    Enumérelos:
                </p>
                <textarea id="R7-3-2" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                <div class="btnListo"><button id="guardarRespuesta10">Guardar</button></div>

            </div>


            <div>
                <div class="parrafo" id="7.4">
                    <p>
                        7.4 Servicio social.  El programa debe apegarse a los 
                        lineamientos constitucionales de prestación de servicio social, 
                        debiéndose realizar el seguimiento apropiado del mismo.

                    </p>
                </div>
            </div>

            <div class="preguntasCategoria" id="SC_7.4.1">
                <p>7.4.1 ¿El programa lleva un control del servicio 
                    social de los estudiantes?
                </p>
                <div class="opcMult" °>
                    <select name="select" id="RS7-4-1A1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <br>

                <p>En caso afirmativo describa brevemente en que consiste, 
                    y la manera como la institución se asegura de
                    observar los lineamientos constitucionales correspondientes.
                </p>
                <textarea id="R7-4-1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

                <p>¿Se tiene conocimiento sobre el tipo de actividades 
                    que realizan los estudiantes para cubrir el requisito
                    de servicio social?
                </p>
                <div class="opcMult" °>
                    <select name="select" id="RS7-4-1A2">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <br>

                <p>En caso afirmativo indique el porcentaje de dichas 
                    actividades que guardan relación con el área del
                    programa educativo:
                </p>
                <textarea id="R7-4-1A1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                <div class="btnListo"><button id="guardarRespuesta11">Guardar</button></div>

            </div>

            <div>
                <div class="parrafo" id="7.5">
                    <p>
                        7.5 Bolsa de trabajo. El programa educativo debe contar 
                        con una bolsa de trabajo para estudiantes y egresados (adecuada 
                        y eficiente).

                    </p>
                </div>
            </div>

            <div class="preguntasCategoria" id="SC_7.5.1">
                <p>7.5.1 ¿El programa cuenta con una 
                    bolsa de trabajo?
                </p>
                <div class="opcMult" °>
                    <select name="select" id="RS7-5-1A1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <br>

                <p>En caso afirmativo:
                    ¿Es adecuada?
                </p>
                <div class="opcMult" °>
                    <select name="select" id="RS7-5-1A1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <br>

                <p>¿Por qué?</p>
                <textarea id="R7-5-1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                <div class="btnListo"><button id="guardarRespuesta12">Guardar</button></div>
            </div>

            <div>
                <div class="parrafo" id="7.6">
                    <p>
                        7.6 Extensión. Deben existir mecanismos de difusión 
                        de la cultura del área académica del programa educativo, 
                        como son: artículos, reportes de investigación, publicaciones 
                        periódicas, libros de texto, conferencias, exposiciones y otros.  
                        Parte de esta difusión debe estar dirigida a la niñez y a la juventud. 
                        También deben existir cursos de educación continua, centros de 
                        idiomas, servicio externo y servicio comunitario.
                    </p>
                </div>
            </div>

            <div class="preguntasCategoria" id="SC_7.6.1">
                <p>7.6.1 ¿Qué medios brinda la Institución y a qué nivel 
                    (General, de la Dirección, de la jefatura, del
                    programa, etc.) para la difusión de la cultura informática, 
                    como son: Artículos, reportes de investigación,
                    publicaciones periódicas, libros de texto, conferencias, 
                    exposiciones, etc.?
                </p>
                <textarea id="R7-6-1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                <div class="btnListo"><button id="guardarRespuesta13">Guardar</button></div>

            </div>

            <div class="preguntasCategoria" id="SC_7.6.2">
                <p>7.6.2 Deben existir programas de capacitación 
                    para diferentes sectores.
                </p>

                <p>¿El programa realiza programas de capacitación 
                    para diferentes sectores?
                </p>
                <div class="opcMult" °>
                    <select name="select" id="RS7-6-2A1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <br>

                <p>En caso afirmativo proporcione la siguiente información 
                    para los últimos 3 períodos.
                </p>
                <textarea id="R7-6-2" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                <div class="btnListo"><button id="guardarRespuesta14">Guardar</button></div>

            </div>


            <div class="preguntasCategoria" id="SC_7.6.3">
                <p>7.6.3 El programa debe considerar la existencia de actividades 
                    para la actualización profesional tales como cursos de educación 
                    continua, diplomados, conferencias, congresos, seminarios, etc.
                </p>

                <p>La Unidad académica o la Institución cuenta 
                    con actividades de actualización profesional:
                </p>
                <div class="opcMult" °>
                    <select name="select" id="RS7-6-3A1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <br>

                <p>Describa brevemente en qué consisten, 
                    así como resultados obtenidos.
                </p>
                <textarea id="R7-6-3" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                <div class="btnListo"><button id="guardarRespuesta15">Guardar</button></div>

            </div>

            <div class="preguntasCategoria" id="SC_7.6.4">
                <p>7.6.4  El programa debe contar con un servicio externo 
                    (asesorías, consultorías) a empresas e instituciones del sector 
                    público, que permitan obtener recursos económicos adicionales.
                </p>
                <div class="opcMult" °>
                    <select name="select" id="RS7-6-4A1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <br>

                <p>Describa brevemente en qué consisten, 
                    así como resultados obtenidos.
                </p>
                <textarea id="R7-6-4" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                <div class="btnListo"><button id="guardarRespuesta16">Guardar</button></div>

            </div>

            <div class="preguntasCategoria" id="SC_7.6.5">
                <p>7.6.5 ¿Opera un servicio institucional de capacitación 
                    en materia de lenguas extranjeras?
                </p>
                <div class="opcMult" °>
                    <select name="select" id="RS7-6-5A1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <br>

                <p>Describa brevemente en qué consiste, 
                    así como resultados obtenidos:
                </p>
                <textarea id="R7-6-5" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

                <p>En caso afirmativo proporcione una copia o copias 
                    de los documentos (puedes subir más de un archivo).
                </p>
                <!-- <img src="" alt=""><button>Guardar</button> -->
                <br><br>
                <div class="Listo">
                    <img src="/imagenes/pdf.png" alt="">
                    <button>Seleccionar archivos</button>
                    <!-- <button>Cargar</button>  -->
                </div>
                <div class="btnListo"><button id="guardarRespuesta17">Guardar</button></div>


            </div>
        </div>


</body>

</html>