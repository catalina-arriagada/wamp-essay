<?php
//llamo a mi base de datos mysql y a la ruta del servidor local, ademas de los caracteres occidentales, y los guardo en la variable php $link:
$link = 'mysql:host=localhost;dbname=info_financiera;charset=utf8';
//asigno el usuario "root" de la base de datos phpMyadmin a la variable php $user:
$user = 'root';
//lo mismo anterior pero con la contraseña, y lo guardo en $pass:
$pass = '';

//creo una estructura try-catch. Si todo funciona bien me trae lo que está dentro del try, sino, trae lo que está en catch. 
try {
    //a la variable php $pdo le asigno una nueva clase PDO con las variables anteriores dentro:
    $pdo = new PDO ($link,$user,$pass);
    //seteo la base de datos:
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //al $pdo le doy caracteres occidentales:
    $pdo->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'UTF8'");

//a la excepcion que ocurra la atrapo y le asigno la variable $e:
} catch (PDOException $e) {
    //imprimo un error y lo concateno con el punto, con la variable $e y obtengo el mensaje que me entrega esta, muestro error en pantalla que servicio no funciona:
    print "Error: " . $e->getMessage() . "<br/>";
    //mato la conexión a la bd:
    die();
}
