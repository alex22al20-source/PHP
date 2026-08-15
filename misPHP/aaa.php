<?php

// Este algoritmo recoge los segundos ingresados por el usuario y los convierte a horas, minutos y segundos equivalentes
// Int: $Segundos1, $horas, $minutos, $segundos

echo "Ingrese la cantidad de segundos: ";
$Segundos1=trim(fgets(STDIN));

$horas= (Int) ($Segundos1 / 3600);

$minutos= (Int) (($Segundos1 % 3600) / 60);

$segundos=($Segundos1 % 60);

echo $horas. "hora(s), ". $minutos. "minuto(s), ". $segundos. "segundos";

?>


/* ALGORITMO ConversorSegundosAHoras (⌀)
ENTERO segundos1, horas, minutos, segundos
ESCRIBIR("Ingresa la cantidad de segundos ");
LEER(segundos1)

horas<-(ENTERO) (segundos1 / 3600);
minutos<- (ENTERO) (Segundos1 MOD 3600);
segundos<-(segundos1 MOD 60);

ESCRIBIR(horas+"hora(s) "+ minutos+ "minuto(s)" + segundos + "segundo(s)");

FIN ALGORITMO ConversorSegundosAHoras



promedios
funciones de matematica y cadenas de texto
area de rectangulo
pasar grados celsius
calcular el IVA
Formula de fisica
Sumar, restar, multiplicar y dividir


string, se pueden guardar puntos, barras, lo que sea que no sea un numero, ni logico. Se pueden guardar comillas pero es necesario utilizar una escritura especial.




*/



