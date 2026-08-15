<?php

// --- RECOLECCIÓN DE DATOS ---
echo "--- SISTEMA DE EVALUACIÓN ANUAL ---\n";

echo "Ingresa años de antigüedad: ";
$antiguedad = (int)trim(fgets(STDIN));

echo "Ingresa calificación de desempeño (1 al 10): ";
$calificacion = (int)trim(fgets(STDIN));

echo "¿Cumplió con los objetivos extra? (s/n): ";
$respuestaObjetivos = trim(fgets(STDIN));
$cumplioObjetivos = ($respuestaObjetivos == 's');

echo "\n--- RESULTADO FINAL ---\n";

// --- ESTRUCTURA DE LÓGICA ANIDADA Y ELSE IF ---

// Capa 1: ¿Es empleado antiguo (más de 2 años)?
if ($antiguedad >= 2) {
    echo "Estado: Empleado con antigüedad verificada.\n";

    // Capa 2: Evaluación de desempeño
    if ($calificacion >= 8) {
        echo "Desempeño excelente. ";

        // Capa 3: Evaluación de objetivos extra (Anidada dentro de desempeño alto)
        if ($cumplioObjetivos == true) {
            echo "¡Bono máximo otorgado!\n";
        } else {
            echo "Bono estándar otorgado.\n";
        }

    } else if ($calificacion >= 5) {
        // Opción alternativa si el desempeño es aceptable (pero no excelente)
        echo "Desempeño aceptable. ";
        
        if ($cumplioObjetivos == true) {
            echo "Bono parcial otorgado por cumplimiento de objetivos.\n";
        } else {
            echo "No hay bono, pero se requiere capacitación.\n";
        }

    } else {
        // Si el desempeño es bajo
        echo "Desempeño insuficiente. Se requiere revisión de contrato.\n";
    }

} else {
    // Si no cumple la antigüedad mínima (Capa 1)
    echo "Estado: Empleado en periodo de prueba, no aplica a evaluación de bono.\n";
}

?>