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
    <title>Categoría 9</title>
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
                url: "recuperar_respuestas9.php",
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
                    var id1 = "R9-1-1";
                    var respuesta1 = $("#R9-1-1").val();

                    var arreglo = [id1,respuesta1];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta2").click(function() {

                    var id2 = "R9-1-2";
                    var respuesta2 = $("#R9-1-2").val();

                    var arreglo = [id2,respuesta2];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta3").click(function() {

                    var id3 = "R9-1-3";
                    var respuesta3 = $("#R9-1-3").val();

                    var arreglo = [id3,respuesta3];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta4").click(function() {

                    var id4 = "R9-1-4";
                    var respuesta4 = $("#R9-1-4").val();

                    var arreglo = [id4,respuesta4];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta5").click(function() {

                    var id5 = "RS9-1-5A1";
                    var respuesta5 = $("#RS9-1-5A1").val();

                    var id6 = "R9-1-5";
                    var respuesta6 = $("#R9-1-5").val();

                    var arreglo = [id5,respuesta5, id6,respuesta6];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta6").click(function() {

                    var id7 = "R9-1-6";
                    var respuesta7 = $("#R9-1-6").val();

                    var arreglo = [id7,respuesta7];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta7").click(function() {

                    var id8 = "R9-1-7";
                    var respuesta8 = $("#R9-1-7").val();

                    var arreglo = [id8,respuesta8];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta8").click(function() {

                    var id9 = "R9-1-8";
                    var respuesta9 = $("#R9-1-8").val();

                    var id10 = "R9-1-8A1";
                    var respuesta10 = $("#R9-1-8A1").val();

                    var arreglo = [id9,respuesta9, id10,respuesta10];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta9").click(function() {

                    var id11 = "R9-1-9";
                    var respuesta11 = $("#R9-1-9").val();

                    var id12 = "R9-1-9A1";
                    var respuesta12 = $("#R9-1-9A1").val();

                    var arreglo = [id11,respuesta11, id12,respuesta12];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta10").click(function() {

                    var id13 = "R9-1-10";
                    var respuesta13 = $("#R9-1-10").val();

                    var arreglo = [id13,respuesta13];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta11").click(function() {

                    var id14 = "R9-1-11";
                    var respuesta14 = $("#R9-1-11").val();

                    var arreglo = [id14,respuesta14];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta12").click(function() {

                    var id15 = "R9-1-12";
                    var respuesta15 = $("#R9-1-12").val();

                    var id16 = "R9-1-12A1";
                    var respuesta16 = $("#R9-1-12A1").val();

                    var id17 = "RS9-1-1A1";
                    var respuesta17 = $("#RS9-1-1A1").val();

                    var id18 = "RS9-1-1A2";
                    var respuesta18 = $("#RS9-1-1A2").val();

                    var arreglo = [id15,respuesta15, id16,respuesta16, id17,respuesta17, id18,respuesta18];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta13").click(function() {

                    var id19 = "RS9-1-13A1";
                    var respuesta19 = $("#RS9-1-13A1").val();

                    var id20 = "R9-1-13";
                    var respuesta20 = $("#R9-1-13").val();

                    var arreglo = [id19,respuesta19, id20,respuesta20];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta14").click(function() {

                    var id21 = "R9-2-1";
                    var respuesta21 = $("#R9-2-1").val();

                    var arreglo = [id21,respuesta21];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta15").click(function() {

                    var id22 = "R9-2-2";
                    var respuesta22 = $("#R9-2-2").val();

                    var arreglo = [id22,respuesta22];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta16").click(function() {

                    var id23 = "R9-2-3";
                    var respuesta23 = $("#R9-2-3").val();

                    var id24 = "R9-2-3A1";
                    var respuesta24 = $("#R9-2-3A1").val();

                    var arreglo = [id23,respuesta23, id24,respuesta24];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta17").click(function() {

                    var id25 = "R9-2-4";
                    var respuesta25 = $("#R9-2-4").val();

                    var id26 = "R9-2-4A1";
                    var respuesta26 = $("#R9-2-4A1").val();

                    var arreglo = [id25,respuesta25, id26,respuesta26];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta18").click(function() {

                    var id27 = "R9-2-5";
                    var respuesta27 = $("#R9-2-5").val();

                    var arreglo = [id27,respuesta27];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta19").click(function() {

                    var id28 = "R9-2-6";
                    var respuesta28 = $("#R9-2-6").val();

                    var arreglo = [id28,respuesta28];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta20").click(function() {

                    var id29 = "RS9-2-7A1";
                    var respuesta29 = $("#RS9-2-7A1").val();

                    var id30 = "R9-2-7";
                    var respuesta30 = $("#R9-2-7").val();

                    var id31 = "RS9-2-7A2";
                    var respuesta31 = $("#RS9-2-7A2").val();

                    var id32 = "RS9-2-7A3";
                    var respuesta32 = $("#RS9-2-7A3").val();

                    var id33 = "RS9-2-7A4";
                    var respuesta33 = $("#RS9-2-7A4").val();

                    var id34 = "R9-2-7A1";
                    var respuesta34 = $("#R9-2-7A1").val();

                    var id35 = "R9-2-7A2";
                    var respuesta35 = $("#R9-2-7A2").val();

                    var arreglo = [id29,respuesta29, id30,respuesta30, id31,respuesta31, id32,respuesta32, id33,respuesta33, id34,respuesta34, id35,respuesta35];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta21").click(function() {

                    var id36 = "R9-2-8";
                    var respuesta36 = $("#R9-2-8").val();

                    var arreglo = [id36,respuesta36];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta22").click(function() {

                    var id37 = "R9-2-9";
                    var respuesta37 = $("#R9-2-9").val();

                    var id38 = "R9-2-9A1";
                    var respuesta38 = $("#R9-2-9A1").val();

                    var id39 = "R9-2-9A2";
                    var respuesta39 = $("#R9-2-9A2").val();

                    var arreglo = [id37,respuesta37, id38,respuesta38, id39,respuesta39];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta23").click(function() {

                    var id40 = "RS9-2-10A1";
                    var respuesta40 = $("#RS9-2-10A1").val();

                    var id41 = "RS9-2-10A2";
                    var respuesta41 = $("#RS9-2-10A2").val();

                    var arreglo = [id40,respuesta40, id41,respuesta41];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta24").click(function() {

                    var id42 = "R9-2-11";
                    var respuesta42 = $("#R9-2-11").val();

                    var arreglo = [id42,respuesta42];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });
                
                $("#guardarRespuesta25").click(function() {

                    var id43 = "R9-2-12";
                    var respuesta43 = $("#R9-2-12").val();

                    var id44 = "R9-2-12A1";
                    var respuesta44 = $("#R9-2-12A1").val();

                    var id45 = "R9-2-12A2";
                    var respuesta45 = $("#R9-2-12A2").val();

                    var id46 = "R9-2-12A3";
                    var respuesta46 = $("#R9-2-12A3").val();

                    var arreglo = [id43,respuesta43, id44,respuesta44, id45,respuesta45, id46,respuesta46];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta26").click(function() {

                    var id47 = "RS9-2-13A1";
                    var respuesta47 = $("#RS9-2-13A1").val();

                    var id48 = "R9-2-13";
                    var respuesta48 = $("#R9-2-13").val();
                    
                    var arreglo = [id47,respuesta47, id48,respuesta48];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });
                
                $("#guardarRespuesta27").click(function() {

                    var id49 = "RS9-2-14A1";
                    var respuesta49 = $("#RS9-2-14A1").val();

                    var id50 = "R9-2-14";
                    var respuesta50 = $("#R9-2-14").val();



                    var arreglo = [id49,respuesta49, id50,respuesta50];
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
            <div class="titulo_categoria">Categoría 9: Infraestructura y equipamiento</div>

            <div>
                <div class="parrafo" id="9.1">
                    <p >
                        En el área de TIC’s el equipamiento e infraestructura es fundamental para 
                        el desarrollo del plan de estudios. La profesión está fuertemente sostenida 
                        por Redes de telecomunicaciones, equipo de cómputo, software de diferente 
                        naturaleza por mencionar algunos aspectos.</p>

                        <p >9.1 Infraestructura.</p>

                        <p >Los espacios físicos donde se ofrezcan los servicios de cómputo deben 
                            tener condiciones adecuadas de trabajo, seguridad e higiene; exceptuando 
                            el perfil de Licenciado en Informática, los demás perfiles deberán disponer 
                            de laboratorios de electrónica; deberán contar con servicios de cómputo para 
                            cursos especializados y personal con experiencia y perfil adecuado; debe tomarse 
                            en cuenta la opinión de los profesores para su diseño, actualización y operación 
                            de los servicios de cómputo; las aulas deben ser funcionales y suficientes; deben 
                            contar con cubículos para profesores, y para asesorías a estudiantes; deben disponer 
                            de auditorios o espacios adecuados y suficientes para las distintas actividades académicas, 
                            de investigación y difusión de la cultura y los sanitarios para los estudiantes y profesores 
                            deben ser adecuados y suficientes.
                        </p>
                </div>
                <div class="preguntasCategoria" id="SC_9.1.1">
                    <p >9.1.1 Mencionar las condiciones de trabajo, seguridad e higiene de los servicios 
                        de cómputo, (dimensión de áreas de trabajo, ventilación, iluminación, aire 
                        acondicionado, extinguidores, salidas de emergencia, depósitos, etc.).
                        </p>
                    <textarea id="R9-1-1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

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
                        <button class="botonSubirPDF" id="botonSubir-9.1.1"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-9.1.1"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta1">Guardar</button></div>
                </div>

                <div class="preguntasCategoria" class="preguntasCategoria" id="SC_9.1.2">
                    <p>9.1.2 Exceptuando a los programas que correspondan al perfil de Licenciado en 
                        Informática, todos los programas deberán disponer de al menos un laboratorio 
                        de electrónica acondicionado que los soporte.</p>
                    <textarea id="R9-1-2" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

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
                        <button class="botonSubirPDF" id="botonSubir-9.1.2"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-9.1.2"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta2">Guardar</button></div>
                </div>

                <div class="preguntasCategoria" class="preguntasCategoria" id="SC_9.1.3">
                    <p >9.1.3 El programa debe disponer de los servicios de cómputo necesarios para 
                        cursos y actividades especializadas, relacionadas con el mismo.</p>
                    <textarea id="R9-1-3" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

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
                        <button class="botonSubirPDF" id="botonSubir-9.1.3"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-9.1.3"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button  id="guardarRespuesta3">Guardar</button></div>
                </div>

                <div class="preguntasCategoria" class="preguntasCategoria" id="SC_9.1.4">
                    <p >9.1.4 Los responsables de los servicios de cómputo deben ser personal con 
                        experiencia y perfil relacionado con el área.</p>
                    <textarea id="R9-1-4" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

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
                        <button class="botonSubirPDF" id="botonSubir-9.1.4"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-9.1.4"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta4">Guardar</button></div>
                </div>

                <div class="preguntasCategoria" class="preguntasCategoria" id="SC_9.1.5">
                    <p >9.1.5 El diseño, equipamiento y operación de los servicios de cómputo debe 
                        tomar en cuenta la opinión de los profesores que participan en el programa.</p>


                    <p >¿Se toma en cuenta la opinión de los profesores que participan en el programa 
                        para el diseño, equipamiento y operación de los servicios de cómputo?</p>
                    <div class="opcMult" °>
                        <select name="select" id="RS9-1-5A1">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>

                    <br><br>

                    <p >¿De qué manera?</p>
                    <textarea id="R9-1-5" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

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
                        <button class="botonSubirPDF" id="botonSubir-9.1.5"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-9.1.5"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta5">Guardar</button></div>
                </div>

                <div class="preguntasCategoria" class="preguntasCategoria" id="SC_9.1.6">
                    <p>9.1.6 Las aulas deben ser funcionales, disponer de espacio suficiente para cada 
                        estudiante y tener las condiciones adecuadas de higiene, seguridad, iluminación, 
                        ventilación, temperatura, aislamiento del ruido y mobiliario.
                    </p>

                    <p >Información sobre aulas según dimensiones y capacidades.</p>
                    <textarea id="R9-1-6" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

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
                        <button class="botonSubirPDF" id="botonSubir-9.1.6"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-9.1.6"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta6">Guardar</button></div>
                </div>

                <div class="preguntasCategoria" class="preguntasCategoria" id="SC_9.1.7">
                    <p >9.1.7 El número de aulas habrá de ser suficiente para atender la impartición 
                        de cursos que se programen en cada periodo escolar.
                    </p>
                    <textarea id="R9-1-7" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

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
                        <button class="botonSubirPDF" id="botonSubir-9.1.7"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-9.1.7"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta7">Guardar</button></div>
                </div>

                <div class="preguntasCategoria" class="preguntasCategoria" id="SC_9.1.8">
                    <p >9.1.8 El programa debe disponer de al menos un aula con equipo de cómputo 
                        y audiovisual permanentemente instalado que podrá ser utilizada para cursos normales 
                        y especializados.
                    </p>

                    <p >Número de aulas con equipo de cómputo.
                    </p>
                    <textarea id="R9-1-8" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

                    <br><br>

                    <p >Número de aulas con equipo audiovisual.
                    </p>
                    <textarea id="R9-1-8A1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

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
                        <button class="botonSubirPDF" id="botonSubir-9.1.8"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-9.1.8"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta8">Guardar</button></div>
                </div>

                <div class="preguntasCategoria" class="preguntasCategoria" id="SC_9.1.9">
                    <p >9.1.9 Los profesores de tiempo completo, tres cuartos y medio tiempo deben 
                        contar con cubículos. El resto de los profesores deben contar con lugares 
                        adecuados para su trabajo.
                    </p>


                    <p >¿Qué tipo de profesores cuenta con cubículos?
                    </p>
                    <textarea id="R9-1-9" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

                    <br><br>

                    <p >¿Qué otro tipo de lugar existe para trabajo del resto de los profesores? 
                    </p>
                    <textarea id="R9-1-9A1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

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
                        <button class="botonSubirPDF" id="botonSubir-9.1.9"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-9.1.9"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta9">Guardar</button></div>
                </div>

                <div class="preguntasCategoria" class="preguntasCategoria" id="SC_9.1.10">
                    <p >9.1.10 Deben existir espacios para asesorías a estudiantes.
                    </p>

                    <p >¿Existen espacios para asesorías a estudiantes? En caso afirmativo, descríbalos:
                    </p>
                    <textarea id="R9-1-10" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

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
                        <button class="botonSubirPDF" id="botonSubir-9.1.10"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-9.1.10"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta10">Guardar</button></div>
                </div>

                <div class="preguntasCategoria" class="preguntasCategoria" id="SC_9.1.11">
                    <p >9.1.11 El programa debe disponer de auditorios y/o salas debidamente 
                        acondicionados para actividades académicas, investigación, y de preservación 
                        y difusión de la cultura.
                    </p>
                    <textarea id="R9-1-11" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

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
                        <button class="botonSubirPDF" id="botonSubir-9.1.11"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-9.1.11"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta11">Guardar</button></div>
                </div>

                <div class="preguntasCategoria" class="preguntasCategoria" id="SC_9.1.12">
                    <p >9.1.12 En los espacios mencionados en el criterio anterior, se debe tener 
                        un lugar cómodo por cada diez estudiantes inscritos en el programa, 
                        ofreciendo las condiciones adecuadas de higiene y seguridad.
                    </p>


                    <p >De los espacios mencionados anteriormente mencionar:
                    </p>
                    <textarea id="R9-1-12" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

                    <br><br>

                    <p >Número de lugares disponibles.
                    </p>
                    <textarea id="R9-1-12A1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

                    
                    <br><br>

                    <p >Ofrece condiciones adecuadas de higiene.
                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS9-1-1A1">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    
                    <br><br>

                    <p >Ofrece condiciones adecuadas de seguridad.
                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS9-1-1A2">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>

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
                        <button class="botonSubirPDF" id="botonSubir-9.1.12"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-9.1.12"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta12">Guardar</button></div>
                </div>

                <div class="preguntasCategoria" class="preguntasCategoria" id="SC_9.1.13">
                    <p>9.1.13 Las facilidades sanitarias para los estudiantes y profesores del programa 
                        deben ser adecuadas.</p>
                    <br><br>
                    <p>¿Considera las facilidades sanitarias adecuadas?</p>
                    <div class="opcMult">
                        <select name="select" id="RS9-1-13A1" onchange="mostrarInput(this)">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <br>
                    <p>En caso afirmativo sustente su respuesta.</p>
                    <textarea id="R9-1-13" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
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
                        <button class="botonSubirPDF" id="botonSubir-9.1.13"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-9.1.13"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta13">Guardar</button></div>
                </div>
            
                

                
                <div class="parrafo" id="9.2">
                    <p >
                        9.2 Equipamiento. El Software recomendado para cada una de las asignaturas 
                        debe existir y estar disponible para el uso de los estudiantes y personal docente.
                    </p>
                </div>
                <div class="preguntasCategoria" class="preguntasCategoria" id="SC_9.2.1">
                    <p>9.2.1 Para cada asignatura mencionar el software que se utiliza y si está disponible 
                        dentro de la institución.
                    </p>
                    <textarea id="R9-2-1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
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
                        <button class="botonSubirPDF" id="botonSubir-9.2.1"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-9.2.1"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta14">Guardar</button></div>
                </div>


                <div class="preguntasCategoria" id="SC_9.2.2">
                    <p >9.2.2 Todo programa debe contar como mínimo con el siguiente software: 
                        Lenguajes de programación, herramientas CASE, manejadores de base de 
                        datos y paquetería en general.
                    </p>

                    <p >Describir los siguientes elementos de la infraestructura de software, 
                        incluyendo versiones y número de licencias:
                    </p>
                    <textarea id="R9-2-2" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

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
                        <button class="botonSubirPDF" id="botonSubir-9.2.2"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-9.2.2"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta15">Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="SC_9.2.3">
                    <p >9.2.3 El programa debe tener a su disposición dentro de la institución, 
                        el equipo de cómputo indispensable para las prácticas de las materias 
                        que lo requieran.
                    </p>

                    <p >Número de estudiantes inscritos en el programa.
                    </p>
                    <textarea id="R9-2-3" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                    <br><br>

                    <p>Explique de qué manera se garantiza que el equipo de cómputo requerido 
                        esté disponible para la realización de las prácticas en las asignaturas del 
                        programa que así lo requieran:
                    </p>
                    <textarea id="R9-2-3A1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
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
                        <button class="botonSubirPDF" id="botonSubir-9.2.3"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-9.2.3"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta16">Guardar</button></div>
                </div>


                <div class="preguntasCategoria" id="SC_9.2.4">
                    <p >9.2.4 Se debe contar con un número suficiente de computadoras 
                        que estén disponibles y accesibles para los estudiantes del programa 
                        en función el número de horas de infraestructura de cómputo requeridas 
                        por el Plan de Estudios.
                    </p>

                    <p >Proporcionar la siguiente información:
                    </p>

                    <p >Horas requeridas por el plan de estudios en un período.</p>
                    <textarea id="R9-2-4" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

                    <p >Horas disponibles de infraestructura de cómputo.
                    </p>
                    <textarea id="R9-2-4A1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

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
                        <button class="botonSubirPDF" id="botonSubir-9.2.4"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-9.2.4"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta17">Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="SC_9.2.5">
                    <p >9.2.5 Se debe contar con al menos tres plataformas de cómputo diferentes 
                        que estén disponibles y accesibles para los estudiantes y el personal 
                        docente del programa.
                    </p>

                    <p >Describir los tipos de plataformas de cómputo disponibles para los estudiantes
                         y el personal docente del programa:
                    </p>
                    <textarea id="R9-2-5" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

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
                        <button class="botonSubirPDF" id="botonSubir-9.2.5"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-9.2.5"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta18">Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="SC_9.2.6">
                    <p >9.2.6 Se debe contar con capacidades de impresión adecuadas para los 
                        estudiantes y profesores del programa.
                    </p>

                    <p >El programa académico debe garantizar el servicio de impresión en 
                        aquellos espacios físicos que la institución haya dispuesto para apoyo 
                        al estudiante.
                    </p>
                    <textarea id="R9-2-6" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

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
                        <button class="botonSubirPDF" id="botonSubir-9.2.6"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-9.2.6"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta19">Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="SC_9.2.7">
                    <p >9.2.7 Debe contarse con al menos una red de área local y una amplia, 
                        con software adecuado para las aplicaciones más comunes del programa.
                    </p>

                    <p >El programa académico debe garantizar el servicio de red en aquellos 
                        espacios físicos que la institución haya dispuesto para apoyo al estudiante.
                    </p>

                    <p >El equipo de cómputo de la Institución ¿está conectado en red?
                    </p>
                    <div class="opcMult">
                        <select name="select" id="RS9-2-7A1" onchange="mostrarInput(this)">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                        <p>En caso afirmativo, diga:</p>
                        <p >a) Qué equipo de cómputo (servidores y clientes) soporta la red y cuáles 
                            son sus características?
                        </p>
                        <textarea id="R9-2-7" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                    <br><br>



                    <p >b) ¿Hay acceso a Internet a través de la red?
                    </p>
                    <div class="opcMult">
                        <select name="select" id="RS9-2-7A2" onchange="mostrarInput(this)">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>

                    <br><br>

                    <p >Para profesores.
                    </p>
                    <div class="opcMult">
                        <select name="select" id="RS9-2-7A3" onchange="mostrarInput(this)">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>

                    <br><br>

                    <p >Para estudiantes.
                    </p>
                    <div class="opcMult">
                        <select name="select" id="RS9-2-7A4" onchange="mostrarInput(this)">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>

                    <br><br>

                    <p >c) En caso afirmativo a la pregunta anterior ¿cuál es el tiempo promedio 
                        disponible para cada estudiante a Internet por semana?
                    </p>
                    <textarea id="R9-2-7A1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

                    <br><br>

                    <p >d) ¿Con qué paquetes de software se cuenta en la red académica de la 
                        institución para apoyo del programa que se evalúa?
                    </p>
                    <textarea id="R9-2-7A2" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               


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
                        <button class="botonSubirPDF" id="botonSubir-9.2.7"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-9.2.7"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta20">Guardar</button></div>
                </div>


                <div class="preguntasCategoria" id="SC_9.2.8">
                    <p>9.2.8 Deberá haber facilidades de acceso al uso del equipo y manuales, 
                        horarios amplios y flexibles para atender la demanda, así como personal 
                        capacitado de soporte. El equipo deberá contar con buen mantenimiento 
                        y planes de adecuación a cambios tecnológicos.

                    </p>

                    <p >Describir la documentación para los sistemas de hardware y software 
                        disponibles para los estudiantes y profesores Explicar cómo los estudiantes 
                        y profesores tienen acceso adecuado a la documentación, así como el horario 
                        en que está disponible.
                    </p>
                    <textarea id="R9-2-8" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

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
                        <button class="botonSubirPDF" id="botonSubir-9.2.8"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-9.2.8"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta21">Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="SC_9.2.9">
                    <p >9.2.9 Los Servicios de Cómputo deben ser funcionales y contar 
                        con un programa de mantenimiento adecuado.
                    </p>

                    <p >Deben garantizarse los servicios de cómputo al menos en aquellos 
                        espacios destinados como apoyo para estudiantes y facilitadores o profesores.
                    </p>

                    <p >Los horarios de servicio en que se prestan los servicios de cómputo son los siguientes:
                    </p>
                    <textarea id="R9-2-9" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

                    <p >Si hay personal de apoyo indicar en cada caso la cantidad, horarios y funciones que tienen.
                    </p>
                    <textarea id="R9-2-9A1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

                    <br><br>

                    <p >¿Qué tipo de personal está disponible para instalar, mantener y administrar el 
                        hardware, software y redes de la institución?
                    </p>
                    <textarea id="R9-2-9A2" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

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
                        <button class="botonSubirPDF" id="botonSubir-9.2.9"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-9.2.9"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta22">Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="SC_9.2.10">
                    <p >9.2.10 Los Servicios de Cómputo deben contar con reglamentos que 
                        garanticen su buen funcionamiento y que estén a disponibilidad de 
                        los usuarios.
                    </p>

                    <p >¿Existe un reglamento de los servicios de cómputo?
                    </p>
                    <div class="opcMult">
                        <select name="select" id="RS9-2-10A1" onchange="mostrarInput(this)">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <br><br>

                    <p >En caso afirmativo, ¿se encuentra a disponibilidad de los usuarios?
                    </p>
                    <div class="opcMult">
                        <select name="select" id="RS9-2-10A2" onchange="mostrarInput(this)">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>

                    <p>Favor de proporcionar una copia de este.</p>
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
                        <button class="botonSubirPDF" id="botonSubir-9.2.10"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-9.2.10"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta23">Guardar</button></div>
                </div>


                <div class="preguntasCategoria" id="SC_9.2.11">
                    <p >9.2.11 Los profesores del programa deben contar con equipo 
                        de cómputo que les permita desempeñar adecuadamente su función. 
                        En el caso de los profesores de tiempo completo, estos deberán contar 
                        con una computadora para su uso exclusivo.
                    </p>

                    <p >Describir las facilidades de cómputo disponibles para los profesores 
                        del programa. Incluir los recursos de este tipo disponibles para las 
                        oficinas del personal académico.
                    </p>
                    <textarea id="R9-2-11" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               


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
                        <button class="botonSubirPDF" id="botonSubir-9.2.11"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-9.2.11"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta24">Guardar</button></div>
                </div>

                
                <div class="preguntasCategoria" id="SC_9.2.12">
                    <p >9.2.12 Los Servicios de Cómputo deben contar con el 
                        soporte técnico adecuado.
                    </p>

                    <p >¿Existen técnicos de administración de sistemas de tiempo completo? 
                        ¿Participan estudiantes en el apoyo a las actividades de soporte técnico?
                    </p>
                    <textarea id="R9-2-12" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

                    <br><br>

                    <p >¿Es este nivel de soporte adecuado?
                    </p>
                    <textarea id="R9-2-12A1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

                    <br><br>

                    <p >Justifique su respuesta:
                    </p>
                    <textarea id="R9-2-12A2" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

                    <br><br>

                    <p >Sí la respuesta es no, describir las limitantes existentes:
                    </p>
                    <textarea id="R9-2-12A3" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               


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
                        <button class="botonSubirPDF" id="botonSubir-9.2.12"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-9.2.12"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta25">Guardar</button></div>
                </div>


                <div class="preguntasCategoria" id="SC_9.2.13">
                    <p >9.2.13 Es necesario que existan registros y estadísticas referentes al 
                        uso del equipo de cómputo, para determinar índices de utilización 
                        e indicadores sobre la calidad del servicio.
                    </p>
                  

                    <p >¿Existen registros de usuarios de los servicios de cómputo?
                    </p>
                    <div class="opcMult">
                        <select name="select" id="RS9-2-13A1" onchange="mostrarInput(this)">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <br>

                    <p >En caso afirmativo indicar el número de usuarios en promedio diario 
                        atendidos en los tres últimos períodos escolares.
                    </p>
                    <textarea id="R9-2-13" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                    


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
                        <button class="botonSubirPDF" id="botonSubir-9.2.13"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-9.2.13"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta26">Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="SC_9.2.14">
                    <p >9.2.14 Específicamente, el personal técnico, es suficiente y cuenta con 
                        el perfil adecuado para dar soporte, no solo a la infraestructura de 
                        telecomunicaciones y redes, sino también para el desarrollo de aplicaciones, 
                        incorporación de tecnologías emergentes, administración y hospedaje, 
                        desarrollo web, minería de datos, soluciones inteligentes, reingeniería de 
                        procesos mediante el uso de las TIC y la administración de la propia 
                        plataforma tecnológica y de aprendizaje que soporta el modelo educativo, 
                        ya sea a distancia o presencial.
                    </p>
                    <div class="opcMult">
                        <select name="select" id="RS9-2-14A1" onchange="mostrarInput(this)">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>

                    <p >En cualquier caso, explique brevemente:
                    </p>
                    <textarea id="R9-2-14" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               


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
                        <button class="botonSubirPDF" id="botonSubir-9.2.14"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-9.2.14"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta27">Guardar</button></div>
                </div>

                </div>
            </div>
        </div>
    </div>


                
                <script>
                    function mostrarInput(select) {
                        var inputContainer = document.getElementById("inputContainer");
                        var seleccion = select.value.toLowerCase(); // Convierte el valor a minúsculas para ser insensible a mayúsculas y minúsculas
                        if (seleccion === "si") {
                            inputContainer.style.display = "block";
                        } else {
                            inputContainer.style.display = "none";
                        }
                    }
                    </script>


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
                <button id="botonSubirChido" class="cargar-pdf" data-id="9.1.1">
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

