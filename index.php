<?php 

echo "Este es mi primer programa en PHP </br>";

//Esto es un ejemplo de comentario en PHP

/* Esto es un ejemplo
de comentarios de muchas líneas */

// Declaramos dos variables

$valor_b = 12; //Creamos una variable de nombre valor_b y asignamos el valor 12
$valor_c = 15; //Creamos una variable de nombre valor_c y asignamos el valor 15

$resultadoTotal = $valor_b + $valor_c;

echo "El resultado de la suma es = " .$resultadoTotal."</br>";

//Realizamos el proceso de resta
$restaTotal = $valor_b - $valor_c;
echo "El resultado de la resta es = " .$restaTotal."</br>";

//Realizamos el proceso de multiplicación
$productoTotal = $valor_b * $valor_c;
echo "El resultado de la multiplicación es = " .$productoTotal."</br>";

//Realizamos el proceso de división
$divisionTotal = $valor_b / $valor_c;
echo "El resultado de la división es = " .$divisionTotal."</br>";

?>