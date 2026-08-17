<?php
// Este algoritmo convierte la cantidad de segundos ingresada a horas, minutos y segundos
//Int: $SegundosTotales, Int: $SegundosRestantes, Int: $horas, Int: $minutos, Int: $segundos

echo "Ingrese la cantidad de segundos: ";
$SegundosTotales=trim(fgets(STDIN));

$horas= intval($SegundosTotales / 3600);
$SegundosRestantes= $SegundosTotales % 3600;
$minutos= intval($SegundosRestantes / 60);
$segundos= $SegundosRestantes % 60;

echo "$SegundosTotales segundos equivalen a $horas hora(s), $minutos minuto(s), $segundos segundo(s)";


?>