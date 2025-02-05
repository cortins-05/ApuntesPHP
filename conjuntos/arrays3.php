<?php
//Diccionario
$empleados = [
    'Juan' => 34,
    'Luisa' => 56
];

echo $empleados['Luisa'];

//Añadir
$empleados['Manolo']=99;
var_dump($empleados);

//Modificar
$empleados['Manolo'] = 11;
var_dump($empleados);

//Borrar de la misma forma que un array
unset($empleados['Manolo']);
var_dump($empleados);
?>