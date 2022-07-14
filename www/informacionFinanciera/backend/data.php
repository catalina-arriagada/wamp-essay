<?php
//permite visualizar API en formato JSON:
header('Content-Type: application/json');
//permite consultar todos los servicios de la API:
header('Access-Control-Allow-Origin: *');

//si lo que obtengo es igual a una moneda-financiera UF o UTM, entonces...
if($_GET['moneda-financiera'] == 'uf' || $_GET['moneda-financiera'] == 'utm'){
    //incluyo el archivo connection.php y conecto a mi bd a traves de el:
    include_once 'connection.php';

    //genero select sql y traigo el contenido de la tabla correspondiente(uf o utm):
    $sql = 'SELECT * FROM '.$_GET['moneda-financiera'];
    //preparo la informacion para la consulta sql (guardada en $sql), la guardo en $command, a traves de la variable reservada $pdo:
    $command = $pdo->prepare($sql);
    //ejecuto la consulta de $command:
    $command->execute();
    //parseo la informacion en una variable en formato array:
    $data = $command->fetchAll();
}
//si no se cumple lo anterior, ejecuto...
else {
    //muestro en pantalla lo que está entre comillas:
    echo 'Su petición no ha sido encontrada en la base de datos';
}
//al final, muestro los datos dentro del json codificado:
echo json_encode($data);