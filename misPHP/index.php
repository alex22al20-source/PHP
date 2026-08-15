<?php
//DATOS
echo "Para vos, ¿Quíen fue el peor jugador del partido Brasil - Mexico?: ";
$jugador1 = strtolower(trim(fgets(STDIN)));

echo "¿Quíen fue el mejor jugador del partido?: ";
$jugador2 = strtolower(trim(fgets(STDIN)));

// PROCESO
if($jugador1 == "vinicius" && $jugador2 == "rapinha"){
    echo "Viste el partido con los ojos cerrados bro? Vini fue el mejor, qué decis";
}else if($jugador1 == "rapinha" && $jugador2 == "vinicius"){
    echo "See, alto muerto, no hizo una verga el culerdo ese.\n"; 
    echo "Concuerdo, Vini jugó 10 puntos.";
}else{
    echo "Que decis pelotudo, vos veías barbie mientras se jugaba tremendo partido";
}


?>