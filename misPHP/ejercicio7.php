<?php
// 1. Datos
echo "Ingrese el nombre del alumno: ";

// 2. Guardamos la variable
$nombre = trim(fgets(STDIN));

// 3. Unimos los textos con el punto y mostramos el resultado
echo "Bienvenida a la programación " . $nombre;
?>