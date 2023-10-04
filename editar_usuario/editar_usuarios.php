<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "conaic";
$correo = "luis55@hotmail.com";

// Conectar nuevamente a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del registro seleccionado
$sql_usuario = "SELECT * FROM usuario WHERE correo = '$correo'";
$result_usuario = $conn->query($sql_usuario);

if ($result_usuario->num_rows > 0) {
    $row = $result_usuario->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Registro de Alumno</title>
    <link rel="stylesheet" type="text/css" href="editarusuariosD.css">
</head>
<body>
        
        <form class="from-login" action="guardarmodificacion.php" method="post" >

            <h1 class="centrar">Editar Usuarios</h1>
            <br>

            <div class="contenedor">
                <div class="form_c1">
                    <div class="form_group">
                        <input type="text" id="nombre" class="form_input" placeholder=" " name="nombre" required  value="<?php echo $row["nombre"]; ?>">
                        <label for="nombre" class="form_label">Nombre:</label>
                    </div>
                </div>
                <div class="form_c2">
                    <div class="form_group">
                        <input type="text" id="apellidoP" class="form_input" placeholder=" " name="apellidoP" required value="<?php echo $row["apellidoPat"]; ?>">
                        <label for="apellidoP" class="form_label">Apellido Paterno:</label>
                    </div>
                </div>
                <div class="form_c3">           
                    <div class="form_group">
                        <input type="text" id="apellidoM" class="form_input" placeholder=" " name="apellidoM" required  value="<?php echo $row["apellidoMat"]; ?>">
                        <label for="apellidoM" class="form_label">Apellido Materno:</label>
                    </div>
                </div> 
            </div>
            
            <br><br><br><br>
            
            <div class="contenedor">
                <div class="form_c4">
                    <div class="form_group">
                        <input type="text" id="cargo" class="form_input" placeholder=" " name="cargo" required value="<?php echo $row["cargo"]; ?>">
                        <label for="cargo" class="form_label">Cargo Desempeñado:</label>
                    </div>
                </div>

                <?php
        if ($row["tipo"] == 0) {
            echo    "<div class='form_c9'>";
            echo    "<select name='tipoUsuario' id='tipoUsuario' class='form_input' required>";
            echo    "<option value='normal'>Usuario Normal</option>";
            echo    "<option value='admin'>Usuario Administrador</option></select></div>";

        } else {
            echo    "<div class='form_c9'>";
            echo    "<select name='tipoUsuario' id='tipoUsuario' class='form_input' required>";
            echo    "<option value='admin'>Usuario Administrador</option>";
            echo "<option value='normal'>Usuario Normal</option></select></div>";
        }
        ?>
                

            </div>
    
            <br><br><br><br>
            
            <div class="form_c5">
                <div class="form_group">
                    <input type="email" id="correo" class="form_input" placeholder=" " name="correo" required value="<?php echo $row["correo"]; ?>" readonly>
                    <label for="correo" class="form_label">Correo Electronico:</label>
                </div>
            </div>

            <br><br><br><br>

            <div class="contenedor">
                <div class="form_c6">
                    <div class="form_group">
                        <input type="password" id="contrasena" class="form_input" placeholder=" " placeholder="Solo caracteres Numericos" name="contrasena"  pattern=".{8,}" required value="<?php echo $row["contrasena"]; ?>" >
                        <label for="contrasena" class="form_label">Contraseña:</label>
                    </div>
                </div>
                
                <div class="form_c7">
                    <div class="form_group">
                        <input type="password" id="contrasenaV" class="form_input" placeholder=" " name="contrasenaV" required value="<?php echo $row["contrasena"]; ?>">
                        <label for="contrasenaV" class="form_label">Confirmar Contraseña:</label>
                    </div>
                </div>

                <div class="form_c8">
                    <button id="verpassword" disabled><img src="../imagenes/verPassword.png" alt="" id="ojo"></button>
                    <script src="verpassword.js"></script>
                </div>
            </div>

            <br><br><br><br>
            
            <div  class="form_c10">
            <button type="submit" id="modificar" >Modificar</button>
            </div>

        </form>
</body>
</html>
<?php
} else {
    echo "No se encontraron registros para el correo seleccionado.";
}

$conn->close();
?>