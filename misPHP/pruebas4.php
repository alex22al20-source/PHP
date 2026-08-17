<?php

/* Este algoritmo compara la temperatura de 3 dias
Int: $dia1, $dia2, $dia3

*/
$dia1=rand(-5, 40);
$dia2=rand(-5, 40);
$dia3=rand(-5, 40);

$tempMax= max($dia1, $dia2, $dia3);
$tempMin= min($dia1, $dia2, $dia3);

$tempIdeal=22;

$desviacion=abs($dia1 - $tempIdeal);

echo "La temperatura del día 1 fue: ". $dia1. " ºC"."\n";
echo "La temperatura del día 2 fue: ". $dia2." ºC"."\n";
echo "La temperatura del día 3 fue: ". $dia3. " ºC"."\n";
echo "La temperatura más alta fue: ". $tempMax. " ºC". "\n";
echo "La temperatura más baja fue: ". $tempMin. " ªC". "\n";
echo " La desviación absoluta del día 1 respecto a ". $tempIdeal. "ºC". " fueron ".$desviacion. " grado(s)". "\n";




?>