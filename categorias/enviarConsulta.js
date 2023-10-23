document.addEventListener('DOMContentLoaded', function() {
    // Llama a la función directamente al cargar la página
    consultarAsignadas();

    function consultarAsignadas() {
        var enlaceInicio = document.getElementById("enviarInicio");
        var cuadroCate = document.querySelector(".cuadroCate");

        if (tipoUsuario === "0"){
            var nuevoEnlace = "../PrincipalUsuario/index.php"; // Cambia esto a tu URL deseada
            enlaceInicio.href = nuevoEnlace;
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

                            
                            if (idCad === "subanexo1"){
                                idCad = "11.1.1";
                            }
                            if (idCad === "subanexo2"){
                                idCad = "11.2.1";
                            }
                            if (idCad === "subanexo3"){
                                idCad = "11.3.1";
                            }
                            if (idCad === "i"){
                                idCad = "1.10.1";
                            }
                            if (idCad === "ii"){
                                idCad = "1.10.2";
                            }
                            if (idCad === "iii"){
                                idCad = "1.10.3";
                            }
                            if (idCad === "iv"){
                                idCad = "1.10.4";
                            }
                            if (idCad === "v"){
                                idCad = "1.10.5";
                            }

                            listaIDsAMostrar.push(idCad);
                            idCad ="";
                        }
                        else{
                            idCad = idCad + asignadas[i];
                        }
                    }

                    if (idCad === "subanexo1"){
                        idCad = "11.1.1";
                    }
                    if (idCad === "subanexo2"){
                        idCad = "11.2.1";
                    }
                    if (idCad === "subanexo3"){
                        idCad = "11.3.1";
                    }
                    if (idCad === "i"){
                        idCad = "1.10.1";
                    }
                    if (idCad === "ii"){
                        idCad = "1.10.2";
                    }
                    if (idCad === "iii"){
                        idCad = "1.10.3";
                    }
                    if (idCad === "iv"){
                        idCad = "1.10.4";
                    }
                    if (idCad === "v"){
                        idCad = "1.10.5";
                    }

                    listaIDsAMostrar.push(idCad);
                    idCad ="";

                    console.log(listaIDsAMostrar);

                    listaID_SC=[]
                    for (var i=0; i < listaIDsAMostrar.length; i++){
                        listaID_SC.push("SC_"+listaIDsAMostrar[i]);
                    }
                    console.log(listaID_SC);



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



                    // Crear una tercera lista con los números enteros (sin decimales)
                    var terceraLista = segundaLista.map(function(item) {
                        return String(parseInt(item)); // Convertir la cadena a un número entero
                    });

                    console.log(terceraLista);
                    



                    // Itera sobre los elementos y muestra u oculta según corresponda
                    var elementos = document.querySelectorAll('.preguntasCategoria'); // Selecciona todos los elementos con la clase 'preguntasCategoria'
                    elementos.forEach(function(elemento) {

                        var id = elemento.id;
                        //alert (lista);
                        if (listaID_SC.includes(id)) {
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




                     // Itera sobre los elementos y muestra u oculta según corresponda
                     var elementos = document.querySelectorAll('.elemetosMenuLateral'); // Selecciona todos los elementos con la clase 'preguntasCategoria'
                     elementos.forEach(function(elemento) {
 
                         var id = elemento.id;
                         //alert (lista);
                         if (terceraLista.includes(id)) {
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
    else{
        var nuevoEnlace = "../PrincipalAdministrador/index.php"; // Cambia esto a tu URL deseada
            enlaceInicio.href = nuevoEnlace;
            cuadroCate.style.maxHeight = "100%";
    }
    }
});