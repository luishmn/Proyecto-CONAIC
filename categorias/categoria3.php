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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        

        $(document).ready(function() {
            $.ajax({
                type: "GET",
                url: "recuperar_respuestas4.php",
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
                    var id1 = "R3-1-1";
                    var respuesta1 = $("#R3-1-1").val();

                    var id2 = "RS3-1-1A1";
                    var respuesta2 = $("#RS3-1-1A1").val();

                    var id3 = "R3-1-1A1";
                    var respuesta3 = $("#R3-1-1A1").val();

                    var id4 = "R3-1-1A2";
                    var respuesta4 = $("#R3-1-1A2").val();

                    var id5 = "R3-1-1A3";
                    var respuesta5 = $("#R3-1-1A3").val();

                    var id6 = "R3-1-1A4";
                    var respuesta6 = $("#R3-1-1A4").val();

                    var arreglo = [id1,respuesta1,id2,respuesta2,id3,respuesta3,id4,respuesta4,id5,respuesta5,id6,respuesta6];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta2").click(function() {
                    var id1 = "RS3-1-2A1";
                    var respuesta1 = $("#RS3-1-2A1").val();

                    var id2 = "R3-1-2";
                    var respuesta2 = $("#R3-1-2").val();

                    var arreglo = [id1,respuesta1,id2,respuesta2];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta3").click(function() {
                    var id1 = "RS3-2-1A1";
                    var respuesta1 = $("#RS3-2-1A1").val();

                    var id2 = "RS3-2-1A2";
                    var respuesta2 = $("#RS3-2-1A2").val();

                    var id3 = "RS3-2-1A3";
                    var respuesta3 = $("#RS3-2-1A3").val();

                    var arreglo = [id1,respuesta1,id2,respuesta2,id3,respuesta3];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta4").click(function() {
                    var id1 = "R3-2-2";
                    var respuesta1 = $("#R3-2-2").val();

                    var id2 = "R3-2-3";
                    var respuesta2 = $("#R3-2-3").val();

                    var arreglo = [id1,respuesta1,id2,respuesta2];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta5").click(function() {
                    var id1 = "RS3-3-1A1";
                    var respuesta1 = $("#RS3-3-1A1").val();

                    var arreglo = [id1,respuesta1];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta6").click(function() {
                    var id1 = "R3-4-1";
                    var respuesta1 = $("#R3-4-1").val();

                    var arreglo = [id1,respuesta1];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta7").click(function() {
                    var id1 = "RS3-5-1A1";
                    var respuesta1 = $("#RS3-5-1A1").val();

                    var id2 = "RS3-5-1A2";
                    var respuesta2 = $("#RS3-5-1A2").val();

                    var id3 = "RS3-5-1A3";
                    var respuesta3 = $("#RS3-5-1A3").val();

                    var id4 = "R3-5-1";
                    var respuesta4 = $("#R3-5-1").val();

                    var id5 = "RS3-5-1A4";
                    var respuesta5 = $("#RS3-5-1A4").val();

                    var id6 = "R3-5-1A1";
                    var respuesta6 = $("#R3-5-1A1").val();

                    var id7 = "R3-5-1A2";
                    var respuesta7 = $("#R3-5-1A2").val();

                    var arreglo = [id1,respuesta1,id2,respuesta2,id3,respuesta3,id4,respuesta4,id5,respuesta5,id6,respuesta6,id7,respuesta7];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta8").click(function() {
                    var id1 = "R3-5-2";
                    var respuesta1 = $("#R3-5-2").val();

                    var id2 = "R3-5-2A1";
                    var respuesta2 = $("#R3-5-2A1").val();

                    var id3 = "R3-5-2A2";
                    var respuesta3 = $("#R3-5-2A2").val();

                    var arreglo = [id1,respuesta1,id2,respuesta2,id3,respuesta3];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta9").click(function() {
                    var id1 = "R3-5-3";
                    var respuesta1 = $("#R3-5-3").val();

                    var arreglo = [id1,respuesta1];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta10").click(function() {
                    var id1 = "R3-6-1";
                    var respuesta1 = $("#R3-6-1").val();

                    var arreglo = [id1,respuesta1];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta11").click(function() {
                    var id1 = "R3-7-1";
                    var respuesta1 = $("#R3-7-1").val();

                    var arreglo = [id1,respuesta1];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta12").click(function() {
                    var id1 = "R3-7-2";
                    var respuesta1 = $("#R3-7-2").val();

                    var id2 = "R3-7-2A1";
                    var respuesta2 = $("#R3-7-2A1").val();

                    var arreglo = [id1,respuesta1,id2,respuesta2];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta13").click(function() {
                    var id1 = "RS3-7-3A1";
                    var respuesta1 = $("#RS3-7-3A1").val();

                    var id2 = "R3-7-3";
                    var respuesta2 = $("#R3-7-3").val();

                    var id3 = "RS3-7-3A2";
                    var respuesta3 = $("#RS3-7-3A2").val();

                    var id4 = "R3-7-3A1";
                    var respuesta4 = $("#R3-7-3A1").val();

                    var id5 = "RS3-7-3A3";
                    var respuesta5 = $("#RS3-7-3A3").val();

                    var arreglo = [id1,respuesta1,id2,respuesta2,id3,respuesta3,id4,respuesta4,id5,respuesta5];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta14").click(function() {
                    var id1 = "RS3-7-4A1";
                    var respuesta1 = $("#RS3-7-4A1").val();

                    var id2 = "R3-7-4";
                    var respuesta2 = $("#R3-7-4").val();

                    var arreglo = [id1,respuesta1,id2,respuesta2];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta15").click(function() {
                    var id1 = "RS3-8-1A1";
                    var respuesta1 = $("#RS3-8-1A1").val();

                    var arreglo = [id1,respuesta1];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta16").click(function() {
                    var id1 = "R3-8-2";
                    var respuesta1 = $("#R3-8-2").val();

                    var id2 = "RS3-8-2A1";
                    var respuesta2 = $("#RS3-8-2A1").val();

                    var id3 = "RS3-8-2A2";
                    var respuesta3 = $("#RS3-8-2A2").val();

                    var id4 = "RS3-8-2A3";
                    var respuesta4 = $("#RS3-8-2A3").val();

                    var id5 = "RS3-8-2A4";
                    var respuesta5 = $("#RS3-8-2A4").val();

                    var id6 = "RS3-8-2A5";
                    var respuesta6 = $("#RS3-8-2A5").val();

                    var id7 = "RS3-8-2A6";
                    var respuesta7 = $("#RS3-8-2A6").val();

                    var id8 = "RS3-8-2A7";
                    var respuesta8 = $("#RS3-8-2A7").val();

                    var id9 = "R3-8-2A1";
                    var respuesta9 = $("#R3-8-2A1").val();

                    var arreglo = [id1,respuesta1,id2,respuesta2,id3,respuesta3,id4,respuesta4,id5,respuesta5,id6,respuesta6,id7,respuesta7,id8,respuesta8,id9,respuesta9];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta17").click(function() {
                    var id1 = "RS3-8-3A1";
                    var respuesta1 = $("#RS3-8-3A1").val();

                    var id2 = "R3-8-3";
                    var respuesta2 = $("#R3-8-3").val();

                    var arreglo = [id1,respuesta1,id2,respuesta2];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta18").click(function() {
                    var id1 = "R3-9-1";
                    var respuesta1 = $("#R3-9-1").val();

                    var arreglo = [id1,respuesta1];
                    console.log(arreglo)
                    
                    BDatos(arreglo)
                });

                $("#guardarRespuesta19").click(function() {
                    var id1 = "R3-9-2";
                    var respuesta1 = $("#R3-9-2").val();

                    var arreglo = [id1,respuesta1];
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
                <textarea id="R3-1-1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                <p>¿Existe un documento que justifique la creación?</p>
                <div class="opcMult"°>
                    <select name="select" id="RS3-1-1A1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>

                <p>Los motivos por los cuales fue establecido el programa (porque y para que)</p>
                <textarea id="R3-1-1A1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                <p>Las razones a las cuales obedece actualmente el programa:</p>
                <textarea id="R3-1-1A2" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                <p>¿A qué demanda específica pretende satisfacer el programa?</p>
                <textarea id="R3-1-1A3" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                <p>¿Qué demanda específica satisface el programa?</p>
                <textarea id="R3-1-1A4" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                
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
                        <button class="botonSubirPDF" id="botonSubir-3.1.1"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-3.1.1"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                <div class="btnListo"><button id="guardarRespuesta1">Guardar</button></div>
           
                </div>

           



            <div class="preguntasCategoria" id="SC_3.1.2">
                <p>3.1.2 Es importante que exista congruencia con la misión, visión y objetivos institucionales, los objetivos del plan nacional de desarrollo (vigente) y educativo del país, así como con el objetivo de la educación superior.</p>
                <p>¿Está publicada la misión, visión y objetivos institucionales?</p>
                <div class="opcMult"°>
                    <select name="select" id="RS3-1-2A1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <p>En un párrafo justifique la congruencia entre la misión, visión y objetivos institucionales con el objetivo del programa y el objetivo de la educación superior.</p>
                <textarea id="R3-1-2" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
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
                        <button class="botonSubirPDF" id="botonSubir-3.1.2"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-3.1.2"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                <div class="btnListo"><button id="guardarRespuesta2">Guardar</button></div>
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
                    <select name="select" id="RS3-2-1A1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <p>¿En la documentación del programa se describe el perfil del egresado?</p>
                <div class="opcMult"°>
                    <select name="select" id="RS3-2-1A2">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <p>¿En la documentación del programa se describen los objetivos del programa?</p>
                <div class="opcMult"°>
                    <select name="select" id="RS3-2-1A3">
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
                        <button class="botonSubirPDF" id="botonSubir-3.2.1"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-3.2.1"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                <div class="btnListo"><button id="guardarRespuesta3">Guardar</button></div>
            </div>


            <div class="preguntasCategoria" id="SC_3.2.2">
                <p>3.2.2 Es importante que exista congruencia entre el perfil del egresado y el objetivo.</p>
                <textarea id="R3-2-2" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
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
                        <button class="botonSubirPDF" id="botonSubir-3.2.2"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-3.2.2"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                <div class="btnListo"><button id="guardarRespuesta4">Guardar</button></div>
            </div>


            <div class="preguntasCategoria" id="SC_3.2.3">
                <p>3.2.3 El objetivo debe ser congruente con los desarrollos presentes y futuros del área de conocimiento.</p>
                <textarea id="R3-2-3" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
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
                        <button class="botonSubirPDF" id="botonSubir-3.2.3"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-3.2.3"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                <div class="btnListo"><button id="guardarRespuesta5">Guardar</button></div>               
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
                    <select name="select" id="RS3-3-1A1">
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
                        <button class="botonSubirPDF" id="botonSubir-3.3.1"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-3.3.1"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                <div class="btnListo"><button id="guardarRespuesta6">Guardar</button></div>
                </div>
            </div>

            
            <div>
            <div class="parrafo" id="3.4">
                <p>3.4 Programas de asignaturas. Se deben calcular unidades de tiempo dedicadas a cada área del conocimiento del programa, atendiendo a dos clasificaciones: Una que es genérica y contempla 4 áreas: 1) Informática y Computación, 2) Matemáticas y Ciencias Básicas, 3) Ciencias Sociales, Humanidades y 4) Otras; y la otra que es específica del área de conocimiento de Informática y Computación y que contempla 8 áreas: 1) Interacción-Hombre-Máquina, 2) Tratamiento de Información, 3) Programación e Ingeniería de Software, 4) Software de Base, 5) Redes, 6) Arquitectura de Computadoras y 7) Entorno Social 8) Matemáticas.</p>
            </div>
            <div class="preguntasCategoria" id="SC_3.4.1">
                <p>3.4.1 Para poder comparar el contenido curricular de distintos programas, se hace referencia a Unidades de cada curso. Para efectos de equivalencia, una Unidad  equivale a 1 hora de Teoría frente a grupo, o bien a 3 horas de Práctica frente a grupo para Licenciatura y para el caso de Técnico Superior Universitario, la equivalencia es 2 horas de práctica frente a grupo.  El Comité reconoce que existen nuevos modelos pedagógicos donde los estudiantes realizan actividades de auto-estudio; en estos casos, la institución que busca la acreditación deberá de justificar la equivalencia utilizada para el número de Unidades.</p>
                <textarea id="R3-4-1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
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
                        <button class="botonSubirPDF" id="botonSubir-3.4.1"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-3.4.1"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                <div class="btnListo"><button id="guardarRespuesta7">Guardar</button></div>
                </div>
            </div>


            <div>
            <div class="parrafo" id="3.5">
                <p>3.5 Contenidos. Cada programa de asignatura debe contener la ubicación dentro del plan de estudios, el objetivo general, los objetivos de cada sección del curso, los temas por sección, las prácticas (en su caso), la bibliografía básica, los recursos necesarios, las horas de utilización de infraestructura de cómputo, la forma de evaluación, las horas de teoría y/o práctica y el equivalente en unidades, así como el perfil deseable del profesor (Posgrado y experiencia en la materia) para efecto de validar las respuestas 3.1 y 3.2.</p>
            </div>
            <div class="preguntasCategoria" id="SC_3.5.1">
                <p>3.5.1 Asignaturas del programa</p>
                <div class="opcMult"°>
                    <select name="select" id="RS3-5-1A1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div> 
                <p>¿Se entrega esta información al estudiante?</p>
                <div class="opcMult"°>
                    <select name="select" id="RS3-5-1A2">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div> 
                <p>¿Se cuenta con los programas sinópticos (condensados) de todas las asignaturas?</p>
                <div class="opcMult"°>
                    <select name="select" id="RS3-5-1A3">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div> 
                <p>En que porcentaje</p>
                <textarea id="R3-5-1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                
                <p>¿Se cuenta con los programas analíticos (detallados) de todas las asignaturas?</p>
                <div class="opcMult"°>
                    <select name="select" id="RS3-5-1A4">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div> 

                <p>En que porcentaje</p>
                <textarea id="R3-5-1A1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                
                <p>Con base en el total de los programas analíticos de las asignaturas del programa, indicar qué porcentaje de ellos mencionan expresamente:</p>
                <textarea id="R3-5-1A2" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
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
                        <button class="botonSubirPDF" id="botonSubir-3.5.1"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-3.5.1"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                <div class="btnListo"><button id="guardarRespuesta8">Guardar</button></div>
            </div>


            <div class="preguntasCategoria" id="SC_3.5.2">
                <p>3.5.2 En las asignaturas correspondientes a la especialidad están incluidos proyectos dirigidos a desarrollar la habilidad del estudiante para resolver problemas reales acordes a las necesidades tecnológicas del propio programa.</p>
                <textarea id="R3-5-2" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                <p>Indique en qué asignaturas del programa se elaboran proyectos dirigidos a desarrollar la habilidad del estudiante para resolver problemas reales acordes a las necesidades tecnológicas  del propio programa.</p>
                <textarea id="R3-5-2A1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                <p>Indique las materias optativas ofrecidas en los últimos tres años. Las unidades de la asignatura y las áreas debe considerarse en términos de la clasificación indicada en las respuestas 3.1 y 3.2.</p>
                <textarea id="R3-5-2A2" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
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
                        <button class="botonSubirPDF" id="botonSubir-3.5.2"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-3.5.2"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                <div class="btnListo"><button id="guardarRespuesta9">Guardar</button></div>
                </div>
            </div>



            <div class="preguntasCategoria" id="SC_3.5.3">
                <p>3.5.3 El plan de estudios debe considerar la elaboración de trabajo en equipo e interdisciplinario.</p>
                <p>Indique en qué asignaturas se elabora trabajo en equipo e interdisciplinario.</p>
                <textarea id="R3-5-3" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
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
                        <button class="botonSubirPDF" id="botonSubir-3.5.3"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-3.5.3"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                <div class="btnListo"><button id="guardarRespuesta10">Guardar</button></div>
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
                <textarea id="R3-6-1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                
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
                        <button class="botonSubirPDF" id="botonSubir-3.6.1"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-3.6.1"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                <div class="btnListo"><button id="guardarRespuesta11">Guardar</button></div>
                </div>
            </div>






            <div>
            <div class="parrafo" id="3.7">
                <p>3.7 Evaluación y actualización. El plan de estudios debe de ser revisado y actualizado periódicamente y deben existir los procedimientos oficiales permanentes para realizarlos, mismos que deben indicar a cuerpos colegiados, asesores, egresados e investigadores reconocidos.
                </p>
            </div>
            <div class="preguntasCategoria" id="SC_3.7.1">
                <p>3.7.1 El plan de estudios debe ser revisado y actualizado en su caso, al menos cada cinco años.</p>
                <textarea id="R3-7-1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
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
                        <button class="botonSubirPDF" id="botonSubir-3.7.1"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-3.7.1"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                <div class="btnListo"><button id="guardarRespuesta12">Guardar</button></div>
            </div>


            <div class="preguntasCategoria" id="SC_3.7.2">
                <p>3.7.2 Debe existir un procedimiento oficial y funcional,  para la revisión y actualización del plan de estudios. </p>
                <textarea id="R3-7-2" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                
                <p>¿Existe un procedimiento oficial  para la revisión del plan de estudios?</p>
                <textarea id="R3-7-2A1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                
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
                        <button class="botonSubirPDF" id="botonSubir-3.7.2"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-3.7.2"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                <div class="btnListo"><button id="guardarRespuesta13">Guardar</button></div>
            </div>

            <div class="preguntasCategoria" id="SC_3.7.3">
                <p>3.7.3 En los procesos de revisión y actualización deben participar los cuerpos colegiados, así como un grupo de asesores externos representantes del sector productivo, egresados en activo e  investigadores reconocidos.</p>
                <div class="opcMult"°>
                    <select name="select" id="RS3-7-3A1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div> 
                <p>¿De qué manera?</p>
                <textarea id="R3-7-3" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                
                <p>¿En la revisión y actualización del plan de estudios participan asesores externos y representantes del sector productivo?</p>
                <div class="opcMult"°>
                    <select name="select" id="RS3-7-3A2">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div> 
                <p>¿De qué manera?</p>
                <textarea id="R3-7-3A1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
               
                <p>¿En la revisión y actualización del plan de estudios participan egresados del programa?</p>
                <div class="opcMult"°>
                    <select name="select" id="RS3-7-3A3">
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
                        <button class="botonSubirPDF" id="botonSubir-3.7.3"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-3.7.3"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                <div class="btnListo"><button id="guardarRespuesta14">Guardar</button></div>
            </div>


            <div class="preguntasCategoria" id="SC_3.7.4">
                <p>3.7.4 Debe existir un procedimiento permanente de evaluación curricular.</p>
                <div class="opcMult"°>
                    <select name="select" id="RS3-7-4A1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div> 
                <p>Describa en qué consiste este procedimiento:</p>
                <textarea id="R3-7-4" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                
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
                        <button class="botonSubirPDF" id="botonSubir-3.7.4"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-3.7.4"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                <div class="btnListo"><button id="guardarRespuesta15">Guardar</button></div>
                </div>
            </div>

            <div>
            <div class="parrafo" id="3.8">
                <p>3.8 Difusión. Como parte fundamental del proceso enseñanza-aprendizaje, los programas actualizados de todas y cada una de las asignaturas que forman parte del plan de estudios, deben estar a disposición para su consulta por: profesores, estudiantes y el público en general.</p>
            </div>
            <div class="preguntasCategoria" id="SC_3.8.1">
                <p>3.8.1 ¿Los programas actualizados de todas las asignaturas del plan de estudios están a disposición para su consulta por parte de profesores, estudiantes y el público en general?</p>
                <div class="opcMult"°>
                    <select name="select" id="RS3-8-1A1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
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
                        <button class="botonSubirPDF" id="botonSubir-3.8.1"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-3.8.1"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                <div class="btnListo"><button id="guardarRespuesta16">Guardar</button></div>
            </div>


            <div class="preguntasCategoria" id="SC_3.8.2">
                <p>3.8.2 Indique cuáles de los siguientes aspectos se le da conocer al estudiante.</p>
                <p>Estructura del plan de estudios.</p>
                <textarea id="R3-8-2" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                
                <p>Objetivo.</p>
                <div class="opcMult"°>
                    <select name="select" id="RS3-8-2A1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div> 
                <p>Perfil</p>
                <div class="opcMult"°>
                    <select name="select" id="RS3-8-2A2">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div> 
                <p>Asignaturas</p>
                <div class="opcMult"°>
                    <select name="select" id="RS3-8-2A3">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div> 
                <p>Horas</p>
                <div class="opcMult"°>
                    <select name="select" id="RS3-8-2A4">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div> 
                <p>Duración</p>
                <div class="opcMult"°>
                    <select name="select" id="RS3-8-2A5">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div> 
                <p>Seriación</p>
                <div class="opcMult"°>
                    <select name="select" id="RS3-8-2A6">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div> 
                <p>Especialidad(es)</p>
                <div class="opcMult"°>
                    <select name="select" id="RS3-8-2A7">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div> 
                <p>Describa cómo se tiene acceso a la información de los programas:</p>
                <textarea id="R3-8-2A1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

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
                        <button class="botonSubirPDF" id="botonSubir-3.8.2"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-3.8.2"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                <div class="btnListo"><button id="guardarRespuesta17">Guardar</button></div>
                </div>
            </div>
            

            <div class="preguntasCategoria" id="SC_3.8.3">
                <p>3.8.3 Deben existir mecanismos para la promoción externa 
                    (visitas a planteles de nivel medio superior, trípticos, difusión 
                    en medios masivos de comunicación, etc.) del programa.</p>

                <p>¿Existen mecanismos para la promoción externa del programa?</p>
                <div class="opcMult"°>
                    <select name="select" id="RS3-8-3A1">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div> 

                <p>En caso afirmativo indique cuales son:</p>
                <textarea id="R3-8-3" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               

                <p>En caso afirmativo proporcione una copia o copias de los 
                    documentos (puedes subir más de un archivo).
                </p>


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
                        <button class="botonSubirPDF" id="botonSubir-3.8.3"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-3.8.3"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                <div class="btnListo"><button id="guardarRespuesta18">Guardar</button></div>
                </div>
            </div>

        
            <div>
            <div class="parrafo" id="3.9">
                <p>3.9 Justificación de las Competencias. Se deben analizar las competencias del programa a evaluar, considerando las competencias definidas por la ANIEI en su versión más actualizada, justificando el perfil A, B, C o D del modelo a través de una matriz.</p>
            </div>
            
            <div class="preguntasCategoria" id="SC_3.9.1">
                <p>3.9.1 Tabla de cumplimiento de competencias transversales. Considerar la definición y justificación competencias iniciales, de desarrollo y de evaluación.  Rellenar tabla competencias transversales. Etapa de planificación del modelo de competencias</p>
                <textarea id="R3-9-1" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
                
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
                        <button class="botonSubirPDF" id="botonSubir-3.9.1"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-3.9.1"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                <div class="btnListo"><button id="guardarRespuesta19">Guardar</button></div>
                </div>

                <div class="preguntasCategoria" id="SC_3.9.2">
                    <p>3.9.2. Tabla de cumplimiento de competencias específicas. Considerar la definición y justificación competencias iniciales, de desarrollo y de evaluación. Rellenar tabla competencias específicas. Etapa de planificación del modelo de competencias.</p>
                    <textarea id="R3-9-2" rows="5" placeholder="Escribe tu respuesta aquí..."></textarea>               
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
                        <button class="botonSubirPDF" id="botonSubir-3.9.2"><i class="fas fa-upload"></i> Subir PDF</button>
                        <br><br>
                        <button class ="botonesMostrarPDF" id="subcriterio-3.9.2"><i class="fas fa-eye"></i>Mostrar PDF</button>
                    </div>
                    </div>   
                    </div>
                    </div>
                    <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
                    <div class="btnListo"><button>Guardar</button></div>
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
                <button id="botonSubirChido" class="cargar-pdf" data-id="3.1.1">
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
document.getElementById("boton_cerrar1").addEventListener("click", function() {
    window.location.reload(false); // El valor "false" evita que se limpie la caché
});
</script>