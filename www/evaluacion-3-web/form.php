<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Formulario</title>
    <script scr="js/validar.js"></script>
</head>
<body>
    <h1>Formulario de Registro</h1>
    <form action="registrar.php" method="post" class="form-register" onsubmit="return validar();">
        <h2 class="form-titulo">Crear cuenta</h2>
        <div class="container">
            <label for="nombre" class="lbl">Nombre y Apellido:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Luis Perez" class="input">
            <br>

            <label for="email" class="lbl">Email:</label>
            <input type="text" id="correo" name="correo" placeholder="luisperez35@gmail.com" class="input" >
            <br>

            <label for="pais" class="lbl">País:</label>
            <select name="pais" id="pais" class="input" >
                <option value="-1" selected>-- Seleccione --</option>
                <option value="1">Argentina</option>
                <option value="2">Bolivia</option>
                <option value="3">Chile</option>
                <option value="4">Colombia</option>
                <option value="5">Costa Rica</option>
                <option value="6">México</option>
                <option value="7">Perú</option>
            </select>
            <br>

            <label for="contraseña" class="lbl">Contraseña:</label>
            <input type="password" id="clave" name="clave" class="input" >
            <br>
            
            <label for="telefono" class="lbl">Telefono:</label>
            <input type="number" max= "999999999" id="fono" name="fono" placeholder="987656560" class="input" >
            <br> 
            <input type="submit" value="Registrar" class="btn-enviar">

        </div>
    </form>

</body>
</html>