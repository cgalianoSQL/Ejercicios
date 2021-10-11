var formulario = document.getElementById('formulario');
var respuesta = document.getElementById('respuesta');

formulario.addEventListener('submit', function(e){
    e.preventDefault();
    console.log('me diste un click')

    var datos = new FormData(formulario);
    var name = console.log(document.contactos.name.value);
    var email = console.log(document.contactos.email.value);
    var mensaje = console.log(document.contactos.mensaje.value);

    if (name == '' && email == '' && mensaje == '') {
        document.getElementById('formulario').reset();
        alert("FALTAN RELLENAR CAMPOS!!");
     } else
        document.getElementById('formulario').reset();
        alert("DATOS CARGADOS CON EXITO!!");

})