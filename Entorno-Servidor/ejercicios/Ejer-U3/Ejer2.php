<?php
    /**
     * Este ejercicio consiste que con 
     * la fecha de el ordenador la imprima por pantalla
     * @author Eros Muñoz Zanón 
     * 
     */
    date_default_timezone_set('Europe/Madrid');
    $hora = date("G");
    $minuto = date("i");
    $segundo = date("s");
    $dia = date("l");
    echo $hora ."h ". $minuto."min " . $segundo . "s" . " $dia" . "\n";

?>