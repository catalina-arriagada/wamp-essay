<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validar Formularios</title>
</head>
<body>
    <form action="" name="formulario" method="get">
            <input type="text" name="nombre" id="nombre" maxlenght="30" placeholder="">
            <br>

            <input type="radio" name="genero" id="hombre" value="Hombre">Hombre
            <input type="radio" name="genero" id="mujer" value="Mujer">Mujer
            <input type="radio" name="genero" id="otro" value="Otro">Otro
            <br>

            <input type="checkbox" name="terminos" id="terminos"> Terminos y Condiciones
            <br>

            <input type="submit" id="btn" name="btn" value="Enviar">
    </form>

    <script src="./js/validacion.js"></script>
</body>
</html>   
