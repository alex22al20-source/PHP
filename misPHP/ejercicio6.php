<?php
// Datos
echo "Ingrese el primer número: ";
$num1 = trim(fgets(STDIN));

echo "Ingrese el segundo número: ";
$num2 = trim(fgets(STDIN));

// Proceso
$auxiliar = $num1;
$num1 = $num2;
$num2 = $auxiliar;

// Muestra en pantalla
echo "Ahora el primer número es: " . $num1 . "\n";
echo "Ahora el segundo número es: " . $num2 . "\n";
?>