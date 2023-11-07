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
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $nombre = strlen($row['nombre']) > 50 ? substr($row['nombre'], 0, 50) . "..." : $row['nombre'];
                                    echo "<option value='" . $row['claveSubCriterio'] . "'>" . $row['claveSubCriterio'] . '-' . $nombre . "</option>";
                                }
                            }
                            $conexion->close();
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <label for="recomendacion" class="form_label">Recomendación:</label><br><br>
            <textarea name="recomendacion" id="recomendacion" cols="30" rows="10" class="form-textarea"></textarea>
            <div class="form_c10_1">
                <button type="submit" id="registrar">Asignar recomendación</button>
            </div>
        </form>
    </div>
    
    <script>
        var elements = document.body.children;
        var reversedElements = [];
        for (var i = elements.length - 1; i >= 0; i--) {
            reversedElements.push(elements[i]);
        }
        for (var i = 0; i < reversedElements.length; i++) {
            document.body.appendChild(reversedElements[i]);
        }
    </script>
</body>
</html>
