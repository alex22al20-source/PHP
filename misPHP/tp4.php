<?php

/**Este modulo imprime el cartel caños
 * 
 */

function caños(){
    echo "+----+               |              +----+\n";
}


/** Este modulo imprime el cartel campo
 * 
 */
function    Campo(){
    echo "|                    |                   |\n";
}


/**Este modulo imprime el cartel Linea Media
 * 
 */

function LineaMedia(){
    echo "|    |               |              |    |\n";
}


/** Este modulo imprime el cartel Linea de Banda
 * 
*/

function LineadeBanda(){
    echo "+--------------------+-------------------+\n";
}




/** Modulo que va a crear el campo en la terminal utilizando los modulos anteriores
 * 
 */
function CampoTop(){
    LineadeBanda();
    Campo();
    Campo();
    caños();
    LineaMedia();
    LineaMedia();
    LineaMedia();
    LineaMedia();
    caños();
    Campo();
    Campo();
    LineadeBanda();
}

// Aqui llamamos al modulo que va a dibujar el Santiago Bernabeu
CampoTop()









?>