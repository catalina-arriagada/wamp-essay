<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!--caracteres occidentales-->
    <title>LOGIN</title>
    <link rel="preconnect" href="https://fonts.gstatic.com"><!--me conecto a la fuente -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet"><!--llamo a la fuente-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"><!--llamo a la librería de bootstrap-->
    <link rel="stylesheet" href="css/styles.css"><!--llamo al archivo de estilos css "style.css" en la carpeta css -->
</head>
<body>

    <form action = "validation.php" method = "post"> <!--acción de llamar al archivo validation.php con el método post-->
        <h1>Login Users</h1><!--texto h1-->
        <p>User <input type = "text" placeholder = "Please enter your user name" name = "user"></p> <!--párrafo User
        en donde text es el tipo de dato que quiero ingresar, que resulta en una barra de texto, y el placeholder
        es el texto que saldrá por defecto en ella, y name será la variable html que invoquemos en otros lugares, como en codigo php-->
        <p>Password <input type = "password" placeholder = "Please enter your password" name = "password"></p><!--lo 
        mismo que la anterior, pero de tipo contraseña, lo que esconderá el texto-->
        <input type = "submit" value = "Enter"><!--defino tipo de botón y su valor-->
    </form>

</body>
</html>








