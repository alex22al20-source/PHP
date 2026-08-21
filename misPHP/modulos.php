<?php

// Función que recibe dos parámetros ($base y $altura)
function calcularAreaRectangulo($base, $altura) {
    $area = $base * $altura;
    return $area; // Devuelve el resultado al código principal
}

// Guardamos el valor retornado en una variable
$resultadoFinal = calcularAreaRectangulo(5, 10);

echo "El área del rectángulo es: " . $resultadoFinal;