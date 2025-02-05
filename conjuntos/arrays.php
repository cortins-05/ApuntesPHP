<?php

//Lista simple, puede ser de cualquier tipo incluso mezclados
$lista = [
    'Lunes',
    'Martes',
    'Miercoles',
    'Jueves',
    'Viernes',
    'Sabado',
    'Domingo'
];

echo $lista[0];
echo $lista[6];

//Para ver todo el contenido puedes usar la funcion var_dump
var_dump($lista);

//Crear
$planetas = [];

//Añadir
$planetas[]='Marte';
$planetas[]='Tierra';
$planetas[]='Venus';

var_dump($planetas);

//Para crear un nuevo array con el anterior unido se usa array_merge
$nuevosPlanetas = array_merge($planetas, ['Mercurio']);

var_dump($nuevosPlanetas);

//Para saber la longitud del array se usa ->
echo count($planetas);

//Cambiar el contenido de un array:
$planetas[2] = 'Saturno';

//Eliminar un elemento de un array:
unset($planetas[1]); //Borrariamos la Tierra

var_dump($planetas); //Como ves desordena las posiciones
?>