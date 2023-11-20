<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generar Exel</title>
    <style>
        body {
            background: #D4E1E3;
        }
        

        #logoFondo {
            position: relative;
            width: 100%;
            height: 150px;
            flex-shrink: 0;

        }

        #imgLogoFondo {
            position: relative;
            bottom: -300;
            right: -70%;
            width: 30%;
            height: 230%;
        }

        #imgLogoLetrasFondo {
            position: absolute;
            top: -20%;
            left: 0%;
            width: 25%;
            height: 30%;
            z-index: -1;
        }
        #imagenCuadroDialogo{
            width: 10%;
            height: 20%;
            position: absolute;
            right: 45%;

        }
    </style>
</head>

<body>
    <div id="logoFondo">
        <!-- ESTE ES EL DIV QUE TIENE EL LOGO QUE APARECE AL FONDO, CUBRE TODA LA PANTALLA ASI QUE POR ESO DENTRO DE EL SE PONEN OTROS ELEMENTOS -->




        
        <!--logo superior-->
        <nav class="nav">
            
                <img src="../imagenes/logo_CONAIC_letras.png" alt="Conaic ITSZaS" class="logo_letras" width="336"
                    height="198">
            
        </nav>
        <br><br><br>

        <img src="../imagenes/logo_Fondo.png" id="imgLogoFondo">

       





</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    Swal.fire({
        icon: 'success',
        title: 'Generando Exel',
        text: 'La descarga de tu documento comenzara en breve',
        confirmButtonColor: '#197B7A'
    })
</script>


    <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $fechaDictamen = $_POST["inicio1"];
    $numeroReporte = $_POST["inicio2"];

    echo "<div id='fec'>$fechaDictamen</div>";
    echo "<div id='num'>$numeroReporte</div>";

include "../conexionDB/conexion.php";
conecta();

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

$sql = "SELECT claveRecomendacion, descripcion, respuesta, fechaInicio, fechaTermino, archivo FROM Recomendaciones";
$result = $conexion->query($sql);

// Definir categorías posibles
$categoriasPosibles = range(1, 10);

if ($result->num_rows > 0) {
    // Analizar los resultados y actualizar el arreglo de resultados
    $resultados = array();
    while ($row = $result->fetch_assoc()) {
        $categoria = (int) explode('.', $row['claveRecomendacion'])[0]; // Obtener la categoría de la clave
        $resultados[] = $row;
        // Eliminar la categoría actual de las categorías posibles
        $key = array_search($categoria, $categoriasPosibles);
        if ($key !== false) {
            unset($categoriasPosibles[$key]);
        }
    }

    // Agregar automáticamente las categorías ausentes
    foreach ($categoriasPosibles as $categoria) {
        $resultados[] = array(
            'claveRecomendacion' => $categoria . ".0.0",
            'descripcion' => 'Sin observaciones',
            'respuesta' => '',
            'fechaInicio' => '',
            'fechaTermino' => '',
            'archivo' => ''
        );
    }

    // Ordenar los resultados por categoría
    usort($resultados, function ($a, $b) {
        $categoriaA = (int) explode('.', $a['claveRecomendacion'])[0];
        $categoriaB = (int) explode('.', $b['claveRecomendacion'])[0];
        return $categoriaA - $categoriaB;
    });

    // Imprimir la tabla actualizada
    echo "<table border='1' id='tablaDatos'>
            <tr>
                <th>Clave Recomendación</th>
                <th>Descripción</th>
                <th>Respuesta</th>
                <th>Fecha de Inicio</th>
                <th>Fecha de Término</th>
                <th>Archivo</th>
            </tr>";

    foreach ($resultados as $row) {
        echo "<tr>
                <td>{$row['claveRecomendacion']}</td>
                <td>{$row['descripcion']}</td>
                <td>{$row['respuesta']}</td>
                <td>{$row['fechaInicio']}</td>
                <td>{$row['fechaTermino']}</td>
                <td>{$row['archivo']}</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "No se encontraron resultados.";
}

// Cerrar la conexión
$conexion->close();
}
?>


    
</body>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/exceljs/dist/exceljs.min.js"></script>
<script src="generador.js"></script>

</html>
