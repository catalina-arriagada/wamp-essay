<?php
?>

<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<title>Registro</title>
<!--llamadas a los codigos js y css:-->
<link rel="stylesheet" type="text/css" href="css/estilos.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="js/validar.js"></script>

</head>
<body>
	<section>
	    <div class="contenido">
        <div class="content-form">
            <!--lleva a registrar.php una vez presiona enviar con metodo post:-->
            <form action="registrar.php" method="post" name= "form"  class="form-register" onsubmit="return validar();">  
         	   <h3>Registrate</h3>
         	   <p class="text-danger" style="margin-top: 15px">* Campos obligatorios</p> 
            <div class="form-group">
              <!--Campo nombre-->
         		 <label>Nombre Completo: <span class="text-danger">*</span></label>
         		 <input type="text" name="nombre" placeholder="Ingrese su nombre" class="form-control" required="required">	
            </div>
         	 <div class="form-group">
              <!--campo email-->
         		 <label>Email: <span class="text-danger">*</span></label>
         		 <input type="email" name="email" placeholder="Ingrese su correo electrónico" class="form-control" required="required">	
            </div>
              <div class="form-group">
                <!--campo telefono:-->
                <label>Número de contacto: <span class="form-control"></span></label>
                <input type="number" max="999999999" type="number" name="numero" placeholder="Ejemplo: 987654321" class="form-control" required="required"> 
              </div>
         	 <div class="form-group">
              <!--campo pais-->
         		 <label>País: <span class="text-danger"></span></label>
                <select name="pais" class="form-control" required="required">
                <option value="-1" selected>Seleccione... </option>
                <option value="1">Argentina</option>
                <option value="2">Bolivia</option>
                <option value="3">Chile</option>
                <option value="4">Colombia</option>
                <option value="5">Costa Rica</option>
                <option value="6">México</option>
                <option value="7">Perú</option>
                </select>
         	   </div>
                
         	 <div class="form-group">
              <!--campo comentarios-->
         		 <label>Tus razones para ser parte de Programadores Latam:<span class="text-danger"></span></label>
              <br>
         		 <textarea name="comentarios" placeholder="ingrese comentarios aqui" class="form-control" rows="6"></textarea>
         	 </div>
              <div class="form-group">
            <!--boton enviar:-->
         		 <button type="submit" class="btn btn-primary" value="Registrar" onclick="validar();">Enviar</button>

         	 </div>	
         	 </form>        	
          </div> 	
        </div>	    	
	</section>
<footer>
      <p class="text-footer">
        <!--pie de pagina-->
          💻 Programadores Latinoamérica .-
          &copy; Todos los derechos reservados - 2021
      </p>
</footer>
</body>
</html>