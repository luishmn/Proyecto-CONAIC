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
  