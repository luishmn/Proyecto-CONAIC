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
    <title>Categoria 1</title>
    <link rel="stylesheet" href="autoevaluacion.css">
    <script src="enviarConsulta.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
            <div class="titulo_categoria">Categoría 1: Personal académico

            </div>

            <div>
                <div class="parrafo" id="1.1">
                    <p>
                        1.1	Reclutamiento. Contar con un procedimiento reglamentado 
                        para el reclutamiento del personal académico, que implique la 
                        evaluación de sus conocimientos, experiencia y capacidad para 
                        ejercer la docencia (proceso de identificar e interesar a candidatos 
                        capacitados para llenar las vacantes).
                    </p>
                </div>
            </div>

            <div class="preguntasCategoria" id="SC_1.1.1">
                <p>1.1.1 ¿Existe un proceso formal de reclutamiento del personal académico?</p>
                <div class="opcMult" °>
                    <select name="select" id="RS1-1-1A1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <br>

                <p>En caso afirmativo describa de forma resumida los aspectos más importantes del proceso.</p>
                <textarea id="R1-1-1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

                <p>¿Hay un reglamento de reclutamiento del personal académico?</p>
                <div class="opcMult" °>
                    <select name="select" id="RS1-1-1A2">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <br>

                <p>En caso afirmativo proporcione una copia o copias de los documentos (puedes subir mas de un archivo).</p>
                <!-- <img src="" alt=""><button>Guardar</button> -->
                <br><br>
                <div class="Listo">
                    <img src="/imagenes/pdf.png" alt="">
                    <button>Seleccionar archivos</button>
                    <!-- <button>Cargar</button>  -->
                </div>
                <div class="btnListo"><button>Guardar</button></div>
            </div>

            <div>
                <div class="parrafo" id="1.2">
                    <p>
                        1.2	Selección. Contar con un procedimiento reglamentado 
                        para el ingreso del personal académico, que implique la 
                        evaluación de sus conocimientos, experiencia y capacidad 
                        para ejercer la docencia.
                    </p>
                </div>
            </div>

            <div class="preguntasCategoria" id="SC_1.2.1">
                <p>1.2.1 ¿Existe un proceso formal de ingreso del personal académico?</p>
                <div class="opcMult" °>
                    <select name="select" id="RS1-2-1A1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <br>

                <p>En caso afirmativo describa de forma resumida los aspectos más importantes del proceso.</p>
                <textarea id="R1-2-1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                <p>¿Hay un reglamento de ingreso del personal académico?</p>
                <div class="opcMult" °>
                    <select name="select" id="RS1-2-1A2">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <br>

                <p>En caso afirmativo proporcione una copia o copias de los documentos (puedes subir mas de un archivo).</p>

                <!-- <img src="" alt=""><button>Guardar</button> -->
                <br><br>
                <div class="Listo">
                    <img src="/imagenes/pdf.png" alt="">
                    <button>Seleccionar archivos</button>
                    <!-- <button>Cargar</button>  -->
                </div>
                <div class="btnListo"><button>Guardar</button></div>
            </div>

            <div>
                <div class="parrafo" id="1.3">
                    <p>
                        1.3	Contratación. Contar con un procedimiento reglamentado 
                        para la contratación del personal académico, que implique la 
                        evaluación de sus conocimientos, experiencia y capacidad para 
                        ejercer la docencia (con apego a la ley de la futura relación de 
                        trabajo) y en seguimiento del criterio 1.1.1.
                    </p>
                </div>
            </div>

            <div class="preguntasCategoria" id="SC_1.3.1">
                <p>1.3.1 ¿Existe un proceso formal de contratación del personal académico?</p>
                <div class="opcMult" °>
                    <select name="select" id="RS1-3-1A1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <br>

                <p>En caso afirmativo describa de forma resumida los aspectos más importantes del proceso.</p>
                <textarea id="R1-3-1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

                <p>¿Hay un reglamento de contratación del personal académico?</p>
                <div class="opcMult" °>
                    <select name="select" id="RS1-3-1A2">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <br>

                <p>En caso afirmativo proporcione una copia o copias de los documentos (puedes subir mas de un archivo).</p>

                <!-- <img src="" alt=""><button>Guardar</button> -->
                <br><br>
                <div class="Listo">
                    <img src="/imagenes/pdf.png" alt="">
                    <button>Seleccionar archivos</button>
                    <!-- <button>Cargar</button>  -->
                </div>
                <div class="btnListo"><button>Guardar</button></div>
            </div>

            <div>
                <div class="parrafo" id="1.4">
                    <p>
                        1.4	Desarrollo. Contar con un plan permanente de 
                        superación académica en el que se establezcan planes 
                        para que el personal académico de tiempo completo 
                        que no tenga un posgrado, lo obtenga. El plan debe 
                        estar aprobado por la máxima autoridad personal o 
                        colegiada de la institución.
                    </p>
                </div>
            </div>

            <div class="preguntasCategoria" id="SC_1.4.1">
                <p>1.4.1 ¿Existe un plan permanente de superación académica 
                    para el personal académico de tiempo completo que esté 
                    aprobado por la máxima autoridad personal o colegiada de 
                    la institución?</p>
                
                <div class="opcMult" °>
                    <select name="select" id="RS1-4-1A1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <br>

                <p>En caso afirmativo proporcione la siguiente información</p>
                <textarea id="R1-4-1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                <br>
                <br>


                <div class="Listo">
                    <img src="/imagenes/pdf.png" alt="">
                    <button>Seleccionar archivos</button>
                    <!-- <button>Cargar</button>  -->
                </div>
                <div class="btnListo"><button>Guardar</button></div>
            </div>

            <div class="preguntasCategoria" id="SC_1.4.2">
                <p>1.4.2 Contar con un plan de actualización / capacitación que 
                    permita la rápida respuesta a temas emergentes en el área, 
                    así como mantener al personal académico actualizado.</p>
                <p>¿Hay en la institución, unidad académica o carrera, programas 
                    para la actualización y superación del personal académico?</p>

                <div class="opcMult" °>
                    <select name="select" id="RS1-4-2A1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <br>

                <p>En caso afirmativo proporcionar la siguiente información para los tres últimos años:</p>
                <textarea id="R1-4-2" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                <br>
                <br>

                

                <p>¿Existe alguna otra modalidad de apoyo al personal 
                    académico para su actualización y superación?</p>
                <div class="opcMult" °>
                    <select name="select" id="RS1-4-2A2">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <br>

                <p>En caso afirmativo descríbala brevemente:</p>
                <textarea id="R1-4-2A1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                <br>
                
                <!-- <img src="" alt=""><button>Guardar</button> -->
                <br><br>
                <div class="Listo">
                    <img src="/imagenes/pdf.png" alt="">
                    <button>Seleccionar archivos</button>
                    <!-- <button>Cargar</button>  -->
                </div>
                <div class="btnListo"><button>Guardar</button></div>
            </div>

            <div class="preguntasCategoria" id="SC_1.4.3">
                <p>1.4.3 Deben existir planes permanentes de formación docente.</p>

                <p>Formación docente (de profesores). Díaz Barriga señala que la 
                formación docente puede ser vista desde tres diferentes perspectivas: 
                tecnológica conductista, que se refiere a los medios que apoyan la labor 
                docente; la perspectiva constructiva, enfocada al sujeto y la búsqueda 
                personal del conocimiento; y la perspectiva critico reflexiva, en la que el 
                docente es autocrítico de su labor.</p>

                <p>Existe algún programa para la formación de profesores:</p>
                <div class="opcMult" °>
                    <select name="select" id="RS1-4-3A1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <br>

                <p>En caso afirmativo:</p>
                <p>a.- Señale a qué nivel de responsabilidad se tiene:</p>
                <div class="opcMult" °>
                    <select name="select" id="RS-1-4-3A2">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="institucion">Institución</option>
                        <option value="unidad academica">Unidad Académica</option>
                        <option value="programa">Programa</option>
                    </select>
                </div>
                <br>

                <p>b.- Describa brevemente en qué consiste:</p>
                <textarea id="R1-4-3" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                <br>

                <p>c.- Mencione algunos de los resultados obtenidos:</p>
                <textarea id="R1-4-3A1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                <br>


            
                


                <!-- <img src="" alt=""><button>Guardar</button> -->
                <br><br>
                <div class="Listo">
                    <img src="/imagenes/pdf.png" alt="">
                    <button>Seleccionar archivos</button>
                    <!-- <button>Cargar</button>  -->
                </div>
                <div class="btnListo"><button>Guardar</button></div>
            </div>

            <div>
                <div class="parrafo" id="1.5">
                    <p>
                        1.5	Categorización y nivel de estudios. Al menos 
                        el 50% de los profesores que integran la planta 
                        docente deben tener un perfil académico que 
                        corresponda al área de conocimiento a la que 
                        están asignados.
                    </p>

                    <p>Profesores o Docentes en el modelo educativo presencial 
                        y Facilitadores en el modelo educativo NO presencial
                    </p>
                </div>
            </div>

            <div class="preguntasCategoria" id="SC_1.5.1">
                <p>1.5.1 Estimar el porcentaje de profesores que integran 
                    la planta docente que tienen un perfil académico que 
                    corresponde al área de conocimiento a la que están asignados.</p>
                <textarea id="R1-5-1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

                <p>Explicar de qué manera se realizó dicha estimación.</p>
                <textarea id="R1-5-1A1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                <!-- <img src="" alt=""><button>Guardar</button> -->
                <br><br>
                <div class="Listo">
                    <img src="/imagenes/pdf.png" alt="">
                    <button>Seleccionar archivos</button>
                    <!-- <button>Cargar</button>  -->
                </div>
                <div class="btnListo"><button>Guardar</button></div>
            </div>

            <div class="preguntasCategoria" id="SC_1.5.2">
                <p>1.5.2 El programa debe tener claramente especificado 
                    el grupo de profesores que participen en él, su tiempo 
                    de dedicación y dispondrá de un currículum actualizado 
                    de cada uno de ellos, donde se señalen los aspectos 
                    sobresalientes en cuanto a grados académicos obtenidos, 
                    experiencia profesional y docente, publicaciones, pertenencia 
                    a sociedades científicas y/ o profesionales, premios y distinciones, etc.</p>
    

                <p>Anexar una muestra representativa de los CV actualizados de 
                    profesores (en la visita en sitio contar con todos los curriculums 
                    de los profesores).</p>
                <!-- <img src="" alt=""><button>Guardar</button> -->
                <br><br>
                <div class="Listo">
                    <img src="/imagenes/pdf.png" alt="">
                    <button>Seleccionar archivos</button>
                    <!-- <button>Cargar</button>  -->
                </div>
                <div class="btnListo"><button>Guardar</button></div>
            </div>

            <div class="preguntasCategoria" id="SC_1.5.3">
                <p>1.5.3 Como mínimo, 50% del total de horas de 
                    clase deberá ser impartido por profesores de tiempo 
                    completo. No es permisible, para efectos de acreditación, 
                    que el titular de una materia envíe a ayudantes a impartir 
                    sus clases.</p>

                <p>Estimar el porcentaje del total de horas de clase que es 
                    impartido por profesores de tiempo completo, (no es 
                    permisible que el titular de la materia envíe a ayudantes 
                    a impartir sus clases para esta estimación).</p>
                <textarea id="R1-5-3" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

                <p>Explicar de qué manera se realizó dicha estimación.</p>
                <textarea id="R1-5-3A1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                <!-- <img src="" alt=""><button>Guardar</button> -->
                <br><br>
                <div class="Listo">
                    <img src="/imagenes/pdf.png" alt="">
                    <button>Seleccionar archivos</button>
                    <!-- <button>Cargar</button>  -->
                </div>
                <div class="btnListo"><button>Guardar</button></div>
            </div>

            <div class="preguntasCategoria" id="SC_1.5.4">
                <p>1.5.4 El 50% de las materias de la especialidad del 
                    programa educativo, deben ser impartidas por profesores 
                    con maestría, doctorado, o mínimo licenciatura y cinco 
                    años de experiencia profesional comprobables y que estén 
                    actualizados en el área.</p>
                

                <p>Estimar el porcentaje de las materias de la especialidad 
                    del programa educativo que son impartidas por profesores 
                    con maestría, doctorado, o mínimo licenciatura y cinco años 
                    de experiencia profesional comprobables y que estén actualizados 
                    en el área.</p>
                <textarea id="R1-5-4" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

                <p>Explicar de qué manera se realizó dicha estimación.</p>
                <textarea id="R1-5-4A1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                <!-- <img src="" alt=""><button>Guardar</button> -->
                <br><br>
                <div class="Listo">
                    <img src="/imagenes/pdf.png" alt="">
                    <button>Seleccionar archivos</button>
                    <!-- <button>Cargar</button>  -->
                </div>
                <div class="btnListo"><button>Guardar</button></div>
            </div>

            <div class="preguntasCategoria" id="SC_1.5.5">
                <p>1.5.5 Al menos el 60% del total de profesores de tiempo 
                    completo debe tener estudios de posgrado o el equivalente 
                    de desarrollo y prestigio profesional en el área de su especialidad.</p>
                

                <p>Estimar el porcentaje del total de profesores de tiempo completo 
                    que tienen estudios de posgrado o el equivalente de desarrollo y 
                    prestigio profesional en el área de su especialidad.</p>
                <textarea id="R1-5-5" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

                <p>Explicar de qué manera se realizó dicha estimación.</p>
                <textarea id="R1-5-5A1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                <!-- <img src="" alt=""><button>Guardar</button> -->
                <br><br>
                <div class="Listo">
                    <img src="/imagenes/pdf.png" alt="">
                    <button>Seleccionar archivos</button>
                    <!-- <button>Cargar</button>  -->
                </div>
                <div class="btnListo"><button>Guardar</button></div>
            </div>

            <div class="preguntasCategoria" id="SC_1.5.6">
                <p>1.5.6 Al menos el 30% del total de profesores que no sean 
                    de tiempo completo debe tener estudios de posgrado o el 
                    equivalente de desarrollo y prestigio profesional en el área 
                    de su especialidad.</p>

                <p>Estimar el porcentaje del total de profesores que no sean de 
                    tiempo completo, que tienen estudios de posgrado o el 
                    equivalente de desarrollo y prestigio profesional en el área 
                    de su especialidad.</p>
                <textarea id="R1-5-6" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

                <p>Explicar de qué manera se realizó dicha estimación.</p>
                <textarea id="R1-5-6A1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                <!-- <img src="" alt=""><button>Guardar</button> -->
                <br><br>
                <div class="Listo">
                    <img src="/imagenes/pdf.png" alt="">
                    <button>Seleccionar archivos</button>
                    <!-- <button>Cargar</button>  -->
                </div>
                <div class="btnListo"><button>Guardar</button></div>
            </div>

            <div class="preguntasCategoria" id="SC_1.5.7">
                <p>1.5.7 Debe existir un balance adecuado entre profesores 
                    recién contratados y profesores con experiencia docente.</p>

                <p>Proporcionar la siguiente información para los últimos tres períodos.</p>
                <textarea id="R1-5-7" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                <!-- <img src="" alt=""><button>Guardar</button> -->
                <br><br>
                <div class="Listo">
                    <img src="/imagenes/pdf.png" alt="">
                    <button>Seleccionar archivos</button>
                    <!-- <button>Cargar</button>  -->
                </div>
                <div class="btnListo"><button>Guardar</button></div>
            </div>

            <div class="preguntasCategoria" id="SC_1.5.8">
                <p>1.5.8 Debe existir un balance adecuado entre profesores 
                    con grados académicos de la institución y de otras instituciones.</p>
                
                <p>Proporcionar la siguiente información para los últimos tres períodos:</p>

                <p>Número de profesores adscritos al programa con grados de otras instituciones.</p>
                <textarea id="R1-5-8" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                <!-- <img src="" alt=""><button>Guardar</button> -->
                <br><br>
                <div class="Listo">
                    <img src="/imagenes/pdf.png" alt="">
                    <button>Seleccionar archivos</button>
                    <!-- <button>Cargar</button>  -->
                </div>
                <div class="btnListo"><button>Guardar</button></div>
            </div>

            <div class="preguntasCategoria" id="SC_1.5.9">
                <p>1.5.9 ¿Los profesores, facilitadores, tutores y asesores 
                    cuentan con experiencia en educación a distancia o 
                    virtual o en línea y cuentan con conocimiento y 
                    manejo de plataformas tecnológicas?</p>
                
                <div class="opcMult" °>
                    <select name="select" id="RS1-5-9A1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <br>

                <p>En cualquier caso, explique brevemente:</p>
                <textarea id="R1-5-9" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

                <p>Proporcione los curriculums de los profesores, facilitadores, 
                    tutores y asesores, que evidencien la experiencia y 
                    conocimiento de lo aquí declarado.</p>
                

                <p>En caso afirmativo proporcione una copia o copias de 
                    los documentos (puedes subir mas de un archivo).</p>
                <!-- <img src="" alt=""><button>Guardar</button> -->
                <br><br>
                <div class="Listo">
                    <img src="/imagenes/pdf.png" alt="">
                    <button>Seleccionar archivos</button>
                    <!-- <button>Cargar</button>  -->
                </div>
                <div class="btnListo"><button>Guardar</button></div>
            </div>

            <div>
                <div class="parrafo" id="1.6">
                    <p>
                        1.6	Distribución de la carga académica de los PTC. 
                        Cada profesor de tiempo completo debe tener asignadas 
                        a lo más 16 horas semanales de clase frente a grupo. El 
                        resto debe distribuirse en algunas de las siguientes actividades: 
                        atención a estudiantes (asesoría, tutoría, dirección de tesis), 
                        preparación de clases, elaboración de material didáctico, 
                        revisión de tareas y corrección de exámenes, actualización y superación, 
                        investigación y/ o desarrollo tecnológico, participación institucional, 
                        vinculación con el sector productivo y de servicio, 
                        elaboración de artículos para revistas, elaboración de libros de texto.

                    </p>
                </div>
            </div>

            <div class="preguntasCategoria" id="SC_1.6.1">
                <p>1.6.1 Indicar el número de horas frente a grupo de cada 
                    uno de los profesores adscritos al programa, (Tomando 
                    en consideración la definición de Profesores adscritos al 
                    programa en el criterio 1.5.2) y una estimación del tiempo 
                    que dedican a las actividades señaladas.</p>
                <textarea id="R1-6-1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                <!-- <img src="" alt=""><button>Guardar</button> -->
                <br><br>
                <div class="Listo">
                    <img src="/imagenes/pdf.png" alt="">
                    <button>Seleccionar archivos</button>
                    <!-- <button>Cargar</button>  -->
                </div>
                <div class="btnListo"><button>Guardar</button></div>
            </div>

            <div class="preguntasCategoria" id="SC_1.6.2">
                <p>1.6.2 Al menos un 50% de la planta docente de tiempo 
                    completo debe estar vinculado a un proyecto de investigación 
                    o desarrollo tecnológico en el área, o con un proyecto del 
                    área del programa educativo para el sector productivo y/ o 
                    de servicios</p>

                <p>Estimar el porcentaje de la planta docente de tiempo 
                    completo que está vinculado a un proyecto de investigación 
                    o desarrollo tecnológico en el área, o con un proyecto de 
                    informática o computación para el sector productivo y/ o de 
                    servicios.</p>
                <textarea id="R1-6-2" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

                <p>Explicar de qué manera se realizó dicha estimación.</p>
                <textarea id="R1-6-2A1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

                <!-- <img src="" alt=""><button>Guardar</button> -->
                <br><br>
                <div class="Listo">
                    <img src="/imagenes/pdf.png" alt="">
                    <button>Seleccionar archivos</button>
                    <!-- <button>Cargar</button>  -->
                </div>
                <div class="btnListo"><button>Guardar</button></div>
            </div>

            <div>
                <div class="parrafo" id="1.7">
                    <p>
                        1.7	Evaluación. Se debe contar con mecanismos de 
                        retroalimentación que permitan, a partir de las evaluaciones
                        de los estudiantes sobre el desempeño docente de sus profesores, 
                        llevar a cabo acciones encaminadas a mejorar el proceso 
                        enseñanza-aprendizaje.

                    </p>
                </div>
            </div>

            <div class="preguntasCategoria" id="SC_1.7.1">
                <p>1.7.1 ¿Los estudiantes realizan evaluaciones?</p>
                <div class="opcMult" °>
                    <select name="select" id="RS1-7-1A1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <br>

                <p>En caso afirmativo, describa la manera como se divulgan 
                    los resultados de las evaluaciones y las acciones que se 
                    toman para mejorarlas.</p>
                <textarea id="R1-7-1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

                <!-- <img src="" alt=""><button>Guardar</button> -->
                <br><br>
                <div class="Listo">
                    <img src="/imagenes/pdf.png" alt="">
                    <button>Seleccionar archivos</button>
                    <!-- <button>Cargar</button>  -->
                </div>
                <div class="btnListo"><button>Guardar</button></div>
            </div>

            <div class="preguntasCategoria" id="SC_1.7.2">
                <p>1.7.2 Contar con un procedimiento reglamentado para evaluar 
                    la actividad docente y de investigación del personal académico 
                    con fines de permanencia y promoción. Esta evaluación debe 
                    ser realizada por una comisión académica previamente establecida.</p>

                <p>¿Existen mecanismos de evaluación del desempeño 
                    docente y de investigación del profesorado?</p>
                
                <div class="opcMult" °>
                    <select name="select" id="RS1-7-2A1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <br>
                
                <p>¿Está reglamentado?</p>

                <div class="opcMult" °>
                    <select name="select" id="RS-1-7-2A2">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <br>

                <p>Haga un breve resumen del proceso indicando quienes 
                    participan en él, así como las responsabilidades que tienen.
                </p>
                <textarea id="R1-7-2" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               



                <!-- <img src="" alt=""><button>Guardar</button> -->
                <br><br>
                <div class="Listo">
                    <img src="/imagenes/pdf.png" alt="">
                    <button>Seleccionar archivos</button>
                    <!-- <button>Cargar</button>  -->
                </div>
                <div class="btnListo"><button>Guardar</button></div>
            </div>

            <div class="preguntasCategoria" id="SC_1.7.3">
                <p>1.7.3 Las evaluaciones al personal docente deberán 
                    realizarse en forma periódica, al menos una vez por 
                    período escolar, y sus resultados deberán ser proporcionados 
                    al profesor junto con recomendaciones que deberán generar 
                    un plan de mejora.</p>

                <p>En caso de que se lleve a cabo la evaluación del profesorado, 
                    indique por quiénes se realiza.</p>
                
                <div class="opcMult" °>
                    <select name="select" id="RS1-7-3A1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="grupos colegiados">Grupos Colegiados</option>
                        <option value="estudiantes">Estudiantes</option>
                        <option value="otras instancias">Otras instancias</option>
                    </select>
                </div>
                <br>

                <p>(indicar cuáles)</p>
                <textarea id="R1-7-3" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               



                <p>Para cada uno de los casos que se haya señalado en el renglón 
                    anterior, anexe información relativa al proceso, como pueden 
                    ser formas o reportes. Señale de forma abreviada, la forma y 
                    periodicidad en que se realizan.</p>
                
                <textarea id="R1-7-3A1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

                <p>En caso afirmativo proporcione una copia o copias de los 
                    documentos (puedes subir mas de un archivo).
                </p>

                <br><br>
                <div class="Listo">
                    <img src="/imagenes/pdf.png" alt="">
                    <button>Seleccionar archivos</button>
                    <!-- <button>Cargar</button>  -->
                </div>
                <div class="btnListo"><button>Guardar</button></div>



                <p>¿Se lleva a cabo difusión de los resultados del proceso?</p>
                <div class="opcMult" °>
                    <select name="select" id="RS1-7-3A2">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <br>

                <p>En caso afirmativo describa el tipo de difusión que se le da 
                    y proporcione los resultados de los últimos
                    períodos escolares (de preferencia los tres últimos años).
                    </p>
                <textarea id="R1-7-3A2" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               



                <p>Indique para qué se utiliza la información de la evaluación, 
                    si se entregan resultados a los profesores, y qué acciones 
                    se toman como consecuencia de los resultados de las evaluaciones.</p>
                <textarea id="R1-7-3A3" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

                <!-- <img src="" alt=""><button>Guardar</button> -->
                
            </div>

            <div class="preguntasCategoria" id="SC_1.7.4">
                <p>1.7.4 Debe existir un programa de estímulos o 
                    incentivos bien definido fundamentado en criterios 
                    académicos principalmente y de acuerdo con el 
                    desempeño docente.</p>

                <p>¿Están especificados los criterios académicos que valoran 
                    la productividad y la eficiencia del desempeño académico 
                    de los profesores?</p>
                <div class="opcMult" °>
                    <select name="select" id="RS1-7-4A1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <br>

                <p>En caso afirmativo resumir los criterios principales.</p>
                <textarea id="R1-7-4" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               


                <p>¿Existe un programa de estímulos o incentivos para 
                    los profesores que cubren dichos criterios?
                </p>
                <div class="opcMult" °>
                    <select name="select" id="RS1-7-4A2">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <br>

                <!-- <img src="" alt=""><button>Guardar</button> -->
                <br><br>
                <div class="Listo">
                    <img src="/imagenes/pdf.png" alt="">
                    <button>Seleccionar archivos</button>
                    <!-- <button>Cargar</button>  -->
                </div>
                <div class="btnListo"><button>Guardar</button></div>
            </div>

            <div>
                <div class="parrafo" id="1.8">
                    <p>
                        1.8	Promoción. Los mecanismos de promoción deben 
                        ser del dominio público.

                    </p>
                </div>
            </div>

            <div class="preguntasCategoria" id="SC_1.8.1">
                <p>1.8.1 ¿Existe un proceso formal para la promoción del personal académico?</p>
                <div class="opcMult" °>
                    <select name="select" id="RS1-8-1A1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <br>

                <p>¿Hay un reglamento para dicho proceso?</p>
                <div class="opcMult" °>
                    <select name="select" id="RS1-8-1A2">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <br>

                <p>Haga un breve resumen del proceso indicando quienes 
                    participan en él, así como las responsabilidades que tienen.
                </p>
                <textarea id="R1-8-1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               


                <p>¿Se lleva a cabo difusión de los resultados del proceso?</p>
                <div class="opcMult" °>
                    <select name="select" id="RS1-8-1A3">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <br>

                <p>En caso afirmativo describa el tipo de difusión que se le 
                    da y proporcione los resultados de los últimos tres años.
                </p>
                <textarea id="R1-8-1A1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               



                <!-- <img src="" alt=""><button>Guardar</button> -->
                <br><br>
                <div class="Listo">
                    <img src="/imagenes/pdf.png" alt="">
                    <button>Seleccionar archivos</button>
                    <!-- <button>Cargar</button>  -->
                </div>
                <div class="btnListo"><button>Guardar</button></div>
            </div>

            <div>
                <div class="parrafo" id="1.9">
                    <p>
                        1.9	Movilidad internacional de profesores.
                    </p>
                </div>
            </div>

            <div class="preguntasCategoria" id="SC_1.9.1">
                <p>1.9.1 ¿Existe un proceso formal para la movilidad internacional 
                    de profesores (tanto de envío como de recepción)?</p>
                <div class="opcMult" °>
                    <select name="select" id="RS1-9-1A1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <br>

                <p>¿Hay un reglamento para dicho proceso?</p>
                <div class="opcMult" °>
                    <select name="select" id="RS1-9-1A2">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <br>

                <p>Haga un breve resumen del proceso indicando quienes 
                    participan en él, así como las responsabilidades que tienen.
                </p>
                <textarea id="R1-9-1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               



                <!-- <img src="" alt=""><button>Guardar</button> -->
                <br><br>
                <div class="Listo">
                    <img src="/imagenes/pdf.png" alt="">
                    <button>Seleccionar archivos</button>
                    <!-- <button>Cargar</button>  -->
                </div>
                <div class="btnListo"><button>Guardar</button></div>
            </div>

            <div class="preguntasCategoria" id="SC_1.9.1">
                <p>1.9.1 Indicar las movilidades en envío y recepción de los 
                    profesores en los últimos cinco años.</p>
                <textarea id="R1-9-1A1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

                <!-- <img src="" alt=""><button>Guardar</button> -->
                <br><br>
                <div class="Listo">
                    <img src="/imagenes/pdf.png" alt="">
                    <button>Seleccionar archivos</button>
                    <!-- <button>Cargar</button>  -->
                </div>
                <div class="btnListo"><button>Guardar</button></div>
            </div>

            <div class="preguntasCategoria" id="SC_1.9.2">
                <p>1.9.2 Indicar los productos y resultados obtenidos de estas 
                    movilidades en envío y recepción de los profesores en los 
                    últimos cinco años.</p>
                <textarea id="R1-9-2" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

                <p>En caso afirmativo proporcione una copia o copias de los 
                    documentos (puedes subir mas de un archivo).
                </p>

                <!-- <img src="" alt=""><button>Guardar</button> -->
                <br><br>
                <div class="Listo">
                    <img src="/imagenes/pdf.png" alt="">
                    <button>Seleccionar archivos</button>
                    <!-- <button>Cargar</button>  -->
                </div>
                <div class="btnListo"><button>Guardar</button></div>
            </div>

            <div>
                <div class="parrafo" id="1.10">
                    <p>
                        A Criterios específicos del personal académico de programas en TIC.
                    </p>
                </div>
            </div>

            <div class="preguntasCategoria" id="SC_1.10.1">
                <p>A.1 El nivel de salarios y prestaciones sociales del personal 
                    académico de tiempo completo, así como sus incrementos 
                    y promociones, debe ser tal que le permita una vida digna, 
                    y al mismo tiempo le haga atractiva su dedicación a la carrera 
                    académica. Asimismo, los honorarios de los profesores de tiempo 
                    parcial deben ser atractivos para este tipo de actividad.</p>
                
                <p>Es necesario que los sueldos sean competitivos en relación a lo 
                    que se ofrece en el mercado laboral para
                    las áreas de TIC. Profesores de tiempo completo:
                </p>
                <textarea id="RA1-1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

                <p>Profesores de Medio Tiempo.</p>
                <textarea id="RA1-2" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

                <p>Profesores por horas (de asignatura) / clase.</p>
                <textarea id="RA1-3" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

                <!-- <img src="" alt=""><button>Guardar</button> -->
                <br><br>
                <div class="Listo">
                    <img src="/imagenes/pdf.png" alt="">
                    <button>Seleccionar archivos</button>
                    <!-- <button>Cargar</button>  -->
                </div>
                <div class="btnListo"><button>Guardar</button></div>
            </div>

            <div class="preguntasCategoria" id="SC_1.10.2">
                <p>A.2 Para promover la vinculación del personal académico 
                    del programa con el sector productivo, deben existir 
                    procedimientos que la reglamenten, así como los ingresos 
                    y estímulos externos que los profesores puedan obtener 
                    como consecuencia de la relación.</p>

                <p>¿Hay un reglamento o disposiciones por escrito que 
                    normen la vinculación del personal académico con 
                    el sector productivo?</p>
                <div class="opcMult" °>
                    <select name="select" id="RSA2-1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <br>

    
                <p>En caso afirmativo, ¿se incluyen los ingresos y estímulos 
                    externos que los profesores pueden obtener como 
                    consecuencia de la relación en dicho reglamento?</p>
                <div class="opcMult" °>
                    <select name="select" id="RSA2-2">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <br>

                <p>Si la respuesta a la pregunta anterior fue afirmativa, 
                    resumir los puntos principales.
                </p>
                <textarea id="RA2-1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               



                <!-- <img src="" alt=""><button>Guardar</button> -->
                <br><br>
                <div class="Listo">
                    <img src="/imagenes/pdf.png" alt="">
                    <button>Seleccionar archivos</button>
                    <!-- <button>Cargar</button>  -->
                </div>
                <div class="btnListo"><button>Guardar</button></div>
            </div>

            <div class="preguntasCategoria" id="SC_1.10.3">
                <p>A.3 Los profesores de tiempo completo del programa 
                    deben producir material didáctico, de divulgación y/ 
                    o libros de texto.</p>

                <p>Indique el material didáctico, de divulgación y 
                    los libros de texto desarrollados por los profesores 
                    adscritos al programa en los últimos 4 años.</p>
                <textarea id="RA3-1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               


                <!-- <img src="" alt=""><button>Guardar</button> -->
                <br><br>
                <div class="Listo">
                    <img src="/imagenes/pdf.png" alt="">
                    <button>Seleccionar archivos</button>
                    <!-- <button>Cargar</button>  -->
                </div>
                <div class="btnListo"><button>Guardar</button></div>
            </div>

            <div class="preguntasCategoria" id="SC_1.10.4">
                <p>A.4 El programa debe contar con al menos una 
                    estrategia, para que todos los docentes que 
                    participan en él conozcan la relación, importancia 
                    y enfoque de todas y cada una de las asignaturas 
                    que lo forman (currícula), a fin de poder dar la 
                    orientación adecuada a cada asignatura que imparten.</p>

                <p>¿El programa cuenta con una estrategia para que todos 
                    los docentes que participan en él conozcan la relación, 
                    importancia y enfoque de todas y cada una de las 
                    asignaturas que lo forman para poder dar la orientación 
                    adecuada a la asignatura que imparten?</p>
                <div class="opcMult" °>
                    <select name="select" id="RSA4-1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <br>

                <p>En cualquier caso, explique brevemente:</p>
                <textarea id="RA4-1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

                
                

                <!-- <img src="" alt=""><button>Guardar</button> -->
                <br><br>
                <div class="Listo">
                    <img src="/imagenes/pdf.png" alt="">
                    <button>Seleccionar archivos</button>
                    <!-- <button>Cargar</button>  -->
                </div>
                <div class="btnListo"><button>Guardar</button></div>
            </div>

            <div class="preguntasCategoria" id="SC_1.10.5">
                <p>A.5 El programa debe contar con al menos una estrategia, 
                    para promover que todos los docentes que se forman en 
                    posgrado, tenga relación con las necesidades del programa 
                    educativo, desarrollo de cuerpos académicos y líneas de 
                    investigación, de manera que se resuelvan las brechas 
                    académicas del programa.</p>

                <p>¿Existe esta estrategia?</p>
                <div class="opcMult" °>
                    <select name="select" id="RSA5-1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <br>

                <p>Describir en qué consisten la o las estrategias institucionales:</p>
                <textarea id="RA5-1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               



                <!-- <img src="" alt=""><button>Guardar</button> -->
                <br><br>
                <div class="Listo">
                    <img src="/imagenes/pdf.png" alt="">
                    <button>Seleccionar archivos</button>
                    <!-- <button>Cargar</button>  -->
                </div>
                <div class="btnListo"><button>Guardar</button></div>
            </div>



        </div>
     

    </div>
</body>

</html>   