<?php
    /**
     * Programa que verifica si una hora es válida
     * @author Eros Muñoz Zanón
     */


    $hora = readline("Dime la hora en formato (H:M:S): ");
    $partes = explode(":", $hora);

    if (count($partes) != 3) {
        echo "La hora tiene que estar en formato H:M:S.\n";
        exit;
    }

    $horas = (int)$partes[0];
    $minutos = (int)$partes[1];
    $segundos = (int)$partes[2];

    // if para verificar si es correcta la hora 
    if ($horas < 0 || $horas >= 24) {
        echo "Las horas deben estar entre el 1 y el 24\n";
    } elseif ($minutos < 0 || $minutos >= 60) {
        echo "Los minutos deben estar entre el 0 y el 59\n";
    } elseif ($segundos < 0 || $segundos >= 60) {
        echo "Los segundos deben estar entre el 0 y el 59\n";
    } else {
        echo "La hora es válida: $horas:$minutos:$segundos\n";
    }
?>
