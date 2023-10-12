//saca de la informacion de la interfaz
const boton_obtener = document.getElementById("obtenerCodigo");
const boton_codigo = document.getElementById("compararCodigo");
const correo = document.getElementById("correo");

//mover el cursor de caja de texto
function moverEnfoque(input, siguienteID) {
        if (input.value.length >= input.maxLength) {
            document.getElementById(siguienteID).focus();
        }
    }  

//carga la pagina y ejecuta
window.onload = () => {
    var codigoRec
    
    //ejecuta al cliquear el boton de mandar codigo
    boton_obtener.addEventListener("click", (e) =>{

        

        
        
        //codigo generado
         codigoRec = Math.floor(100000 + Math.random() * 900000);

        //variable del correo
        let valor_correo = correo.value;

        
        
        //archivo al que se dirige
        let url = 'mandarCorreo.php';

        //manda variables al archivo dado
        let data = new FormData();
        data.append("correo", valor_correo);
        data.append("codigo",codigoRec);

        fetch(url,{
            method: 'POST',
            body: data
        })
        //manejo de errores
        .then((Response) => Response.json())
        .then((json) =>  respuesta(json))
        .catch((error) => console.error(error))
    });

    //ejecuta cuando se cliquea el botonde comprobar
    boton_codigo.addEventListener("click", (e) =>{


        //lectura de las cajas
        var cod1 = document.getElementById('c1').value
        var cod2 = document.getElementById('c2').value
        var cod3 = document.getElementById('c3').value
        var cod4 = document.getElementById('c4').value
        var cod5 = document.getElementById('c5').value
        var cod6 = document.getElementById('c6').value

        var codigo = cod1 + cod2 + cod3 + cod4 + cod5 + cod6

        //compara para verificar que son iguales
        if (codigoRec == codigo) {
            //valor_correo="a"
            window.location.href = 'cambiaContra.html?correo_traslado=' + correo.value;
        }
        else {
            Swal.fire({
                title: 'Error',
                icon: 'error'
            })
        }
    })
    
}

