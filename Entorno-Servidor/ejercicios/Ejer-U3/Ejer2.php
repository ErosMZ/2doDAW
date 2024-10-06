<?php
    /**
     * Dada la fecha del sistema, indicar las horas, minutos y segundos junto con el día de la semana
     * @author Eros Muñoz Zanón 
     * 
     */
    $hora = date("G");
    $minuto = date("i");
    $segundo = date("s");
    $dia = date("l");
    echo "$hora" ."h ". $minuto."min " . $segundo . "s" . " $dia" . "\n";
?>