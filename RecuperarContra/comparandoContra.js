
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
    Swal.fire({
        title:"Contraseñas diferentes",
        text: "Las contraseñas no coinciden",
        icon: "error",
        confirmButtonText: 'Cerrar',
        confirmButtonColor: '#197B7A'
    });
    return;

    } 
    else if (contrasena.length < 8){
    Swal.fire({
        title:"Contraseña muy corta",
        text: "La contraseña debe tener al menos 8 caracteres",
        icon: "error",
        confirmButtonText: 'Cerrar',
        confirmButtonColor: '#197B7A'
    });
    return;
    }
    else if (contrasena.length > 20){
    Swal.fire({
        title:"Contraseña muy larga",
        text: "La contraseña debe tener menos de 20 caracteres",
        icon: "error",
        confirmButtonText: 'Cerrar',
        confirmButtonColor: '#197B7A'
    });
    return;
    }

    else if (!contrasena.match(mayusculas)){
    Swal.fire({
        title:"Faltan mayúsculas",
        text: "La contraseña debe tener al menos una letra mayúscula",
        icon: "error",
        confirmButtonText: 'Cerrar',
        confirmButtonColor: '#197B7A'
    });
    return;

    }
    else if (!contrasena.match(minusculas)){
    Swal.fire({
        title:"Faltan minúsculas",
        text: "La contraseña debe tener al menos una letra minúscula",
        icon: "error",
        confirmButtonText: 'Cerrar',
        confirmButtonColor: '#197B7A'
    });
    return;
    }

    else if (!contrasena.match(numeros)){
    Swal.fire({
        title:"Faltan números",
        text: "La contraseña debe tener al menos un número",
        icon: "error",
        confirmButtonText: 'Cerrar',
        confirmButtonColor: '#197B7A'
    });
    return;
    }

    else if (/\s/.test(contrasena)) {
    Swal.fire({
        title:"Espacios en contraseña",
        text: "La contraseña no debe tener espacios",
        icon: "error",
        confirmButtonText: 'Cerrar',
        confirmButtonColor: '#197B7A'
    });
    return;
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

