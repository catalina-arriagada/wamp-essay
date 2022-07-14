(function(){
    
    //declaro variables para enviarlas y recibirlas del HTML:
    var formulario = document.getElementById('formulario')[0],
        elementos = formulario.elements,
        boton = document.getElementById('btn');

    //validacion de nombre: 
    var validarNombre = function(e){
        if (formulario.nombre.value == 0) {
            alert("Campo Nombre debe ser completado");
            elementos.preventDefault();
        }
    }

    //validacion para radio buttons:
    var validarRadio = function(e){
        if (formulario.genero[0].checked == true || formulario.genero[1].checked == true || formulario.genero[2].checked == true) {
            
        }
        else {
            alert("Campo Género debe ser completado");
            e.preventDefault();
        }
    };

    
    var validarCheckbox = function(e){

        //si el campo 'terminos y condiciones' no esta marcado(false), el usuario no lo marcó, y salta la alerta:
        if (formulario.terminos.ckecked == false) {
            alert("Debe aceptar los términos y condiciones para continuar");
            e.preventDefault();
        }
    };

    //funcion para validar todos los campos: 
    var validar = function(e){
        //llamo a la validacion de nombre dentro de la funcion validar: 
        validarNombre(e);
        validarRadio(e);
        validarCheckbox(e);
        alert("ok");
    };   
    
    //agrego event listener (evento) de tipo submit llamado validar:
    formulario.addEventListener("submit", validar);

}())
