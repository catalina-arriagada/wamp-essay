<?php

echo 'editar.php?id=1&color=primary&descripcion=este color es azul';
/////archivo-?-como url,y acontinuacion definir paramentros
///////////////variable id q vale 1
//////////////////& concatenar variables,ahora viene otra var
//////////////////////////le asigno la variable primary a la var
//////////////////////////////////////////////dentro de la var descripcion escribir "estecoesazul"

//3 parametros= id ,color, y ,descripcion
//podria recibir los parametros estos por get:
$id = $_GET['id']; //'id' pasaselo a la var definida aki: $id
$color = $_GET['color'];
$descripcion = $_GET['descripcion'];

//echo:imprime, muestra en pantalla:
//echo $id;
//echo '<br>';//salto de parrafo
//echo $color;
//echo '<br>';
//echo $descripcion;

//en caso de modificacion:
include_once 'conexion.php'; //q incluya lo de mi base de datos mariaDB en mi codigo

$sql_editar = 'UPDATE COLORES SET color=?, descripcion=? WHERE id=? ';//''secuencia para actualizar dentro de basededatos en lenguaje sql//actualiza 2campos cuando el id sea algo q le entregue
$sentencia_editar = $pdo->prepare($sql_editar);//->acontinuacion palabra reservada pa instruccoon,ejecuta el sgte comando...
$sentencia_editar->execute(array($color,$descripcion,$id));//orden q quiero q se inyecte codigo x fuerac,d y id como en linea 26





