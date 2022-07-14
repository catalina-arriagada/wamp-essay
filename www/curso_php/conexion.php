<?php

$link = 'mysql:host=localhost;dbname=colores_bd;charset=utf8'; //todo lo de dentro del parentesis insertalo en cajita link
//por defecto toma el puerto 3306
 /*todo lo de dentro sera codigo php. Si dentro incluimos codigo html o css, el de abajo debe ir, pero si solo usams php, podriamos omitir el cierre "?>" */
 
$usuario = 'root';
$pass = '';

try{
    $pdo = new PDO($link,$usuario,$pass);//pdo contiene q estar escrito como esta en la variable
    $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $pdo->setAttribute( PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf8'");

    //echo 'Conectado'. "<br/>";

    //foreach ($pdo->query('SELECT * FROM colores') as $fila) {
    //    print_r($fila);
    //}

}catch (PDOException $e) {
    print "!Error!: " . $e->getMessage() . "<br/>";
    die();

}
