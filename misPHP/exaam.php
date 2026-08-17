<?php

/*Este algoritmo calcula el consumo de combustible de un auto
Float: $distancia, $gasolina, $consumo
*/

echo "Ingresa la distancia recorrida por el auto (en kilometros): ";
$distancia=trim(fgets(STDIN));

echo "Ingresa el consumo del auto cada 100 kilometros: ";
$gasolina=trim(fgets(STDIN));

 $consumo= ($distancia * $gasolina) / 100;

 echo "El auttomovil consume: ". $consumo. " litros de gasolina en ". $distancia. " kilometros de viaje";

?>