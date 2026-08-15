<?php

// --- ENTRADA DE DATOS (Lo que el usuario escribe) ---
echo "Ingresa tu edad: ";
$edad = trim(fgets(STDIN));

echo "¿Tienes pase VIP? (si/n): ";
$respuestaVip = trim(fgets(STDIN));
$tienePaseVip = ($respuestaVip == 'si'); // Convierte 's' en true, cualquier otra cosa en false

echo "¿Eres invitado especial? (si/n): ";
$respuestaEspecial = trim(fgets(STDIN));
$esInvitadoEspecial = ($respuestaEspecial == 'si');

echo "\n--- RESULTADO ---\n";

// --- ESTRUCTURA DE LÓGICA ANIDADA ---

if ($edad >= 18) {
    echo "¡Mayor de edad confirmado!\n";

    if ($tienePaseVip == true) {
        echo "¡Excelente! Tienes pase VIP, acceso total.\n";
    } 
    else if ($esInvitadoEspecial == true) {
        echo "No tienes VIP, pero eres invitado especial. Tienes acceso a la terraza.\n";
    } 
    else {
        echo "Eres mayor de edad, pero te quedas en la zona general.\n";
    }

} else {
    echo "ACCESO DENEGADO: Debes ser mayor de 18 años para entrar.\n";
}
?>