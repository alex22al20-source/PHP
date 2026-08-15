<?php
// Datos
echo "Ingrese el monto de su sueldo inicial: ";
$suelInicial = trim(fgets(STDIN));

echo "Ingrese el sueldo deseado: ";
$suelDeseado = trim(fgets(STDIN));

// Proceso
$aumento = $suelDeseado - $suelInicial;
$porcentaje = ($aumento * 100) / $suelInicial;

// MUestra en pantalla
echo "El porcentaje de aumento debe ser: " . $porcentaje . "%";
?>