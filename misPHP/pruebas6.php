<?php
/**
 * SIMULADOR DE IMPACTO TÁCTICO INTERACTIVO
 * 
 * Funciones matemáticas integradas: readline, rand, max, min, abs, pow, sqrt, round.
 * Ejecútalo en tu terminal con: php tactico_interactivo.php
 */

echo "===========================================================\n";
echo "===     BIENVENIDO AL SIMULADOR DE PROYECTILES TÁCTICOS   ===\n";
echo "===========================================================\n\n";

// 1. ENTRADA DE DATOS POR PANTALLA (SCREEN INPUT)
// Usamos readline() para que el usuario escriba las coordenadas en tiempo de ejecución.
echo "--- CONFIGURACIÓN DE POSICIONES ---\n";
$jugadorX = (int) readline("Ingresa la coordenada X del Jugador (ej. 5): ");
$jugadorY = (int) readline("Ingresa la coordenada Y del Jugador (ej. 5): ");
$objetivoX = (int) readline("Ingresa la coordenada X del Objetivo (ej. 15): ");
$objetivoY = (int) readline("Ingresa la coordenada Y del Objetivo (ej. 12): ");

echo "\n-----------------------------------------------------------\n";
echo "Procesando coordenadas ingresadas...\n";
echo "-----------------------------------------------------------\n\n";

// 2. COMPARACIÓN DE LÍMITES CON max() Y min()
// Analizamos cuál posición está más lejos o más cerca en el eje horizontal (X).
$maximaCoordenadaX = max($jugadorX, $objetivoX);
$minimaCoordenadaX = min($jugadorX, $objetivoX);

echo ">> [max y min] Analizando el eje X:\n";
echo "   El límite horizontal más lejano es la coordenada: " . $maximaCoordenadaX . "\n";
echo "   El límite horizontal más cercano es la coordenada: " . $minimaCoordenadaX . "\n\n";

// 3. DISTANCIA ABSOLUTA CON abs()
// Calculamos la separación exacta entre puntos sin importar si el resultado es negativo.
$distanciaX = abs($jugadorX - $objetivoX);
$distanciaY = abs($jugadorY - $objetivoY);

echo ">> [abs] Calculando la separación lineal en cada eje:\n";
echo "   Distancia absoluta horizontal (X): " . $distanciaX . " unidades\n";
echo "   Distancia absoluta vertical (Y): " . $distanciaY . " unidades\n\n";

// 4. POTENCIA CON pow()
// Elevamos las distancias al cuadrado para prepararlas para el Teorema de Pitágoras.
$catetoA = pow($distanciaX, 2);
$catetoB = pow($distanciaY, 2);

echo ">> [pow] Aplicando potencia al cuadrado para geometría:\n";
echo "   Cuadrado de la distancia X ($distanciaX al cuadrado): " . $catetoA . "\n";
echo "   Cuadrado de la distancia Y ($distanciaY al cuadrado): " . $catetoB . "\n\n";

// 5. RAÍZ CUADRADA CON sqrt()
// Sumamos los cuadrados y extraemos la raíz para obtener la distancia real en diagonal.
$sumaCuadrados = $catetoA + $catetoB;
$distanciaReal = sqrt($sumaCuadrados);

echo ">> [sqrt] Teorema de Pitágoras (Suma de cuadrados y raíz cuadrada):\n";
echo "   La distancia real en línea diagonal que viajará el proyectil es de: " . $distanciaReal . " metros\n\n";

// 6. FACTOR ALEATORIO CON rand()
// Simulamos una pequeña ráfaga de viento o resistencia del aire aleatoria.
// Generamos un número entre 1.0 y 1.5 dividido entre 10 para darle realismo decimal.
$factorViento = rand(10, 15) / 10;
echo ">> [rand] Generando factor ambiental aleatorio (viento):\n";
echo "   Coeficiente de resistencia del aire detectado: " . $factorViento . "\n\n";

// 7. REDONDEO CON round()
// Calculamos el impacto final multiplicando la distancia real, el viento, y un multiplicador de daño.
$dañoBruto = $distanciaReal * 3.75 * $factorViento;
$impactoFinal = round($dañoBruto, 2);

echo "===========================================================\n";
echo "===                RESULTADO DEL IMPACTO                ===\n";
echo "===========================================================\n";
echo ">> [round] Formateando el puntaje final a 2 decimales:\n";
echo "   Daño total calculado: " . $impactoFinal . " puntos de impacto.\n";
echo "===========================================================\n";
?>