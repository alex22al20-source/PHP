<?php
// Datos
echo "Ingresa tu primera nota: ";
$nota1 = trim(fgets(STDIN));

echo "Ingresa tu segunda nota: ";
$nota2 = trim(fgets(STDIN));

echo "Ingresa tu tercera nota: ";
$nota3 = trim(fgets(STDIN));

// Proceso
$resultado = round(($nota1 + $nota2 + $nota3) / 3, 1);

// Muestra el promedio 
echo "Tu promedio es: " . $resultado;
?>