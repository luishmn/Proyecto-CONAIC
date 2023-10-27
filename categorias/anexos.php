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
    <title>Anexos</title>
    <link rel="stylesheet" href="autoevaluacion.css">
    <script src="enviarConsulta.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">


    <script>


        $(document).ready(function() {
            $.ajax({
                type: "GET",
                url: "recuperar_respuestasAnexos.php",
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
        });

        $(document).ready(function() {
        $("#guardarRespuesta1").click(function() {
            var id1 = "RA1";
            var respuesta1 = $("#RA1").val();

            var arreglo = [id1,respuesta1];
            BDatos(arreglo)

        });

        $("#guardarRespuesta2").click(function() {
            var id1 = "RA2";
            var respuesta1 = $("#RA2").val();
            var arreglo = [id1,respuesta1];
            BDatos(arreglo)

        });

        $("#guardarRespuesta3").click(function() {
            var id1 = "RA3";
            var respuesta1 = $("#RA3").val();
            var id2 = "RA3-A1";
            var respuesta2 = $("#RA3-A1").val();
            var id3 = "RA3-A2";
            var respuesta3 = $("#RA3-A2").val();
            var id4 = "RA3-A3";
            var respuesta4 = $("#RA3-A3").val();

            var arreglo = [id1,respuesta1,id2,respuesta2,id3,respuesta3,id4,respuesta4];
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
                        alert("Respuestas guardadas con éxito");
                        console.log(response);
                    }
                });

            }



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
            <div class="titulo_categoria">Anexos</div>

            <div>
                <div class="parrafo" id="11.1">
                    <p>
                        ANEXO 1
                    </p>
                </div>
                <div class="preguntasCategoria" id="SC_11.1.1">
                    <p>Estudiantes que aprobaron el EGEL-CENEVAL
                     </p>
                    <input type="text" id="RA1" placeholder="Escribe tu respuesta aquí...">
                    <!-- <img src="" alt=""><button>Guardar</button> -->
                    <br><br>
                    <div class="Listo">
                        <img src="/imagenes/pdf.png" alt="">
                        <button>Seleccionar archivos</button>
                        <!-- <button>Cargar</button>  -->
                    </div>
                    <div class="btnListo"><button id="guardarRespuesta1">Guardar</button></div>
                </div>

            <div>
                <div class="parrafo" id="11.2">
                    <p>
                        ANEXO 2
                    </p>
                </div>
                <div class="preguntasCategoria" id="SC_11.2.1">
                    <p>Estructura Financiera de la Facultad, Escuela, División o Departamento
                    </p>
                    <input type="text" id="RA2" placeholder="Escribe tu respuesta aquí...">
                    <!-- <img src="" alt=""><button>Guardar</button> -->
                    <br><br>
                    <div class="Listo">
                        <img src="/imagenes/pdf.png" alt="">
                        <button>Seleccionar archivos</button>
                        <!-- <button>Cargar</button>  -->
                    </div>
                    <div class="btnListo"><button id="guardarRespuesta2">Guardar</button></div>
            
            </div>

            <div>
                <div class="parrafo" id="11.3">
                    <p>
                        ANEXO 3
                    </p>
                </div>
                <div class="preguntasCategoria" id="SC_11.3.1">
                    <p>Nota: Llenar sólo en caso de re-acreditación.                    </p>
                    <input type="text" id="RA3" placeholder="Escribe tu respuesta aquí...">
                    <p>Seguimiento de Recomendaciones</p>
                    <input type="text"  id="RA3-A1" placeholder="Escribe tu respuesta aquí...">
                    <p>Recomendaciones al programa académico</p>
                    <input type="text" id="RA3-A2" placeholder="Escribe tu respuesta aquí...">
                    <p>El anexo 3 relativo a las recomendaciones es para el instrumento que se utilice en la visita de campo.
                    </p>
                    <input type="text" id="RA3-A3" placeholder="Escribe tu respuesta aquí...">
                    <!-- <img src="" alt=""><button>Guardar</button> -->
                    <br><br>
                    <div class="Listo">
                        <img src="/imagenes/pdf.png" alt="">
                        <button>Seleccionar archivos</button>
                        <!-- <button>Cargar</button>  -->
                    </div>
                    <div class="btnListo"><button id="guardarRespuesta3">Guardar</button></div>
                </div>
            </div>


        </div>
    </div>
</body>

</html>