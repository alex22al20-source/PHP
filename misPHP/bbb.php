<?php
// Este algoritmo calcula la velocidad de un vehiculo en base a la distancia y el tiempo ingresados por el usuario
// Int: $distancia, $tiempo, $velocidad.

echo "Ingresa la distancia recorrida por el vehiculo (expresada en kilometros sin metros agregados: ";
$distancia=trim(fgets(STDIN));

echo "Ingresa el tiempo que tardó el vehiculo (expresada en horas sin minutos agregados: ";
$tiempo=trim(fgets(STDIN));
If(is_numeric($tiempo)){
    If($tiempo<=0){
    echo "El calculo no es posible";
}else{
    $velocidad= $distancia / $tiempo;

echo "El auto recorre a ". $velocidad. " kilometros por hora";
}
}

?>

