<?php

header('Content-Type: application/json'); //Permite visualizar API en formato json
header("Access-Control-Allow-Origin: *"); //Cors desbloqueo del consumo 

if($_GET['moneda']=='euro' || $_GET['moneda']== 'dolar'){

    include_once 'conexion.php'; //permite coneccion con base de datos

    $sql = 'SELECT * FROM '.$_GET['moneda']; //select con la tabla correspondiente
    $sentencia = $pdo->prepare($sql);        //prepara la info para una consulta
    $sentencia->execute();                  //executa la consulta
    $datos = $sentencia->fetchall();         //parceo la info en una variable en formato arreglo

}else{
    echo 'Solicitud no encontrada';
}

echo json_encode($datos);                   // mostrar mi arreglo en formato json

//borrador
//http://localhost/API/backend/euro
//http://localhost/API/backend/dolar
