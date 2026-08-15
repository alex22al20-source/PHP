<?php


echo "Ingrea tu edad teletubi: ";
$edad = trim(fgets(STDIN));

// Proceso
if($edad ==18){
    echo "Vamos dejando la paja bro"."\n";
}else if($edad >=19 && $edad <=25){
    echo "Dale tranqui, ya estás en la edad en donde estornudar te deja contracturado 3 días"."\n";
}else if($edad >=26 && $edad <=40){
    echo "Comó vamos con la ciática bro?"."\n";
}else{
    echo "Vamos dejando el roblox"."\n";
}

?>