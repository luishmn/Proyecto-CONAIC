<?php
    session_start();
    //$_SESSION['loggedin']= false;
    // Verifica si el usuario ha iniciado sesión
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
        // Accede al nombre de usuario almacenado en la sesión
        $nombreUsuario = $_SESSION['username'];
        $correoUsuario = $_SESSION['email'];
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
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoria 4</title>
    <link rel="stylesheet" href="autoevaluacion.css">
    <script src="enviarConsulta.js"></script>
</head>

<body>
    

    <header>
        <div class="barra-superior"><!-- ESTE ES EL DIV DE LA BARRA SUPERIOR -->
            <label class="L1">Autoevaluación</label>
            <a href=" " class="usu_B">FabiolaG</a>
        </div>
    </header>


    <img src="logo_CONAIC_letras.png" class="logoArriba">

    <div class="todo">
        <div class="cuadro2">
            <div class="lablCat">
                <label class="catE">Categorías</label><br>
            </div>
            <div>
                <p class="parrafo" >Categoría 1</p>
                <hr>
                <p class="parrafo">Categoría 2</p>
                <hr>
                <p class="parrafo">Categoría 3</p>
                <hr>
                <p class="parrafo">Categoría 4</p>
                <hr>
                <p class="parrafo">Categoría 5</p>
                <hr>
                <p class="parrafo">Categoría 6</p>
                <hr>
                <p class="parrafo">Categoría 7</p>
                <hr>
                <p class="parrafo">Categoría 8</p>
                <hr>
                <p class="parrafo">Categoría 9</p>
                <hr>
                <p class="parrafo">Categoría 10</p>
                <hr>
                <p class="parrafo">Categoría 11</p>
                <hr>
                <p class="parrafo">Categoría 12</p>
            </div>
        </div>

        <div class="cuadroCate">
            <div class="titulo_categoria">Categoría 4: Ealuación del aprendizaje</div>

            

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

                <div class="preguntasCategoria" id="4.1.1">
                    <p>4.1.1 Debe incluirse el uso de la computadora durante el proceso de enseñanza aprendizaje, en los
                        cursos que por su naturaleza así lo requieran. </p>
                    <p>¿El programa cuenta con estadísticas del uso de las herramientas de cómputo por parte de los
                        estudiantes?</p>

                    <div class="opcMult" °>
                        <select name="select" id="seleccion">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="No">No</option>
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
                    <div class="btnListo"><button>Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="4.1.2">
                    <p>4.1.2 Debe cubrirse al menos el 90% de los programas de las asignaturas del plan de estudio.</p>

                    <p>¿Se cuenta con datos estadísticos que muestren el porcentaje que se cubre de cada asignatura con
                        respecto a lo que señala el programa?</p>
                    <div class="opcMult" °>
                        <select name="select" id="seleccion">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="No">No</option>
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
                    <div class="btnListo"><button>Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="4.1.3">
                    <p>4.1.3 Todo programa debe establecer que en varios cursos se incluyan, en parte o en la totalidad
                        de su desarrollo, métodos de enseñanza diferentes a los tradicionales de exposición oral del
                        profesor, tales como el uso de audiovisuales, multimedios, aulas interactivas, desarrollo de
                        proyectos, prácticas de laboratorio, etc., así como otro tipo de actividades orientadas a
                        mejorar el proceso enseñanza-aprendizaje.</p>

                    <p>¿En la impartición de los cursos de las asignaturas del plan de estudios se emplean métodos
                        diferentes al tradicional de exposición oral del profesor? (apoyos audiovisuales, multimedios,
                        aulas interactivas, desarrollo de proyectos, prácticas de laboratorio, etc.):</p>
                    <div class="opcMult" °>
                        <select name="select" id="seleccion">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="No">No</option>
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
                    <div class="btnListo"><button>Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="4.1.4">
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

                    <input type="text" placeholder="Escribe tu respuesta aquí...">
                    <!-- <img src="" alt=""><button>Guardar</button> -->
                    <br><br>
                    <div class="Listo">
                        <img src="/imagenes/pdf.png" alt="">
                        <button>Seleccionar archivos</button>
                        <!-- <button>Cargar</button>  -->
                    </div>
                    <div class="btnListo"><button>Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="4.1.5">
                    <p>4.1.5 Se debe contar con mecanismos de retroalimentación que permitan, a partir de las
                        evaluaciones de los estudiantes, llevar a cabo acciones encaminadas a mejorar el proceso
                        enseñanza-aprendizaje. Certificación de competencias bajo normas nacionales o internacionales
                        según el perfil de TIC a evaluar (A,B, C o D).</p>

                    <p>¿Los estudiantes realizan evaluaciones de los cursos?</p>
                    <div class="opcMult" °>
                        <select name="select" id="seleccion">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <br>
                    <p>En caso afirmativo, describa la manera como se divulgan los resultados de las evaluaciones de los
                        cursos
                        y las acciones que se toman para mejorarlas:</p>
                    <input type="text" placeholder="Escribe tu respuesta aquí...">
                    <!-- <img src="" alt=""><button>Guardar</button> -->
                    <br><br>
                    <div class="Listo">
                        <img src="/imagenes/pdf.png" alt="">
                        <button>Seleccionar archivos</button>
                        <!-- <button>Cargar</button>  -->
                    </div>
                    <div class="btnListo"><button>Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="4.1.6">
                    <p>4.1.6 Debe contarse con una estrategia de enseñanza y práctica de un idioma extranjero.</p>
                    <p>¿El plan de estudios marca como un requisito, que los estudiantes tengan o adquieran un cierto
                        grado de dominio de un idioma extranjero?</p>
                    <div class="opcMult" °>
                        <select name="select" id="seleccion">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <br>
                    <p>En caso afirmativo describa brevemente en qué consiste este requisito:
                    </p>
                    <input type="text" placeholder="Escribe tu respuesta aquí...">

                    <p>¿Qué mecanismos / estrategias se utilizan para que los estudiantes adquieran un cierto grado de
                        dominio de
                        un idioma extranjero?</p>
                    <input type="text" placeholder="Escribe tu respuesta aquí...">
                    <!-- <img src="" alt=""><button>Guardar</button> -->
                    <br><br>
                    <div class="Listo">
                        <img src="/imagenes/pdf.png" alt="">
                        <button>Seleccionar archivos</button>
                        <!-- <button>Cargar</button>  -->
                    </div>
                    <div class="btnListo"><button>Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="4.1.7">
                    <p>4.1.7 ¿Existe un mecanismo de medición sobre las competencias desarrolladas por los estudiantes
                        al finalizar su trayectoria académica de acuerdo a su perfil de egreso? Certificación de
                        competencias bajo normas nacionales o internacionales según el perfil de TIC a evaluar para
                        Licenciatura y TSU reflejados en los modelos curriculares actualizados 2014 de ANIEI-CONAIC.</p>
                    <div class="opcMult" °>
                        <select name="select" id="seleccion">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <br>

                    <p>En caso afirmativo, describa el mecanismo de medición:</p>

                    <input type="text" placeholder="Escribe tu respuesta aquí...">
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

                <div class="preguntasCategoria" id="4.2.1">
                    <p>4.2.1 ¿Hay programa de becas para estudiantes?</p>
                    <div class="opcMult" °>
                        <select name="select" id="seleccion">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <br>

                    <p>En caso afirmativo, describa los requisitos para el otorgamiento de las becas y los tipos de
                        becas que se
                        otorgan a los estudiantes:
                    </p>
                    <input type="text" placeholder="Escribe tu respuesta aquí...">

                    <p>Describa para los últimos tres períodos escolares, los montos de becas y becas préstamo, así como
                        el número de estudiantes beneficiados:</p>
                    <input type="text" placeholder="Escribe tu respuesta aquí...">
                    <!-- <img src="" alt=""><button>Guardar</button> -->
                    <br><br>
                    <div class="Listo">
                        <img src="/imagenes/pdf.png" alt="">
                        <button>Seleccionar archivos</button>
                        <!-- <button>Cargar</button>  -->
                    </div>
                    <div class="btnListo"><button>Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="4.2.2">
                    <p>4.2.2 ¿Se otorgan estímulos y/o reconocimiento al buen desempeño académico de los estudiantes?
                    </p>

                    <div class="opcMult" °>
                        <select name="select" id="seleccion">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <br>

                    <p>Enumerarlos, indicando si se otorgan a nivel institución (I), Unidad Académica (A), Programa (P).
                    </p>
                    <input type="text" placeholder="Escribe tu respuesta aquí...">

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

            <div>
                <div class="parrafo" id="4.3">
                    <p>
                        4.3 Evaluación de atributos de egreso. Describir el método de evaluación de los atributos de
                        egreso con la evidencia correspondiente, para asegurar el logro de los mismos.
                    </p>
                </div>
                <div class="preguntasCategoria" id="4.3.1">
                    <p>4.3.1 ¿El Programa Educativo cuenta con un método o conjunción de métodos que le permita asegurar
                        la evaluación de atributos de egreso, que garanticen el logro de éstos en los egresados?</p>

                    <div class="opcMult" °>
                        <select name="select" id="seleccion">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <br>

                    <p>En caso afirmativo llenar la Tabla 1. Evaluación de atributos de egreso y su cumplimiento
                        (tomando como
                        base la tabla Tabla 1. Atributos del egresado Competencias de graduación planificadas SEUOL
                        ACCORD /
                        CONAIC). Explicar brevemente el método o método de evaluación empleados.</p>
                    <input type="text" placeholder="Escribe tu respuesta aquí...">
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
    </div>
</body>



</html>