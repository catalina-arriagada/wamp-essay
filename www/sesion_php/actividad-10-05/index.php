<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo 10-05</title>
</head>
<body>
    <h1>Inicie Sesión</h1>
    
    <form action="sesion.php" method="get">
    <p>Nombre: <input type="text" name="nombre" size="40"></p>
    <p>Año de nacimiento: <input type="number" name="nacido" min="1900"></p>
    <p>Sexo:
    <input type="radio" name="hm" value="h"> Hombre
    <input type="radio" name="hm" value="m"> Mujer
    </p>
    <p>
    <input href="sesion.php" type="submit" value="Enviar">
    <input href= "protegido.php" type="reset" value="Borrar">
    </p>
</form>
</body>
</html>