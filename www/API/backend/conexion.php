<?php

$link = 'mysql:host=localhost;dbname=api;charset=utf8'; //string de coneccion para mysql
$usuario = 'root'; //usuario de BD
$pass = '';        //contraseña BD

try{
    $pdo = new PDO($link,$usuario,$pass); //construye una clase pdo
    $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION ); 
    $pdo->setAttribute( PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf8'"); //seteo de grupo de caracteres

    //echo 'Conectado'. "<br/>";

}catch (PDOException $e) {
    print "!Error!: " . $e->getMessage() . "<br/>"; //Muestra Error de coneccion 
    die(); //mata la coneccion

}
