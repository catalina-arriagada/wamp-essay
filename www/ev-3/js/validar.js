//validar varios campos en una misma funcion:
function validar (){
   //variable que llama al formulario html:
   var form = document.form;


   //si el nombre está vacío manda alerta y no deja registrar:
   if (form.nombre.value=="") {

      alert ("Ingresa tu nombre");
      form.nombre.value="";
      form.nombre.focus();
      return false;
   }

   //si el email está vacío manda alerta y no deja registrar:
   if (form.email.value=="") {

      alert ("Ingresa tu email");
      form.nombre.value="";
      form.nombre.focus();
      return false;
   }
   
   //si el email no es el mismo de la función "validarEmail" manda alerta y no deja registrar:
   if (!validarEmail(form.email.value)) {
      alert ("El email no es válido");
      form.email.value="";
      form.email.focus();
      return false;
   }

   //si el pais está vacío manda alerta y no deja registrar:
   if (form.pais.value=="") {
      alert ("Selecciona tu pais");
      form.pais.value="";
      form.pais.focus();
      return false;
   }


   ////si el telefono está vacío manda alerta y no deja registrar:
   if(form.numero.value==""||form.numero.value==0){
      alert("Ingrese numero de telefono"); 
      form.numero.focus();
      return false;
   }

   //llama a la funcion submit del formulario:
   form.submit();
}

//validar email con ciertos caracteres:
function validarEmail(email) 
{
var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
return regex.test(email) ? true : false;
}



