<?php

$login = "Cata", "1900", "Mujer";

$_SESSION["nombre, nacido, hm"] = $login;

if (isset($_SESSION["nombre", "nacido", "hm"])){
    echo "Sesión iniciada";
}
else {
    echo "No se ha iniciado sesión"
}
?>