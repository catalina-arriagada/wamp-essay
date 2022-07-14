<?php
$user = $_POST['user']; //asigna valores de HTML ingresadas en formularios, a una variable PHP
$password =$_POST['password']; //asigna valores de HTML ingresadas en formularios, a una variable PHP

include_once 'conection.php';

//$consult = 'SELECT * FROM users WHERE name ="'.$user.'" and password="'.$password;
$consult = 'SELECT * FROM users WHERE name=? and password=?'; //como hacerlo: asigna auna variable PHP un string con sentencia sql. para que: Generaremos una consulta a la tabla para saber si existe nuestro usuario.
$unico = $pdo->prepare($consult); //convierte un string en codigo legible para Mysql dejandolo en una variable PHP ($unico)
$unico->execute(array($user,$password)); //ejecuta en mysql sentencia enviada
$rows = $unico->fetch(); //convierte a un arreglo el $rows, para q php pueda entender y manejar

if ($rows) { //si la variable $rows es true entonces
    
    ?>
    <?php 
    include("index.php");//llamo a index.php a bd php
    ?>
    <br>
    <h3 class = "exito">Felicidades, su ingreso ha sido autorizado</h3><!--muestra mensaje de exito, usuario y contraseña se encuentra en la bd mysql-->

    <?php
} else {
    ?>
    <?php 
    include("index.php");
    ?>
    <br>
    <h3 class = "error">Lo sentimos, el usuario y/o contraseña que ha ingresado no se encuentra registrado en la base de datos</h3> <!--muestra mensaje de error, usuario y/o contraseña no se encuentra en la bd mysql-->
    <?php
}



