<?php

declare(strict_types=1);

/** Este modulo recibe dos paramtros de tipo entero y retorna un resultado
 *@param INT $a
 *@param INT $b
 *@return INT
 */

 function potencia($a, $b){
    // Int: $a, $b, $c, 
    $c= pow($a, $b);
    return $c;


 }

 echo "Ingresa el primer numero: ";
 $base= trim(fgets(STDIN));

 echo "Ingresa el segundo numero: ";

 $expo= trim(fgets(STDIN));

$result= potencia($base, $expo);

echo "El resultado es: ". $result;

?>



