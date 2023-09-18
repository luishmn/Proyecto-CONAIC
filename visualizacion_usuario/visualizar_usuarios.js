

function borrarTexto(input) {
    if (input.value === "Clave de usuario") {
        input.value = "";
    }
}


function restaurarTexto(input) {
    if (input.value === "") {
        input.value = "Clave de usuario";
    }
}


document.getElementById("miInput").addEventListener("focus", function () {
    borrarTexto(this);
});

document.getElementById("miInput").addEventListener("blur", function () {
    restaurarTexto(this);
});

