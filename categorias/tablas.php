<?php
if (isset($_GET['claveSubcriterio'])) {
    $claveSubcriterio = $_GET['claveSubcriterio'];

    include "../conexionDB/conexion.php";
    conecta();

    // Verifica la conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Consulta para obtener los PDFs desde la base de datos
    $sql = "SELECT id, nombrePDF, clavePDF FROM subcriteriospdf WHERE claveSubCriterio='$claveSubcriterio'";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        // Comienza a construir la tabla
        echo "<table class='tablaspdf'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Nombre del PDF</th>";
        echo "<th>Clave PDF</th>";
        echo "<th>Opciones</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        while ($fila = $resultado->fetch_assoc()) {
            $pdfName = $fila["nombrePDF"];
            $pdfId = $fila["id"];
            $pdfClave = $fila["clavePDF"];

            echo "<tr>";
            echo "<td>$pdfName</td>";
            echo "<td>$pdfClave</td>";
            echo "<td>";

            echo "<div class='contenidoIcons'>";
            echo "<a href='abrir_pdf.php?clavePDF=$pdfClave' target='_blank'>";
            echo "<i class='fa-solid fa-up-right-from-square'></i>";
            echo "</a>";
            echo "  ";
            echo "<a href='pdfs/$pdfClave' download>";
            echo "<i class='fa-solid fa-download'></i>";
            echo "</a>";
            echo "  ";
            echo "<a href='eliminar_pdf.php?clavePDF=$pdfClave' target='_blank' class='eliminar-pdf' data-clave-pdf='$pdfClave'>";
            echo "<i class='fa-solid fa-trash'></i>";
            echo "</a>";
            echo "</div>";

            echo "</td>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";

    } else {
        echo "<table class='tablaspdf'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Nombre del PDF</th>";
        echo "<th>Clave PDF</th>";
        echo "<th>Opciones</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        echo "<tr><td colspan='2'>No se encontraron PDF en la base de datos.</td><td></td></tr> ";
    }

    $conexion->close();
}
else{
    echo "no hay clave de sub";
}
?>
