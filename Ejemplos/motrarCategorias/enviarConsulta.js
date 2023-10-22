document.addEventListener('DOMContentLoaded', function() {
    // Llama a la función directamente al cargar la página
    consultarAsignadas();

    function consultarAsignadas() {
        //var correo = "oscar92623@gmail.com";
        var correo = correoUsuario;

        // Realiza la solicitud AJAX.
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'consultarAsignadas.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Actualiza el contenido del div 'resultado' en la página HTML con la respuesta del servidor.
                document.getElementById('resultado').innerHTML = xhr.responseText;
                //alert (xhr.responseText);
            }
        };
        xhr.send('nombreUsuario=' + correo);

        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    asignadas = xhr.responseText;
                    console.log(asignadas);
                    longitud =asignadas.length;
                
                    listaIDsAMostrar=[];

                    var idCad =""
                    for (var i=0; i < longitud; i++){
                        if (asignadas[i] === "[" || asignadas[i] ==="]" || asignadas[i] === '"'){
                            console.log("corchete");
                        }
                        else if (asignadas[i]===","){
                            listaIDsAMostrar.push(idCad);
                            idCad ="";
                        }
                        else{
                            idCad = idCad + asignadas[i];
                        }
                    }
                    listaIDsAMostrar.push(idCad);
                    idCad ="";

                    console.log(listaIDsAMostrar);



                    // Crear una nueva lista que contenga solo los números con un solo decimal
                    var segundaLista = listaIDsAMostrar.map(function(item) {
                        var partes = item.split("."); // Dividir la cadena en partes utilizando el punto como separador
                        return partes[0] + "." + partes[1]; // Unir las dos primeras partes
                    });

                    // Eliminar duplicados si es necesario
                    segundaLista = segundaLista.filter(function(item, index, self) {
                        return self.indexOf(item) === index;
                    });

                    console.log(segundaLista);


                    // Itera sobre los elementos y muestra u oculta según corresponda
                    var elementos = document.querySelectorAll('.preguntasCategoria'); // Selecciona todos los elementos con la clase 'preguntasCategoria'
                    elementos.forEach(function(elemento) {

                        var id = elemento.id;
                        //alert (lista);
                        if (listaIDsAMostrar.includes(id)) {
                            elemento.style.display = "block"; // Muestra el elemento
                        } else {
                            elemento.style.display = "none"; // Oculta el elemento
                        }
                    });

                   


                     // Itera sobre los elementos y muestra u oculta según corresponda
                     var elementos = document.querySelectorAll('.parrafo'); // Selecciona todos los elementos con la clase 'preguntasCategoria'
                     elementos.forEach(function(elemento) {
 
                         var id = elemento.id;
                         //alert (lista);
                         if (segundaLista.includes(id)) {
                             elemento.style.display = "block"; // Muestra el elemento
                         } else {
                             elemento.style.display = "none"; // Oculta el elemento
                         }
                     });



                } else {
                    console.error('Error en la solicitud: ' + xhr.status);
                }
            }


            

        };

        var elementosAMostrar = ["4.1.1"];

    
    }
});