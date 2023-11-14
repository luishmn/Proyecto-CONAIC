<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignar Recomendación</title>
    <link rel="stylesheet" href="css.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
    <div id="formularioContainer" class="">
        <form class="from-login" action="guardar.php" id="formularioRegistro" method="post">
            <h1 class="centrar">Asignar recomendación</h1>
            <br>
            <div class="contenedor">
                <div class="form_c1">
                    <div class="form_group">
                        <label for="subcriterioSelect" class="form_label">Seleccione subcriterio:</label>
                        <select name="subcriterioSelect" id="subcriterioSelect">
                            <?php
                            // Conecta a la base de datos (reemplaza los valores de conexión según tu configuración)
                            include "../conexionDB/conexion.php";
                            conecta();

                            // Verifica la conexión
                            if ($conexion->connect_error) {
                                die("Error de conexión: " . $conexion->connect_error);
                            }

                            // Consulta para obtener las opciones desde la base de datos
                            $sql = "SELECT claveSubCriterio, nombre FROM subcriterio";
                            $result = $conexion->query($sql);
                            $categorias = array(); // Para almacenar todas las categorías
                            $categorias10 = array(); // Para almacenar categorías del 1 al 10

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $nombre = mb_substr($row['nombre'], 0, 50, 'UTF-8') . (mb_strlen($row['nombre'], 'UTF-8') > 50 ? "..." : '');
                                    $opcion = "<option value='" . $row['claveSubCriterio'] . "'>" . $row['claveSubCriterio'] . '-' . $nombre . "</option>";

                                    if (preg_match("/^(10|[1-9])\./", $row['claveSubCriterio'])) {
                                        // Categorías del 1 al 10
                                        $categorias10[] = $opcion;
                                    } else {
                                        // Cualquier otra categoría
                                        $categorias[] = $opcion;
                                    }
                                }

                                usort($categorias10, 'strnatcmp');
                                usort($categorias, 'strnatcmp');
                                echo implode('', $categorias10);
                                echo implode('', $categorias);
                            }

                            $conexion->close();
                            ?>
                        </select>
                    </div>
                </div>
            </div>

            <br>
            <label for="recomendacion" class="form_label">Recomendación:</label>
            <textarea name="recomendacion" id="recomendacion" cols="30" rows="10" class="form-textarea"></textarea>
            
            <br><br>
            <div class="form_c10_1">
                <button type="button" id="asignar">Asignar recomendación</button>
            </div>
        </form>

        <script>
            $(document).ready(function(){
                $('#subcriterioSelect').change(function(){
                    var subcriterioSeleccionado = $(this).val();

                    // Realizar la solicitud AJAX para obtener la descripción
                    $.ajax({
                        type: 'POST',
                        url: 'obtener_descripcion.php', // Reemplaza con la ruta correcta a tu archivo PHP
                        data: { subcriterio: subcriterioSeleccionado },
                        success: function(response){
                            // Llenar el textarea con la descripción obtenida
                            $('#recomendacion').val(response);
                        },
                        error: function(error){
                            console.log(error);
                        }
                    });
                });

                $('#asignar').click(function(){
                    $('#formularioRegistro').submit();
                });
            });
        </script>
    </div>
</body>
</html>
