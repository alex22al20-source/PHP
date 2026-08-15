<?php
// 1. Pedimos los tres números
echo "Ingrese un número ";
$num1 = trim(fgets(STDIN));

echo "Ingresa un número ";
$num2 = trim(fgets(STDIN));

echo "Ingresa un número ";
$num3 = trim(fgets(STDIN));

// 2. Realizamos la suma
$resultado = $num1 + $num2 + $num3;

// 3. Unimos los textos con el punto y mostramos el resultado
echo "El resultado de la suma es: " . $resultado;
?>