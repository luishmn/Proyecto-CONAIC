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
    <title>Categoria 2</title>
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
            <div class="titulo_categoria">Categoría 2: Estudiantes</div>

            <div>
                <div class="parrafo" id ="2.1">
                    <p>
                        2.1 Selección. Es necesario que exista claridad en la selección de aspirantes al programa educativo, por lo que debe existir de forma explícita, los criterios de admisión que indique el mínimo de condiciones que los estudiantes de nuevo ingreso deben cumplir para ser admitidos al programa.

                    </p>
                </div>
                <div class="preguntasCategoria" id="SC_2.1.1">
                    <p>2.1.1 Se requiere que los estudiantes que ingresan al programa académico cumpla con un mínimo de condiciones en cuanto a conocimientos, actitudes y habilidades, por lo que deben existir en forma explícita los criterios de selección que se emplean.                   

                        Existencia de un perfil del aspirante a ingresar al programa.
                        
                        Estar establecido que los aspirantes presenten un examen de admisión institucional, que permita que sólo sean aceptados quienes cumplan con el mínimo de conocimientos y habilidades requeridas.
                        De los puntos anteriores debe existir información escrita en forma de guía o manual para los aspirantes."
                        </p>
                    <input type="text" id="R2-1-1" placeholder="Escribe tu respuesta aquí...">

                    <p>Existe publicado un perfil del aspirante a ingresar al programa?

                        </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-1-1A1">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <br>
                    <input type="text" id="R2-1-1A1" placeholder="Escribe tu respuesta aquí...">

                    <p>Se ha fijado un promedio mínimo para ser admitido al programa?
                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-1-1A2">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <br>

                    <input type="text" id="R2-1-1A2" placeholder="Escribe tu respuesta aquí...">

                    <p>El aspirante al programa debe presentar examen de admisión?

                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-1-1A3">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <br>
                    <input type="text" id="R2-1-1A3" placeholder="Escribe tu respuesta aquí...">

                    <p>Explique brevemente en qué consisten:


                    </p>
                    <input type="text" id="R2-1-1A4" placeholder="Escribe tu respuesta aquí...">

                    <p>¿Se proporciona información por escrito al aspirante a ingresar de las calificaciones obtenidas en su examen de admisión?

                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-1-1A5">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <br>
                    <input type="text" id="R2-1-1A5" placeholder="Escribe tu respuesta aquí...">

                    <p>¿El programa cuenta con datos estadísticos de los aspirantes a ingresar así como de los admitidos?

                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-1-1A6">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <br>
                    <input type="text" id="R2-1-1A6" placeholder="Escribe tu respuesta aquí...">

                    <p>En caso afirmativo proporcione la siguiente información:

                    </p>
                    <input type="text" id="R2-1-1A7" placeholder="Escribe tu respuesta aquí...">

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
                <div class="parrafo" id="2.2">
                    <p>
                        2.2 Ingreso (estudiantes de nuevo ingreso).  Se requiere conocer las características de  los estudiantes de nuevo ingreso para canalizarlos a programas de apoyo, con el fin de prevenir situaciones de riesgo (reprobación y deserción).

                    </p>
                </div>
                <div class="preguntasCategoria" id="SC_2.2.1">
                    <p>2.2.1  ¿Se toman en cuenta los resultados del examen nacional previo a la licenciatura?
                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-2-1">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <br>
                    <input type="text" id="R2-2-1" placeholder="Escribe tu respuesta aquí...">
                    <!-- <img src="" alt=""><button>Guardar</button> -->
                    <br><br>
                    <div class="Listo">
                        <img src="/imagenes/pdf.png" alt="">
                        <button>Seleccionar archivos</button>
                        <!-- <button>Cargar</button>  -->
                    </div>
                    <div class="btnListo"><button>Guardar</button></div>
                </div>


                <div class="preguntasCategoria" id="SC_2.2.2">
                    <p>2.2.2 ¿Se tiene en cuenta el rendimiento académico en el nivel precedente para canalizar a los estudiantes a programas de apoyo?
                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-2-2">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <br>
                    <input type="text" id="R2-2-2" placeholder="Escribe tu respuesta aquí...">
                    <!-- <img src="" alt=""><button>Guardar</button> -->
                    <br><br>
                    <div class="Listo">
                        <img src="/imagenes/pdf.png" alt="">
                        <button>Seleccionar archivos</button>
                        <!-- <button>Cargar</button>  -->
                    </div>
                    <div class="btnListo"><button>Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="SC_2.2.3">
                    <p>2.2.3 ¿Se efectúan entrevistas y/ o encuestas a los estudiantes de nuevo ingreso?
                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-2-3">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <br>
                    <input type="text" id="R2-2-3" placeholder="Escribe tu respuesta aquí...">
                    <!-- <img src="" alt=""><button>Guardar</button> -->
                    <br><br>
                    <div class="Listo">
                        <img src="/imagenes/pdf.png" alt="">
                        <button>Seleccionar archivos</button>
                        <!-- <button>Cargar</button>  -->
                    </div>
                    <div class="btnListo"><button>Guardar</button></div>
                </div>


                <div class="preguntasCategoria" id="SC_2.2.4">
                    <p>2.2.4 ¿Se aplica un instrumento para obtener datos socioeconómicos de los estudiantes de nuevo ingreso?

                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-2-4">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <br>
                    <input type="text" id="R2-2-4" placeholder="Escribe tu respuesta aquí...">
                    <!-- <img src="" alt=""><button>Guardar</button> -->
                    <br><br>
                    <div class="Listo">
                        <img src="/imagenes/pdf.png" alt="">
                        <button>Seleccionar archivos</button>
                        <!-- <button>Cargar</button>  -->
                    </div>
                    <div class="btnListo"><button>Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="SC_2.2.5">
                    <p>2.2.5 ¿Se efectúan análisis e investigación educativa a partir de los resultados de las características de los estudiantes de nuevo ingreso, para implementar programas de apoyo?

                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-2-5">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <br>
                    <input type="text" id="R2-2-5" placeholder="Escribe tu respuesta aquí...">
                    <!-- <img src="" alt=""><button>Guardar</button> -->
                    <br><br>
                    <div class="Listo">
                        <img src="/imagenes/pdf.png" alt="">
                        <button>Seleccionar archivos</button>
                        <!-- <button>Cargar</button>  -->
                    </div>
                    <div class="btnListo"><button>Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="SC_2.2.6">
                    <p>2.2.6 ¿Existe un programa de inducción para estudiantes de nuevo ingreso?

                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-2-6">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <br>
                    <input type="text" id="R2-2-6" placeholder="Escribe tu respuesta aquí...">
                    <!-- <img src="" alt=""><button>Guardar</button> -->
                    <br><br>
                    <div class="Listo">
                        <img src="/imagenes/pdf.png" alt="">
                        <button>Seleccionar archivos</button>
                        <!-- <button>Cargar</button>  -->
                    </div>
                    <div class="btnListo"><button>Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="SC_2.2.7">
                    <p>2.2.7 ¿En particular, los estudiantes reciben la inducción necesaria para el manejo del entorno de aprendizaje cuando se utilizan contenidos de los cursos del plan de estudios, con apoyo de plataformas de aprendizaje ?

                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-2-7">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <br>
                    <input type="text" id="R2-2-7" placeholder="Escribe tu respuesta aquí...">
                    <!-- <img src="" alt=""><button>Guardar</button> -->
                    <br><br>
                    <div class="Listo">
                        <img src="/imagenes/pdf.png" alt="">
                        <button>Seleccionar archivos</button>
                        <!-- <button>Cargar</button>  -->
                    </div>
                    <div class="btnListo"><button>Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="SC_2.2.8">
                    <p>2.2.8 ¿El programa educativo cuenta con estudios que evidencien que los estudiantes tienen el perfil requerido para estudiar de manera autónoma, que destaque la responsabilidad, habilidades de investigación y el ser autodidácticas?

                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-2-8">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <br>
                    <input type="text" id="R2-2-8" placeholder="Escribe tu respuesta aquí...">
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
                <div class="parrafo" id="2.3">
                    <p>
                        2.3 Trayectoria Escolar. Los estudiantes deben contar con un plan de seguimiento de su desempeño durante su estancia en el programa de estudios, así como recibir la retroalimentación correspondiente para mejorarla. Tendencia comprobada de disminución de índices de reprobación y deserción.

                    </p>
                </div>
                <div class="preguntasCategoria" id="SC_2.3.1">
                    <p>2.3.1 ¿Existe un plan de seguimiento y desempeño de la estancia de los estudiantes en el programa de estudios?
                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-3-1">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <br>

                    <p>En caso afirmativo proporcione una copia o copias 
                        de los documentos (puedes subir mas de un archivo).
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

                <div class="preguntasCategoria" id="SC_2.3.2">

                    <p>2.3.2 ¿El estudiante recibe retroalimentación para 
                        mejorar su estancia en el programa de estudios?
                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-3-1A1">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <br>
                    
                    <p>En caso afirmativo, describa cómo recibe el 
                        estudiante la retroalimentación sobre su desempeño:
                    </p>
                    <input type="text" id="R2-3-1A1" placeholder="Escribe tu respuesta aquí...">
                    
                </div>  

                
                <div class="preguntasCategoria" id="SC_2.3.3">
                    <p>2.3.3 ¿Existe una tendencia clara de disminución de los índices de reprobación?

                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-3-2">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <br>
                    <input type="text" id="R2-3-2" placeholder="Escribe tu respuesta aquí...">
                    <!-- <img src="" alt=""><button>Guardar</button> -->
                    <br><br>
                    <div class="Listo">
                        <img src="/imagenes/pdf.png" alt="">
                        <button>Seleccionar archivos</button>
                        <!-- <button>Cargar</button>  -->
                    </div>
                    <div class="btnListo"><button>Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="SC_2.3.4">
                    <p>2.3.4 ¿Existe una tendencia clara de disminución de los índices de deserción?

                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-3-3">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <br>
                    
                    <p>En caso afirmativo proporcione una copia o copias 
                        de los documentos (puedes subir mas de un archivo).
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
            </div>

            <div>
                <div class="parrafo" id="2.4">
                    <p>
                        2.4 Tamaño de los grupos. El tamaño de los grupos no debe ser en ningún caso mayor de 60 estudiantes, y preferentemente debe ser como máximo de 45 estudiantes. Si no se cumple esta condición, se debe garantizar la atención a los estudiantes.

                    </p>
                </div>
                <div class="preguntasCategoria" id="SC_2.4.1">
                    <p>2.4.1 Proporcionar el tamaño promedio de los grupos de los últimos dos años:
                    </p>
                    <input type="text" id="R2-4A1" placeholder="Escribe tu respuesta aquí...">
                    <p>¿Cuántos grupos en los últimos dos años tuvieron más de 60 estudiantes? 
                    </p>
                    <input type="text" id="R2-4A2" placeholder="Escribe tu respuesta aquí...">
                    <p>¿Cuántos grupos en los últimos dos años tuvieron más de 45 estudiantes?

                    </p>
                    <input type="text"  id="R2-4A3"placeholder="Escribe tu respuesta aquí...">
                    <p>Describir cómo se garantiza la atención a los estudiantes en grupos con más de 45 estudiantes

                    </p>
                    <input type="text" id="R2-4A4" placeholder="Escribe tu respuesta aquí...">
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

            <div>
                <div class="parrafo" id="2.5">
                    <p>
                        2.5 Titulación. Debe existir uno o varios reglamentos de estudiantes, que consideren los siguientes aspectos: Mecanismos de acreditación y evaluación de materias, Derechos y obligaciones del estudiante y Mecanismos de Titulación. También deben tener reglamentadas las opciones de titulación y un procedimiento que garantice la calidad de los trabajos de titulación. En los requisitos de titulación el puntaje obtenido en la prueba TOEFL o equivalente sea de por lo menos 500 puntos o equivalente en otros medios de evaluación formal.


                    </p>
                </div>
                <div class="preguntasCategoria" id="SC_2.5.1">
                    <p>2.5.1 Debe existir uno o varios reglamentos de estudiantes, que consideren los siguientes aspectos: 
                        Mecanismos de acreditación y evaluación de materias
                        Derechos y obligaciones del estudiante
                        Mecanismos de Titulación.
                    </p>
                    <input type="text" id="R2-5-1"  placeholder="Escribe tu respuesta aquí...">
                    <p>¿Se cuenta con un reglamento de estudiantes?
                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-5-1A1">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <br>
                    <input type="text" id="R2-5-1A1" placeholder="Escribe tu respuesta aquí...">
                    <p>Número límite de oportunidades para acreditar una materia ya sea por haberla cursado, por haber presentado exámenes a título de suficiencia, o por algún otro mecanismo:
                    </p>
                    <input type="text" id="R2-5-1A2" placeholder="Escribe tu respuesta aquí...">

                    <p>Número máximo de exámenes extraordinarios, a título o similares a lo largo de la carrera, de una misma asignatura: 
                    </p>
                    <input type="text" id="R2-5-1A3" placeholder="Escribe tu respuesta aquí...">

                    <p>Número máximo de exámenes extraordinarios, a título o similares a lo largo de la carrera, de todas las asignaturas cursadas : 
                    </p>
                    <input type="text" id="R2-5-1A4" placeholder="Escribe tu respuesta aquí...">

                    <p>Número máximo de años, semestre o períodos escolares en que el estudiante pueda terminar de cubrir los créditos del Programa diferenciando si es estudiante de tiempo completo (TC) o de tiempo parcial (TP).
                    </p>
                    <input type="text" id="R2-5-1A5" placeholder="Escribe tu respuesta aquí...">

                    <p>TC:
                    </p>
                    <input type="text" id="R2-5-1A6" placeholder="Escribe tu respuesta aquí...">

                    <p>TP:  
                    </p>
                    <input type="text"  id="R2-5-1A7" placeholder="Escribe tu respuesta aquí...">

                    <p>Principales motivos para dar de baja automática a un estudiante:
                    </p>
                    <input type="text"id="R2-5-1A8" placeholder="Escribe tu respuesta aquí...">

                    <p>¿Cómo y cuándo se entera el estudiante del contenido del reglamento de estudiantes (en caso de que exista)?
                    </p>
                    <input type="text" id="R2-5-1A9" placeholder="Escribe tu respuesta aquí...">

                    <p>¿El estudiante puede participar en los cuerpos colegiados de la institución?
                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-5-1A10">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <br>
                    <input type="text" id="R2-5-1A10" placeholder="Escribe tu respuesta aquí...">

                    <p>con voz
                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-5-1A11">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <br>
                    <input type="text" id="R2-5-1A11" placeholder="Escribe tu respuesta aquí...">

                    <p>con voto
                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-5-1A12">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <br>
                    <input type="text" id="R2-5-1A12" placeholder="Escribe tu respuesta aquí...">

                    <p>indique brevemente los requisitos para ello:
                    </p>
                    <input type="text" id="R2-5-1A13" placeholder="Escribe tu respuesta aquí...">
                    <!-- <img src="" alt=""><button>Guardar</button> -->
                    <br><br>
                    <div class="Listo">
                        <img src="/imagenes/pdf.png" alt="">
                        <button>Seleccionar archivos</button>
                        <!-- <button>Cargar</button>  -->
                    </div>
                    <div class="btnListo"><button>Guardar</button></div>
                </div>  

                <div class="preguntasCategoria" id="SC_2.5.2">
                    <p>2.5.2 La institución debe tener reglamentadas las opciones de titulación, tanto en requisitos como en procedimiento.
                    </p>
                    <input type="text" id="R2-5-2" placeholder="Escribe tu respuesta aquí...">
                    <p>¿Existe un reglamento que indique las opciones de titulación, tanto en requisitos como en procedimiento?
                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-5-2A1">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <br>
                    <input type="text" id="R2-5-2A1" placeholder="Escribe tu respuesta aquí...">

                    <!-- <img src="" alt=""><button>Guardar</button> -->
                    <br><br>
                    <div class="Listo">
                        <img src="/imagenes/pdf.png" alt="">
                        <button>Seleccionar archivos</button>
                        <!-- <button>Cargar</button>  -->
                    </div>
                    <div class="btnListo"><button>Guardar</button></div>
                </div>


                <div class="preguntasCategoria" id="SC_2.5.3">
                    <p>2.5.3 Deben existir procedimientos que garanticen la calidad de los trabajos de titulación en el que participen las academias o algún grupo colegiado designado para tal fin y con participación externa.
                    </p>
                    <input type="text" id="R2-5-3" placeholder="Escribe tu respuesta aquí...">
                    <p>¿Existe un procedimiento para garantizar la calidad de los trabajos de titulación?
                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-5-3A1">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <br>
                    <input type="text" id="R2-5-3A1" placeholder="Escribe tu respuesta aquí...">

                    <!-- <img src="" alt=""><button>Guardar</button> -->
                    <br><br>
                    <div class="Listo">
                        <img src="/imagenes/pdf.png" alt="">
                        <button>Seleccionar archivos</button>
                        <!-- <button>Cargar</button>  -->
                    </div>
                    <div class="btnListo"><button>Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="SC_2.5.4">
                    <p>2.5.4 El puntaje obtenido en la prueba TOEFL o equivalente sea de por lo menos 500 puntos o equivalente en otros medios de evaluación formal como requisito de titulación.
                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-5-4">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <br>
                    <input type="text" id="R2-5-4" placeholder="Escribe tu respuesta aquí...">
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
                <div class="parrafo" id="2.6">
                    <p>
                        2.6 Índices de rendimiento escolar por cohorte generacional. El índice de deserción deberá manifestar una tendencia al decremento, y deberán existir estadísticas confiables para observarla. Nunca menor del 20 % de eficiencia terminal.
                    </p>
                </div>
                <div class="preguntasCategoria" id="SC_2.6.1">
                    <p>2.6.1 ¿Cuenta el programa con datos que permitan analizar el flujo de estudiantes en los diferentes períodos escolares y conocer índices de deserción por período?
                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-6A1">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <br>
                    <input type="text" id="R2-6A1" placeholder="Escribe tu respuesta aquí...">

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
                <div class="parrafo" id="2.7">
                    <p>
                        2.7 Movilidad internacional de estudiantes.
                    </p>
                </div>
                <div class="preguntasCategoria" id="SC_2.7.1">
                    <p>2.7.1 ¿Existe un proceso formal para la movilidad internacional de estudiantes (tanto de envío como de recepción)?
                    </p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-7A1">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <br>
                    <input type="text" id="R2-7A1" placeholder="Escribe tu respuesta aquí...">
                    <p>¿Hay un reglamento para dicho proceso?<p>
                    <div class="opcMult" °>
                        <select name="select" id="RS2-7A2">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <br>
                    <input type="text" id="R2-7A2" placeholder="Escribe tu respuesta aquí...">

                    <!-- <img src="" alt=""><button>Guardar</button> -->
                    <br><br>
                    <div class="Listo">
                        <img src="/imagenes/pdf.png" alt="">
                        <button>Seleccionar archivos</button>
                        <!-- <button>Cargar</button>  -->
                    </div>
                    <div class="btnListo"><button>Guardar</button></div>
                </div>
                
                <div class="preguntasCategoria" id="SC_2.7.1">
                    <p>2.7.1 Indicar las movilidades en envío y recepción de los estudiantes en los últimos cinco años.
                    </p>
                    <input type="text" id="R2-7-1" placeholder="Escribe tu respuesta aquí...">
                    <!-- <img src="" alt=""><button>Guardar</button> -->
                    <br><br>
                    <div class="Listo">
                        <img src="/imagenes/pdf.png" alt="">
                        <button>Seleccionar archivos</button>
                        <!-- <button>Cargar</button>  -->
                    </div>
                    <div class="btnListo"><button>Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="SC_2.7.2">
                    <p>2.7.2. Indicar los productos y resultados obtenidos de estas movilidades en envío y recepción de los estudiantes en los últimos cinco años.
                    </p>
                    <input type="text" id="R2-7-2" placeholder="Escribe tu respuesta aquí...">
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