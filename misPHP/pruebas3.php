<?php

/* Este algoritmo calcula precios y descuentos

*/

echo "Ingrese el precio del producto: ";
$precioBase=trim(fgets(STDIN));

echo "Ingrese el porcentaje de descuento del producto: ";
$desc=trim(fgets(STDIN));

$descuento= $precioBase * ($desc / 100);

$precioDes= abs($precioBase - $descuento);

$precioFinal= round($precioDes,2);


echo "El precio final es de: ". $precioFinal. ", el cual ya incluye un descuento del ". $desc. "%";


?>