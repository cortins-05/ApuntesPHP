<?php

//DOS DIMENSIONES
$zara =[
    123 => [
        'nombre' => 'Camisa de cuadros',
        'precio' => 29.95,
        'sexo' => 'hombre'
    ],
    234 => [
        'nombre' => 'Falda manga',
        'precio' => 19.95,
        'sexo' => 'Mujer'
    ],
    345 => [
        'nombre' => 'Bolso minúsculo',
        'precio' => 50,
        'sexo' => 'Mujer'
    ]
];

var_dump($zara);

echo $zara[345]['nombre']; //Bolso minúsculo



?>