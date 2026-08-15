<?php
// Datos
echo "Ingrese un número: ";
$a = trim(fgets(STDIN));

echo "Ingrese un número: ";
$b = trim(fgets(STDIN));

// Proceso
$cociente = (int) ($a / $b);
$resto = $a - ($b * $cociente);

// Muestra en pantalla
echo "El cociente de la division entre $a y $b es: $cociente\n";
echo "El resto de la división entre $a y $b es: $resto" . PHP_EOL;
?>
