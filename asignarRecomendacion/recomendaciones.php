
<?php
    // Datos de conexión a la base de datos
    include "../conexionDB/conexion.php";
    conecta();

    // Verifica la conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }


    // Variable que deseas buscar
    $claveRecomendacion = "1.5.3";

    // Consulta SQL para buscar la información
    $query = "SELECT descripcion, respuesta, fechaInicio, fechaTermino FROM recomendaciones WHERE ClaveRecomendacion = '$claveRecomendacion'";
    $result = $conexion->query($query);

    // Verificar si se encontraron resultados
    if ($result->num_rows > 0) {
        // Recuperar el resultado
        $row = $result->fetch_assoc();
        $descripcion = $row["descripcion"];
        $Ress = $row["respuesta"];
        $inic1= $row["fechaInicio"];
        $final1= $row["fechaTermino"];

    } else {
        $descripcion = "No se encontraron resultados para la clave de recomendación: " . $claveRecomendacion;
    }
    

    // Cerrar la conexión a la base de datos
    $conexion->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recomendaciones</title>
    <link rel="stylesheet" href="cssRecomendaciones.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    
</head>

<body>
     <div id="formularioContainerEditar"></div>  <!--class="oculto" -->

        <!-- Contenido de tu formulario aquí -->
        <form class="from-login">

            <h1 class="centrar">Responder recomedación</h1>
            <br>

            <div class="form_group">
            <p><?php echo $descripcion; ?></p>
            <script>
                var $desc = "<?php echo $descripcion; ?>";
                var $clave = "<?php echo $claveRecomendacion; ?>";

            </script>

                <textarea name="respuesta" id="respuesta_text" rows="5" placeholder="Escriba su respuesta aqui..."><?php echo $Ress; ?></textarea>
            </div>

            <br>
            <div class="fechas">
                <div class="inicio">
                    <p>Fecha de inicio</p>
                    <input type="date" class="form-control" id="inicio1" value="<?php echo $inic1; ?>">
                </div>
                <div class="fin">
                    <p>Fecha de fin</p>
                    <input type="date" class="form-control" id="fin2" value="<?php echo $final1; ?>">
                </div>
            </div>
            
            <br>
            <!-- AQUÍ COMIENZA LA PARTE DE LOS PDF -->
            <div class="pdfs-options">
                <div class="imgpdfs">
                    <p>
                        <i class="fa-solid fa-file-lines"></i>                    
                    </p>
                </div>
            
                <div class="Listo">
                    <!--Boton-->
                    <div class="botonesPDFSgroup">
            
                        <div class="boton-modal1">
                            <button class="botonSubirPDF" id="botonSubir-2.2.1"><i class="fas fa-upload"></i> Subir Docuemento</button>
                            <br><br>
                        </div>
                    </div>   
                </div>
            </div>
            <!-- AQUI TERMINA LA PARTE DE LOS PDF -->
            
            <div class="btnListo"><button id="guardarRespuesta20">Guardar</button></div>

            <br>
            <div>
    </form>
</div>

<div id="fondoOscuro" class="oculto"></div>

</body>
</html>

 <!-- Ventanas emergentes de los PDF Copiar -->


</body>

</html>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('guardarRespuesta20').addEventListener('click', function() {
        event.preventDefault(); // Esto detiene la acción predeterminada del formulario
        // Capturar los valores de los campos
        var respuesta = document.getElementById('respuesta_text').value;
        var inicio = document.getElementById('inicio1').value;
        var fin = document.getElementById('fin2').value;

        console.log($desc);
        console.log(respuesta);
        console.log(inicio);
        console.log(fin);
        console.log($clave);


        var fechaInicio = new Date(inicio);
        var fechaFin = new Date(fin);
        var diferenciaAnios = fechaFin.getFullYear() - fechaInicio.getFullYear();

        // Verificar si la fecha de inicio es mayor que la fecha final
        
        var band=0
        if (respuesta.trim() === '') {
            Swal.fire({
                    title: 'Por favor, responda el apartado',
                    icon: 'error',
                    confirmButtonText: 'Cerrar',
                    confirmButtonColor: '#197B7A' 
                })
        } else if (inicio.trim() === '') {
            Swal.fire({
                    title: 'Por favor, seleccione fecha de inicio',
                    icon: 'error',
                    confirmButtonText: 'Cerrar',
                    confirmButtonColor: '#197B7A' 
                })
        } else if (fin.trim() === ''){
            Swal.fire({
                    title: 'Por favor, seleccione fecha de fin',
                    icon: 'error',
                    confirmButtonText: 'Cerrar',
                    confirmButtonColor: '#197B7A' 
                })
        }
        else {

            // Verificar si la fecha de inicio es mayor que la fecha final
            var band = 0;
            if (fechaInicio > fechaFin) {
                Swal.fire({
                    title: 'Por favor, seleccione fecha valida',
                    text: 'La fecha de inicio no puede ser mayor a la fecha final',
                    icon: 'error',
                    confirmButtonText: 'Cerrar',
                    confirmButtonColor: '#197B7A' 
                })
                band = 1;
            }

            // Verificar si la diferencia de años es mayor a 5
            if (diferenciaAnios > 5) {
                Swal.fire({
                    title: 'Por favor, seleccione fecha valida',
                    text: 'La diferencia entre la fecha de inicio y la fecha final no puede ser mayor a 5 años',
                    icon: 'error',
                    confirmButtonText: 'Cerrar',
                    confirmButtonColor: '#197B7A' 
                })
                band = 1;
            }

            if (band == 0) {
                aGuardar(respuesta, inicio, fin);
                Swal.fire({
                    title: 'Guardado correctamente',
                    icon: 'success',
                    confirmButtonText: 'Cerrar',
                    confirmButtonColor: '#197B7A' 
                })
            }
        }


    function aGuardar(respuesta, inicio, fin) {
        $.ajax({
            type: 'POST',
            url: 'GuardaInfo.php',
            data: { respuesta: respuesta, inicio: inicio, fin: fin, idd: $clave,},
            success: function(response) {
                console.log("si se pudooooo");
            },
            error: function(error) {
                // Manejar errores si los hay
                console.log(error);
            }
        });
    }



    });
});
</script>




