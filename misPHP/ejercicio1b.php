<?php
// Pedimos los datos
echo "Ingresa un número ";
$num1 = trim(fgets(STDIN));

// Realizamos la potenciación
$resultado = $num1 * $num1;

// Mostramos el resultado
echo "El resultado de " . $num1 . " al cuadrado es: " . $resultado;
?>