<?php   
    /**
     * Crea un programa que reciba una hora expresada en segundos transcurridos desde las 12 de la
     * noche y la convierta en horas, minutos y segundos
     * @author Eros Muñoz Zanón
     */
    $segundos = readline("Dime los segundos: ");
    $horas = floor($segundos / 3600);
    $segundos_restantes = $segundos % 3600;
    $minutos = floor($segundos_restantes / 60);
    $segundos_finales = $segundos_restantes % 60;
    
    echo $horas . " horas, " . $minutos . " minutos, " . $segundos_finales . " segundos\n";
?>
