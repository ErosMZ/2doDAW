<?php   
    /**
     * Crea un programa que reciba una hora expresada en segundos transcurridos desde las 12 de la
     * noche y la convierta en horas, minutos y segundos
     * @author Eros Muñoz Zanón
     */
    $hora = readline("Dime la hora en formato(H:M:S): ");
    $partes = explode(":", $hora);

    $horas = $partes[0];
    $minutos = $partes[1];
    $segundos = $partes[2];
    if ($segundos >= 60) {
        $minutos += floor($segundos / 60);
        $segundos = $segundos % 60;
    }
    if ($minutos >= 60) {
        $horas += floor($minutos / 60);
        $minutos = $minutos % 60;
    }
    if ($horas >= 24) {
        $horas = $horas % 24;
    }

    echo "Hora: " . $horas . "h " . $minutos . "min " . $segundos . "seg\n";
?>
