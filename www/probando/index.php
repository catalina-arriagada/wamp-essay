<?php

echo 'hola ','mundo \n '; 

$mivar = 123;
$a = 123;

echo $mivar.$a;

//$mivar ='HOLA'; error porque no es un numero,es string, ynose pueden sumar strings
echo $mivar+$a;

if ($a != 123) {
    echo 'verdadero';
}
else {
    echo 'falso';
}
