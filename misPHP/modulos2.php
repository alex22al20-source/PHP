<?php

// El parámetro $moneda tiene un valor por defecto ("USD")
function convertirMoneda($cantidad, $moneda = "USD") {
    if ($moneda == "USD") {
        return $cantidad * 3.8; // Ejemplo de conversión a Soles/otra moneda
    } else {
        return $cantidad;
    }
}

echo "Convertir 100 USD: " . convertirMoneda(100) . "<br>"; // Usa el valor por defecto
echo "Convertir sin cambiar: " . convertirMoneda(50, "OTRA");