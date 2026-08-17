<?php

/*Este algoritmo calcula la distancia absoluta entre dos puntos
 Int: $distancia1, distancia2, distanciaTotal */

echo "Ingrese la distancia 1 :";
$distancia1=trim(fgets(STDIN));

echo "Ingrese la distancia 2: ";
$distancia2=trim(fgets(STDIN));

$distanciaTotal= abs($distancia1 - $distancia2);

echo "La distancia absoluta entre ". $distancia1. " y ". $distancia2. " es: $distanciaTotal";



?>
