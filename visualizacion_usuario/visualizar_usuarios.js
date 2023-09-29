

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

$(function(){
    // Selecciona las filas de la tabla con la clase "fila-tabla"
    $('.fila-tabla').click(function(e){
      if($(this).hasClass('row-selected')){
        $(this).addClass('other-clic')
      }else{
        cleanTr()
        $(this).addClass('row-selected')
      }
    })
    
    // Función para limpiar las filas seleccionadas
    function cleanTr(){
      $('.row-selected').each(function(index, element){
        $(element).removeClass('row-selected')
        $(element).removeClass('other-clic')
      })
    }
  })