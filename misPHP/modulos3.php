<?php

// 1. PASO POR VALOR (Por defecto)
function duplicarValor($numero) {
    $numero = $numero * 2;
    echo "Dentro de la función (copia): $numero<br>";
}

$miNumero = 10;
duplicarValor($miNumero);

// La variable original NO cambió porque la función solo modificó su copia
echo "Fuera de la función (original intacto): $miNumero<br><br>"; 


// 2. PASO POR REFERENCIA (Usando el &)
function duplicarReferencia(&$numero) {
    $numero = $numero * 2;
    echo "Dentro de la función por referencia: $numero<br>";
}

$miOtroNumero = 10;
duplicarReferencia($miOtroNumero);

// ¡La variable original SÍ cambió porque modificamos directo la fuente!
echo "Fuera de la función (original modificado): $miOtroNumero";