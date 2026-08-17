<?php
// Realizar un algoritmo a elección sonde se usen las siguientes funciones y operadores: pow(base,exponente). 
// Sqrt(num). Mod (%), entero (int).operador condicional.  Concatenación. Salto de línea, suma, resta, multiplicaion, 
// división. abs() . round(float), max(num1, num2, num3). min(num1, num2, num3). rand(1, 10). is_numeric(variable). 


$numero1=rand(1,10);
$numero2=rand(1,10);
$numero3=rand(1,10);

$MasAlto= max($numero1, $numero2, $numero3);
$MasBajo= min($numero1, $numero2, $numero3);


$potencia= pow($numero1, 2) + pow($numero2, 2);
$raiz= round(sqrt($potencia));
$decimales= ($numero1 + $numero2) * 0.20;
$numeroEntero= (int) ($decimales);
$ValorAbsoluto= abs($numero2 - $numero3);

$division= $numero1 / $numero2;

$Resto= $numero1 % $numero2;
echo "Ingresa tu edad: ";
$edad=trim(fgets(STDIN));
 




echo "El resultado de la potencia entre los numeros: ". $numero1. " y". $numero2. " es:". $potencia."\n";



