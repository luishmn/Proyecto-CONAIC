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
    <title>Categoria 6</title>
    <link rel="stylesheet" href="autoevaluacion.css">
    <script src="enviarConsulta.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
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
            <div class="titulo_categoria">Categoría 6: Servicio de apoyo al aprendizaje</div>
            <div class="parrafo" id="6.1">
                <p>
                    6.1 Tutorías. Con el propósito de apoyar en su trayectoria escolar a los 
                    estudiantes, es conveniente ofrecer apoyos de tutorías y asesorías académicas
                     que les ayude a concluir sus estudios. Medición del impacto del programa 
                     de tutorías.
                </p>
            </div>
            
            <div class="preguntasCategoria" id="SC_6.1.1">
                <p>6.1.1 ¿ Las tutorías a los estudiantes se ofrecen de manera constante y organizada?</p>
                <div class="opcMult"°>
                    <select name="select" id="RS6-1-1A1">
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
                        <button class="botonSubirPDF" id="botonSubir-6.1.1"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-6.1.1"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                <div class="btnListo"><button>Guardar</button></div>           
            </div>
                
            <div class="preguntasCategoria" id="SC_6.1.2">
                <p>6.1.2 En el caso de que se ofrezca este servicio y de que se lleve un registro, 
                    proporcionar la información sobre el número de estudiantes atendidos en los tres 
                    últimos períodos escolares y el tiempo total del profesorado dedicado a esta actividad</p>
                <textarea id="R6-1-2" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                
                <p>Tabla con periodo escolar, mecanismos de apoyo, no. De estudiantes, tiempo del profesorado</p>               
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
                        <button class="botonSubirPDF" id="botonSubir-6.1.2"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-6.1.2"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                <div class="btnListo"><button>Guardar</button></div>
            </div>

            <div class="preguntasCategoria" id="SC_6.1.3">
                <p>6.1.3 ¿Se cuenta con mecanismos e instrumentos que permitan evaluar el Programa de Tutorías así como su impacto?</p>
                <p>Describa brevemente en qué consiste el mecanismo y el impacto de las mismas.</p>
                <div class="opcMult"°>
                    <select name="select" id="RS6-1-3A1">
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
                        <button class="botonSubirPDF" id="botonSubir-6.1.3"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-6.1.3"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                <div class="btnListo"><button>Guardar</button></div>
            </div>

            <div class="parrafo" id="6.2">
                <p>
                    6.2 Asesorías académicas. El programa debe tener en operación mecanismos
                    e instrumentos para proporcionar en forma permanente asesorías académicas 
                    a los estudiantes. En este rubro es necesario también evaluar el impacto 
                    de las asesorías para la disminución de los índices de reprobación.
                </p>
            </div>

            <div class="preguntasCategoria" id="SC_6.2.1">
                <p>6.2.1 Los profesores del programa proporcionan permanentemente 
                asesorías académicas a los estudiantes:</p>
                <div class="opcMult"°>
                    <select name="select" id="RS6-2-1A1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <p>Tabla con periodo escolar, mecanismos de apoyo, no. De estudiantes, 
                tiempo del profesorado</p>
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
                        <button class="botonSubirPDF" id="botonSubir-6.2.1"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-6.2.1"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                <div class="btnListo"><button>Guardar</button></div>
            </div>

            <div class="preguntasCategoria" id="SC_6.2.2">
                <p>6.2.2 ¿Se cuenta con mecanismos e instrumentos que permitan evaluar
                el Programa de asesorías, así como su impacto para la disminución de 
                los índices de reprobación?</p>
                <p>Describa brevemente en qué consiste el mecanismo y el impacto de las mismas.</p>
                <div class="opcMult"°>
                    <select name="select" id="RS6-2-2A1">
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
                        <button class="botonSubirPDF" id="botonSubir-6.2.2"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-6.2.2"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                <div class="btnListo"><button>Guardar</button></div>
            </div>

            <div class="parrafo" id="6.3">
                <p>
                    6.3 Bibliotecas - Acceso a la Información. Se debe contar 
                    con instalaciones apropiadas para biblioteca, ubicadas lo 
                    más cerca posible de aquellas donde se realizan las actividades 
                    académicas y con espacios suficientes para proporcionar servicio 
                    simultáneamente, como mínimo al 10% del estudiantes, así como 
                    con lugares adecuados para la prestación de otros servicios 
                    como: cubículos para grupos de estudio, lugar para exposiciones, 
                    hemeroteca, videoteca, etc.
                </p>
            </div>

            <div class="preguntasCategoria" id="SC_6.3.1">
                <p>6.3.1 ¿Las instalaciones de la biblioteca en que se apoya 
                el programa se encuentran en la zona donde la población estudiantil 
                realiza sus actividades académicas o la biblioteca virtual garantiza 
                el acceso de la población estudiantil del programa para sus actividades 
                académicas?</p>
                <p>Los programas pueden o no contar con una biblioteca física, 
                pero lo que si, es que deben garantizar el servicio de acceso a 
                la información, como lo establece este criterio.</p>
                <div class="opcMult"°>
                    <select name="select" id="RS6-3-1A1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <p>Para bibliotecas con instalaciones físicas, en caso negativo, 
                indique a qué distancia se encuentra la biblioteca de las áreas 
                académicas donde se desarrolla el programa. Y para el caso de 
                bibliotecas virtuales, describa como garantiza el servicio.</p>
                <textarea id="R6-3-1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                <p>Los servicios bibliotecarios de que dispone el programa son de carácter:</p>
                
                <textarea id="R6-3-1A1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                <p>Institucional:</p>
                
                <textarea id="R6-3-1A2" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                <p>Con un acervo de cuantos ejemplares:</p>
                
                <textarea id="R6-3-1A3" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                <p>Con capacidad para atender a cuantos usuarios simultáneamente:</p>
                
                <textarea id="R6-3-1A4" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                <p>Con sistemas de estantería abierta en el caso de una biblioteca física:</p>
                <div class="opcMult"°>
                    <select name="select" id="RS6-3-1A2">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <p>Con servicios de:</p>
                <textarea id="R6-3-1A5" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                
                <p>De la Unidad Académica:</p>
                <textarea id="R6-3-1A6" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                
                <p>Con un acervo de cuantos ejemplares:</p>
                <textarea id="R6-3-1A7" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                
                <p>Con un acervo de cuantos ejemplares:</p>
                <textarea id="R6-3-1A8" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                
                <p>Con capacidad para atender a cuantos usuarios simultaneamente:</p>
                <textarea id="R6-3-1A9" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                
                <p>Con sistemas de estantería abierta:</p>
                <div class="opcMult"°>
                    <select name="select" id="RS6-3-1A3">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <p></p>
                <textarea id="R6-3-1A10" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                <p>Con servicios de:</p>
                
                <textarea id="R6-3-1A11" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                <p>Del Programa</p>
                
                <textarea id="R6-3-1A12" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                <p>Con un acervo de cuantos ejemplares</p>
                
                <textarea id="R6-3-1A13" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                <p>Con capacidad para atender a cuantos usuarios simultáneamente:</p>
                
                <textarea id="R6-3-1A14" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                <p>Con sistemas de estantería abierta:</p>
                <div class="opcMult"°>
                    <select name="select" id="RS6-3-1A4">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <p>Con servicios de:</p>
                <textarea id="R6-3-1A15" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                
                <p>¿Qué otros servicios presta la biblioteca en que se apoya 
                el programa a la comunidad estudiantil? (para el caso de bibliotecas 
                con instalaciones físicas describa si cuenta con material audiovisual, 
                salas de proyección, cubículos para grupos de estudio, equipos de 
                mecanografía e impresión, equipos de cómputo para consulta, consulta 
                vía Internet, salas de exposiciones, lugar para exposiciones, hemeroteca, 
                videoteca, etc.; en el caso de bibliotecas virtuales como proporciona 
                estos servicios).</p>
                <textarea id="R6-3-1A16" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

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
                        <button class="botonSubirPDF" id="botonSubir-6.3.1"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-6.3.1"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                <div class="btnListo"><button>Guardar</button></div>
            </div>

            <div class="preguntasCategoria" id="SC_6.3.2">
                <p>6.3.2 La institución debe elegir y cumplir las normas estándares, 
                    para el establecimiento y funcionamiento de las bibliotecas de 
                    carácter general y específicas que den servicio al programa.</p>
                <p>¿La Biblioteca de carácter general y las específicas que dan 
                    servicio al programa que se evalúa cumplen las normas de la 
                    Asociación de Bibliotecarios de Instituciones de Enseñanza Superior 
                    y de Investigación (ABIESI) en sus puntos fundamentales?</p>
                <div class="opcMult"°>
                    <select name="select" id="RS6-3-2A1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <p>Incluya la documentación de soporte correspondiente.</p>   

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
                        <button class="botonSubirPDF" id="botonSubir-6.3.2"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-6.3.2"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                <div class="btnListo"><button>Guardar</button></div>
            </div>
            

            <div class="preguntasCategoria" id="SC_6.3.3">
                <p>6.3.3 La biblioteca debe contar con títulos de los textos 
                    de referencia usados en las asignaturas del programa, para 
                    al menos el 10% de los estudiantes inscritos en éstas, cuando 
                    es en formato físico y en digital para el 100%.</p>
                    <textarea id="R6-3-3" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

                    <p>El material bibliográfico existente en la biblioteca en que 
                    se apoya el programa dispone de:</p>
                    <textarea id="R6-3-3A1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                    
                    <p>Textos de referencia señalados en las asignaturas de los planes de estudio</p>
                    <div class="opcMult"°>
                        <select name="select" id="RS6-3-3A1">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <p>Títulos diferentes por cada asignatura que se imparte en el programa</p>
                    <div class="opcMult"°>
                        <select name="select" id="RS6-3-3A2">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <p>Porcentaje de estudiantes que pueden hacer uso simultáneo de los textos 
                    de referencia Disponibles</p>
                    <textarea id="R6-3-3A2" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                    
                    <p>¿Se tienen suscripciones a publicaciones periódicas del área 
                    de especialidad y de Ciencias Básicas?</p>
                    <div class="opcMult"°>
                        <select name="select" id="RS6-3-3A3">
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
                        <button class="botonSubirPDF" id="botonSubir-6.3.3"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-6.3.3"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button>Guardar</button></div>
            </div>

            <div class="preguntasCategoria" id="SC_6.3.4">
                <p>6.3.4 Se debe contar con infraestructura para acceso a acervos digitales 
                por medio de Internet.</p>
                <textarea id="R6-3-4" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                
                <p>La biblioteca dispone de:</p>
                <textarea id="R6-3-4A1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                
                <p>Infraestructura para acceso a acervos digitales por medio de Internet:</p>
                <div class="opcMult"°>
                    <select name="select" id="RS6-3-4A1">
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
                        <button class="botonSubirPDF" id="botonSubir-6.3.4"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-6.3.4"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                <div class="btnListo"><button>Guardar</button></div>
            </div>

            <div class="preguntasCategoria" id="SC_6.3.5">
                <p>6.3.5 La biblioteca deberá poder proporcionar el acceso 
                    a publicaciones y revistas periódicas relevantes en el 
                    área de informática y computación.</p>
                <textarea id="R6-3-5" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                
                <p>El material bibliográfico existente en la biblioteca en que 
                se apoya el programa dispone de:</p>
                <textarea id="R6-3-5A1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                
                <p>Acceso a publicaciones y revistas periódicas relevantes en el 
                área de informática y computación</p>
                <div class="opcMult"°>
                    <select name="select" id="RS6-3-5A1">
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
                        <button class="botonSubirPDF" id="botonSubir-6.3.5"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-6.3.5"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                <div class="btnListo"><button>Guardar</button></div>
            </div>

            <div class="preguntasCategoria" id="SC_6.3.6">
                <p>6.3.6 La biblioteca debe contar con colecciones de obras 
                    de consulta que incluyan manuales técnicos, enciclopedias
                    generales y especiales, diccionarios, estadísticas, etcétera; 
                    que apoyen al programa.</p>
                <textarea id="R6-3-6" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                
                <p>El material bibliográfico existente en la biblioteca en que se 
                    apoya el programa dispone de:</p>
                <p>Manuales técnicos del área</p>
                <div class="opcMult"°>
                    <select name="select" id="RS6-3-6A1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <p>Colecciones de consulta como diccionarios y enciclopedias generales 
                    y especiales:</p>
                <div class="opcMult"°>
                    <select name="select" id="RS6-3-6A2">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <p>Publicaciones Estadísticas:</p>
                <div class="opcMult"°>
                    <select name="select" id="RS6-3-6A3">
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
                        <button class="botonSubirPDF" id="botonSubir-6.3.6"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-6.3.6"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                <div class="btnListo"><button>Guardar</button></div>
            </div>

            <div class="preguntasCategoria" id="SC_6.3.7">
                <p>6.3.7 El acervo bibliográfico y las suscripciones a las
                     revistas deberán estar sujetos a renovación permanente.</p>
                <p>¿Existe renovación permanente del acervo bibliográfico y las suscripciones a las revistas?</p>
                <div class="opcMult"°>
                    <select name="select" id="RS6-3-7A1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <p>¿Cómo se efectúa la renovación del acervo bibliográfico y las 
                    suscripciones a publicaciones periódicas?</p>
                <textarea id="R6-3-7" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

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
                        <button class="botonSubirPDF" id="botonSubir-6.3.7"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-6.3.7"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                <div class="btnListo"><button>Guardar</button></div>
            </div>



            <div class="preguntasCategoria" id="SC_6.3.8">
                <p>6.3.8 Se debe contar con medios electrónicos que permitan
                     la consulta automatizada del acervo bibliográfico.</p>
                <textarea id="R6-3-8" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                
                <p>La biblioteca dispone de:</p>
                <textarea id="R6-3-8A1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                
                <p>Medios electrónicos que permitan la consulta automatizada del 
                    acervo bibliográfico</p>
                <div class="opcMult"°>
                    <select name="select" id="RS6-3-8A1">
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
                        <button class="botonSubirPDF" id="botonSubir-6.3.8"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-6.3.8"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                <div class="btnListo"><button>Guardar</button></div>
            </div>

            <div class="preguntasCategoria" id="SC_6.3.9">
                <p>6.3.9 Se deben llevar registros y estadísticas actualizados 
                    de los servicios prestados, entre ellos el número de usuarios 
                    y el tipo de servicio que prestan. Esta información debe 
                    procesarse de manera automatizada</p>
                <p>La biblioteca en que se apoya el programa dispone de registros 
                    actualizados de los servicios bibliotecarios prestados en los
                     últimos períodos escolares:</p>
                <div class="opcMult"°>
                    <select name="select" id="RS6-3-9A1">
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
                        <button class="botonSubirPDF" id="botonSubir-6.3.9"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-6.3.9"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                <div class="btnListo"><button>Guardar</button></div>
            </div>

            <div class="preguntasCategoria" id="SC_6.3.10">
                <p>6.3.10 El personal académico debe participar en el 
                    proceso de selección de material bibliográfico.</p>
                <textarea id="R6-3-10" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                
                <p>Describa brevemente el proceso de selección de material 
                    bibliográfico, y quiénes participan en él.</p>
                
                <textarea id="R6-3-10A1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                <p>¿De qué manera?</p>
                
                <textarea id="R6-3-10A2" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

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
                        <button class="botonSubirPDF" id="botonSubir-6.3.10"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-6.3.10"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                <div class="btnListo"><button>Guardar</button></div>
            </div>

            <div class="preguntasCategoria" id="SC_6.3.11">
                <p>6.3.11 Debe existir un mecanismo eficiente de adquisición
                     de material bibliográfico que satisfaga las necesidades
                      del programa.</p>
                <textarea id="R6-3-11" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                
                <p>Describa brevemente el mecanismo de adquisición de material 
                    bibliográfico, y la manera como éste satisface las necesidades del programa.</p>
                <textarea id="R6-3-11A1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                
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
                        <button class="botonSubirPDF" id="botonSubir-6.3.11"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-6.3.11"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                <div class="btnListo"><button>Guardar</button></div>
            </div>

            <div class="parrafo" id="6.4">
                <p>
                    6.4 PLATAFORMA TECNOLÓGICA Y DE APRENDIZAJE
                    Software, entorno o ambiente de aprendizaje que la institución 
                    emplea como mecanismo para crear, aprobar, administrar, almacenar, 
                    distribuir y gestionar los contenidos y actividades de enseñanza 
                    aprendizaje a distancia, virtual o en línea, e incluso como 
                    complemento del aprendizaje escolarizado o presencial. 
                </p>
                <p>Se centra en gestionar contenidos creados por una gran variedad de 
                    fuentes diversas, sirviendo de soporte a los actores de esta 
                    modalidad, como los estudiantes, profesores, tutores, administradores 
                    e invitados. La intención es que sirva para poner a disposición de 
                    los estudiantes la metodología plasmada en la organización o 
                    estructura didáctica de los materiales, tareas, foros, chat 
                    (entre otros) creada por un grupo de profesores para fomentar 
                    el aprendizaje en una área determinada. Entre las funciones de 
                    estos entornos de aprendizaje,  están  gestionar usuarios, recursos, 
                    actividades de formación y contenidos; administrar el acceso; controlar 
                    y hacer seguimiento del proceso de aprendizaje; realizar evaluaciones; 
                    generar informes; gestionar servicios de comunicación como foros de 
                    discusión, videoconferencias; entre otros.</p>
            </div>

            <div class="preguntasCategoria" id="SC_6.4.1">
                <p>6.4.1 Mencione el tipo o los tipos de plataforma tecnológica 
                que utiliza para la administración de contenidos de su programa 
                educativo:</p>
                <p>Mencionar cual:</p>
                <textarea id="R6-4-1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                
                <div class="checkB">
                    <input type="checkbox" id="cbox1" value="opcion1"><label>Software libre u Open Source 
                        (Ejemplo: ATutor, Dokeos, Claroline, 
                        dotLRN, Moodle, o desarrollos institucionales, etc).</label><br>
                </div>
                <p>Mencionar cual y si es desarrollo institucional describirlo:</p>
                <textarea id="R6-4-1A1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                <div class="checkB">
                    <input type="checkbox" id="cbox1" value="opcion1"><label>Cómputo 
                        en la nube pública o privada para Educación Superior, 
                        aunque no es propiamente una plataforma, sirven de apoyo a la 
                        modalidad escolarizada o presencial e incluso a la modalidad a 
                        distancia o virtual (Ejemplo: Udacity, Coursera, Udemy, Wiziq, 
                        o desarrollos institucionales, etc.)</label><br>
                </div>                
                <p>Mencionar cual y si es institucional describirlo:</p>
                <textarea id="R6-4-1A2" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                <p>Proporcione evidencia, ya sea de licencia, desarrollo o uso, según sea el caso.</p>
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
                        <button class="botonSubirPDF" id="botonSubir-6.4.1"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-6.4.1"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                <div class="btnListo"><button>Guardar</button></div>
            </div>

            <div class="preguntasCategoria" id="SC_6.4.2">
                <p>6.4.2 Seleccione de la lista de abajo, las características 
                    que posee su entorno de aprendizaje que utiliza para su 
                    programa educativo:</p>
                <textarea id="R6-4-2" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                
                <p>Detalle de las características del entorno de aprendizaje:</p>
                <p>Descripción, Proporcione evidencias de su uso y copia de los documentos</p>
                
                <textarea id="R6-4-2A1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                <p>1) Interactividad. Se refiere a todas las herramientas de 
                    comunicación síncrona y asíncronas, como las de cooperación, 
                    colaboración, compartición y generación  de contenidos (como
                    el chat, foros, wikis, colaboración en la nube u otro sistema
                    similar, conformación de grupos de trabajo, creación de 
                    encuestas, test de evaluación, videoconferencia, espacios de 
                    entrega de actividades y mail dentro de la herramienta de 
                    aprendizaje, entre tantas otras que existen y que siguen 
                    creándose para comunicarse e interactuar).</p>
                <textarea id="R6-4-2A2" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                
                <p>2) Flexibilidad. Se refiere al grado de adaptabilidad tanto 
                    tecnológica, como pedagógica, que tenga la herramienta para 
                    favorecer el aprendizaje;</p>
                <p>Descripción, Proporcione evidencias de su uso y copia de los documentos</p>
                
                <textarea id="R6-4-2A3" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                <p>3) Escalabilidad. Se refiere a la proyección a futuro, es decir 
                    tener control y poder dar seguimiento para que se pueda transformar 
                    y adaptar con facilidad el entorno educativo a los recursos existentes 
                    o venideros;</p>
                <p>Descripción, Proporcione evidencias de su uso y copia de los documentos</p>
                <textarea id="R6-4-2A4" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                
                <p>4) Usabilidad. Se refiere a la facilidad de uso de la plataforma 
                    por parte de los actores del aprendizaje-profesores o 
                    facilitadores, tutores, estudiantes, administradores, tiene 
                    que ver con la integración de las características de accesibilidad, 
                    navegación, programación, administración, diseño e imagen del 
                    entorno de aprendizaje;</p>
                <p>Descripción, Proporcione evidencias de su uso y copia de los documentos</p>
                <textarea id="R6-4-2A5" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                
                <p>5) Ubicuidad. Es la capacidad del entorno de aprendizaje de 
                    poder ser utilizado en todas partes simultáneamente y que 
                    sea transparente para el estudiante haciéndole sentir, de 
                    que todo lo que necesita para su aprendizaje se encuentra 
                    en ese entorno, al mismo tiempo para el resto de los actores 
                    del aprendizaje, que les permita ser, estar, crear y 
                    modificar los entornos del estudiante. Es decir es el grado 
                    de presencia que brinda la plataforma y su capacidad de 
                    integración con otros sistemas autónomos externos a la 
                    misma (como las redes sociales sitios, etc.);</p>
                    <p>Descripción, Proporcione evidencias de su uso y copia de los documentos</p>
                <textarea id="R6-4-2A6" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                
                <p>6) Funcionabilidad. Se refiere al nivel de eficiencia, 
                    efectividad, portabilidad y facilidad de instalación. 
                    Es decir la conjunción de requerimientos tecnológicos, 
                    infraestructura y recursos del servidor;</p>
                <p>Descripción, Proporcione evidencias de su uso y copia de los documentos</p>
                <textarea id="R6-4-2A7" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                
                <p>7) Estandarización. Se refiere a la aceptabilidad de estándares
                     como SCORM o a la facilidad para importar o insertar otros 
                     recursos o contenidos al entorno de aprendizaje.</p>
                
                <div class="checkB">
                    <input type="checkbox" id="cbox1" value="opcion1"><label>Interactividad</label><br>
                    <input type="checkbox" id="cbox2" value="opcion2"><label>Flexibilidad</label><br>
                    <input type="checkbox" id="cbox3" value="opcion3"><label>Escalabilidad</label><br>
                    <input type="checkbox" id="cbox4" value="opcion4"><label>Usabilidad</label><br>
                    <input type="checkbox" id="cbox5" value="opcion5"><label>Ubicuidad</label><br>
                    <input type="checkbox" id="cbox6" value="opcion6"><label>Funcionabilidad</label><br>
                    <input type="checkbox" id="cbox7" value="opcion7"><label>Estandarización</label><br>
                    <input type="checkbox" id="cbox8" value="opcion8"><label>Soporte</label><br>
                </div>
                
                     <p>Descripción, Proporcione evidencias de su uso y copia de los documentos</p>
                <textarea id="R6-4-2A8" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

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
                        <button class="botonSubirPDF" id="botonSubir-6.4.2"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-6.4.2"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                <div class="btnListo"><button>Guardar</button></div>
            </div>


            <div class="preguntasCategoria" id="SC_6.4.3">
                <p>6.4.3 Describa brevemente los requerimientos técnicos necesarios 
                    de la plataforma tecnológica, tales como ancho de banda, tipo y 
                    capacidad del servidor, sistema operativo y software necesario 
                    para diseño instruccional y elaboración de contenidos o 
                    materiales multimedia, etc.</p>
                <p>Descripción Proporcione evidencia de su uso a través de manuales 
                    impresos o en línea, así como el equipo de cómputo y software 
                    que se utiliza. Copia de los documentos</p>
                <textarea id="R6-4-3" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

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
                        <button class="botonSubirPDF" id="botonSubir-6.4.3"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-6.4.3"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                <div class="btnListo"><button>Guardar</button></div>
            </div>

            <div class="parrafo" id="6.5">
                <p>6.5 MATERIAL Y RECURSOS DE APRENDIZAJE UTILIZANDO  
                    TECNOLOGÍA EDUCATIVA El material y recursos didácticos 
                    o de aprendizaje, juegan un papel muy importante 
                    en el proceso enseñanza-aprendizaje tanto presencial 
                    como virtual, a distancia o en línea, pero para esta 
                    última modalidad educativa no presencial, se vuelven 
                    indispensables. Por ello se requiere revisar que el 
                    material cuente con una estructura didáctica funcional, 
                    que apoye al aprendizaje autónomo del estudiante y que 
                    permita la interactividad entre los actores del aprendizaje.</p>
            </div>
            
            <div class="preguntasCategoria" id="SC_6.5.1">
                <p>6.5.1 ¿El material didáctico o de aprendizaje de sus distintas 
                    asignaturas del programa académico considera contenidos 
                    altamente flexibles a los diferentes estilos de aprendizaje de 
                    los estudiantes, adecuados al nivel de los mismos (autosuficiente); 
                    es decir, considera un diseño integral y holístico para ser 
                    utilizado por el estudiante y favorecer su aprendizaje autónomo?</p>
                <div class="opcMult"°>
                    <select name="select" id="RS6-5-1A1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <p>Explique, Presentar evidencia de material didáctico  
                desarrollado y copia de los documentos</p>
                <textarea id="R6-5-1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

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
                        <button class="botonSubirPDF" id="botonSubir-6.5.1"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-6.5.1"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                <div class="btnListo"><button>Guardar</button></div>
            </div>

            <div class="preguntasCategoria" id="SC_6.5.2">
                <p>6.5.2 La organización o estructura didáctica del material de aprendizaje incluye algunos o todos los elementos siguientes:</p>
                
                <div class="checkB">
                    <input type="checkbox" id="cbox5.5.2-1" value="cbox5.5.2-1"><label>Objetivos de aprendizaje</label><br>
                    <input type="checkbox" id="cbox5.5.2-2" value="cbox5.5.2-2"><label>Contenidos y temáticas del curso o asignatura</label><br>
                    <input type="checkbox" id="cbox5.5.2-3" value="cbox5.5.2-3"><label>Actividades de aprendizaje para adquisición de competencias 
                        acorde al perfil del egresado</label><br>
                    <input type="checkbox" id="cbox5.5.2-4" value="cbox5.5.2-4"><label>Un sistema de evaluación previa, formativa y final acorde 
                        a los objetivos, contenidos y competencias</label><br>
                    <input type="checkbox" id="cbox5.5.2-5" value="cbox5.5.2-5"><label>Referencias bibliográficas</label><br>
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
                        <button class="botonSubirPDF" id="botonSubir-6.5.2"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-6.5.2"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                <div class="btnListo"><button>Guardar</button></div>
            </div>

            <div class="preguntasCategoria" id="SC_6.5.3">
                <p>6.5.3 Utiliza alguna metodología o herramienta para 
                    la evaluación de contenido y temáticas del curso 
                    incluidos en su material didáctico que evalúe al 
                    menos los siguientes aspectos: motivación en los 
                    estudiantes para su uso; actualidad de la información 
                    que presenta; vigencia temporal y espacial; calidad 
                    en la  presentación del contenido (en cuanto a redacción, 
                    ortografía, tipografía, diseño gráfico, color, 
                    originalidad; etc. Además de indicar quienes participan 
                    en la evaluación del material didáctico (expertos en 
                    contenido, pedagogos,  psicólogos educativos, técnicos 
                    en audio, video, e informáticos, diseñadores gráficos, 
                    comunicólogos, profesores, facilitadores, tutores o 
                    asesores y estudiantes)</p>
                <div class="opcMult"°>
                    <select name="select" id="RS6-5-3A1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <p>Describa brevemente sus elementos:</p>
                <textarea id="R6-5-3" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                
                <p>Proporcione como evidencia: ejemplo de cursos diseñados 
                    de esta manera y que se estén utilizando. En la visita 
                    proporcione acceso a los evaluadores a su plataforma. 
                    Copia de los documentos</p>

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
                        <button class="botonSubirPDF" id="botonSubir-6.5.3"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-6.5.3"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                <div class="btnListo"><button>Guardar</button></div>
            </div>

            <div class="preguntasCategoria" id="SC_6.5.4">
                <p>6.5.4 Utiliza alguna metodología o herramienta que le 
                    permita evaluar el diseño, impacto, tiempo de producción, 
                    cobertura de estudiantes, facilidad de distribución, 
                    disponibilidad, interacción entre contenido, facilitadores 
                    del aprendizaje, estudiantes y entre estudiantes, otros 
                    medios, otros materiales didácticos, hipertextos, 
                    hipervínculo, hipermedia.</p>
                <div class="opcMult"°>
                    <select name="select" id="RS6-5-4A1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <p>Describa brevemente sus elementos:</p>
                <textarea id="R6-5-4" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                <p>Proporcione como evidencia: ejemplo de cursos diseñados 
                    de esta manera y que se estén utilizando. En la visita 
                    proporcione acceso a los evaluadores a su plataforma. 
                    Copia de los documentos</p>

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
                        <button class="botonSubirPDF" id="botonSubir-6.5.4"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-6.5.4"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                <div class="btnListo"><button>Guardar</button></div>
            </div>

            <div class="preguntasCategoria" id="SC_6.5.5">
                <p>6.5.5 El material didáctico o de aprendizaje contempla 
                    aspectos técnicos tales como el diseño de interfaz, 
                    el tiempo de entrega o despliegue, música, sonido ambiental, 
                    voz, equipo, facilidad de uso, versatilidad, en general 
                    buen manejo e integralidad de multimedios. Así como la 
                    transmisión y recepción de señal.</p>
                <div class="opcMult"°>
                    <select name="select" id="RS6-5-5A1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <p>Explique brevemente:</p>
                <textarea id="R6-5-5" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                <p>Proporcione como evidencia: ejemplo de cursos diseñados 
                    de esta manera y que se estén utilizando. En la visita 
                    proporcione acceso a los evaluadores a su plataforma. 
                    Copia de los documentos</p>

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
                        <button class="botonSubirPDF" id="botonSubir-6.5.5"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-6.5.5"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                <div class="btnListo"><button>Guardar</button></div>
            </div>

            <div class="preguntasCategoria" id="SC_6.5.6">
                <p>6.5.6 ¿Cómo parte del modelo educativo, realizan 
                    reuniones presenciales en distintas sedes para 
                    fortalecer la interacción -en un tiempo definido y 
                    un espacio físico- entre todos los miembros que forman 
                    parte de la comunidad de aprendizaje: estudiantes, 
                    profesores, facilitadores, tutores y personal 
                    administrativo, para compartir experiencias y ampliar 
                    horizontes de aprendizaje?.</p>
                <textarea id="R6-5-6" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                
                <p>Explique brevemente:</p>
                <p>Proporcionar minutas oficiales de las reuniones que 
                    evidencien las mismas y sus resultados. Copia de 
                    los documentos</p>
                <textarea id="R6-5-6A1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
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
                        <button class="botonSubirPDF" id="botonSubir-6.5.6"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-6.5.6"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                <div class="btnListo"><button>Guardar</button></div>
            </div>

            <div class="parrafo" id="6.6">
                <p>6.6 INTEGRACIÓN DE LOS ACTORES DEL APRENDIZAJE
                Estos representan a todos los involucrados en el proceso 
                de enseñanza aprendizaje y a aquellos que son de apoyo 
                para la administración de  la plataforma tecnológica y 
                de aprendizaje, así, se han considerado a profesores o 
                facilitadores del aprendizaje, tutores o asesores, 
                estudiantes y administradores de la plataforma de aprendizaje, 
                de soporte técnico y desarrollo.</p>
            </div>

            <div class="preguntasCategoria" id="SC_6.6.1">
                <p>6.6.1 ¿Cómo parte del modelo educativo, para el caso de 
                    los programas no presenciales o semi-presenciales, 
                    realizan reuniones presenciales en distintas sedes para 
                    fortalecer la interacción -en un tiempo definido y un 
                    espacio físico- entre todos los miembros que forman parte 
                    de la comunidad de aprendizaje: estudiantes, profesores, 
                    facilitadores, tutores y personal administrativo, 
                    para compartir experiencias y ampliar horizontes de aprendizaje?</p>
                <div class="opcMult"°>
                    <select name="select" id="RS6-6-1A1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <p>Explique brevemente:</p>
                <textarea id="R6-6-1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                <p>Descripción y Proporcionar minutas oficiales de las reuniones 
                    que evidencien las mismas y sus resultados. Copia de los 
                    documentos</p>

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
                        <button class="botonSubirPDF" id="botonSubir-6.6.1"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-6.6.1"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                <div class="btnListo"><button>Guardar</button></div>
            </div>

            <!-- 
                <div class="opcMult"°>
                    <select name="select" id="seleccion">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
             -->


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
                <button id="botonSubirChido" class="cargar-pdf" data-id="6.1.1">
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
