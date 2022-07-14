<?php
//conexion 
$conection = 'mysql:host=localhost;dbname=login;charset=utf8'; // asigna a una variable PHP un string de conexion
$usuario = 'root'; //usuario para conectarse a la bd mysql
$pass = ''; //contraseña para conectarse a la bd mysql

try{
    $pdo = new PDO($conection,$usuario,$pass); //conexion hacia la BD
}catch(PDOExeption $e){ //catch captura errores y PDOExeption es lo que se ejecuta si no corre la BD, a traves de variable $e
    print "Error:" . $e->getMessage() . "<br/>";//imprime "error:" y getMessage imprime en pantalla el error específico que ocurre al no poder conectarse a la bd dentro de var $e
}



