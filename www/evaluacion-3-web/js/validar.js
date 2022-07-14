function validar (){
    var nombre, correo, pais, clave, telefono, expresion;
    nombre = document.getElementById("nombre").value,
    correo = document.getElementById("correo").value,
    pais = document.getElementById("usuario").value,
    clave = document.getElementById("clave").value,
    telefono = document.getElementById("telefono").value,
    expresion = /\w+@+[a-z]+\.+[a-z]/;

    if (nombre === "" || correo === "" || pais === "" || clave === "" || telefono === "" ){
        alert("El campo solicitado debe ser completado");
        return false;
    }
    
    else if(nombre.length>50){
        alert("Nombre sobrepasa el número de caracteres");
        return false;
    }

    else if(correo.length>70){
        alert("Email sobrepasa el número de caracteres");
        return false;
    }

    else if(!expresion.test(correo)){
        alert("El email no es válido");
        return false;
    }

    else if(clave.length>20){
        alert("Contraseña sobrepasa el número de caracteres");
        return false;
    }

    if(telefono.length>9){
        alert("Teléfono sobrepasa el número de caracteres");
        return false;
    }

    if(isNaN(telefono)){
        alert("Teléfono ingresado no es un número");
        return false;
    }

    
}
