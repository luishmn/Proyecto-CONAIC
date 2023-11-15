<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Excel con ExcelJS</title>
</head>
<body>
    <input type="file" id="inputFile" />
    <button onclick="editarExcel()">Editar Excel</button>

    <?php
    include "../conexionDB/conexion.php";
    conecta();

    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }

    $sql = "SELECT claveRecomendacion, descripcion, respuesta, fechaInicio, fechaTermino, archivo FROM Recomendaciones";
    $result = $conexion->query($sql);

    if ($result->num_rows > 0) {
        // Imprimir la tabla si hay resultados
        echo "<table border='1' id='tablaDatos'>
                <tr>
                    <th>Clave Recomendación</th>
                    <th>Descripción</th>
                    <th>Respuesta</th>
                    <th>Fecha de Inicio</th>
                    <th>Fecha de Término</th>
                    <th>Archivo</th>
                </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['claveRecomendacion']}</td>
                    <td>{$row['descripcion']}</td>
                    <td>{$row['respuesta']}</td>
                    <td>{$row['fechaInicio']}</td>
                    <td>{$row['fechaTermino']}</td>
                    <td>{$row['archivo']}</td>
                </tr>";
        }

        echo "</table>";
    } else {
        echo "No se encontraron resultados.";
    }

    // Cerrar la conexión
    $conexion->close();
    ?>

    
</body>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/exceljs/dist/exceljs.min.js"></script>
    <script>
        function editarExcel() {
            var anoDictamen= 23;

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

            var datosDescripcion = [];
            var datosRespuestas = [];
            var meses = [];
            var ano1 = [];
            var ano2 = [];

            
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


            }


            var inputFile = document.getElementById('inputFile');
            var file = inputFile.files[0];

            var workbook = new ExcelJS.Workbook();

            // Cargar el archivo Excel
            var reader = new FileReader();
            reader.onload = function (e) {
                var data = new Uint8Array(e.target.result);
                workbook.xlsx.load(data).then(function () {
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
                        //INSERTAR RECOMENDACIONES AL EXEL
                        console.log(datosDescripcion[i]);

                        var celda = 'D'+(i+23);

                        cell = worksheet.getCell(celda);
                        cell.value = datosDescripcion[i];

                        cell.fill = {
                            type: 'pattern',
                            pattern: 'solid',
                            fgColor: { argb: 'FFFFFF' } 
                        };

                        // Aplicar bordes
                        cell.border = {
                            top: { style: 'thin' },
                            left: { style: 'thin' },
                            bottom: { style: 'thin' },
                            right: { style: 'thin' }
                        };

                        var celda1 = 'F'+(i+23);

                        var merge = celda+":"+celda1;
                        console.log(merge);
                        console.log(celda);
                        
                        worksheet.mergeCells(merge);


                        //INSERTAR RESPUESTAS AL EXEL
                        console.log(datosRespuestas[i]);

                        var celda = 'G'+(i+23);

                        cell = worksheet.getCell(celda);
                        cell.value = datosRespuestas[i];

                        cell.fill = {
                            type: 'pattern',
                            pattern: 'solid',
                            fgColor: { argb: 'FFFFFF' } 
                        };

                        // Aplicar bordes
                        cell.border = {
                            top: { style: 'thin' },
                            left: { style: 'thin' },
                            bottom: { style: 'thin' },
                            right: { style: 'thin' }
                        };

                        var celda1 = 'I'+(i+23);

                        var merge = celda+":"+celda1;
                        console.log(merge);
                        console.log(celda);
                        
                        worksheet.mergeCells(merge);


                        //INSERTAR MES AL EXEL
                        console.log(meses[i]);

                        var celda = 'J'+(i+23);

                        cell = worksheet.getCell(celda);
                        cell.value = meses[i];

                        cell.fill = {
                            type: 'pattern',
                            pattern: 'solid',
                            fgColor: { argb: 'FFFFFF' } 
                        };

                        // Aplicar bordes
                        cell.border = {
                            top: { style: 'thin' },
                            left: { style: 'thin' },
                            bottom: { style: 'thin' },
                            right: { style: 'thin' }
                        };

                        //INSERTAR LOS AÑOS EN QUE SE LLEVA A CABO EN EXEL
                        
                        
                        
                        
                        
                    }
                   


                    // Guardar el archivo modificado
                    workbook.xlsx.writeBuffer().then(function (buffer) {
                        var blob = new Blob([buffer], { type: 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' });

                        var link = document.createElement('a');
                        link.href = window.URL.createObjectURL(blob);
                        link.download = 'archivo_modificado.xlsx';
                        document.body.appendChild(link);
                        link.click();
                        document.body.removeChild(link);
                    });
                });
            };

            reader.readAsArrayBuffer(file);
        }
    </script>

</html>
