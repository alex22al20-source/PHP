<?php

/**
 * Módulo que imprime el cartel de caños
 * @param void
 * @return void
 */
function canos() {
    echo "+-----+               +-----+\n";
}

/**
 * Módulo que imprime el cartel de campo
 * @param void
 * @return void
 */
function campo() {
    echo "|                           |\n";
}

/**
 * Módulo que imprime el cartel de linea media
 * @param void
 * @return void
 */
function linea_media() {
    echo "|              |            |\n";
}

/**
 * Módulo que imprime el cartel de linea de banda
 * @param void
 * @return void
 */
function linea_banda() {
    echo "+-----------------------------+\n";
}

/**
 * Programa principal que arma la cancha llamando a los módulos anteriores
 * @param void
 * @return void
 */
function principal() {
    linea_banda();
    canos();
    campo();
    campo();
    canos();
    linea_banda();
    
    linea_media();
    
    linea_banda();
    canos();
    campo();
    campo();
    canos();
    linea_banda();
}

// Ejecución del programa principal
principal();

?>