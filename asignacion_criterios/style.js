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
