<?php
// Datos
echo "Ingrese el nombre del empleado: ";
$nomEmpleado = trim(fgets(STDIN));

echo "Ingrese las horas trabajadas: ";
$horasTrab = trim(fgets(STDIN));

echo "Ingrese el valor por hora trabajada: ";
$valorHora = trim(fgets(STDIN));

// Proceso
$ganancia = $horasTrab * $valorHora;

//Resultado en pantalla
echo $nomEmpleado . " obtuvo: $ " . $ganancia;
?>
