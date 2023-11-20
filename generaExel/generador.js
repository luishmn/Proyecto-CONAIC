function editarExcel() {
    var fechaDiv = document.getElementById('fec').textContent;
    var numDiv = document.getElementById('num').textContent;

    var anoDictamen = parseInt(fechaDiv.substring(2, 4), 10);
    

    var rutapag = 'http://localhost:3000/asignarRecomendacion/abrirPDF.php?clavePDF=';
    var anos = [];
    //anos.push(anoDictamen);
    for (var i=0; i<=5; i++ ){
        anos.push(anoDictamen+i);
    }
    console.log(anos);

    var tabla = document.getElementById('tablaDatos');
    var filas = tabla.getElementsByTagName('tr');
    var nombresMeses = [
    "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
    "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
    ];

    var categoriasNames = ["1. Personal académico", "2. Estudiantes. ","3. Plan de Estudios","4. Evaluación del aprendizaje","5. Formación Integral","6. Servicios de apoyo al aprendizaje","7. Vinculación – Extensión ","8. Investigación","9. Infraestructura y equipamiento","10. Gestión administrativa y financiamiento"]

    var datosDescripcion = [];
    var datosRespuestas = [];
    var meses = [];
    var ano1 = [];
    var ano2 = [];
    var datosarchivos = [];
    var categorias = [];
    var subcriterios = [];

    
    for (var i = 1; i < filas.length; i++) {
        var celdas = filas[i].getElementsByTagName('td');
        var descripcion = celdas[1].innerText; // La segunda celda contiene la descripción
        var respuesta = celdas[2].innerText;
        datosDescripcion.push(descripcion);
        datosRespuestas.push(respuesta);

        var fechaCompleta = celdas[3].innerText;
        var fecha = new Date(fechaCompleta);
        var mes = ("" + (fecha.getMonth())).slice(-2);
        console.log("Mes:", nombresMeses[mes]); // Salida: "02"
        meses.push(nombresMeses[mes]);

        var year1 = ("" + (fecha.getYear())).slice(-2);
        console.log("Año 1:",year1); // Salida: "02"

        ano1.push(year1);

        var fechaCompleta = celdas[4].innerText;
        var fecha = new Date(fechaCompleta);

        var year2 = ("" + (fecha.getYear())).slice(-2);
        console.log("Año 2:",year2); // Salida: "02"

        ano2.push(year2);

        var arch = celdas[5].innerText;
        datosarchivos.push(arch);

        var cat = celdas[0].innerText;
        subcriterios.push(cat);
        var parteAntesDelPunto = cat.split('.')[0];
        categorias.push(parteAntesDelPunto)

        


    }


    var rutaArchivo = 'Libro1.xlsx';

            // Cargar el archivo Excel utilizando una URL
            fetch(rutaArchivo)
                .then(response => response.arrayBuffer())
                .then(data => {
                    // Crear un nuevo libro de trabajo
                    var workbook = new ExcelJS.Workbook();

                    // Cargar los datos del archivo Excel
                    return workbook.xlsx.load(data);
                })
                .then(workbook => {
                    // Realizar ediciones en el libro de trabajo (workbook) según tus necesidades
                    // Por ejemplo, modificar el valor en la celda A1
                    var worksheet = workbook.getWorksheet(1);

            cell = worksheet.getCell('K22');
            cell.value = "20"+anos[0]
            cell = worksheet.getCell('L22');
            cell.value = "20"+anos[1]
            cell = worksheet.getCell('M22');
            cell.value = "20"+anos[2]
            cell = worksheet.getCell('N22');
            cell.value = "20"+anos[3]
            cell = worksheet.getCell('O22');
            cell.value = "20"+anos[4]
            cell = worksheet.getCell('P22');
            cell.value = "20"+anos[5]

            var numRecs = datosDescripcion.length;
            var cell;
            for (i=0; i<numRecs; i++){
                // INSERTAR CATEGORIAS AL EXEL
                console.log(datosDescripcion[i]);

                var celda = 'A' + (i + 23);
                cell = worksheet.getCell(celda);
                cell.value = categoriasNames[categorias[i]-1];

                var celda1 = 'C' + (i + 23);

                var merge = celda + ":" + celda1;
                console.log(merge);
                console.log(celda);

                worksheet.mergeCells(merge);

                
                cell.alignment = {
                    horizontal: 'center',
                    vertical: 'middle',
                    wrapText: true,
                };

                cell.fill = {
                    type: 'pattern',
                    pattern: 'solid',
                    fgColor: { argb: 'FFFFFF' } // Código de color amarillo
                };
                cell.border = {
                    top: { style: 'thin' },    // Puedes ajustar el estilo según tus necesidades (thin, medium, thick, etc.)
                    left: { style: 'thin' },
                    bottom: { style: 'thin' },
                    right: { style: 'thin' }
                };

                
                // INSERTAR RECOMENDACIONES AL EXEL
                console.log(datosDescripcion[i]);
                if (datosDescripcion[i] == "Sin observaciones"){
                    var celda = 'D' + (i + 23);
                    cell = worksheet.getCell(celda);
                    cell.value =datosDescripcion[i];

                    var celda1 = 'F' + (i + 23);

                    var merge = celda + ":" + celda1;
                    console.log(merge);
                    console.log(celda);

                    worksheet.mergeCells(merge);

                    
                    cell.alignment = {
                        horizontal: 'center',
                        vertical: 'middle',
                        wrapText: true,
                    };
                }
                else{
                    var celda = 'D' + (i + 23);
                    cell = worksheet.getCell(celda);
                    cell.value = subcriterios[i]+" "+ datosDescripcion[i];

                    var celda1 = 'F' + (i + 23);

                    var merge = celda + ":" + celda1;
                    console.log(merge);
                    console.log(celda);

                    worksheet.mergeCells(merge);

                    
                    cell.alignment = {
                        horizontal: 'center',
                        vertical: 'middle',
                        wrapText: true,
                    };
                }
                cell.fill = {
                    type: 'pattern',
                    pattern: 'solid',
                    fgColor: { argb: 'FFFFFF' } // Código de color amarillo
                };
                cell.border = {
                    top: { style: 'thin' },    // Puedes ajustar el estilo según tus necesidades (thin, medium, thick, etc.)
                    left: { style: 'thin' },
                    bottom: { style: 'thin' },
                    right: { style: 'thin' }
                };


                // INSERTAR ATENDIDA SI/NO AL EXEL
                if (datosDescripcion[i] != "Sin observaciones"){
                    var celda = 'Q' + (i + 23);
                    cell = worksheet.getCell(celda);
                    cell.value = "SI";

                    var celda1 = 'T' + (i + 23);

                    var merge = celda + ":" + celda1;
                    console.log(merge);
                    console.log(celda);

                    worksheet.mergeCells(merge);

                    
                    cell.alignment = {
                        horizontal: 'center',
                        vertical: 'middle',
                        wrapText: true,
                    };
                }
                else{
                    var celda = 'Q' + (i + 23);
                    cell = worksheet.getCell(celda);
                    

                    var celda1 = 'T' + (i + 23);

                    var merge = celda + ":" + celda1;
                    console.log(merge);
                    console.log(celda);

                    worksheet.mergeCells(merge);

                    
                    cell.alignment = {
                        horizontal: 'center',
                        vertical: 'middle',
                        wrapText: true,
                    };
                }

                cell.fill = {
                    type: 'pattern',
                    pattern: 'solid',
                    fgColor: { argb: 'FFFFFF' } // Código de color amarillo
                };
                cell.border = {
                    top: { style: 'thin' },    // Puedes ajustar el estilo según tus necesidades (thin, medium, thick, etc.)
                    left: { style: 'thin' },
                    bottom: { style: 'thin' },
                    right: { style: 'thin' }
                };



                //INSERTAR RESPUESTAS AL EXEL
                console.log(datosRespuestas[i]);

                var celda = 'G'+(i+23);

                cell = worksheet.getCell(celda);
                cell.value = datosRespuestas[i];

                

                var celda1 = 'I'+(i+23);

                var merge = celda+":"+celda1;
                console.log(merge);
                console.log(celda);
                
                worksheet.mergeCells(merge);
                cell.alignment = {
                    horizontal: 'center',
                    vertical: 'middle',
                    wrapText: true,
                };

                cell.fill = {
                    type: 'pattern',
                    pattern: 'solid',
                    fgColor: { argb: 'FFFFFF' } // Código de color amarillo
                };
                cell.border = {
                    top: { style: 'thin' },    // Puedes ajustar el estilo según tus necesidades (thin, medium, thick, etc.)
                    left: { style: 'thin' },
                    bottom: { style: 'thin' },
                    right: { style: 'thin' }
                };
                


                //INSERTAR MES AL EXEL
                console.log(meses[i]);

                if (datosDescripcion[i] != "Sin observaciones"){
                    var celda = 'J'+(i+23);

                    cell = worksheet.getCell(celda);
                    cell.value = meses[i];

                    cell.alignment = {
                        horizontal: 'center',
                        vertical: 'middle',
                        wrapText: true,
                    };
                    cell.fill = {
                        type: 'pattern',
                        pattern: 'solid',
                        fgColor: { argb: 'FFFF00' } // Código de color amarillo
                    };
                }
                else{
                    var celda = 'J'+(i+23);

                    cell = worksheet.getCell(celda);

                    cell.fill = {
                        type: 'pattern',
                        pattern: 'solid',
                        fgColor: { argb: 'FFFFFF' } // Código de color amarillo
                    };
                    
                }
                
                cell.border = {
                    top: { style: 'thin' },    // Puedes ajustar el estilo según tus necesidades (thin, medium, thick, etc.)
                    left: { style: 'thin' },
                    bottom: { style: 'thin' },
                    right: { style: 'thin' }
                };

                

                //INSERTAR ARCHIVO AL EXEL
                console.log(meses[i]);

                var celda = 'U'+(i+23);

                cell = worksheet.getCell(celda);
                //cell.value = datosarchivos[i];
                // Agregar texto con hipervínculo
                var vinculo = rutapag+datosarchivos[i];
                if (datosarchivos[i] != ''){
                    cell.value = {
                        text: datosarchivos[i],
                        hyperlink: vinculo,  // Reemplaza con tu URL real
                        tooltip: 'Hacer clic para visitar',  // Puedes proporcionar un tooltip opcional
                    };
                    cell.font = {
                        color: { argb: '0000FF' }
                    };
                }

                cell.alignment = {
                    horizontal: 'center',
                    vertical: 'middle',
                    wrapText: true,
                };
                cell.fill = {
                    type: 'pattern',
                    pattern: 'solid',
                    fgColor: { argb: 'FFFFFF' } // Código de color amarillo
                };
                cell.border = {
                    top: { style: 'thin' },    // Puedes ajustar el estilo según tus necesidades (thin, medium, thick, etc.)
                    left: { style: 'thin' },
                    bottom: { style: 'thin' },
                    right: { style: 'thin' }
                };

                

                //INSERTAR LOS AÑOS EN QUE SE LLEVA A CABO EN EXEL
                var celda = 'K'+(i+23);
                cell = worksheet.getCell(celda);
                var cell = worksheet.getCell(celda);
                        cell.fill = {
                            type: 'pattern',
                            pattern: 'solid',
                            fgColor: { argb: 'FFFFFF' } // Código de color amarillo
                        };
                        cell.border = {
                            top: { style: 'thin' },    // Puedes ajustar el estilo según tus necesidades (thin, medium, thick, etc.)
                            left: { style: 'thin' },
                            bottom: { style: 'thin' },
                            right: { style: 'thin' }
                        };



                for (j = 0; j < 5; j++) {

                    if (ano1[i] - 1 <= anos[j]) {
                        var columna = String.fromCharCode('L'.charCodeAt(0) + j); // Convertir índice a letra de columna
                        var celda = columna + (i + 23);
                
                        console.log(celda);
                
                        //var cell = worksheet.getCell(celda);
                        //cell.value = i + 23;
                
                        var cell = worksheet.getCell(celda);
                        cell.fill = {
                            type: 'pattern',
                            pattern: 'solid',
                            fgColor: { argb: 'FFFF00' } // Código de color amarillo
                        };
                        cell.border = {
                            top: { style: 'thin' },    // Puedes ajustar el estilo según tus necesidades (thin, medium, thick, etc.)
                            left: { style: 'thin' },
                            bottom: { style: 'thin' },
                            right: { style: 'thin' }
                        };
                        
                    }
                    else{
                        var columna = String.fromCharCode('L'.charCodeAt(0) + j); // Convertir índice a letra de columna
                        var celda = columna + (i + 23);
                
                        console.log(celda);
                
                        //var cell = worksheet.getCell(celda);
                        //cell.value = i + 23;
                
                        var cell = worksheet.getCell(celda);
                        cell.fill = {
                            type: 'pattern',
                            pattern: 'solid',
                            fgColor: { argb: 'FFFFFF' } // Código de color amarillo
                        };
                        cell.border = {
                            top: { style: 'thin' },    // Puedes ajustar el estilo según tus necesidades (thin, medium, thick, etc.)
                            left: { style: 'thin' },
                            bottom: { style: 'thin' },
                            right: { style: 'thin' }
                        };
                        
                    }
                }

                if (datosDescripcion[i] == "Sin observaciones"){
                    var row = worksheet.getRow(i+23);

                    // Ajusta la altura de la fila
                    row.height = 30; // Ajusta el valor según tus necesidades

                }
            

                
            }


            var fecha = new Date(fechaDiv);

            // Obtener el día, mes y año
            var dia = fecha.getDate();
            var mes = fecha.toLocaleString('default', { month: 'long' }); // Obtener el nombre del mes
            var anio = fecha.getFullYear();

            // Construir la nueva cadena de fecha formateada
            var fechaFormateada = dia + " DE " + mes.toUpperCase() + " DE " + anio;
            var celda = 'A'+(18);

                    cell = worksheet.getCell(celda);
                    cell.value = fechaFormateada;

            var celda = 'F'+(18);

                    cell = worksheet.getCell(celda);
                    cell.value = "20"+anoDictamen+" AL 20"+(parseInt(anoDictamen,10)+5);

            var fechaActual = new Date();

            // Obtener los componentes de la fecha
            var dia = fechaActual.getDate();
            var mes = fechaActual.getMonth(); // Los meses empiezan desde 0, así que sumamos 1
            var nombresMeses = [
                "ENERO", "FEBRERO", "MARZO", "ABRIL", "MAYO", "JUNIO",
                "JULIO", "AGOSTO", "SEPTIEMBRE", "OCTUBRE", "NOVIEMBRE", "DICIEMBRE"
              ];
              
              // Obtener el nombre del mes
              var nombreMes = nombresMeses[mes];

            var anio = fechaActual.getFullYear();

            var fechaFormateada = dia + " DE " + nombreMes + " DE " + anio;
            var celda = 'J'+(18);

                    cell = worksheet.getCell(celda);
                    cell.value = fechaFormateada+" / 0"+numDiv;

            

            //
            // ------------------------------
            //

            var worksheet = workbook.getWorksheet(2);

            cell = worksheet.getCell('K22');
            cell.value = "20"+anos[0]
            cell = worksheet.getCell('L22');
            cell.value = "20"+anos[1]
            cell = worksheet.getCell('M22');
            cell.value = "20"+anos[2]
            cell = worksheet.getCell('N22');
            cell.value = "20"+anos[3]
            cell = worksheet.getCell('O22');
            cell.value = "20"+anos[4]
            cell = worksheet.getCell('P22');
            cell.value = "20"+anos[5]

            var numRecs = datosDescripcion.length;
            var cell;
            for (i=0; i<numRecs; i++){
                // INSERTAR CATEGORIAS AL EXEL
                console.log(datosDescripcion[i]);

                var celda = 'A' + (i + 23);
                cell = worksheet.getCell(celda);
                cell.value = categoriasNames[categorias[i]-1];

                var celda1 = 'C' + (i + 23);

                var merge = celda + ":" + celda1;
                console.log(merge);
                console.log(celda);

                worksheet.mergeCells(merge);

                
                cell.alignment = {
                    horizontal: 'center',
                    vertical: 'middle',
                    wrapText: true,
                };

                cell.fill = {
                    type: 'pattern',
                    pattern: 'solid',
                    fgColor: { argb: 'FFFFFF' } // Código de color amarillo
                };
                cell.border = {
                    top: { style: 'thin' },    // Puedes ajustar el estilo según tus necesidades (thin, medium, thick, etc.)
                    left: { style: 'thin' },
                    bottom: { style: 'thin' },
                    right: { style: 'thin' }
                };

                
                // INSERTAR RECOMENDACIONES AL EXEL
                console.log(datosDescripcion[i]);
                if (datosDescripcion[i] == "Sin observaciones"){
                    var celda = 'D' + (i + 23);
                    cell = worksheet.getCell(celda);
                    cell.value =datosDescripcion[i];

                    var celda1 = 'F' + (i + 23);

                    var merge = celda + ":" + celda1;
                    console.log(merge);
                    console.log(celda);

                    worksheet.mergeCells(merge);

                    
                    cell.alignment = {
                        horizontal: 'center',
                        vertical: 'middle',
                        wrapText: true,
                    };
                }
                else{
                    var celda = 'D' + (i + 23);
                    cell = worksheet.getCell(celda);
                    cell.value = subcriterios[i]+" "+ datosDescripcion[i];

                    var celda1 = 'F' + (i + 23);

                    var merge = celda + ":" + celda1;
                    console.log(merge);
                    console.log(celda);

                    worksheet.mergeCells(merge);

                    
                    cell.alignment = {
                        horizontal: 'center',
                        vertical: 'middle',
                        wrapText: true,
                    };
                }
                cell.fill = {
                    type: 'pattern',
                    pattern: 'solid',
                    fgColor: { argb: 'FFFFFF' } // Código de color amarillo
                };
                cell.border = {
                    top: { style: 'thin' },    // Puedes ajustar el estilo según tus necesidades (thin, medium, thick, etc.)
                    left: { style: 'thin' },
                    bottom: { style: 'thin' },
                    right: { style: 'thin' }
                };


                // INSERTAR ATENDIDA SI/NO AL EXEL
                if (datosDescripcion[i] != "Sin observaciones"){
                    var celda = 'Q' + (i + 23);
                    cell = worksheet.getCell(celda);
                    cell.value = "";

                    var celda1 = 'T' + (i + 23);

                    var merge = celda + ":" + celda1;
                    console.log(merge);
                    console.log(celda);

                    worksheet.mergeCells(merge);

                    
                    cell.alignment = {
                        horizontal: 'center',
                        vertical: 'middle',
                        wrapText: true,
                    };
                }
                else{
                    var celda = 'Q' + (i + 23);
                    cell = worksheet.getCell(celda);
                    

                    var celda1 = 'T' + (i + 23);

                    var merge = celda + ":" + celda1;
                    console.log(merge);
                    console.log(celda);

                    worksheet.mergeCells(merge);

                    
                    cell.alignment = {
                        horizontal: 'center',
                        vertical: 'middle',
                        wrapText: true,
                    };
                }

                cell.fill = {
                    type: 'pattern',
                    pattern: 'solid',
                    fgColor: { argb: 'FFFFFF' } // Código de color amarillo
                };
                cell.border = {
                    top: { style: 'thin' },    // Puedes ajustar el estilo según tus necesidades (thin, medium, thick, etc.)
                    left: { style: 'thin' },
                    bottom: { style: 'thin' },
                    right: { style: 'thin' }
                };



                //INSERTAR RESPUESTAS AL EXEL
                console.log(datosRespuestas[i]);

                var celda = 'G'+(i+23);

                cell = worksheet.getCell(celda);
                cell.value = datosRespuestas[i];

                

                var celda1 = 'I'+(i+23);

                var merge = celda+":"+celda1;
                console.log(merge);
                console.log(celda);
                
                worksheet.mergeCells(merge);
                cell.alignment = {
                    horizontal: 'center',
                    vertical: 'middle',
                    wrapText: true,
                };

                cell.fill = {
                    type: 'pattern',
                    pattern: 'solid',
                    fgColor: { argb: 'FFFFFF' } // Código de color amarillo
                };
                cell.border = {
                    top: { style: 'thin' },    // Puedes ajustar el estilo según tus necesidades (thin, medium, thick, etc.)
                    left: { style: 'thin' },
                    bottom: { style: 'thin' },
                    right: { style: 'thin' }
                };
                


                //INSERTAR MES AL EXEL
                console.log(meses[i]);

                if (datosDescripcion[i] != "Sin observaciones"){
                    var celda = 'J'+(i+23);

                    cell = worksheet.getCell(celda);
                    cell.value = meses[i];

                    cell.alignment = {
                        horizontal: 'center',
                        vertical: 'middle',
                        wrapText: true,
                    };
                    cell.fill = {
                        type: 'pattern',
                        pattern: 'solid',
                        fgColor: { argb: 'FFFF00' } // Código de color amarillo
                    };
                }
                else{
                    var celda = 'J'+(i+23);

                    cell = worksheet.getCell(celda);

                    cell.fill = {
                        type: 'pattern',
                        pattern: 'solid',
                        fgColor: { argb: 'FFFFFF' } // Código de color amarillo
                    };
                    
                }
                
                cell.border = {
                    top: { style: 'thin' },    // Puedes ajustar el estilo según tus necesidades (thin, medium, thick, etc.)
                    left: { style: 'thin' },
                    bottom: { style: 'thin' },
                    right: { style: 'thin' }
                };

                

                //INSERTAR ARCHIVO AL EXEL
                console.log(meses[i]);

                var celda = 'U'+(i+23);

                cell = worksheet.getCell(celda);
                //cell.value = datosarchivos[i];
                // Agregar texto con hipervínculo
                var vinculo = rutapag+datosarchivos[i];
                if (datosarchivos[i] != ''){
                    cell.value = {
                        text: datosarchivos[i],
                        hyperlink: vinculo,  // Reemplaza con tu URL real
                        tooltip: 'Hacer clic para visitar',  // Puedes proporcionar un tooltip opcional
                    };
                    cell.font = {
                        color: { argb: '0000FF' }
                    };
                }

                cell.alignment = {
                    horizontal: 'center',
                    vertical: 'middle',
                    wrapText: true,
                };
                cell.fill = {
                    type: 'pattern',
                    pattern: 'solid',
                    fgColor: { argb: 'FFFFFF' } // Código de color amarillo
                };
                cell.border = {
                    top: { style: 'thin' },    // Puedes ajustar el estilo según tus necesidades (thin, medium, thick, etc.)
                    left: { style: 'thin' },
                    bottom: { style: 'thin' },
                    right: { style: 'thin' }
                };

                

                //INSERTAR LOS AÑOS EN QUE SE LLEVA A CABO EN EXEL
                var celda = 'K'+(i+23);
                cell = worksheet.getCell(celda);
                var cell = worksheet.getCell(celda);
                        cell.fill = {
                            type: 'pattern',
                            pattern: 'solid',
                            fgColor: { argb: 'FFFFFF' } // Código de color amarillo
                        };
                        cell.border = {
                            top: { style: 'thin' },    // Puedes ajustar el estilo según tus necesidades (thin, medium, thick, etc.)
                            left: { style: 'thin' },
                            bottom: { style: 'thin' },
                            right: { style: 'thin' }
                        };



                for (j = 0; j < 4; j++) {

                    if (ano1[i] - 1 <= anos[j]) {
                        var columna = String.fromCharCode('L'.charCodeAt(0) + j); // Convertir índice a letra de columna
                        var celda = columna + (i + 23);
                
                        console.log(celda);
                
                        //var cell = worksheet.getCell(celda);
                        //cell.value = i + 23;
                
                        var cell = worksheet.getCell(celda);
                        cell.fill = {
                            type: 'pattern',
                            pattern: 'solid',
                            fgColor: { argb: 'FFFF00' } // Código de color amarillo
                        };
                        cell.border = {
                            top: { style: 'thin' },    // Puedes ajustar el estilo según tus necesidades (thin, medium, thick, etc.)
                            left: { style: 'thin' },
                            bottom: { style: 'thin' },
                            right: { style: 'thin' }
                        };
                        
                    }
                    else{
                        var columna = String.fromCharCode('L'.charCodeAt(0) + j); // Convertir índice a letra de columna
                        var celda = columna + (i + 23);
                
                        console.log(celda);
                
                        //var cell = worksheet.getCell(celda);
                        //cell.value = i + 23;
                
                        var cell = worksheet.getCell(celda);
                        cell.fill = {
                            type: 'pattern',
                            pattern: 'solid',
                            fgColor: { argb: 'FFFFFF' } // Código de color amarillo
                        };
                        cell.border = {
                            top: { style: 'thin' },    // Puedes ajustar el estilo según tus necesidades (thin, medium, thick, etc.)
                            left: { style: 'thin' },
                            bottom: { style: 'thin' },
                            right: { style: 'thin' }
                        };
                    }
                }

                if (datosDescripcion[i] == "Sin observaciones"){
                    var row = worksheet.getRow(i+23);

                    // Ajusta la altura de la fila
                    row.height = 30; // Ajusta el valor según tus necesidades

                }
              

                
            }

            var fecha = new Date(fechaDiv);

            // Obtener el día, mes y año
            var dia = fecha.getDate();
            var mes = fecha.toLocaleString('default', { month: 'long' }); // Obtener el nombre del mes
            var anio = fecha.getFullYear();

            // Construir la nueva cadena de fecha formateada
            var fechaFormateada = dia + " DE " + mes.toUpperCase() + " DE " + anio;
            var celda = 'A'+(18);

                    cell = worksheet.getCell(celda);
                    cell.value = fechaFormateada;

            var celda = 'F'+(18);

                    cell = worksheet.getCell(celda);
                    cell.value = "20"+anoDictamen+" AL 20"+(parseInt(anoDictamen,10)+5);

            var fechaActual = new Date();

            // Obtener los componentes de la fecha
            var dia = fechaActual.getDate();
            var mes = fechaActual.getMonth(); // Los meses empiezan desde 0, así que sumamos 1
            var nombresMeses = [
                "ENERO", "FEBRERO", "MARZO", "ABRIL", "MAYO", "JUNIO",
                "JULIO", "AGOSTO", "SEPTIEMBRE", "OCTUBRE", "NOVIEMBRE", "DICIEMBRE"
              ];
              
              // Obtener el nombre del mes
              var nombreMes = nombresMeses[mes];

            var anio = fechaActual.getFullYear();

            var fechaFormateada = dia + " DE " + nombreMes + " DE " + anio;
            var celda = 'J'+(18);

                    cell = worksheet.getCell(celda);
                    cell.value = fechaFormateada+" / 0"+numDiv;
           


             //
            // ------------------------------
            //

            var worksheet = workbook.getWorksheet(3);

            cell = worksheet.getCell('K22');
            cell.value = "20"+anos[0]
            cell = worksheet.getCell('L22');
            cell.value = "20"+anos[1]
            cell = worksheet.getCell('M22');
            cell.value = "20"+anos[2]
            cell = worksheet.getCell('N22');
            cell.value = "20"+anos[3]
            cell = worksheet.getCell('O22');
            cell.value = "20"+anos[4]
            cell = worksheet.getCell('P22');
            cell.value = "20"+anos[5]

            var numRecs = datosDescripcion.length;
            var cell;
            for (i=0; i<numRecs; i++){
                // INSERTAR CATEGORIAS AL EXEL
                console.log(datosDescripcion[i]);

                var celda = 'A' + (i + 23);
                cell = worksheet.getCell(celda);
                cell.value = categoriasNames[categorias[i]-1];

                var celda1 = 'C' + (i + 23);

                var merge = celda + ":" + celda1;
                console.log(merge);
                console.log(celda);

                worksheet.mergeCells(merge);

                
                cell.alignment = {
                    horizontal: 'center',
                    vertical: 'middle',
                    wrapText: true,
                };

                cell.fill = {
                    type: 'pattern',
                    pattern: 'solid',
                    fgColor: { argb: 'FFFFFF' } // Código de color amarillo
                };
                cell.border = {
                    top: { style: 'thin' },    // Puedes ajustar el estilo según tus necesidades (thin, medium, thick, etc.)
                    left: { style: 'thin' },
                    bottom: { style: 'thin' },
                    right: { style: 'thin' }
                };

                
                // INSERTAR RECOMENDACIONES AL EXEL
                console.log(datosDescripcion[i]);
                if (datosDescripcion[i] == "Sin observaciones"){
                    var celda = 'D' + (i + 23);
                    cell = worksheet.getCell(celda);
                    cell.value =datosDescripcion[i];

                    var celda1 = 'F' + (i + 23);

                    var merge = celda + ":" + celda1;
                    console.log(merge);
                    console.log(celda);

                    worksheet.mergeCells(merge);

                    
                    cell.alignment = {
                        horizontal: 'center',
                        vertical: 'middle',
                        wrapText: true,
                    };
                }
                else{
                    var celda = 'D' + (i + 23);
                    cell = worksheet.getCell(celda);
                    cell.value = subcriterios[i]+" "+ datosDescripcion[i];

                    var celda1 = 'F' + (i + 23);

                    var merge = celda + ":" + celda1;
                    console.log(merge);
                    console.log(celda);

                    worksheet.mergeCells(merge);

                    
                    cell.alignment = {
                        horizontal: 'center',
                        vertical: 'middle',
                        wrapText: true,
                    };
                }
                cell.fill = {
                    type: 'pattern',
                    pattern: 'solid',
                    fgColor: { argb: 'FFFFFF' } // Código de color amarillo
                };
                cell.border = {
                    top: { style: 'thin' },    // Puedes ajustar el estilo según tus necesidades (thin, medium, thick, etc.)
                    left: { style: 'thin' },
                    bottom: { style: 'thin' },
                    right: { style: 'thin' }
                };


                // INSERTAR ATENDIDA SI/NO AL EXEL
                if (datosDescripcion[i] != "Sin observaciones"){
                    var celda = 'Q' + (i + 23);
                    cell = worksheet.getCell(celda);
                    cell.value = "";

                    var celda1 = 'T' + (i + 23);

                    var merge = celda + ":" + celda1;
                    console.log(merge);
                    console.log(celda);

                    worksheet.mergeCells(merge);

                    
                    cell.alignment = {
                        horizontal: 'center',
                        vertical: 'middle',
                        wrapText: true,
                    };
                }
                else{
                    var celda = 'Q' + (i + 23);
                    cell = worksheet.getCell(celda);
                    

                    var celda1 = 'T' + (i + 23);

                    var merge = celda + ":" + celda1;
                    console.log(merge);
                    console.log(celda);

                    worksheet.mergeCells(merge);

                    
                    cell.alignment = {
                        horizontal: 'center',
                        vertical: 'middle',
                        wrapText: true,
                    };
                }

                cell.fill = {
                    type: 'pattern',
                    pattern: 'solid',
                    fgColor: { argb: 'FFFFFF' } // Código de color amarillo
                };
                cell.border = {
                    top: { style: 'thin' },    // Puedes ajustar el estilo según tus necesidades (thin, medium, thick, etc.)
                    left: { style: 'thin' },
                    bottom: { style: 'thin' },
                    right: { style: 'thin' }
                };



                //INSERTAR RESPUESTAS AL EXEL
                console.log(datosRespuestas[i]);

                var celda = 'G'+(i+23);

                cell = worksheet.getCell(celda);
                cell.value = datosRespuestas[i];

                

                var celda1 = 'I'+(i+23);

                var merge = celda+":"+celda1;
                console.log(merge);
                console.log(celda);
                
                worksheet.mergeCells(merge);
                cell.alignment = {
                    horizontal: 'center',
                    vertical: 'middle',
                    wrapText: true,
                };

                cell.fill = {
                    type: 'pattern',
                    pattern: 'solid',
                    fgColor: { argb: 'FFFFFF' } // Código de color amarillo
                };
                cell.border = {
                    top: { style: 'thin' },    // Puedes ajustar el estilo según tus necesidades (thin, medium, thick, etc.)
                    left: { style: 'thin' },
                    bottom: { style: 'thin' },
                    right: { style: 'thin' }
                };
                


                //INSERTAR MES AL EXEL
                console.log(meses[i]);

                if (datosDescripcion[i] != "Sin observaciones"){
                    var celda = 'J'+(i+23);

                    cell = worksheet.getCell(celda);
                    cell.value = meses[i];

                    cell.alignment = {
                        horizontal: 'center',
                        vertical: 'middle',
                        wrapText: true,
                    };
                    cell.fill = {
                        type: 'pattern',
                        pattern: 'solid',
                        fgColor: { argb: 'FFFF00' } // Código de color amarillo
                    };
                }
                else{
                    var celda = 'J'+(i+23);

                    cell = worksheet.getCell(celda);

                    cell.fill = {
                        type: 'pattern',
                        pattern: 'solid',
                        fgColor: { argb: 'FFFFFF' } // Código de color amarillo
                    };
                    
                }
                
                cell.border = {
                    top: { style: 'thin' },    // Puedes ajustar el estilo según tus necesidades (thin, medium, thick, etc.)
                    left: { style: 'thin' },
                    bottom: { style: 'thin' },
                    right: { style: 'thin' }
                };

                

                //INSERTAR ARCHIVO AL EXEL
                console.log(meses[i]);

                var celda = 'U'+(i+23);

                cell = worksheet.getCell(celda);
                //cell.value = datosarchivos[i];
                // Agregar texto con hipervínculo
                var vinculo = rutapag+datosarchivos[i];
                if (datosarchivos[i] != ''){
                    cell.value = {
                        text: datosarchivos[i],
                        hyperlink: vinculo,  // Reemplaza con tu URL real
                        tooltip: 'Hacer clic para visitar',  // Puedes proporcionar un tooltip opcional
                    };
                    cell.font = {
                        color: { argb: '0000FF' }
                    };
                }

                cell.alignment = {
                    horizontal: 'center',
                    vertical: 'middle',
                    wrapText: true,
                };
                cell.fill = {
                    type: 'pattern',
                    pattern: 'solid',
                    fgColor: { argb: 'FFFFFF' } // Código de color amarillo
                };
                cell.border = {
                    top: { style: 'thin' },    // Puedes ajustar el estilo según tus necesidades (thin, medium, thick, etc.)
                    left: { style: 'thin' },
                    bottom: { style: 'thin' },
                    right: { style: 'thin' }
                };

                

                //INSERTAR LOS AÑOS EN QUE SE LLEVA A CABO EN EXEL
                var celda = 'K'+(i+23);
                cell = worksheet.getCell(celda);
                var cell = worksheet.getCell(celda);
                        cell.fill = {
                            type: 'pattern',
                            pattern: 'solid',
                            fgColor: { argb: 'FFFFFF' } // Código de color amarillo
                        };
                        cell.border = {
                            top: { style: 'thin' },    // Puedes ajustar el estilo según tus necesidades (thin, medium, thick, etc.)
                            left: { style: 'thin' },
                            bottom: { style: 'thin' },
                            right: { style: 'thin' }
                        };



                for (j = 0; j < 3; j++) {

                    if (ano1[i] - 1 <= anos[j]) {
                        var columna = String.fromCharCode('L'.charCodeAt(0) + j); // Convertir índice a letra de columna
                        var celda = columna + (i + 23);
                
                        console.log(celda);
                
                        //var cell = worksheet.getCell(celda);
                        //cell.value = i + 23;
                
                        var cell = worksheet.getCell(celda);
                        cell.fill = {
                            type: 'pattern',
                            pattern: 'solid',
                            fgColor: { argb: 'FFFF00' } // Código de color amarillo
                        };
                        cell.border = {
                            top: { style: 'thin' },    // Puedes ajustar el estilo según tus necesidades (thin, medium, thick, etc.)
                            left: { style: 'thin' },
                            bottom: { style: 'thin' },
                            right: { style: 'thin' }
                        };
                        
                    }
                    else{
                        var columna = String.fromCharCode('L'.charCodeAt(0) + j); // Convertir índice a letra de columna
                        var celda = columna + (i + 23);
                
                        console.log(celda);
                
                        //var cell = worksheet.getCell(celda);
                        //cell.value = i + 23;
                
                        var cell = worksheet.getCell(celda);
                        cell.fill = {
                            type: 'pattern',
                            pattern: 'solid',
                            fgColor: { argb: 'FFFFFF' } // Código de color amarillo
                        };
                        cell.border = {
                            top: { style: 'thin' },    // Puedes ajustar el estilo según tus necesidades (thin, medium, thick, etc.)
                            left: { style: 'thin' },
                            bottom: { style: 'thin' },
                            right: { style: 'thin' }
                        };
                    }
                }

                if (datosDescripcion[i] == "Sin observaciones"){
                    var row = worksheet.getRow(i+23);

                    // Ajusta la altura de la fila
                    row.height = 30; // Ajusta el valor según tus necesidades

                }
              

                
            }

            var fecha = new Date(fechaDiv);

            // Obtener el día, mes y año
            var dia = fecha.getDate();
            var mes = fecha.toLocaleString('default', { month: 'long' }); // Obtener el nombre del mes
            var anio = fecha.getFullYear();

            // Construir la nueva cadena de fecha formateada
            var fechaFormateada = dia + " DE " + mes.toUpperCase() + " DE " + anio;
            var celda = 'A'+(18);

                    cell = worksheet.getCell(celda);
                    cell.value = fechaFormateada;

            var celda = 'F'+(18);

                    cell = worksheet.getCell(celda);
                    cell.value = "20"+anoDictamen+" AL 20"+(parseInt(anoDictamen,10)+5);

            var fechaActual = new Date();

            // Obtener los componentes de la fecha
            var dia = fechaActual.getDate();
            var mes = fechaActual.getMonth(); // Los meses empiezan desde 0, así que sumamos 1
            var nombresMeses = [
                "ENERO", "FEBRERO", "MARZO", "ABRIL", "MAYO", "JUNIO",
                "JULIO", "AGOSTO", "SEPTIEMBRE", "OCTUBRE", "NOVIEMBRE", "DICIEMBRE"
              ];
              
              // Obtener el nombre del mes
              var nombreMes = nombresMeses[mes];

            var anio = fechaActual.getFullYear();

            var fechaFormateada = dia + " DE " + nombreMes + " DE " + anio;
            var celda = 'J'+(18);

                    cell = worksheet.getCell(celda);
                    cell.value = fechaFormateada+" / 0"+numDiv;


             //
            // ------------------------------
            //

            var worksheet = workbook.getWorksheet(4);

            cell = worksheet.getCell('K22');
            cell.value = "20"+anos[0]
            cell = worksheet.getCell('L22');
            cell.value = "20"+anos[1]
            cell = worksheet.getCell('M22');
            cell.value = "20"+anos[2]
            cell = worksheet.getCell('N22');
            cell.value = "20"+anos[3]
            cell = worksheet.getCell('O22');
            cell.value = "20"+anos[4]
            cell = worksheet.getCell('P22');
            cell.value = "20"+anos[5]

            var numRecs = datosDescripcion.length;
            var cell;
            for (i=0; i<numRecs; i++){
                // INSERTAR CATEGORIAS AL EXEL
                console.log(datosDescripcion[i]);

                var celda = 'A' + (i + 23);
                cell = worksheet.getCell(celda);
                cell.value = categoriasNames[categorias[i]-1];

                var celda1 = 'C' + (i + 23);

                var merge = celda + ":" + celda1;
                console.log(merge);
                console.log(celda);

                worksheet.mergeCells(merge);

                
                cell.alignment = {
                    horizontal: 'center',
                    vertical: 'middle',
                    wrapText: true,
                };

                cell.fill = {
                    type: 'pattern',
                    pattern: 'solid',
                    fgColor: { argb: 'FFFFFF' } // Código de color amarillo
                };
                cell.border = {
                    top: { style: 'thin' },    // Puedes ajustar el estilo según tus necesidades (thin, medium, thick, etc.)
                    left: { style: 'thin' },
                    bottom: { style: 'thin' },
                    right: { style: 'thin' }
                };

                
                // INSERTAR RECOMENDACIONES AL EXEL
                console.log(datosDescripcion[i]);
                if (datosDescripcion[i] == "Sin observaciones"){
                    var celda = 'D' + (i + 23);
                    cell = worksheet.getCell(celda);
                    cell.value =datosDescripcion[i];

                    var celda1 = 'F' + (i + 23);

                    var merge = celda + ":" + celda1;
                    console.log(merge);
                    console.log(celda);

                    worksheet.mergeCells(merge);

                    
                    cell.alignment = {
                        horizontal: 'center',
                        vertical: 'middle',
                        wrapText: true,
                    };
                }
                else{
                    var celda = 'D' + (i + 23);
                    cell = worksheet.getCell(celda);
                    cell.value = subcriterios[i]+" "+ datosDescripcion[i];

                    var celda1 = 'F' + (i + 23);

                    var merge = celda + ":" + celda1;
                    console.log(merge);
                    console.log(celda);

                    worksheet.mergeCells(merge);

                    
                    cell.alignment = {
                        horizontal: 'center',
                        vertical: 'middle',
                        wrapText: true,
                    };
                }
                cell.fill = {
                    type: 'pattern',
                    pattern: 'solid',
                    fgColor: { argb: 'FFFFFF' } // Código de color amarillo
                };
                cell.border = {
                    top: { style: 'thin' },    // Puedes ajustar el estilo según tus necesidades (thin, medium, thick, etc.)
                    left: { style: 'thin' },
                    bottom: { style: 'thin' },
                    right: { style: 'thin' }
                };


                // INSERTAR ATENDIDA SI/NO AL EXEL
                if (datosDescripcion[i] != "Sin observaciones"){
                    var celda = 'Q' + (i + 23);
                    cell = worksheet.getCell(celda);
                    cell.value = "";

                    var celda1 = 'T' + (i + 23);

                    var merge = celda + ":" + celda1;
                    console.log(merge);
                    console.log(celda);

                    worksheet.mergeCells(merge);

                    
                    cell.alignment = {
                        horizontal: 'center',
                        vertical: 'middle',
                        wrapText: true,
                    };
                }
                else{
                    var celda = 'Q' + (i + 23);
                    cell = worksheet.getCell(celda);
                    

                    var celda1 = 'T' + (i + 23);

                    var merge = celda + ":" + celda1;
                    console.log(merge);
                    console.log(celda);

                    worksheet.mergeCells(merge);

                    
                    cell.alignment = {
                        horizontal: 'center',
                        vertical: 'middle',
                        wrapText: true,
                    };
                }

                cell.fill = {
                    type: 'pattern',
                    pattern: 'solid',
                    fgColor: { argb: 'FFFFFF' } // Código de color amarillo
                };
                cell.border = {
                    top: { style: 'thin' },    // Puedes ajustar el estilo según tus necesidades (thin, medium, thick, etc.)
                    left: { style: 'thin' },
                    bottom: { style: 'thin' },
                    right: { style: 'thin' }
                };



                //INSERTAR RESPUESTAS AL EXEL
                console.log(datosRespuestas[i]);

                var celda = 'G'+(i+23);

                cell = worksheet.getCell(celda);
                cell.value = datosRespuestas[i];

                

                var celda1 = 'I'+(i+23);

                var merge = celda+":"+celda1;
                console.log(merge);
                console.log(celda);
                
                worksheet.mergeCells(merge);
                cell.alignment = {
                    horizontal: 'center',
                    vertical: 'middle',
                    wrapText: true,
                };

                cell.fill = {
                    type: 'pattern',
                    pattern: 'solid',
                    fgColor: { argb: 'FFFFFF' } // Código de color amarillo
                };
                cell.border = {
                    top: { style: 'thin' },    // Puedes ajustar el estilo según tus necesidades (thin, medium, thick, etc.)
                    left: { style: 'thin' },
                    bottom: { style: 'thin' },
                    right: { style: 'thin' }
                };
                


                //INSERTAR MES AL EXEL
                console.log(meses[i]);

                if (datosDescripcion[i] != "Sin observaciones"){
                    var celda = 'J'+(i+23);

                    cell = worksheet.getCell(celda);
                    cell.value = meses[i];

                    cell.alignment = {
                        horizontal: 'center',
                        vertical: 'middle',
                        wrapText: true,
                    };
                    cell.fill = {
                        type: 'pattern',
                        pattern: 'solid',
                        fgColor: { argb: 'FFFF00' } // Código de color amarillo
                    };
                }
                else{
                    var celda = 'J'+(i+23);

                    cell = worksheet.getCell(celda);

                    cell.fill = {
                        type: 'pattern',
                        pattern: 'solid',
                        fgColor: { argb: 'FFFFFF' } // Código de color amarillo
                    };
                    
                }
                
                cell.border = {
                    top: { style: 'thin' },    // Puedes ajustar el estilo según tus necesidades (thin, medium, thick, etc.)
                    left: { style: 'thin' },
                    bottom: { style: 'thin' },
                    right: { style: 'thin' }
                };

                

                //INSERTAR ARCHIVO AL EXEL
                console.log(meses[i]);

                var celda = 'U'+(i+23);

                cell = worksheet.getCell(celda);
                //cell.value = datosarchivos[i];
                // Agregar texto con hipervínculo
                var vinculo = rutapag+datosarchivos[i];
                if (datosarchivos[i] != ''){
                    cell.value = {
                        text: datosarchivos[i],
                        hyperlink: vinculo,  // Reemplaza con tu URL real
                        tooltip: 'Hacer clic para visitar',  // Puedes proporcionar un tooltip opcional
                    };
                    cell.font = {
                        color: { argb: '0000FF' }
                    };
                }

                cell.alignment = {
                    horizontal: 'center',
                    vertical: 'middle',
                    wrapText: true,
                };
                cell.fill = {
                    type: 'pattern',
                    pattern: 'solid',
                    fgColor: { argb: 'FFFFFF' } // Código de color amarillo
                };
                cell.border = {
                    top: { style: 'thin' },    // Puedes ajustar el estilo según tus necesidades (thin, medium, thick, etc.)
                    left: { style: 'thin' },
                    bottom: { style: 'thin' },
                    right: { style: 'thin' }
                };

                

                //INSERTAR LOS AÑOS EN QUE SE LLEVA A CABO EN EXEL
                var celda = 'K'+(i+23);
                cell = worksheet.getCell(celda);
                var cell = worksheet.getCell(celda);
                        cell.fill = {
                            type: 'pattern',
                            pattern: 'solid',
                            fgColor: { argb: 'FFFFFF' } // Código de color amarillo
                        };
                        cell.border = {
                            top: { style: 'thin' },    // Puedes ajustar el estilo según tus necesidades (thin, medium, thick, etc.)
                            left: { style: 'thin' },
                            bottom: { style: 'thin' },
                            right: { style: 'thin' }
                        };



                for (j = 0; j < 2; j++) {

                    if (ano1[i] - 1 <= anos[j]) {
                        var columna = String.fromCharCode('L'.charCodeAt(0) + j); // Convertir índice a letra de columna
                        var celda = columna + (i + 23);
                
                        console.log(celda);
                
                        //var cell = worksheet.getCell(celda);
                        //cell.value = i + 23;
                
                        var cell = worksheet.getCell(celda);
                        cell.fill = {
                            type: 'pattern',
                            pattern: 'solid',
                            fgColor: { argb: 'FFFF00' } // Código de color amarillo
                        };
                        cell.border = {
                            top: { style: 'thin' },    // Puedes ajustar el estilo según tus necesidades (thin, medium, thick, etc.)
                            left: { style: 'thin' },
                            bottom: { style: 'thin' },
                            right: { style: 'thin' }
                        };
                        
                    }
                    else{
                        var columna = String.fromCharCode('L'.charCodeAt(0) + j); // Convertir índice a letra de columna
                        var celda = columna + (i + 23);
                
                        console.log(celda);
                
                        //var cell = worksheet.getCell(celda);
                        //cell.value = i + 23;
                
                        var cell = worksheet.getCell(celda);
                        cell.fill = {
                            type: 'pattern',
                            pattern: 'solid',
                            fgColor: { argb: 'FFFFFF' } // Código de color amarillo
                        };
                        cell.border = {
                            top: { style: 'thin' },    // Puedes ajustar el estilo según tus necesidades (thin, medium, thick, etc.)
                            left: { style: 'thin' },
                            bottom: { style: 'thin' },
                            right: { style: 'thin' }
                        };
                    }
                }

                if (datosDescripcion[i] == "Sin observaciones"){
                    var row = worksheet.getRow(i+23);

                    // Ajusta la altura de la fila
                    row.height = 30; // Ajusta el valor según tus necesidades

                }
              

                
            }

            var fecha = new Date(fechaDiv);

            // Obtener el día, mes y año
            var dia = fecha.getDate();
            var mes = fecha.toLocaleString('default', { month: 'long' }); // Obtener el nombre del mes
            var anio = fecha.getFullYear();

            // Construir la nueva cadena de fecha formateada
            var fechaFormateada = dia + " DE " + mes.toUpperCase() + " DE " + anio;
            var celda = 'A'+(18);

                    cell = worksheet.getCell(celda);
                    cell.value = fechaFormateada;

            var celda = 'F'+(18);

                    cell = worksheet.getCell(celda);
                    cell.value = "20"+anoDictamen+" AL 20"+(parseInt(anoDictamen,10)+5);

            var fechaActual = new Date();

            // Obtener los componentes de la fecha
            var dia = fechaActual.getDate();
            var mes = fechaActual.getMonth(); // Los meses empiezan desde 0, así que sumamos 1
            var nombresMeses = [
                "ENERO", "FEBRERO", "MARZO", "ABRIL", "MAYO", "JUNIO",
                "JULIO", "AGOSTO", "SEPTIEMBRE", "OCTUBRE", "NOVIEMBRE", "DICIEMBRE"
              ];
              
              // Obtener el nombre del mes
              var nombreMes = nombresMeses[mes];

            var anio = fechaActual.getFullYear();

            var fechaFormateada = dia + " DE " + nombreMes + " DE " + anio;
            var celda = 'J'+(18);

                    cell = worksheet.getCell(celda);
                    cell.value = fechaFormateada+" / 0"+numDiv;



                         //
            // ------------------------------
            //

            var worksheet = workbook.getWorksheet(5);

            cell = worksheet.getCell('K22');
            cell.value = "20"+anos[0]
            cell = worksheet.getCell('L22');
            cell.value = "20"+anos[1]
            cell = worksheet.getCell('M22');
            cell.value = "20"+anos[2]
            cell = worksheet.getCell('N22');
            cell.value = "20"+anos[3]
            cell = worksheet.getCell('O22');
            cell.value = "20"+anos[4]
            cell = worksheet.getCell('P22');
            cell.value = "20"+anos[5]

            var numRecs = datosDescripcion.length;
            var cell;
            for (i=0; i<numRecs; i++){
                // INSERTAR CATEGORIAS AL EXEL
                console.log(datosDescripcion[i]);

                var celda = 'A' + (i + 23);
                cell = worksheet.getCell(celda);
                cell.value = categoriasNames[categorias[i]-1];

                var celda1 = 'C' + (i + 23);

                var merge = celda + ":" + celda1;
                console.log(merge);
                console.log(celda);

                worksheet.mergeCells(merge);

                
                cell.alignment = {
                    horizontal: 'center',
                    vertical: 'middle',
                    wrapText: true,
                };

                cell.fill = {
                    type: 'pattern',
                    pattern: 'solid',
                    fgColor: { argb: 'FFFFFF' } // Código de color amarillo
                };
                cell.border = {
                    top: { style: 'thin' },    // Puedes ajustar el estilo según tus necesidades (thin, medium, thick, etc.)
                    left: { style: 'thin' },
                    bottom: { style: 'thin' },
                    right: { style: 'thin' }
                };

                
                // INSERTAR RECOMENDACIONES AL EXEL
                console.log(datosDescripcion[i]);
                if (datosDescripcion[i] == "Sin observaciones"){
                    var celda = 'D' + (i + 23);
                    cell = worksheet.getCell(celda);
                    cell.value =datosDescripcion[i];

                    var celda1 = 'F' + (i + 23);

                    var merge = celda + ":" + celda1;
                    console.log(merge);
                    console.log(celda);

                    worksheet.mergeCells(merge);

                    
                    cell.alignment = {
                        horizontal: 'center',
                        vertical: 'middle',
                        wrapText: true,
                    };
                }
                else{
                    var celda = 'D' + (i + 23);
                    cell = worksheet.getCell(celda);
                    cell.value = subcriterios[i]+" "+ datosDescripcion[i];

                    var celda1 = 'F' + (i + 23);

                    var merge = celda + ":" + celda1;
                    console.log(merge);
                    console.log(celda);

                    worksheet.mergeCells(merge);

                    
                    cell.alignment = {
                        horizontal: 'center',
                        vertical: 'middle',
                        wrapText: true,
                    };
                }
                cell.fill = {
                    type: 'pattern',
                    pattern: 'solid',
                    fgColor: { argb: 'FFFFFF' } // Código de color amarillo
                };
                cell.border = {
                    top: { style: 'thin' },    // Puedes ajustar el estilo según tus necesidades (thin, medium, thick, etc.)
                    left: { style: 'thin' },
                    bottom: { style: 'thin' },
                    right: { style: 'thin' }
                };


                // INSERTAR ATENDIDA SI/NO AL EXEL
                if (datosDescripcion[i] != "Sin observaciones"){
                    var celda = 'Q' + (i + 23);
                    cell = worksheet.getCell(celda);
                    cell.value = "";

                    var celda1 = 'T' + (i + 23);

                    var merge = celda + ":" + celda1;
                    console.log(merge);
                    console.log(celda);

                    worksheet.mergeCells(merge);

                    
                    cell.alignment = {
                        horizontal: 'center',
                        vertical: 'middle',
                        wrapText: true,
                    };
                }
                else{
                    var celda = 'Q' + (i + 23);
                    cell = worksheet.getCell(celda);
                    

                    var celda1 = 'T' + (i + 23);

                    var merge = celda + ":" + celda1;
                    console.log(merge);
                    console.log(celda);

                    worksheet.mergeCells(merge);

                    
                    cell.alignment = {
                        horizontal: 'center',
                        vertical: 'middle',
                        wrapText: true,
                    };
                }

                cell.fill = {
                    type: 'pattern',
                    pattern: 'solid',
                    fgColor: { argb: 'FFFFFF' } // Código de color amarillo
                };
                cell.border = {
                    top: { style: 'thin' },    // Puedes ajustar el estilo según tus necesidades (thin, medium, thick, etc.)
                    left: { style: 'thin' },
                    bottom: { style: 'thin' },
                    right: { style: 'thin' }
                };



                //INSERTAR RESPUESTAS AL EXEL
                console.log(datosRespuestas[i]);

                var celda = 'G'+(i+23);

                cell = worksheet.getCell(celda);
                cell.value = datosRespuestas[i];

                

                var celda1 = 'I'+(i+23);

                var merge = celda+":"+celda1;
                console.log(merge);
                console.log(celda);
                
                worksheet.mergeCells(merge);
                cell.alignment = {
                    horizontal: 'center',
                    vertical: 'middle',
                    wrapText: true,
                };

                cell.fill = {
                    type: 'pattern',
                    pattern: 'solid',
                    fgColor: { argb: 'FFFFFF' } // Código de color amarillo
                };
                cell.border = {
                    top: { style: 'thin' },    // Puedes ajustar el estilo según tus necesidades (thin, medium, thick, etc.)
                    left: { style: 'thin' },
                    bottom: { style: 'thin' },
                    right: { style: 'thin' }
                };
                


                //INSERTAR MES AL EXEL
                console.log(meses[i]);

                if (datosDescripcion[i] != "Sin observaciones"){
                    var celda = 'J'+(i+23);

                    cell = worksheet.getCell(celda);
                    cell.value = meses[i];

                    cell.alignment = {
                        horizontal: 'center',
                        vertical: 'middle',
                        wrapText: true,
                    };
                    cell.fill = {
                        type: 'pattern',
                        pattern: 'solid',
                        fgColor: { argb: 'FFFF00' } // Código de color amarillo
                    };
                }
                else{
                    var celda = 'J'+(i+23);

                    cell = worksheet.getCell(celda);

                    cell.fill = {
                        type: 'pattern',
                        pattern: 'solid',
                        fgColor: { argb: 'FFFFFF' } // Código de color amarillo
                    };
                    
                }
                
                cell.border = {
                    top: { style: 'thin' },    // Puedes ajustar el estilo según tus necesidades (thin, medium, thick, etc.)
                    left: { style: 'thin' },
                    bottom: { style: 'thin' },
                    right: { style: 'thin' }
                };

                

                //INSERTAR ARCHIVO AL EXEL
                console.log(meses[i]);

                var celda = 'U'+(i+23);

                cell = worksheet.getCell(celda);
                //cell.value = datosarchivos[i];
                // Agregar texto con hipervínculo
                var vinculo = rutapag+datosarchivos[i];
                if (datosarchivos[i] != ''){
                    cell.value = {
                        text: datosarchivos[i],
                        hyperlink: vinculo,  // Reemplaza con tu URL real
                        tooltip: 'Hacer clic para visitar',  // Puedes proporcionar un tooltip opcional
                    };
                    cell.font = {
                        color: { argb: '0000FF' }
                    };
                }

                cell.alignment = {
                    horizontal: 'center',
                    vertical: 'middle',
                    wrapText: true,
                };
                cell.fill = {
                    type: 'pattern',
                    pattern: 'solid',
                    fgColor: { argb: 'FFFFFF' } // Código de color amarillo
                };
                cell.border = {
                    top: { style: 'thin' },    // Puedes ajustar el estilo según tus necesidades (thin, medium, thick, etc.)
                    left: { style: 'thin' },
                    bottom: { style: 'thin' },
                    right: { style: 'thin' }
                };

                

                //INSERTAR LOS AÑOS EN QUE SE LLEVA A CABO EN EXEL
                var celda = 'K'+(i+23);
                cell = worksheet.getCell(celda);
                var cell = worksheet.getCell(celda);
                        cell.fill = {
                            type: 'pattern',
                            pattern: 'solid',
                            fgColor: { argb: 'FFFFFF' } // Código de color amarillo
                        };
                        cell.border = {
                            top: { style: 'thin' },    // Puedes ajustar el estilo según tus necesidades (thin, medium, thick, etc.)
                            left: { style: 'thin' },
                            bottom: { style: 'thin' },
                            right: { style: 'thin' }
                        };



                for (j = 0; j < 1; j++) {

                    if (ano1[i] - 1 <= anos[j]) {
                        var columna = String.fromCharCode('L'.charCodeAt(0) + j); // Convertir índice a letra de columna
                        var celda = columna + (i + 23);
                
                        console.log(celda);
                
                        //var cell = worksheet.getCell(celda);
                        //cell.value = i + 23;
                
                        var cell = worksheet.getCell(celda);
                        cell.fill = {
                            type: 'pattern',
                            pattern: 'solid',
                            fgColor: { argb: 'FFFF00' } // Código de color amarillo
                        };
                        cell.border = {
                            top: { style: 'thin' },    // Puedes ajustar el estilo según tus necesidades (thin, medium, thick, etc.)
                            left: { style: 'thin' },
                            bottom: { style: 'thin' },
                            right: { style: 'thin' }
                        };
                        
                    }
                    else{
                        var columna = String.fromCharCode('L'.charCodeAt(0) + j); // Convertir índice a letra de columna
                        var celda = columna + (i + 23);
                
                        console.log(celda);
                
                        //var cell = worksheet.getCell(celda);
                        //cell.value = i + 23;
                
                        var cell = worksheet.getCell(celda);
                        cell.fill = {
                            type: 'pattern',
                            pattern: 'solid',
                            fgColor: { argb: 'FFFFFF' } // Código de color amarillo
                        };
                        cell.border = {
                            top: { style: 'thin' },    // Puedes ajustar el estilo según tus necesidades (thin, medium, thick, etc.)
                            left: { style: 'thin' },
                            bottom: { style: 'thin' },
                            right: { style: 'thin' }
                        };
                    }
                }

                if (datosDescripcion[i] == "Sin observaciones"){
                    var row = worksheet.getRow(i+23);

                    // Ajusta la altura de la fila
                    row.height = 30; // Ajusta el valor según tus necesidades

                }
              

                
            }

            var fecha = new Date(fechaDiv);

            // Obtener el día, mes y año
            var dia = fecha.getDate();
            var mes = fecha.toLocaleString('default', { month: 'long' }); // Obtener el nombre del mes
            var anio = fecha.getFullYear();

            // Construir la nueva cadena de fecha formateada
            var fechaFormateada = dia + " DE " + mes.toUpperCase() + " DE " + anio;
            var celda = 'A'+(18);

                    cell = worksheet.getCell(celda);
                    cell.value = fechaFormateada;

            var celda = 'F'+(18);

                    cell = worksheet.getCell(celda);
                    cell.value = "20"+anoDictamen+" AL 20"+(parseInt(anoDictamen,10)+5);

            var fechaActual = new Date();

            // Obtener los componentes de la fecha
            var dia = fechaActual.getDate();
            var mes = fechaActual.getMonth(); // Los meses empiezan desde 0, así que sumamos 1
            var nombresMeses = [
                "ENERO", "FEBRERO", "MARZO", "ABRIL", "MAYO", "JUNIO",
                "JULIO", "AGOSTO", "SEPTIEMBRE", "OCTUBRE", "NOVIEMBRE", "DICIEMBRE"
              ];
              
              // Obtener el nombre del mes
              var nombreMes = nombresMeses[mes];

            var anio = fechaActual.getFullYear();

            var fechaFormateada = dia + " DE " + nombreMes + " DE " + anio;
            var celda = 'J'+(18);

                    cell = worksheet.getCell(celda);
                    cell.value = fechaFormateada+" / 0"+numDiv;
           
           


            // Guardar el archivo modificado
            workbook.xlsx.writeBuffer().then(function (buffer) {
                var blob = new Blob([buffer], { type: 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' });

                var link = document.createElement('a');
                link.href = window.URL.createObjectURL(blob);
                link.download = 'mejora_continua.xlsx';
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
                window.location.href = '../ver_recomendaciones/index_ver_recomendaciones.php';
            });
        });
        

    

    //reader.readAsArrayBuffer(file);
}

document.addEventListener('DOMContentLoaded', function () {
    editarExcel();
});