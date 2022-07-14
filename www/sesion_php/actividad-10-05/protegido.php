<?php 

session_start();

if (isset($_SESSION["nombre", "nacido", "hm"])){
    echo "Bienvenido" .$_SESSION["nombre", "nacido","hm"];
    echo <br> <a href="cerrar.php">Cerrar Sesion</a>;

}else {
    header("location:index.php");
}