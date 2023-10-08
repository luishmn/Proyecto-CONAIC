function comprobarContraseña(){
    var contraseña1 =document.getElementById('contra1').value
    var contraseña2 =document.getElementById('contra2').value

    console.log(contraseña1);
    console.log(contraseña2);

    if(contraseña1==contraseña2){
        //window.location.href-'';
        Swal.fire({
            title:'Contraseña cambiada con éxito',
            icon:'success'
        })
        console.log("aaaa");

    }
    else{
        Swal.fire({
            title:'Error',
            icon:'error'
        })
    }
}