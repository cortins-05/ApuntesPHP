<?php
$palabra = 'abcdef';
echo $palabra[2]; //c

//Los strings puede ser usado como un array
$palabra[2] = 'Z';
echo $palabra;

//Convertir un string en un array
$frase = 'En un lugar de la mancha';
$arrayFrase = preg_split('/[\s,]+/', $frase);
var_dump($arrayFrase);
?>