<?php
//Datos
echo "Ingrese la medida del radio R: ";
$radio = trim(fgets(STDIN));

// Proceso
$diametro = 2 * $radio;
$perimetro = 2 * 3.1416 * $radio;
$supCirculo = 3.1416 * $radio * $radio;
$volEsfera = (4 * 3.1416 * $radio * $radio * $radio) / 3;
$supEsfera = 4 * 3.1416 * $radio * $radio;

// Muestra en pantalla
echo "El diametro es: " . $diametro . "\n";
echo "El perimetro es: " . $perimetro . "\n";
echo "La superficie del circulo es: " . $supCirculo . "\n";
echo "El volumen de la esfera es: " . $volEsfera . "\n";
echo "La superficie de la esfera es: " . $supEsfera . "\n";
?>