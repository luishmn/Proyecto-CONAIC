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
    <title>Categoria 9</title>
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
            <div class="titulo_categoria">Categoría 9: Infraestructura y equipamiento</div>

            <div>
                <div class="parrafo" id="9.1">
                    <p >
                        En el área de TIC’s el equipamiento e infraestructura es fundamental para el desarrollo del plan de estudios. La profesión está fuertemente sostenida por Redes de telecomunicaciones, equipo de cómputo, software de diferente naturaleza por mencionar algunos aspectos.</p>
                        <p >9.1 Infraestructura.</p>
                        <p >Los espacios físicos donde se ofrezcan los servicios de cómputo deben tener condiciones adecuadas de trabajo, seguridad e higiene; exceptuando el perfil de Licenciado en Informática, los demás perfiles deberán disponer de laboratorios de electrónica; deberán contar con servicios de cómputo para cursos especializados y personal con experiencia y perfil adecuado; debe tomarse en cuenta la opinión de los profesores para su diseño, actualización y operación de los servicios de cómputo; las aulas deben ser funcionales y suficientes; deben contar con cubículos para profesores, y para asesorías a estudiantes; deben disponer de auditorios o espacios adecuados y suficientes para las distintas actividades académicas, de investigación y difusión de la cultura y los sanitarios para los estudiantes y profesores deben ser adecuados y suficientes.
                    </p>
                </div>
                <div class="preguntasCategoria" id="SC_9.1.1">
                    <p >9.1.1 Mencionar las condiciones de trabajo, seguridad e higiene de los servicios de cómputo, (dimensión de áreas de trabajo, ventilación, iluminación, aire acondicionado, extinguidores, salidas de emergencia, depósitos, etc.).
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
                    <div class="btnListo"><button>Guardar</button></div>
                </div>

                <div class="preguntasCategoria" class="preguntasCategoria" id="SC_9.1.2">
                    <p>9.1.2 Exceptuando a los programas que correspondan al perfil de Licenciado en Informática, todos los programas deberán disponer de al menos un laboratorio de electrónica acondicionado que los soporte.</p>
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
                    <div class="btnListo"><button>Guardar</button></div>
                </div>

                <div class="preguntasCategoria" class="preguntasCategoria" id="SC_9.1.3">
                    <p >9.1.3 El programa debe disponer de los servicios de cómputo necesarios para cursos y actividades especializadas, relacionadas con el mismo.</p>
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
                    <div class="btnListo"><button>Guardar</button></div>
                </div>

                <div class="preguntasCategoria" class="preguntasCategoria" id="SC_9.1.4">
                    <p >9.1.4 Los responsables de los servicios de cómputo deben ser personal con experiencia y perfil relacionado con el área.</p>
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
                    <div class="btnListo"><button>Guardar</button></div>
                </div>

                <div class="preguntasCategoria" class="preguntasCategoria" id="SC_9.1.5">
                    <p >9.1.5 El diseño, equipamiento y operación de los servicios de cómputo debe tomar en cuenta la opinión de los profesores que  participan en el programa.</p>


                    <p >¿Se toma en cuenta la opinión de los profesores que participan en el programa para el diseño, equipamiento y operación de los servicios de cómputo?</p>
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
                    <div class="btnListo"><button>Guardar</button></div>
                </div>

                <div class="preguntasCategoria" class="preguntasCategoria" id="SC_9.1.6">
                    <p>9.1.6 Las aulas deben ser funcionales, disponer de espacio suficiente para cada estudiante y tener las condiciones adecuadas de higiene, seguridad, iluminación, ventilación, temperatura, aislamiento del ruido y mobiliario.
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
                    <div class="btnListo"><button>Guardar</button></div>
                </div>

                <div class="preguntasCategoria" class="preguntasCategoria" id="SC_9.1.7">
                    <p >9.1.7 El número de aulas habrá de ser suficiente para atender la impartición de cursos que se programen en cada periodo escolar.
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
                    <div class="btnListo"><button>Guardar</button></div>
                </div>

                <div class="preguntasCategoria" class="preguntasCategoria" id="SC_9.1.8">
                    <p >9.1.8 El programa debe disponer de al menos una aula con equipo de cómputo y audiovisual permanentemente instalado que podrá ser utilizada para cursos normales y especializados.
                        </p>

                    <p >Número de aulas con equipo de cómputo
                    </p>
                    <textarea id="R9-1-8" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

                    <br><br>

                    <p >Número de aulas con equipo audiovisual
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
                    <div class="btnListo"><button>Guardar</button></div>
                </div>

                <div class="preguntasCategoria" class="preguntasCategoria" id="SC_9.1.9">
                    <p >9.1.9 Los profesores de tiempo completo, tres cuartos y medio tiempo deben contar con cubículos. El resto de los profesores deben contar con lugares adecuados para su trabajo.
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
                    <div class="btnListo"><button>Guardar</button></div>
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
                    <div class="btnListo"><button>Guardar</button></div>
                </div>

                <div class="preguntasCategoria" class="preguntasCategoria" id="SC_9.1.11">
                    <p >9.1.11 El programa debe disponer de auditorios y/o salas debidamente acondicionados para actividades académicas, investigación, y de preservación y difusión de la cultura.
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
                    <div class="btnListo"><button>Guardar</button></div>
                </div>

                <div class="preguntasCategoria" class="preguntasCategoria" id="SC_9.1.12">
                    <p >9.1.12 En los espacios mencionados en el criterio anterior, se debe tener un lugar cómodo por cada diez estudiantes inscritos en el programa, ofreciendo las condiciones adecuadas de higiene y seguridad.
                        </p>


                    <p >De los espacios mencionados anteriormente mencionar:
                    </p>
                    <textarea id="R9-1-12" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

                    <br><br>

                    <p >Número de lugares disponibles
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
                    <div class="btnListo"><button>Guardar</button></div>
                </div>

                <div class="preguntasCategoria" class="preguntasCategoria" id="SC_9.1.13">
                    <p>9.1.13 Las facilidades sanitarias para los estudiantes y profesores del programa deben ser adecuadas.</p>
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
                    <div class="btnListo"><button>Guardar</button></div>
                </div>
            
                

                
                <div class="parrafo" id="9.2">
                    <p >
                        9.2 Equipamiento. El Software recomendado para cada una de las asignaturas debe existir y estar disponible para el uso de los estudiantes y personal docente.
                    </p>
                </div>
                <div class="preguntasCategoria" class="preguntasCategoria" id="SC_9.2.1">
                    <p>9.2.1 Para cada asignatura mencionar el software que se utiliza y si está disponible dentro de la institución.
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
                    <div class="btnListo"><button>Guardar</button></div>
                </div>


                <div class="preguntasCategoria" id="SC_9.2.2">
                    <p >9.2.2 Todo programa debe contar como mínimo con el siguiente software: Lenguajes de programación, herramientas CASE, manejadores de base de datos y paquetería en general.
                    </p>

                    <p >Describir los siguientes elementos de la infraestructura de software, incluyendo versiones y número de licencias:
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
                    <div class="btnListo"><button>Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="SC_9.2.3">
                    <p >9.2.3 El programa debe tener a su disposición dentro de la institución, el equipo de cómputo indispensable para las prácticas de las materias que lo requieran.
                    </p>

                    <p >Número de estudiantes inscritos en el programa
                    </p>
                    <textarea id="R9-2-3" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                    <br><br>

                    <p>Explique de qué manera se garantiza que el equipo de cómputo requerido esté disponible para la realización de las prácticas en las asignaturas del programa que así lo requieran:
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
                    <div class="btnListo"><button>Guardar</button></div>
                </div>


                <div class="preguntasCategoria" id="SC_9.2.4">
                    <p >9.2.4 Se  debe contar con un número suficiente de computadoras que estén disponibles y accesibles para los estudiantes del programa en función el número de horas de infraestructura de cómputo requeridas por el Plan de Estudios.
                    </p>

                    <p >Proporcionar la siguiente información
                    </p>

                    <p >Horas requeridas por el plan de estudiosen un período</p>
                    <textarea id="R9-2-4" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

                    <p >Horas disponibles de infraestructura de cómputo
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
                    <div class="btnListo"><button>Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="SC_9.2.5">
                    <p >9.2.5 Se debe contar con al menos tres plataformas de cómputo diferentes que estén disponibles y accesibles para los estudiantes y el personal docente del programa.
                    </p>

                    <p >Describir los tipos de plataformas de cómputo disponibles para los estudiantes y  el personal docente del programa:
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
                    <div class="btnListo"><button>Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="SC_9.2.6">
                    <p >9.2.6 Se debe contar con capacidades de impresión adecuadas para los estudiantes y profesores del programa.
                    </p>

                    <p >El programa académico debe garantizar el servicio de impresión en aquellos espacios físicos que la institución haya dispuesto para apoyo al estudiante.
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
                    <div class="btnListo"><button>Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="SC_9.2.7">
                    <p >9.2.7 Debe contarse con al menos una red de área local y una amplia, con  software adecuado para las aplicaciones más comunes del programa.
                    </p>

                    <p >El programa académico debe garantizar el servicio de red en aquellos espacios físicos que la institución haya dispuesto para apoyo al estudiante.
                    </p>

                    <p >El equipo de cómputo de la Institución ¿está conectado en red? .
                    </p>
                    <div class="opcMult">
                        <select name="select" id="RS9-2-7A1" onchange="mostrarInput(this)">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                        <p>En caso afirmativo, diga:</p>
                        <p >a) Qué equipo de cómputo (servidores y clientes) soporta la red y cuáles son sus características?
                        </p>
                        <textarea id="R9-2-7" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                    <br><br>



                    <p >b)¿Hay acceso a Internet a través de la red?
                    </p>
                    <div class="opcMult">
                        <select name="select" id="RS9-2-7A2" onchange="mostrarInput(this)">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>

                    <br><br>

                    <p >Para profesores
                    </p>
                    <div class="opcMult">
                        <select name="select" id="RS9-2-7A3" onchange="mostrarInput(this)">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>

                    <br><br>

                    <p >Para estudiantes
                    </p>
                    <div class="opcMult">
                        <select name="select" id="RS9-2-7A4" onchange="mostrarInput(this)">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>

                    <br><br>

                    <p >c) En caso afirmativo a la pregunta anterior ¿cuál es el tiempo promedio disponible para cada estudiante a Internet por semana?
                    </p>
                    <textarea id="R9-2-7A1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

                    <br><br>

                    <p >d) ¿Con qué paquetes de software se cuenta en la red académica de la institución para apoyo del programa que se evalúa?
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
                    <div class="btnListo"><button>Guardar</button></div>
                </div>


                <div class="preguntasCategoria" id="SC_9.2.8">
                    <p>9.2.8 Deberá haber facilidades de acceso al uso del equipo y manuales, horarios amplios y flexibles para atender la demanda, así como personal capacitado de soporte.  El equipo deberá contar con buen mantenimiento y planes de adecuación a cambios tecnológicos
                    </p>

                    <p >Describir la documentación para los sistemas de hardware y software disponibles para los estudiantes y profesores Explicar cómo los estudiantes y profesores tienen acceso adecuado a la documentación, así como el horario en que está disponible.
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
                    <div class="btnListo"><button>Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="SC_9.2.9">
                    <p >9.2.9 Los Servicios de Cómputo deben ser funcionales y contar con un programa de mantenimiento adecuado.
                    </p>

                    <p >Deben garantizarse los servicios de cómputo al menos en aquellos espacios destinados como apoyo para estudiantes y facilitadores o profesores
                    </p>

                    <p >Los horarios de servicio en que se prestan los servicios de cómputo son los siguientes:
                    </p>
                    <textarea id="R9-2-9" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

                    <p >Si hay personal de apoyo indicar en cada caso la cantidad, horarios y funciones que tienen.
                    </p>
                    <textarea id="R9-2-9A1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

                    <br><br>

                    <p >¿Qué tipo de personal está disponible para instalar, mantener y administrar el hardware, software y redes de la institución?
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
                    <div class="btnListo"><button>Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="SC_9.2.10">
                    <p >9.2.10 Los Servicios de Cómputo deben contar con reglamentos que garanticen su buen funcionamiento y que estén a disponibilidad de los usuarios.
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

                    <p>Favor de proporcionar una copia del mismo.</p>
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
                    <div class="btnListo"><button>Guardar</button></div>
                </div>


                <div class="preguntasCategoria" id="SC_9.2.11">
                    <p >9.2.11 Los profesores del programa deben contar con equipo de cómputo que les permita desempeñar adecuadamente su función. En el caso de los profesores de tiempo completo, estos deberán contar con una computadora para su uso exclusivo.
                    </p>

                    <p >Describir las facilidades de cómputo disponibles para los profesores del programa. Incluir los recursos de este tipo disponibles para las oficinas del personal académico.
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
                    <div class="btnListo"><button>Guardar</button></div>
                </div>

                
                <div class="preguntasCategoria" id="SC_9.2.12">
                    <p >9.2.12 Los Servicios de Cómputo deben contar con el soporte técnico adecuado.
                    </p>

                    <p >¿Existen técnicos de administración de sistemas de tiempo completo? ¿Participan estudiantes en el apoyo a las actividades de soporte técnico?
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
                    <div class="btnListo"><button>Guardar</button></div>
                </div>


                <div class="preguntasCategoria" id="SC_9.2.13">
                    <p >9.2.13 Es necesario que existan registros y estadísticas referentes al uso del equipo de cómputo, para determinar índices de utilización e indicadores sobre la calidad del servicio.
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

                    <p >En caso afirmativo indicar el número de usuarios en promedio diario atendidos en los tres últimos períodos escolares
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
                    <div class="btnListo"><button>Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="SC_9.2.14">
                    <p >9.2.14 Específicamente, el personal técnico, es suficiente y cuenta con el perfil adecuado para dar soporte, no solo a la infraestructura de telecomunicaciones y redes, sino también para el desarrollo de aplicaciones, incorporación de tecnologías emergentes, administración y hospedaje, desarrollo web, minería de datos, soluciones inteligentes, reingeniería de procesos mediante el uso de las TIC y la administración de la propia plataforma tecnológica y de aprendizaje que soporta el modelo educativo, ya sea a distancia o presencial.
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
                    <div class="btnListo"><button>Guardar</button></div>
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


