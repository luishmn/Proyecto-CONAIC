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
    <title>Categoria 10</title>
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
            <div class="titulo_categoria">Categoría 10: Gestión administrativa y financiamiento</div>

            <div>
                <div class="parrafo" id="10.1">
                    <p>
                        10.1 Planeación, evaluación y organización. La Facultad, escuela, división o departamento cuentan con instrumentos de planeación, evaluación y organización que le permitan tener una eficaz y eficiente gestión administrativa.
                    </p>
                </div>
                <div class="preguntasCategoria" id="SC_10.1.1">
                    <p>10.1.1. ¿Se cuenta con un Programa de Desarrollo Institucional (PDI) y con programas a mediano y corto plazo derivados del PDI? </p>
                    <div class="opcMult" °>
                        <select name="select" id="seleccion">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <br>

                    <p>En caso afirmativo mencione los puntos principales.                     </p>
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
                <div class="preguntasCategoria" id="SC_10.1.2">
                    <p>10.1.2.   La planeación del programa debe ser realizada por el personal académico.</p>
                    <p>¿La planeación del programa (incluyendo el plan presupuestal) es realizada por su personal académico?</p>
                    
                    <div class="opcMult" °>
                        <select name="select" id="seleccion">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <br>

                    <p>En caso afirmativo, describa cómo se realiza:                    </p>
                    <input type="text" placeholder="Escribe tu respuesta aquí...">
                    <p>Evaluación</p>
                    
                    <!-- <img src="" alt=""><button>Guardar</button> -->
                    <br><br>
                    <div class="Listo">
                        <img src="/imagenes/pdf.png" alt="">
                        <button>Seleccionar archivos</button>
                        <!-- <button>Cargar</button>  -->
                    </div>
                    <div class="btnListo"><button>Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="SC_10.1.3">
                    <p>10.1.3.  ¿Se efectúan sistemáticamente evaluaciones integrales para conocer el grado de cumplimiento de las metas de los programas a largo, mediano y corto plazo que permitan la toma de decisiones?</p>
                    <div class="opcMult" °>
                        <select name="select" id="seleccion">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <br>

                    <p>En caso afirmativo, describa cómo se realiza:                    </p>
                    <input type="text" placeholder="Escribe tu respuesta aquí...">
                    
                    <p>Organización</p>
                    
                    <!-- <img src="" alt=""><button>Guardar</button> -->
                    <br><br>
                    <div class="Listo">
                        <img src="/imagenes/pdf.png" alt="">
                        <button>Seleccionar archivos</button>
                        <!-- <button>Cargar</button>  -->
                    </div>
                    <div class="btnListo"><button>Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="SC_10.1.4">
                    <p>10.1.4  ¿La institución tiene establecida una normatividad clara y precisa que relacione las actividades administrativas con las académicas y se encuentra operacionalizada a través de reglamentos y manuales (de organización y procedimientos)?</p>
                    <div class="opcMult" °>
                        <select name="select" id="seleccion">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <br>

                    <p><li>En caso afirmativo proporcione una copia del mismo</li></p>
                    <p><li>En caso afirmativo proporcione una copia o copias de los documentos (puedes subir mas de un archivo).</li></p>
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
                <div class="parrafo" id="10.2">
                    <p>
                        10.2 Recursos humanos administrativos, de apoyo y de servicio. La institución debe  valorar la función académico - administrativa y tendrá la obligación de tener al personal más capacitado en la administración de las actividades académicas.
                    </p>
                </div>
                <div class="preguntasCategoria" id="SC_10.2.1">
                    <p>10.2.1 ¿Tiene establecida la Institución una normatividad que defina los requisitos para quienes ejercen funciones académico-administrativas?4.2.1 ¿Hay programa de becas para estudiantes?</p>
                    <div class="opcMult" °>
                        <select name="select" id="seleccion">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <br>
                    
                    <p>En caso afirmativo explique en qué consisten</p>
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
                <div class="preguntasCategoria" id="SC_10.2."2>
                    <p>10.2.2 Las actividades académicas no deben estar subordinadas a los procesos administrativos.</p>
                    
                    <p>En la práctica, ¿hay actividades académicas subordinadas a procesos administrativos?</p>
                    <div class="opcMult" °>
                        <select name="select" id="seleccion">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <br>

                    <p>En caso afirmativo, mencione las más importantes:</p>                    
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
                <div class="parrafo" id="10.3">
                    <p>
                        10.3 Recursos financieros. Deben existir criterios claramente establecidos para la determinación de gastos de mantenimiento y operación de laboratorios, talleres y demás infraestructura.
                    </p>
                </div>
                <div class="preguntasCategoria" id="SC_10.3.1">
                    <p>10.3.1 Cuando en la institución exista una política definida para la asignación del presupuesto, el programa debe hacer un análisis de ella y ver si es congruente con sus necesidades. En caso de que no lo sea, debe elaborar un modelo adecuado de sus necesidades que considere, entre otras cosas, salarios, mejorar al personal académico, gastos de operación, inversiones, compra de nuevos equipos y sustitución de los existentes, así como ampliaciones a la planta física.</p>
                    <p>La institución tiene claramente definidas las políticas y criterios para la asignación del presupuesto del programa.</p>
                    <div class="opcMult" °>
                        <select name="select" id="seleccion">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <br>

                    <p>En caso afirmativo describa brevemente cuáles son:</p>
                    <input type="text" placeholder="Escribe tu respuesta aquí...">
                    <p>¿Se han realizado análisis de las mismas para ver si son congruentes con las necesidades de la institución?</p>
                    <div class="opcMult" °>
                        <select name="select" id="seleccion">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                    <p>En caso afirmativo mencione las principales decisiones que se han tomado con relación a las políticas de
                        asignación presupuestal:</p>
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

                <div class="preguntasCategoria" id="SC_10.3.2">
                    <p>10.3.2 El programa debe tener de manera explícita un plan presupuestal acorde con sus necesidades de operación y planes de desarrollo.</p>
                    <p>El programa cuenta con un plan presupuestal acorde con sus necesidades y planes de desarrollo:</p>
                    <div class="opcMult" °>
                        <select name="select" id="seleccion">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                    <p><li>En caso afirmativo proporcione una copia del mismo.</li></p>
                    <p><li>En caso afirmativo proporcione una copia o copias de los documentos (puedes subir mas de un archivo).</li></p>
                    <!-- <img src="" alt=""><button>Guardar</button> -->
                    <br><br>
                    <div class="Listo">
                        <img src="/imagenes/pdf.png" alt="">
                        <button>Seleccionar archivos</button>
                        <!-- <button>Cargar</button>  -->
                    </div>
                    <div class="btnListo"><button>Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="SC_10.3.3">
                    <p>10.3.3 ¿El programa cuenta con criterios claramente establecidos para la determinación de gastos de mantenimiento y operación de laboratorios y talleres?</p>
                    <div class="opcMult" °>
                        <select name="select" id="seleccion">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                    <p>En caso afirmativo mencione los más importantes</p>
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

                <div class="preguntasCategoria" id="SC_10.3.4">
                    <p>10.3.4 El programa debe tener definidos claramente sus costos globales de operación, a través de los gastos en sueldos y salarios del personal que participe, así como sus gastos de operación y las inversiones para la compra de nuevos equipos y sustitución de éstos.</p>
                    <p>Será muy conveniente que presente un análisis de los costos de operación del programa (sueldos y salarios, gastos de operación y mantenimiento, depreciación del equipo, gasto estimado por renta de las instalaciones, etc.) y lo relacione con los beneficios obtenidos (No. de estudiantes atendidos, servicios brindados, etc.). Aunque este análisis no es fácil de realizar, ni se puede hacer en forma exacta pues algunas estimaciones son subjetivas, se debe procurar obtener aproximaciones muy útiles para la distribución o redistribución de los recursos.</p>
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