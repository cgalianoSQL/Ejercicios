var response = document.getElementById('vender');

jQuery(document).on('submit', '#formulario', function(event){
    event.preventDefault();

    if (response.value == 1) {
        response.innerHTML = location.href = 'venta.php';  
    } else
        response.innerHTML = location.href = 'alquiler.php';  

});
