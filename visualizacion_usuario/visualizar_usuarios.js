window.addEventListener("load", function () {
    // Obtener referencia al campo de búsqueda
    var inputBusqueda = document.getElementById("busqueda");

    // Obtener todas las filas de la tabla
    var filas = document.querySelectorAll(".tabla .fila");

    // Agregar un evento de escucha para el evento "input"
    inputBusqueda.addEventListener("input", function () {
        // Obtener el texto de búsqueda
        var textoBusqueda = inputBusqueda.value.trim().toLowerCase();

        // Recorrer todas las filas y mostrar u ocultar según la coincidencia de texto
        filas.forEach(function (fila) {
            var correo = fila.getAttribute("data-correo").toLowerCase();
            if (correo.includes(textoBusqueda)) {
                fila.style.display = ""; // Mostrar la fila
                console.log("Correo coincidente: " + correo); // Imprimir en la consola
            } else {
                fila.style.display = "none"; // Ocultar la fila
            }
        });
    });
});

  