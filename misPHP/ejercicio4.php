<?php
// Datos
echo "Ingrese la suma de dinero: ";
$suma = trim(fgets(STDIN));

echo "Ingrese el número de cuotas: ";
$cuotas = trim(fgets(STDIN));

echo "Ingrese el porcentaje de interés: ";
$porcentaje = trim(fgets(STDIN));

//Proceso
$cuoTotal = ($suma / $cuotas) + ($suma / $cuotas) * ($porcentaje / 100);

//Muestra en pantalla
echo "Debe abonar: $" . $cuoTotal;
?>