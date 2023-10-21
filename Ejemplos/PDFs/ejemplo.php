<!DOCTYPE html>
<html>
<head>
    <title>Mostrar PDFs</title>
    <style>
        /* Estilo para la ventana modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
        }
        .modal-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 20px;
        }
        /* Estilo para el botón de cierre */
        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }
        /* Estilo para la miniatura de PDF */
        .pdf-thumbnail {
            width: 200px;
            height: 150px;
            overflow: hidden;
            border: 1px solid #ccc;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>PDFs Disponibles</h1>

    <?php
    // Conexión a la base de datos (reemplaza con tus credenciales)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "conaic";

    $conexion = new mysqli($servername, $username, $password, $dbname);

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Ruta de la carpeta que contiene los archivos PDF
    $pdfFolder = 'pdfs';

    // Ruta de la carpeta para las miniaturas
    $thumbnailFolder = 'thumbnails';

    // Consulta para obtener los nombres de los PDFs
    $sql = "SELECT clavePDF FROM subcriteriospdf";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            $nombre_pdf = $fila["clavePDF"];
            $pdfPath = "$pdfFolder/$nombre_pdf";
            $thumbnailPath = "$thumbnailFolder/$nombre_pdf.jpg";
            
            // Genera una miniatura si aún no existe
            if (!file_exists($thumbnailPath)) {
                generateThumbnail($pdfPath, $thumbnailPath);
            }

            echo "<div class='pdf-thumbnail' onclick='openModal(\"$pdfPath\");'><img src='$thumbnailPath' alt='$nombre_pdf'></div>";
        }
    } else {
        echo "No se encontraron PDFs en la base de datos.";
    }

    $conexion->close();

    // Función para generar una miniatura de PDF utilizando Imagick
    function generateThumbnail($pdfPath, $thumbnailPath) {
        if (extension_loaded('imagick')) {
            try {
                $imagick = new Imagick();
                $imagick->readImage("$pdfPath[0]");  // Lee solo la primera página del PDF

                $imagick->setImageFormat('jpg');
                $imagick->writeImage($thumbnailPath);
                $imagick->clear();
                $imagick->destroy();
            } catch (Exception $e) {
                echo 'Error al generar miniatura: ' . $e->getMessage();
            }
        }
    }
    ?>

    <!-- Ventana modal para previsualizar PDF -->
    <div id="pdfModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <iframe id="pdfFrame" width="100%" height="600"></iframe>
        </div>
    </div>

    <script>
        // Función para abrir la ventana modal con el PDF
        function openModal(pdfURL) {
            var modal = document.getElementById("pdfModal");
            var pdfFrame = document.getElementById("pdfFrame");
            pdfFrame.src = pdfURL;
            modal.style.display = "block";
        }

        // Función para cerrar la ventana modal
        function closeModal() {
            var modal = document.getElementById("pdfModal");
            modal.style.display = "none";
        }
    </script>
</body>
</html>
