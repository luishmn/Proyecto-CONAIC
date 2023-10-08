//SCRIPT PARA VALIDAR EL FORMULARIO DE REGISTRO
function mostrarDialogo() {
document.getElementById("cuadroDialogo").style.display = "block";
}

function cerrarDialogo() {
document.getElementById("cuadroDialogo").style.display = "none";
}

var alerta = document.getElementById("cuadroDialogo"); //CERRAR ALERTA AL HACER CLIC EN CUALQUIER LUGAR DE LA PANTALLA
document.addEventListener("click", function (event) {

if (event.target !== alerta && !alerta.contains(event.target)) {
    alerta.style.display = "none";
}
});

var mayusculas = /[A-Z]/;
var minusculas = /[a-z]/;
var numeros = /\d/;
var especiales = /[\W_]/;

var tituloAlerta = document.getElementById ("tituloError");
var descripcionAlerta = document.getElementById ("descripcionError");



document.addEventListener("DOMContentLoaded", function() {
const formulario = document.getElementById("cambioContrasenas");

formulario.addEventListener("submit", function(event) {
    // Evita que el formulario se envíe automáticamente
    event.preventDefault();

    // Realiza la validación de los campos aquí
    const contrasena = document.getElementById("contra1").value;
    const contrasenaV = document.getElementById("contra2").value;
    

    

    if (contrasena.trim() === "" || contrasenaV.trim() ===""){
    tituloAlerta.textContent = "Llena todos los campos";
    descripcionAlerta.textContent = "Asegurate de llenar todos los campos";
    mostrarDialogo();
    }
    
    else if (contrasena != contrasenaV) {
    tituloAlerta.textContent = "Contraseñas diferentes";
    descripcionAlerta.textContent = "Las contraseñas no coinciden";
    mostrarDialogo();
    } 
    else if (contrasena.length < 8){
    tituloAlerta.textContent = "Contraseña muy corta";
    descripcionAlerta.textContent = "La contraseña debe tener al menos 8 caracteres";
    mostrarDialogo();
    }
    else if (contrasena.length > 20){
    tituloAlerta.textContent = "Contraseña muy larga";
    descripcionAlerta.textContent = "La contraseña debe tener menos de 20 caracteres";
    mostrarDialogo();
    }

    else if (!contrasena.match(mayusculas)){
    tituloAlerta.textContent = "Faltan mayusculas";
    descripcionAlerta.textContent = "La contraseña debe tener al menos una letra mayuscula";
    mostrarDialogo();
    }
    else if (!contrasena.match(minusculas)){
    tituloAlerta.textContent = "Faltan minusculas";
    descripcionAlerta.textContent = "La contraseña debe tener al menos una letra minuscula";
    mostrarDialogo();
    }

    else if (!contrasena.match(numeros)){
    tituloAlerta.textContent = "Faltan números";
    descripcionAlerta.textContent = "La contraseña debe tener al menos un número";
    mostrarDialogo();
    }

    else if (/\s/.test(contrasena)) {
    tituloAlerta.textContent = "Espacios en contraseña";
    descripcionAlerta.textContent = "La contraseña no debe tener espacios";
    mostrarDialogo();
    }
    

    else {
    // Si los campos son válidos, envía el formulario
    formulario.submit();

    
    }
});
});
  



/* var parametros = new URLSearchParams(window.location.search);
var correo = parametros.get('correo_traslado');

//console.log(correo);

const boton_cambiar = document.getElementById("cambiarContra")

const contrasena_nueva = document.getElementById("contra1");
const contrasena_confirm = document.getElementById("contra2");

window.onload = () => {
    //function comprobarContraseña(){
    //var contraseña1 =document.getElementById('contra1').value
    //var contraseña2 =document.getElementById('contra2').value

    //console.log(contraseña1);
    //console.log(contraseña2);

    boton_cambiar.addEventListener("click", (e) =>{
        if(contrasena_nueva.value == contrasena_confirm.value){

            let contrasena = contrasena_nueva.value;

            let url = 'guardarModificaContra.php';

            let data = new FormData();
            data.append("contrasena",contrasena);

            fetch(url,{
                method: 'POST',
                body: data
            })
            .then((Response) => Response.json())
            .then((json) => respuesta(json))
            .catch((error) => console.error(error))

        Swal.fire({
            title:'Contraseña cambiada con éxito',
            icon:'success'
        })

    }
    else{
        Swal.fire({
            title:'Error',
            icon:'error'
        })
    }
    })
    
}
//}

*/

