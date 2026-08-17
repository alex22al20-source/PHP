
<?php
/*
ALGORITMO promedios (no retorna) ⌀
(* Este algoritmo lee 4 notas que ingresa el usuario y posteriormente muestra el promedio *)
REAL nota1, nota2, nota3, nota4, nota5, nota6, nota7, nota8, promedio1, promedio2, promedioFinal


ESCRIBIR ("Ingrese la nota 1: ");
LEER(nota1);

ESCRIBIR ("Ingrese la nota 2: ");
LEER(nota2);

ESCRIBIR ("Ingrese la nota 3: ");
LEER(nota3);

ESCRIBIR ("Ingrese la nota 4: ");
LEER(nota4);

ESCRIBIR ("Ingrese la nota 5: ");
LEER(nota5);

ESCRIBIR ("Ingrese la nota 6: ");
LEER(nota6);

ESCRIBIR ("Ingrese la nota 7: ");
LEER(nota7);

ESCRIBIR ("Ingrese la nota 8: ");
LEER(nota8);


promedio1<-(nota1 + nota2 + nota3 + nota4) / 4;

promedio2<-(nota5 + nota6 + nota7 + nota8) / 4;

promedioFinal<- (promedio1 + promedio2);

ESCRIBIR ("El promedio es: " + promedioFinal);

FIN ALGORITMO promedios

*/


/* Este algoritmo lee 8 notas ingresadas por el usuario y muestra un promedio
Float: $nota1, $nota2, $nota3, $nota4, $nota5, $nota6, $nota7, $nota8, $promedio1, $promedio2, $promedioFinal
*/


echo "Ingresa la nota 1: ";
$nota1=trim(fgets(STDIN));

echo "Ingresa la nota 2: ";
$nota2=trim(fgets(STDIN));

echo "Ingresa la nota 3: ";
$nota3=trim(fgets(STDIN));

echo "Ingresa la nota 4: ";
$nota4=trim(fgets(STDIN));

echo "Ingresa la nota 5: ";
$nota5=trim(fgets(STDIN));

echo "Ingresa la nota 6: ";
$nota6=trim(fgets(STDIN));

echo "Ingresa la nota 7: ";
$nota7=trim(fgets(STDIN));

echo "Ingresa la nota 8: ";
$nota8=trim(fgets(STDIN));


$promedio1= ($nota1 + $nota2 + $nota3 + $nota4) / 4;

$promedio2= ($nota5 + $nota6 + $nota7 + $nota8) / 4;

$SumaPromedios= ($promedio1 + $promedio2);

echo "El promedio es: ". $SumaPromedios;

?>




