<?php

header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *"); //Cors bloqueo

if($_GET['moneda']=='euro' || $_GET['moneda']== 'dolar'){

    include_once 'conexion.php';

    $sql = 'SELECT * FROM '.$_GET['moneda'];
    $sentencia = $pdo->prepare($sql);
    $sentencia ->execute();
    $datos = $sentencia->fetchall();

}else{
    echo 'Solicitud no encontrada';
}


echo json_encode($datos);


