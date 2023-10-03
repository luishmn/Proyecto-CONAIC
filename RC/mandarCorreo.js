document.addEventListener('DOMContentLoaded', function() {
    var correo="ejemplo@gmail.com" //correo extraido de la base de datos
    document.getElementById('correoEspacio').value=correo;
    console.log(correo);
});

var codigoRec = Math.floor(100000 + Math.random() * 900000);
console.log(codigoRec)

/*var xhr=new XMLHttpRequest();
xhr.open("POST","comprobarCodigo.php",true);
xhr.setRequestHeader("Content-Type", "text/plain");
xhr.send(codigoRec);*/

function moverEnfoque(input, siguienteID) {
    if (input.value.length >= input.maxLength) {
        document.getElementById(siguienteID).focus();
    }
}

function obtenerCodigo(){
    var cod1=document.getElementById('c1').value
    var cod2=document.getElementById('c2').value
    var cod3=document.getElementById('c3').value
    var cod4=document.getElementById('c4').value
    var cod5=document.getElementById('c5').value
    var cod6=document.getElementById('c6').value

    var codigo=cod1+cod2+cod3+cod4+cod5+cod6

    console.log(codigo)
    if(codigoRec==codigo){
        window.location.href='pagina_encabezado.html';
    }
    else{
        Swal.fire({
            title:'Error',
            icon:'error'
        })
}
}