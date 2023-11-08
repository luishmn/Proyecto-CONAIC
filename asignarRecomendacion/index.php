<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <div id="formularioContainer" class="">
        <form class="from-login" action="registrarUsuarioBD.php" id="formularioRegistro" method="post">
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
                                    $nombre = strlen($row['nombre']) > 50 ? substr($row['nombre'], 0, 50) . "..." : $row['nombre'];
                                    $opcion = "<option value='" . $row['claveSubCriterio'] . "'>" . $row['claveSubCriterio'] . '-' . $nombre . "</option>";
                                    if (preg_match("/^(10|[1-9])\./", $row['claveSubCriterio'])) {
                                        // Categorías del 1 al 10
                                        $categorias10[] = $opcion;
                                    } else {
                                        // Cualquier otra categoría
                                        $categorias[] = $opcion;
                                    }
                                }

                                // Ordenar las categorías del 1 al 10 alfanuméricamente
                                usort($categorias10, 'strnatcmp');
                                // Ordenar el resto de categorías alfanuméricamente
                                usort($categorias, 'strnatcmp');

                                // Imprimir las categorías del 1 al 10
                                echo implode('', $categorias10);
                                // Imprimir las demás categorías
                                echo implode('', $categorias);
                            }
                            $conexion->close();
                            ?>
                        </select>
                    </div>
                </div>
            </div>

            <br>
            <label for "recomendacion" class="form_label">Recomendación:</label>
            <textarea name="recomendacion" id="recomendacion" cols="30" rows="10" class="form-textarea"></textarea>
            
            <br><br>
            <div class="form_c10_1">
                <button type="submit" id="asignar">Asignar recomendación</button>
            </div>
        </form>
    </div>
    

</body>
</html>
