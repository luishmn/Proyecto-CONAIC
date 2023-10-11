<?php
function conecta(){


global $conexion;
$conexion= new mysqli("localhost", "root", "", "conaic")or die ("Could not connect to mysql".mysqli_error($conexion));
}
?>