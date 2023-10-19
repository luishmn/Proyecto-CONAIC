<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cargar Archivos PDF</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data" id="uploadForm">
        <input type="file" name="archivo[]" accept=".pdf" multiple>
        <button class="cargar-pdf" data-id="1.1.1">Subir</button>
    </form>
</body>
</html>


<script>

document.addEventListener("DOMContentLoaded", function () {
    var button = document.querySelector(".cargar-pdf");
    var form = document.getElementById("uploadForm");

    button.addEventListener("click", function (e) {
        e.preventDefault();

        var id = this.getAttribute("data-id");
        var fileInput = form.querySelector("input[type='file']");
        var files = fileInput.files;

        if (files.length === 0) {
            alert("Selecciona al menos un archivo PDF para cargar.");
            return;
        }

        var formData = new FormData();

        for (var i = 0; i < files.length; i++) {
            formData.append("archivo[]", files[i]);
        }

        formData.append("id", id);

        var xhr = new XMLHttpRequest();
        xhr.open("POST", "upload.php", true);

        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    alert(xhr.responseText);
                } else {
                    alert("Error al cargar los archivos.");
                }
            }
        };

        xhr.send(formData);
    });
});

</script>