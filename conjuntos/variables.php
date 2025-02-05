<?php

        //VARIABLES:
//Se declaran asi:
$edad = 31;

//Pueden empezar por cualquier carácter menos un número
$piso = 31; //Valido
$3escalera = 2; //Invalido

//El valor puede ser de varios tipos
$nombre = 'Lucas';
$edad = 19;
$altura = 1.75;
$mayorEdad = True;

echo $edad;

//Visibilidad de las variables
$localizacion = 'Pontevedra'; //Local
$propietario = 'Dani Nunez';
global $propietario; //Global

        //CONSTANTES:

define('Gravedad', 9.8);
//En cambio su nombre se reprensenta sin $
echo Gravedad;

const GRAVEDRAD = 9.8; //Otra sintaxis que quiere decir lo mismo


        //CONCADENAR
//No es lo mismo comillas dobles que simples, dobles seria como en python print(f"") y simples print("") a secas
$texto1 = 'Atapuerca';
$texto2 = "Museo de la Evolución";

echo "Me gusta ir a $texto1";
echo 'Me gusta ir a $texto1';

        //OPERACIONES MATEMATICAS

$num1 = 5;
$num2 = 3;
$resultado = $num1 + $num2;
$resultado = $num1 - $num2;
$resultado = $num1 * $num2;
$resultado = $num1 / $num2;
$resultado = $num1 % $num2;
$resultado = $num1 ** $num2;
echo $resultado;



?>