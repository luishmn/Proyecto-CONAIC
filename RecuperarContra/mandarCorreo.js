const boton_obtener = document.getElementById("obtenerCodigo");
const correo = document.getElementById("correoEspacio");

function moverEnfoque(input, siguienteID) {
        if (input.value.length >= input.maxLength) {
            document.getElementById(siguienteID).focus();
        }
    }  

window.onload = () => {
    var codigoRec = Math.floor(100000 + Math.random() * 900000);
    //console.log(codigoRec)

    

    function obtenerCodigo() {
        var cod1 = document.getElementById('c1').value
        var cod2 = document.getElementById('c2').value
        var cod3 = document.getElementById('c3').value
        var cod4 = document.getElementById('c4').value
        var cod5 = document.getElementById('c5').value
        var cod6 = document.getElementById('c6').value

        var codigo = cod1 + cod2 + cod3 + cod4 + cod5 + cod6

        //console.log(codigo)
        if (codigoRec == codigo) {
            window.location.href = 'pagina_encabezado.html';
        }
        else {
            Swal.fire({
                title: 'Error',
                icon: 'error'
            })
        }
    }

    boton_obtener.addEventListener("click", (e) =>{
        let valor_correo = correo.value;
        
        let url = 'comprobarCodigo.php';

        let data = new FormData();
        data.append("correo", valor_correo);
        data.append("codigo",codigoRec);

        fetch(url,{
            method: 'POST',
            body: data
        })
        .then((Response) => Response.json())
        .then((json) =>  respuesta(json))
        .catch((error) => alert(error))
    });
}

    