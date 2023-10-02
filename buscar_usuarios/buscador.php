<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Buscar usuarios</title>

</head>
<body>

        <div class="barra-superior"><!-- ESTE ES EL DIV DE LA BARRA SUPERIOR -->
            <div class ="tituloPag">
                Visualizar usuarios
            </div>
        </div>
        
        <div class="barra-de-busqueda">
            <input type="text" id="buscador" placeholder="Buscar usuario">
        </div>
            

        <table id="resultados">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>


        <script>
        document.getElementById('buscador').addEventListener('input', function() {
            const query = this.value;
            if (query.length > 0) {
                fetch(`buscar_usuario.php?q=${query}`)
                    .then(response => response.json())
                    .then(data => {
                        const tbody = document.getElementById('resultados').querySelector('tbody');
                        tbody.innerHTML = '';
                        data.forEach(usuario => {
                            tbody.innerHTML += `
                                <tr>
                                    <td>${usuario.id}</td>
                                    <td>${usuario.nombre}</td>
                                    <td>${usuario.correo}</td>
                                    <td>
                                        <button onclick="modificarUsuario(${usuario.id})">Modificar</button>
                                        <button onclick="eliminarUsuario(${usuario.id})">Eliminar</button>
                                    </td>
                                </tr>
                            `;
                        });
                    });
            } else {
                document.getElementById('resultados').querySelector('tbody').innerHTML = '';
            }
        });


        </script>

</body>
</html>