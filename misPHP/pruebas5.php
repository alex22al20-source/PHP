<?php

/*Este algoritmo simula el impacto de un misil y calcula su daño basandose en la distancia y la potencia 

*/ 

$cordenadas=rand(1,20);
$PosJugadorX=rand(1,20);
$PosJugadorY=rand(1,20);
$ObjetivoJugX=rand(1,20);
$ObjetivoJugY=rand(1,20);

$CompCorXmax= max($PosJugadorX, $ObjetivoJugX);
$CompCordXmin= min($PosJugadorX, $ObjetivoJugX);

$DistanciaAbsoX=abs($PosJugadorX - $ObjetivoJugX);
$DistancaiAbsoY=abs($PosJugadorY - $ObjetivoJugY);

$PotenciaX= ($DistanciaAbsoX ** 2);
$PotenciaY= ($DistancaiAbsoY ** 2);


?>