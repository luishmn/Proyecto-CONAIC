<?php
// Carpeta donde se encuentran los PDFs
$carpeta_pdfs = "pdfs/";

// Obtener la clavePDF desde la URL
$clavePDF = $_GET['clavePDF'];

// Ruta al PDF en la carpeta
$ruta_del_pdf = $carpeta_pdfs . $clavePDF;

// Verificacion de la existencia del archivo pdf 
if (file_exists($ruta_del_pdf)) {
    // Mostrar el archivo PDF en el navegador
    header('Content-type: application/pdf');
    header('Content-Disposition: inline; filename="' . $clavePDF . '"');
    readfile($ruta_del_pdf);
} else {
    // El archivo PDF no se encontró en la carpeta
    echo "El archivo PDF no se encuentra en la carpeta 'pdfs'.";
    
}
?>


