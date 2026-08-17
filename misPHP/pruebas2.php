<?php

/* Este algorotimo compara dos tiradas de un dado
Int: $dado1, $dado2, $MasAlta, $MasBaja. Float: $promedio, $promedioRedondeado */

$dado1=rand(1,6);
$dado2=rand(1,6);

$MasAlta=max($dado1, $dado2);
$MasBaja=min($dado1, $dado2);

$promedio=($dado1 + $dado2) / 2;
$promedioRedondeado=round($promedio, 1);

echo "Resultado del dado 1: ". $dado1. "\n";
echo "Resultado del dado 2: ". $dado2. "\n";
echo "Tirada más alta (max): ". $MasAlta. "\n";
echo "Tirada más baja (min): ". $MasBaja. "\n";
echo "Promedio redondeado: ". $promedioRedondeado. "\n";


?>
