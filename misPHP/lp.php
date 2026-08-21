<?php

/* /** Esta funcion determina si un numero ingresado como parametro es multiplo de 2
 * @param INT $numero
 * @return Boolean
 *

function esMultiplode2($numero){
    return (($numero % 2)==0);
}

// ALGORITMO

echo "Ingrese el primer numero: ";
$numero1 = trim(fgets(STDIN));

echo "Ingrese el segundo numero: ";
$numero2 = trim(fgets(STDIN));


echo "El numero $numero1 ". (esMultiplode2($numero1)? " es multiplo de 2 \n ": " no es multiplo de 2 \n ");

echo "El numero $numero2". (esMultiplode2($numero2)? " es multiplo de 2 \n ": " no es multiplo de 2 \n ");
 */



/* 
CALCULANDO FÓRMULAS PARA UN TRIÁNGULO 
a) Diseñar módulos  con nombres significativos para cada punto: 
i) Recibiendo como parámetro el lado de un triángulo equilátero, retornar su perímetro 
ii) Recibiendo como parámetro el lado de un triángulo equilátero, retornar el valor de la altura. 
iii) Recibiendo como parámetro el lado de un triángulo equilátero, retornar su área 
Tip: Recuerde que si conoce cuánto mide un lado del triángulo equilátero, entonces altura= √ (lado2 − (lado/2) 2) 
b) Diseñar un programa principal que lea cuánto mide el lado de un triángulo equilátero en cm (tipo entero) y 
luego llame a ejecutar cada uno de los módulos anteriores y muestre los resultados por pantalla con un cartel 
con el siguiente formato: 
“Dado un triángulo equilátero de lado 4 cm, su perímetro es 12 cm y su área es 6,92820323027551 cm2” 

*/

/** Este modulo calcula el perimetro de un triangulo equilatero
 * @param INT $lado
 * @return INT
 */


function perimetro($lado){
    $perim= $lado * 3;
    return $perim;
}

/** Este modulo calcula el valor de la altura de un triagunlo equilatero
 * @param INT $lado
 * @return INT $lad4
 */

function altura($lado){
// INT: $lado, $lad1, $lad2, $lad3, $lad4
$lad1= pow($lado,2);
$lad2= pow(($lado/2),2);
$lad3= ($lad1 - $lad2);
$lad4= sqrt($lad3);
return $lad4;
}

/** Este modulo calcula el area de un triangulo equilatero
 * @param INT $lado
 * @return FLOAT $ar
 */

function area($lado){
    
    $dr= altura($lado);
    $ar= (($lado * $dr) /2);
    return $ar;

}

//ALGORITMO

echo "Ingrese la medida de 1 lado del triangulo equilatero: ";
$lado= trim(fgets(STDIN));

echo "Dado un triangulo equilatero de $lado centimetros, su perimetro es: ". perimetro($lado). " centiemtros y su area es: ". area($lado);

?>