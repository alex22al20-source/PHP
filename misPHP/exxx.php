<?php

// 3) hacer un algoritmo a elección donde se use: print, strlen, trim (imprimir el valor antes y después de usarlo).
// strtoupper(). strtolower() . strpos($texto, "palabra a buscar") (opcional) . 
//substr(texto, inicio, cantidad). str_starts_with($archivo, "foto"). str_ends_with($archivo, ".jpg");


echo "Ingresa tu nombre: ";
$nombre=trim(fgets(STDIN));

$nombreMinus=strtoupper($nombre);
$nombreMayus=strtolower($nombre);
echo strlen($nombre); //va a contar la cantidad de caracteres incluidos los espacios y su ocupacion en la memoria en bytes



$verd=" I hate birds";
$verd2= "hate";

$ext= substr($verd, 1,6);
echo $ext;


$res= strpos($verd, $verd2);





?>





/*ALGORITMO area y perimetro (no retorna) ⌀
REAL, base, altura, area, perimetro

ESCRIBIR ("Ingresa la medida de la base del rectangulo: "):
LEER(base):

ESCRIBIR ("ingresa la medida de la altura del rectangulo: ");
LEER(altura);

area<- (base * altura)
perimetro<- (base *2) + (altura *2);

ESCRIBIR ("El perimetro del rectangulo es: "+ permitro + ", Y el area es: "+ area);

FIN ALGORITMO area y perimetro



*/


