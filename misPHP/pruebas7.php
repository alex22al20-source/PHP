<?php

echo "Ingresa tu nombre: ";
$nombre=trim(fgets(STDIN));
$NombreSinEspacios=str_replace(' ', '', $nombre);
$NombreMayus=strtoupper($NombreSinEspacios);
$NombreMinus=strtolower($NombreSinEspacios);
$CantidadCaracteres= strlen($NombreSinEspacios);
$NombreMod= str_replace('a', '@', $NombreMinus);

echo "El nombre del usuario ingresado es: ". $NombreSinEspacios. "\n";
echo "El nombre del usuario en mayusculas: ". $NombreMayus. "\n";
echo "El nombre del usuario en minusculas: ". $NombreMinus. "\n";
echo "El nombre del usuario modificado: ". $NombreMod. "\n";
echo "La cantidad de caracteres del nombre del usuario es: ". $CantidadCaracteres. "\n";


?>

