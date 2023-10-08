var parametros = new URLSearchParams(window.location.search);
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

