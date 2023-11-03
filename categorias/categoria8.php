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
    <title>Categoria 8</title>
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
                url: "recuperar_respuestas8.php",
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
                    var id1 = "RS8-1-1A1";
                    var respuesta1 = $("#RS8-1-1A1").val();

                    var id2 = "R8-1-1";
                    var respuesta2 = $("#R8-1-1").val();

                    var arreglo = [id1,respuesta1, id2,respuesta2];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta2").click(function() {
                    var id3 = "R8-1-2";
                    var respuesta3 = $("#R8-1-2").val();
                    
                    var arreglo = [id3,respuesta3];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta3").click(function() {
                    var id4 = "R8-1-3";
                    var respuesta4 = $("#R8-1-3").val();
                    
                    var arreglo = [id4,respuesta4];
                    console.log(arreglo)
                    
                    BDatos(arreglo)

                });

                $("#guardarRespuesta4").click(function() {
                    var id5 = "RS8-2-1A1";
                    var respuesta5 = $("#RS8-2-1A1").val();
                    
                    var arreglo = [id5,respuesta5];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta5").click(function() {
                    var id6 = "R8-2-2";
                    var respuesta6 = $("#R8-2-2").val();
                    
                    var arreglo = [id6,respuesta6];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta6").click(function() {
                    var id7 = "RS8-2-3A1";
                    var respuesta7 = $("#RS8-2-3A1").val();

                    var id8 = "R8-2-3";
                    var respuesta8 = $("#R8-2-3").val();
                    
                    var arreglo = [id7,respuesta7,id8,respuesta8];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta7").click(function() {
                    var id9 = "RS8-2-4A1";
                    var respuesta9 = $("#RS8-2-4A1").val();

                    var id10 = "R8-2-4";
                    var respuesta10 = $("#R8-2-4").val();
                    
                    var arreglo = [id9,respuesta9,id10,respuesta10];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta8").click(function() {
                    var id11 = "R8-3-1";
                    var respuesta11 = $("#R8-3-1").val();
                    
                    var arreglo = [id11,respuesta11];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta9").click(function() {
                    var id12 = "R8-4-1";
                    var respuesta12 = $("#R8-4-1").val();
                    
                    var arreglo = [id12,respuesta12];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta10").click(function() {
                    var id13 = "R8-4-2";
                    var respuesta13 = $("#R8-4-2").val();
                

                    var arreglo = [id13,respuesta13];
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
        
            <div class="titulo_categoria">Categoría 8: </div>
            <div>
            <div class="parrafo" id="8.1">
                <p>
                   8.1 Líneas y proyectos de investigación.Debe existir una política institucional que fije claramente las líneas de investigación y la normatividad; las líneas de investigación deben agrupar proyectos con un responsable; y los líderes vinculados a las líneas de investigación deben contar con grados académicos pertinentes.
                </p>
            </div>

            <div class="preguntasCategoria" id="SC_8.1.1">
                <p>8.1.1 ¿Existe una política institucional que fije claramente las líneas de investigación con su respectiva normatividad?  </p>
                <div class="opcMult"°>
                    <select name="select" id="RS8-1-1A1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div> 
                <p>En caso afirmativo describa brevemente en qué consiste esta politica:</p>
                <textarea id="R8-1-1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                
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
                        <button class="botonSubirPDF" id="botonSubir-8.1.1"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-8.1.1"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                <div class="btnListo"><button id="guardarRespuesta1">Guardar</button></div>
            </div>


            <div class="preguntasCategoria" id="SC_8.1.2">
                <p>8.1.2 Líneas de investigación definidas, las cuales agrupen proyectos con un responsable asignado.
                    Si el programa cuenta con líneas de investigación definidas, enumérelas y descríbalas en forma sintética.</p>
                <textarea id="R8-1-2" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                
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
                        <button class="botonSubirPDF" id="botonSubir-8.1.2"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-8.1.2"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                <div class="btnListo"><button id="guardarRespuesta2">Guardar</button></div>
            </div>


            <div class="preguntasCategoria" id="SC_8.1.3">
                <p>8.1.3 Líderes vinculados a las líneas de investigación que posean los grados académicos pertinentes.</p>
                <p>Haga una relación de los líderes de proyectos vinculados a las líneas de investigación, e indique el nivel de los grados académicos que tiene cada uno (maestría, doctorado)</p>
                <textarea id="R8-1-3" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                
                <p>En caso afirmativo proporcione una copia de los documentos</p>

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
                        <button class="botonSubirPDF" id="botonSubir-8.1.3"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-8.1.3"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                <div class="btnListo"><button id="guardarRespuesta3">Guardar</button></div>
            </div>


            
            
            <div>
            <div class="parrafo" id="8.2">
                <p>8.2 Recursos para la investigación.Es necesario que se asignen recursos presupuestales para la investigación y/o desarrollo tecnológico que permitan al personal docente de la carrera cumplir con estas funciones sustantivas; debe contar con personal académico de carrera que desarrolle actividades de vinculación e investigación, así como con la infraestructura suficiente y pertinente para el desarrollo de los proyectos; debe existir la normatividad para el desarrollo de investigación y personal de apoyo suficiente de acuerdo al tamaño e importancia de los proyectos.
                </p>
            </div>

            <div class="preguntasCategoria" id="SC_8.2.1">
                <p>8.2.1 ¿Se asignan recursos presupuestales para la investigación y/o el desarrollo?</p>
                <div class="opcMult"°>
                    <select name="select" id="RS8-2-1A1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div> 
                
                <p>En caso afirmativo proporcione evidencias</p>
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
                        <button class="botonSubirPDF" id="botonSubir-8.2.1"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-8.2.1"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                <div class="btnListo"><button id="guardarRespuesta4">Guardar</button></div>

            </div>

            <div class="preguntasCategoria" id="SC_8.2.2">
                <p>8.2.2 Es recomendable que la institución cuente con un programa de vinculación con el sector productivo o de servicios e investigación, con las siguientes características:  Un grupo de personal académico de carrera, integrado para desarrollar actividades de vinculación e investigación, constituido por un mínimo de dos personas con posgrado en el área de la especialidad del programa, preferentemente con el grado de doctor, y al menos tres profesores, profesionistas o estudiantes. </p>
                <p>Una infraestructura suficiente y pertinente en cuanto a espacios y equipos para el desarrollo de la vinculación con el sector productivo o de servicios y la investigación.</p>
                <p>Incluya una relación de los espacios físicos y equipos exclusivamente para la investigación. Indique cuántos investigadores utilizan esta infraestructura.</p>

                <textarea id="R8-2-2" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
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
                        <button class="botonSubirPDF" id="botonSubir-8.2.2"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-8.2.2"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                <div class="btnListo"><button id="guardarRespuesta5">Guardar</button></div>
            </div>

            
            <div class="preguntasCategoria" id="SC_8.2.3">
                <p>8.2.3 Normatividad expresa y aprobada para el desarrollo de la investigación.<br>
                <p>¿En la institución está explícita y debidamente aprobada la normatividad relativa a las tareas de investigación?</p>
                <div class="opcMult"°>
                    <select name="select" id="RS8-2-3A1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div> 
                <p>En caso afirmativo, exponga los puntos más importantes.</p>
                <textarea id="R8-2-3" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                
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
                        <button class="botonSubirPDF" id="botonSubir-8.2.3"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-8.2.3"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                <div class="btnListo"><button id="guardarRespuesta6">Guardar</button></div>
            </div>


            <div class="preguntasCategoria" id="SC_8.2.4">
                <p>8.2.4 Personal de apoyo suficiente (técnicos de investigación, profesores titulares, profesores asociados, etc.), en función del tamaño e importancia de cada proyecto.<br>
                <p>¿Cuenta con el personal de apoyo suficiente para el desarrollo de la investigación?</p>
                <div class="opcMult"°>
                    <select name="select" id="RS8-2-4A1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div> 
                <p>En caso afirmativo, exponga los puntos más importantes.</p>
                <textarea id="R8-2-4" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                
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
                        <button class="botonSubirPDF" id="botonSubir-8.2.4"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-8.2.4"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                <div class="btnListo"><button id="guardarRespuesta7">Guardar</button></div>
            </div>




            <div>
                <div class="parrafo" id="8.3">
                    <p>8.3 Difusión de la investigación. Deben existir mecanismos de difusión de la investigación generada  del área académica del programa educativo.</p>                
                </div>
    
                <div class="preguntasCategoria" id="SC_8.3.1">
                    <p>8.3.1 ¿Qué medios brinda la institución y a qué nivel (general, de la dirección, de la jefatura, del programa, etc.) para la difusión de la investigación del área académica?  Artículos, reportes de investigación, publicaciones periódicas, libros, capítulos de libros, conferencias, exposiciones, etc.</p>
                    <textarea id="R8-3-1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                    
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
                        <button class="botonSubirPDF" id="botonSubir-8.3.1"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-8.3.1"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button id="guardarRespuesta8">Guardar</button></div>
            </div>




            <div>
                <div class="parrafo" id="8.4">
                    <p>8.4 Impacto de la investigación

                        El programa educativo debe mostrar los resultados de la investigación que sea congruente con la docencia, así como la transferencia de los resultados de la investigación para el avance tecnológico y el mejoramiento del entorno social, por ello, la institución debe proporcionar los proyectos de investigación vinculados con el programa, que incluya: Tabla de proyecto, cronograma por trimestres y relación de proyectos de investigación terminados en los últimos cinco años, el financiamiento por proyecto y la producción relacionada.</p>
                </div>
            <div class="preguntasCategoria" id="SC_8.4.1">
                <p>8.4.1 Proporcionar los proyectos de investigación vinculados con el programa en las siguientes formas:<br>
                    <br>
                    - Tabla de proyecto<br>
                    - Cronograma por trimestres<br>
                    - Relación de proyectos de investigación terminados en los últimos cinco años</p>
                <textarea id="R8-4-1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
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
                        <button class="botonSubirPDF" id="botonSubir-8.4.1"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-8.4.1"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                <div class="btnListo"><button id="guardarRespuesta9">Guardar</button></div>
            </div>

            <div class="preguntasCategoria" id="SC_8.4.2">
                <p>8.4.2 Mecanismos para la incorporación a la práctica docente de los resultados de investigación, que representen innovación en materia educativa.</p>
                <textarea id="R8-4-2" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
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
                        <button class="botonSubirPDF" id="botonSubir-8.4.2"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-8.4.2"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                <div class="btnListo" id="guardarRespuesta10"><button>Guardar</button></div>
            </div>
            
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
                <button id="botonSubirChido" class="cargar-pdf" data-id="8.1.1">
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


