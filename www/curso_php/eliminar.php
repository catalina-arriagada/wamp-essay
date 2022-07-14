<?php

include_once 'conexion.php';

$id = $_GET['id']; //recibo ID desde HTML (['id'])y lo paso a PHP a la variable $id

$sql_eliminar = 'DELETE FROM COLORES WHERE id=?';
$sentencia_eliminar = $pdo->prepare($sql_eliminar); //transforma para q mysql entienda la sentencia (lenguaje) .prepara sentencia mysql
$sentencia_eliminar->execute(array($id)); //ejecutar la sentencia mysql, con él reemplazo el signo "?" por la variable php

header('location:index.php');//dp de q elimine kiero q me lleve al index.php
//refresca index