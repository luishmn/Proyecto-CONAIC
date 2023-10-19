const details = document.querySelectorAll('details');

details.forEach((detail) => {
    detail.addEventListener('toggle', () => {
        if (detail.open) {
            detail.querySelector('.criterios').style.maxHeight = '1000px';
        } else {
            detail.querySelector('.criterios').style.maxHeight = '0';
        }
    });
});

document.addEventListener('DOMContentLoaded', function() {
    var selectedOption = document.querySelector('.selected-option');
    var optionsList = document.querySelector('.options');
    var selectedValue = document.querySelector('.usuario_seleccionado');
  
    selectedOption.addEventListener('click', function() {
      optionsList.style.display = (optionsList.style.display === 'block') ? 'none' : 'block';
    });
  
    optionsList.addEventListener('click', function(event) {
      if (event.target.tagName === 'LI') {
        selectedOption.textContent = "Selecciona una opción";
        selectedValue.textContent = event.target.textContent;
        optionsList.style.display = 'none';
      }
    });
  });





  document.addEventListener("DOMContentLoaded", function() {
    const boton = document.querySelector("#guardar");

    boton.addEventListener("click", function() {
        // Obtener elementos del DOM
        const selectedValue = document.querySelector('.selected-value');
        const selectedUser = document.querySelector('.options li.selected');
        
        if (selectedUser) {
            const nombreUsuario = selectedUser.getAttribute('data-nombre');
            const apellidoPatUsuario = selectedUser.getAttribute('data-apellidoPat');
            const cargoUsuario = selectedUser.getAttribute('data-cargo');
            
            // Obtener los subcriterios seleccionados
            const checkboxes = document.querySelectorAll(".check_criterios input[type=checkbox]:checked");
            const clavesSubCriterios = [];

            checkboxes.forEach(checkbox => {
                const claveSubCriterio = checkbox.getAttribute("data-clave");
                clavesSubCriterios.push(claveSubCriterio);
            });

            // Verificar si se han seleccionado subcriterios
            if (clavesSubCriterios.length === 0) {
                Swal.fire({
                    title: 'Debes seleccionar al menos un subcriterio',
                    // text: 'Debes seleccionar al menos un subcriterio',
                    icon: 'error',
                    confirmButtonText: 'Cerrar',
                    confirmButtonColor: '#197B7A' 
                });
                // alert('Debes seleccionar al menos un subcriterio.');
                return;
            }
      
            // Crear un objeto con los datos a enviar al servidor
            const data = {
                usuario: nombreUsuario,
                apellidoPat: apellidoPatUsuario,
                cargo: cargoUsuario,
                subcriterios: clavesSubCriterios
            };

            // Enviar los datos al servidor mediante una solicitud AJAX
            fetch("guardar_asignacion.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify(data)
            })
            .then(response => response.json())
            .then(data => {
                console.log(data);
                // Hacer algo con la respuesta del servidor si es necesario
            })
            Swal.fire({
                title: 'Guardado correctamente',
                icon: 'success',
                confirmButtonText: 'Cerrar',
                confirmButtonColor: '#197B7A' 
            })
            .catch(error => {
                console.error("Error al guardar los datos: " + error);
            });
        } else {
            // Manejar el caso en el que no se ha seleccionado un usuario
            Swal.fire({
                title: 'Debes seleccionar un usuario',
                icon: 'error',
                confirmButtonText: 'Cerrar',
                confirmButtonColor: '#197B7A' 
            });
            // alert('Debes seleccionar un usuario.');
        }
    });

    // Agregar un controlador de eventos a cada elemento de la lista de usuarios
    const userItems = document.querySelectorAll('.options li');
    userItems.forEach(item => {
        item.addEventListener('click', function() {
            // Marcar este elemento como seleccionado y deseleccionar los demás
            userItems.forEach(otherItem => {
                otherItem.classList.remove('selected');
            });
            this.classList.add('selected');

      
        });
    });








    // Agrega un evento al cambio de selección de usuario
document.querySelector(".options").addEventListener("click", function(e) {
  if (e.target && e.target.tagName === "LI") {
      // Obtén el usuario seleccionado

      const selectedUser = document.querySelector('.options li.selected');
        
  
      const nombreUsuario = selectedUser.getAttribute('data-nombre');
      const apellidoPatUsuario = selectedUser.getAttribute('data-apellidoPat');
      const cargoUsuario = selectedUser.getAttribute('data-cargo');
      
      const data = {
        usuario: nombreUsuario,
        apellidoPat: apellidoPatUsuario,
        cargo: cargoUsuario,
        
    };
      
      
      // Realiza una consulta en la base de datos para buscar las claves de subcriterios relacionadas
      fetch("buscar_relaciones.php", {
          method: "POST",
          headers: {
              "Content-Type": "application/json"
          },
          body: JSON.stringify(data)
      })
      .then(response => response.json())
      .then(data => {
          if (data.success) {
              const clavesSubcriterios = data.clavesSubcriterios;

              // Marca los checkboxes correspondientes
              const checkboxes = document.querySelectorAll(".check_criterios input[type=checkbox]");
              checkboxes.forEach(checkbox => {
                  const claveSubCriterio = checkbox.getAttribute("data-clave");
                  if (clavesSubcriterios.includes(claveSubCriterio)) {
                      checkbox.checked = true;
                  } else {
                      checkbox.checked = false;
                  }
              });
          } else {
              console.error("Error al buscar relaciones: " + data.message);
          }
      })
      .catch(error => {
          console.error("Error al buscar relaciones: " + error);
      });
  }
});

});
