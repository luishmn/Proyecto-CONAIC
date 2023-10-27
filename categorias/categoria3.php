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
    <title>Categoria 3</title>
    <link rel="stylesheet" href="autoevaluacion.css">
    <script src="enviarConsulta.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
        
            <div class="titulo_categoria">Categoría 3: Plan de estudios</div>
            <div>
            <div class="parrafo" id="3.1">
                <p>
                    3.1 Fundamentación. Debe existir la documentación oficial que respalde<br>
                    la creación, permanencia y/o actualización del programa.<br>
                    Se debe contar con estudios que permitan apreciar la pertinancia del plan<br>
                    de estudios en función de las demandas de la sociedad y del mercado laboral;
                    así como del avance cientiico-tecnologico(marco de referencia perfiles ANIEI-CONAIC).
                </p>
            </div>

            <div class="preguntasCategoria" id="SC_3.1.1">
                <p>3.1.1 Justificación del programa</p>
                <input type="text" placeholder="Escribe tu respuesta aquí...">
                <p>¿Existe un documento que justifique la creación?</p>
                <div class="opcMult"°>
                    <select name="select" id="seleccion">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="No">No</option>
                    </select>
                </div>

                <p>Los motivos por los cuales fue establecido el programa (porque y para que)</p>
                <input type="text" placeholder="Escribe tu respuesta aquí...">
                <p>Las razones a las cuales obedece actualmente el programa:</p>
                <input type="text" placeholder="Escribe tu respuesta aquí...">
                <p>¿A qué demanda específica pretende satisfacer el programa?</p>
                <input type="text" placeholder="Escribe tu respuesta aquí...">
                <p>¿Qué demanda específica satisface el programa?</p>
                <input type="text" placeholder="Escribe tu respuesta aquí...">
                <div class="Listo">

                    <div class="botonesPDFSgroup">
                        <!--Boton-->
                        <div class="boton-modal1">
                            <label for="btn-modal1">
                                Subir PDF
                            </label>
                        </div>
                        <!--Fin de Boton-->
                        <!--Ventana Modal-->
                        <input type="checkbox" id="btn-modal1">
                            <div class="container-modal1">
                                <div class="content-modal1">
                                    <h2>Subir tu PDF</h2>
                                    <form method="POST" action="subir_pdf.php" enctype="multipart/form-data">
                                        <input type="hidden" name="claveSubCriterio" value="3.1.1"> <!-- Clave fija -->
                                        <label for="archivo">Selecciona un archivo PDF:</label>
                                        <br>
                                        <br>

                                        <label class="custom-file-label">
                                            <input type="file" name="archivo" accept=".pdf" class="custom-file-input" id="file-input" multiple>
                                            <span class="icon"><i class="fa fa-file-pdf-o"></i></span> Seleccionar PDF
                                        </label>
                                        <div class="selected-files" id="selected-files"></div>
                                        <br>

                                        <input type="submit" value="Cargar PDF" class="submitPDF">
                                        <br><br>
                                        <label for="btn-modal1" class="cerrar1">Cerrar</label>
                                    </form>                            
                                </div>
                            </div>
                            </div>
                            <!--Fin de Ventana Modal-->
                    
                        


                            <!-- Botón -->
                            <div class="boton-modal2">
                                <label for="btn-modal2">Ver PDF</label>
                            </div>

                            <!-- Ventana Modal -->
                            <input type="checkbox" id="btn-modal2">
                            <div class="container-modal2">
                                <div class="content-modal2">
                                    <div class="Cuadro">
                                    <table>
                                    <thead>
                                        <tr>
                                            <th>Nombre del PDF</th>
                                            <th>Acción</th>
                                        </tr>
                                    
                                
                                    </thead>
                                    <tbody>
                                    <?php
                                        include "../conexionDB/conexion.php";
                                        conecta();
                                    
                                        // Verifica la conexión
                                        if ($conexion->connect_error) {
                                            die("Error de conexión: " . $conexion->connect_error);
                                        }

                                        // Consulta para obtener los PDFs desde la base de datos
                                        $sql = "SELECT id, nombrePDF, clavePDF FROM subcriteriospdf WHERE claveSubCriterio='3.1.1'";
                                        $resultado = $conexion->query($sql);

                                        if ($resultado->num_rows > 0) {
                                            while ($fila = $resultado->fetch_assoc()) {
                                                $pdfName = $fila["nombrePDF"];
                                                $pdfId = $fila["id"];
                                                $pdfClave=$fila["clavePDF"];
                                                echo "<tr>";
                                                echo "<td>$pdfName</td>";
                                                echo "<td>";
                                                echo "<a href='abrir_pdf.php?clavePDF=$pdfClave' target='_blank'>Abrir PDF</a>";
                                                echo " | ";
                                                echo "<a href='eliminar_pdf.php?clavePDF=$pdfClave'>Eliminar PDF</a>";
                                                echo "</td>";
                                                echo "</tr>";
                                            }
                                        } else {
                                            echo "<tr><td colspan='2'>No se encontraron PDFs en la base de datos.</td></tr>";
                                        }

                                        $conexion->close();
                                        ?>
                                    </tbody>
                                    </table>

                                    </div>
                                    
                                    <label class="boton_cerrar" for="btn-modal2">Cerrar</label>
                                </div>
                                <label for="btn-modal2" class="cerrar-modal2"></label>
                            </div>
                        </div>


                <div class="btnListo"><button>Guardar</button></div>
           
                </div>

           



            <div class="preguntasCategoria" id="SC_3.1.2">
                <p>3.1.2 Es importante que exista congruencia con la misión, visión y objetivos institucionales, los objetivos del plan nacional de desarrollo (vigente) y educativo del país, así como con el objetivo de la educación superior.</p>
                <p>¿Está publicada la misión, visión y objetivos institucionales?</p>
                <div class="opcMult"°>
                    <select name="select" id="seleccion">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <p>En un párrafo justifique la congruencia entre la misión, visión y objetivos institucionales con el objetivo del programa y el objetivo de la educación superior.</p>
                <input type="text" placeholder="Escribe tu respuesta aquí...">
                <div class="Listo">
                    <img src="/imagenes/pdf.png" alt="">
                    <button>Seleccionar archivos</button>
                </div>
                <div class="btnListo"><button>Guardar</button></div>
            </div>
           
            
            <div>
            <div class="parrafo" id="3.2">
                <p>3.2 Perfiles de ingreso y egreso. Debe existir una definición y congruencia del<br>
                    objetivo general del programa y perfil del egresado; así como congruencia con <br>
                    los desarrollos del área de conocimiento.
                </p>
            </div>

            <div class="preguntasCategoria" id="SC_3.2.1">
                <p>3.2.1 Debe existir una definición del objetivo general del programa y perfil del egresado.</p>
                <p>¿Está publicado el plan de estudios del programa?</p>
                <div class="opcMult"°>
                    <select name="select" id="seleccion">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <p>¿En la documentación del programa se describe el perfil del egresado?</p>
                <div class="opcMult"°>
                    <select name="select" id="seleccion">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <p>¿En la documentación del programa se describen los objetivos del programa?</p>
                <div class="opcMult"°>
                    <select name="select" id="seleccion">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="No">No</option>
                    </select>
                </div>  
                <div class="btnListo"><button>Guardar</button></div>
            </div>


            <div class="preguntasCategoria" id="SC_3.2.2">
                <p>3.2.2 Es importante que exista congruencia entre el perfil del egresado y el objetivo.</p>
                <input type="text" placeholder="Escribe tu respuesta aquí...">
                <div class="Listo">
                    <img src="/imagenes/pdf.png" alt="">
                    <button>Seleccionar archivos</button>
                </div>
                <div class="btnListo"><button>Guardar</button></div>
            </div>


            <div class="preguntasCategoria" id="SC_3.2.3">
                <p>3.2.3 El objetivo debe ser congruente con los desarrollos presentes y futuros del área de conocimiento.</p>
                <input type="text" placeholder="Escribe tu respuesta aquí...">
                <div class="Listo">
                    <img src="/imagenes/pdf.png" alt="">
                    <button>Seleccionar archivos</button>
                </div>
                <div class="btnListo"><button>Guardar</button></div>               
            </div>


            <div>
            <div class="parrafo" id="3.3">
                <p>3.3 Normativa para la permanencia, egreso y revalidación. Debe existir la <br>
                    normativa que señale claramente los requisitos de permanencia, egreso,<br>
                    equivalencia y revalidación del programa académico y si se difunde entre la comunidad estudiantil.
                </p>
            </div>
            <div class="preguntasCategoria" id="SC_3.3.1">
                <p>3.3.1 ¿Existe la normativa que señale claramente los requisitos de permanencia, egreso, equivalencia y revalidación del programa académico y si se difunde entre la comunidad estudiantil?</p>
                <div class="opcMult"°>
                    <select name="select" id="seleccion">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="No">No</option>
                    </select>
                </div> 
                <div class="Listo">
                    <img src="/imagenes/pdf.png" alt="">
                    <button>Seleccionar archivos</button>
                </div>
                <div class="btnListo"><button>Guardar</button></div>
                </div>
            </div>

            
            <div>
            <div class="parrafo" id="3.4">
                <p>3.4 Programas de asignaturas. Se deben calcular unidades de tiempo dedicadas a cada área del conocimiento del programa, atendiendo a dos clasificaciones: Una que es genérica y contempla 4 áreas: 1) Informática y Computación, 2) Matemáticas y Ciencias Básicas, 3) Ciencias Sociales, Humanidades y 4) Otras; y la otra que es específica del área de conocimiento de Informática y Computación y que contempla 8 áreas: 1) Interacción-Hombre-Máquina, 2) Tratamiento de Información, 3) Programación e Ingeniería de Software, 4) Software de Base, 5) Redes, 6) Arquitectura de Computadoras y 7) Entorno Social 8) Matemáticas.</p>
            </div>
            <div class="preguntasCategoria" id="SC_3.4.1">
                <p>3.4.1 Para poder comparar el contenido curricular de distintos programas, se hace referencia a Unidades de cada curso. Para efectos de equivalencia, una Unidad  equivale a 1 hora de Teoría frente a grupo, o bien a 3 horas de Práctica frente a grupo para Licenciatura y para el caso de Técnico Superior Universitario, la equivalencia es 2 horas de práctica frente a grupo.  El Comité reconoce que existen nuevos modelos pedagógicos donde los estudiantes realizan actividades de auto-estudio; en estos casos, la institución que busca la acreditación deberá de justificar la equivalencia utilizada para el número de Unidades.</p>
                <input type="text" placeholder="Escribe tu respuesta aquí...">
                <div class="Listo">
                    <img src="/imagenes/pdf.png" alt="">
                    <button>Seleccionar archivos</button>
                </div>
                <div class="btnListo"><button>Guardar</button></div>
                </div>
            </div>


            <div>
            <div class="parrafo" id="3.5">
                <p>3.5 Contenidos. Cada programa de asignatura debe contener la ubicación dentro del plan de estudios, el objetivo general, los objetivos de cada sección del curso, los temas por sección, las prácticas (en su caso), la bibliografía básica, los recursos necesarios, las horas de utilización de infraestructura de cómputo, la forma de evaluación, las horas de teoría y/o práctica y el equivalente en unidades, así como el perfil deseable del profesor (Posgrado y experiencia en la materia) para efecto de validar las respuestas 3.1 y 3.2.</p>
            </div>
            <div class="preguntasCategoria" id="SC_3.5.1">
                <p>3.5.1 Asignaturas del programa</p>
                <div class="opcMult"°>
                    <select name="select" id="seleccion">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="No">No</option>
                    </select>
                </div> 
                <p>¿Se entrega esta información al estudiante?</p>
                <div class="opcMult"°>
                    <select name="select" id="seleccion">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="No">No</option>
                    </select>
                </div> 
                <p>¿Se cuenta con los programas sinópticos (condensados) de todas las asignaturas?</p>
                <div class="opcMult"°>
                    <select name="select" id="seleccion">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="No">No</option>
                    </select>
                </div> 
                <p>En que porcentaje</p>
                <input type="text" placeholder="Escribe tu respuesta aquí...">
                <p>¿Se cuenta con los programas analíticos (detallados) de todas las asignaturas?</p>
                <div class="opcMult"°>
                    <select name="select" id="seleccion">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="No">No</option>
                    </select>
                </div> 
                <p>En que porcentaje</p>
                <input type="text" placeholder="Escribe tu respuesta aquí...">
                <p>Con base en el total de los programas analíticos de las asignaturas del programa, indicar qué porcentaje de ellos mencionan expresamente:</p>
                <input type="text" placeholder="Escribe tu respuesta aquí...">
                <div class="Listo">
                    <img src="/imagenes/pdf.png" alt="">
                    <button>Seleccionar archivos</button>
                </div>
                <div class="btnListo"><button>Guardar</button></div>
            </div>


            <div class="preguntasCategoria" id="SC_3.5.2">
                <p>3.5.2 En las asignaturas correspondientes a la especialidad están incluidos proyectos dirigidos a desarrollar la habilidad del estudiante para resolver problemas reales acordes a las necesidades tecnológicas del propio programa.</p>
                <input type="text" placeholder="Escribe tu respuesta aquí...">
                <p>Indique en qué asignaturas del programa se elaboran proyectos dirigidos a desarrollar la habilidad del estudiante para resolver problemas reales acordes a las necesidades tecnológicas  del propio programa.</p>
                <input type="text" placeholder="Escribe tu respuesta aquí...">
                <p>Indique las materias optativas ofrecidas en los últimos tres años. Las unidades de la asignatura y las áreas debe considerarse en términos de la clasificación indicada en las respuestas 3.1 y 3.2.</p>
                <input type="text" placeholder="Escribe tu respuesta aquí...">
                <div class="Listo">
                    <img src="/imagenes/pdf.png" alt="">
                    <button>Seleccionar archivos</button>
                </div>
                <div class="btnListo"><button>Guardar</button></div>
                </div>
            </div>



            <div class="preguntasCategoria" id="SC_3.5.3">
                <p>3.5.3 El plan de estudios debe considerar la elaboración de trabajo en equipo e interdisciplinario.</p>
                <p>Indique en qué asignaturas se elabora trabajo en equipo e interdisciplinario.</p>
                <input type="text" placeholder="Escribe tu respuesta aquí...">
                <div class="Listo">
                    <img src="/imagenes/pdf.png" alt="">
                    <button>Seleccionar archivos</button>
                </div>
                <div class="btnListo"><button>Guardar</button></div>
                </div>
            </div>



            <div>
            <div class="parrafo" id="3.6">
                <p>3.6 Flexibilidad Curricular. El plan de estudios debe ser revisado y actualizado en su caso, al menos cada
                    cinco años y debe existir un procedimiento oficial para su revisión y actualización, en los que deben
                    participar cuerpos colegiados, asesores externos representantes del sector productivo, egresados en
                    activo e investigadores reconocidos. También debe existir un proceso permanente de evaluación
                    curricular</p>
            </div>
            <div class="preguntasCategoria" id="SC_3.6.1">
                <p>Indique las materias optativas ofrecidas en los últimos tres años.
                    Las unidades de la asignatura y las áreas debe considerarse en términos de la clasificación indicada en las
                    respuestas 3.1 y 3.2.</p>
                <input type="text" placeholder="Escribe tu respuesta aquí...">
                <div class="Listo">
                    <img src="/imagenes/pdf.png" alt="">
                    <button>Seleccionar archivos</button>
                </div>
                <div class="btnListo"><button>Guardar</button></div>
                </div>
            </div>






            <div>
            <div class="parrafo" id="3.7">
                <p>3.7 Evaluación y actualización. El plan de estudios debe de ser revisado y actualizado periódicamente y deben existir los procedimientos oficiales permanentes para realizarlos, mismos que deben indicar a cuerpos colegiados, asesores, egresados e investigadores reconocidos.
                </p>
            </div>
            <div class="preguntasCategoria" id="SC_3.7.1">
                <p>3.7.1 El plan de estudios debe ser revisado y actualizado en su caso, al menos cada cinco años.</p>
                <input type="text" placeholder="Escribe tu respuesta aquí...">
                <div class="Listo">
                    <img src="/imagenes/pdf.png" alt="">
                    <button>Seleccionar archivos</button>
                </div>
                <div class="btnListo"><button>Guardar</button></div>
            </div>


            <div class="preguntasCategoria" id="SC_3.7.2">
                <p>3.7.2 Debe existir un procedimiento oficial y funcional,  para la revisión y actualización del plan de estudios. </p>
                <input type="text" placeholder="Escribe tu respuesta aquí...">
                <p>¿Existe un procedimiento oficial  para la revisión del plan de estudios?</p>
                <input type="text" placeholder="Escribe tu respuesta aquí...">
                <div class="Listo">
                    <img src="/imagenes/pdf.png" alt="">
                    <button>Seleccionar archivos</button>
                </div>
                <div class="btnListo"><button>Guardar</button></div>
            </div>

            <div class="preguntasCategoria" id="SC_3.7.3">
                <p>3.7.3 En los procesos de revisión y actualización deben participar los cuerpos colegiados, así como un grupo de asesores externos representantes del sector productivo, egresados en activo e  investigadores reconocidos.</p>
                <div class="opcMult"°>
                    <select name="select" id="seleccion">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="No">No</option>
                    </select>
                </div> 
                <p>¿De qué manera?</p>
                <input type="text" placeholder="Escribe tu respuesta aquí...">
                <p>¿En la revisión y actualización del plan de estudios participan asesores externos y representantes del sector productivo?</p>
                <div class="opcMult"°>
                    <select name="select" id="seleccion">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="No">No</option>
                    </select>
                </div> 
                <p>¿De qué manera?</p>
                <input type="text" placeholder="Escribe tu respuesta aquí...">
                <p>¿En la revisión y actualización del plan de estudios participan egresados del programa?</p>
                <div class="opcMult"°>
                    <select name="select" id="seleccion">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="No">No</option>
                    </select>
                </div> 
                <div class="Listo">
                    <img src="/imagenes/pdf.png" alt="">
                    <button>Seleccionar archivos</button>
                </div>
                <div class="btnListo"><button>Guardar</button></div>
            </div>


            <div class="preguntasCategoria" id="SC_3.7.4">
                <p>3.7.4 Debe existir un procedimiento permanente de evaluación curricular.</p>
                <div class="opcMult"°>
                    <select name="select" id="seleccion">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="No">No</option>
                    </select>
                </div> 
                <p>Describa en qué consiste este procedimiento:</p>
                <input type="text" placeholder="Escribe tu respuesta aquí...">
                <div class="Listo">
                    <img src="/imagenes/pdf.png" alt="">
                    <button>Seleccionar archivos</button>
                </div>
                <div class="btnListo"><button>Guardar</button></div>
                </div>
            </div>

            <div>
            <div class="parrafo" id="3.8">
                <p>3.8 Difusión. Como parte fundamental del proceso enseñanza-aprendizaje, los programas actualizados de todas y cada una de las asignaturas que forman parte del plan de estudios, deben estar a disposición para su consulta por: profesores, estudiantes y el público en general.</p>
            </div>
            <div class="preguntasCategoria" id="SC_3.8.1">
                <p>3.8.1 ¿Los programas actualizados de todas las asignaturas del plan de estudios están a disposición para su consulta por parte de profesores, estudiantes y el público en general?</p>
                <div class="opcMult"°>
                    <select name="select" id="seleccion">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="No">No</option>
                    </select>
                </div> 
                <div class="Listo">
                    <img src="/imagenes/pdf.png" alt="">
                    <button>Seleccionar archivos</button>
                </div>
                <div class="btnListo"><button>Guardar</button></div>
            </div>


            <div class="preguntasCategoria" id="SC_3.8.2">
                <p>3.8.2 Indique cuáles de los siguientes aspectos se le da conocer al estudiante.</p>
                <p>Estructura del plan de estudios.</p>
                <input type="text" placeholder="Escribe tu respuesta aquí...">
                <p>Objetivo.</p>
                <div class="opcMult"°>
                    <select name="select" id="seleccion">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="No">No</option>
                    </select>
                </div> 
                <p>Perfil</p>
                <div class="opcMult"°>
                    <select name="select" id="seleccion">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="No">No</option>
                    </select>
                </div> 
                <p>Asignaturas</p>
                <div class="opcMult"°>
                    <select name="select" id="seleccion">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="No">No</option>
                    </select>
                </div> 
                <p>Horas</p>
                <div class="opcMult"°>
                    <select name="select" id="seleccion">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="No">No</option>
                    </select>
                </div> 
                <p>Duración</p>
                <div class="opcMult"°>
                    <select name="select" id="seleccion">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="No">No</option>
                    </select>
                </div> 
                <p>Seriación</p>
                <div class="opcMult"°>
                    <select name="select" id="seleccion">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="No">No</option>
                    </select>
                </div> 
                <p>Especialidad(es)</p>
                <div class="opcMult"°>
                    <select name="select" id="seleccion">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="No">No</option>
                    </select>
                </div> 
                <p>Describa cómo se tiene acceso a la información de los programas:</p>
                <input type="text" placeholder="Escribe tu respuesta aquí...">

                <div class="Listo">
                    <img src="/imagenes/pdf.png" alt="">
                    <button>Seleccionar archivos</button>
                </div>
                <div class="btnListo"><button>Guardar</button></div>
                </div>
            </div>

            <div class="preguntasCategoria" id="SC_3.8.3">
                <p>3.8.3 Deben existir mecanismos para la promoción externa 
                    (visitas a planteles de nivel medio superior, trípticos, difusión 
                    en medios masivos de comunicación, etc.) del programa.</p>

                <p>¿Existen mecanismos para la promoción externa del programa?</p>
                <div class="opcMult"°>
                    <select name="select" id="seleccion">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="No">No</option>
                    </select>
                </div> 

                <p>En caso afirmativo indique cuales son:</p>
                <input type="text" placeholder="Escribe tu respuesta aquí...">

                <p>En caso afirmativo proporcione una copia o copias de los 
                    documentos (puedes subir más de un archivo).
                </p>


                <div class="Listo">
                    <img src="/imagenes/pdf.png" alt="">
                    <button>Seleccionar archivos</button>
                </div>
                <div class="btnListo"><button>Guardar</button></div>
                </div>
            </div>

        
            <div>
            <div class="parrafo" id="3.9">
                <p>3.9 Justificación de las Competencias. Se deben analizar las competencias del programa a evaluar, considerando las competencias definidas por la ANIEI en su versión más actualizada, justificando el perfil A, B, C o D del modelo a través de una matriz.</p>
            </div>
            
            <div class="preguntasCategoria" id="SC_3.9.1">
                <p>3.9.1 Tabla de cumplimiento de competencias transversales. Considerar la definición y justificación competencias iniciales, de desarrollo y de evaluación.  Rellenar tabla competencias transversales. Etapa de planificación del modelo de competencias</p>
                <input type="text" placeholder="Escribe tu respuesta aquí...">
                <div class="Listo">
                    <img src="/imagenes/pdf.png" alt="">
                    <button>Seleccionar archivos</button>
                </div>
                <div class="btnListo"><button>Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="SC_3.9.2">
                    <p>3.9.2. Tabla de cumplimiento de competencias específicas. Considerar la definición y justificación competencias iniciales, de desarrollo y de evaluación. Rellenar tabla competencias específicas. Etapa de planificación del modelo de competencias.</p>
                    <input type="text" placeholder="Escribe tu respuesta aquí...">
                    <div class="Listo">
                        <img src="/imagenes/pdf.png" alt="">
                        <button>Seleccionar archivos</button>
                    </div>
                </div>



            
        </div>
    </div>
</body>
</html>
<script>
        const fileInput = document.getElementById('file-input');
        const selectedFiles = document.getElementById('selected-files');

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

document.addEventListener("DOMContentLoaded", function () {
    var button = document.querySelector(".cargar-pdf");
    var form = document.getElementById("uploadForm");

    button.addEventListener("click", function (e) {
        e.preventDefault();

        var id = this.getAttribute("data-id");
        var fileInput = form.querySelector("input[type='file']");
        var files = fileInput.files;

        if (files.length === 0) {
            alert("Selecciona al menos un archivo PDF para cargar.");
            return;
        }

        var formData = new FormData();

        for (var i = 0; i < files.length; i++) {
            formData.append("archivo[]", files[i]);
        }

        formData.append("id", id);

        var xhr = new XMLHttpRequest();
        xhr.open("POST", "subir_pdf.php", true);

        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    alert(xhr.responseText);
                } else {
                    alert("Error al cargar los archivos.");
                }
            }
        };

        xhr.send(formData);
    });
});

</script>
<script>
document.getElementById("boton_cerrar1").addEventListener("click", function() {
    window.location.reload(false); // El valor "false" evita que se limpie la caché
});
</script>