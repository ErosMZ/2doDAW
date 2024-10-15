<?php
/**
 * A partir de un random calcular su sumatorio
 * @author Eros Muñoz Zanón
 */
    $random = rand(1,20);
    $valorRandom = $random;
    $acumulador = 1;
    $numeros = "";
    // mismo proceso que con el ejercicio anterior
    while($valorRandom > 0){

        $acumulador = $acumulador + $valorRandom;
        $numeros .= $valorRandom;
        if ($valorRandom >1) {
            $numeros .= " + ";
        }
        $valorRandom--;
    }
    echo "$numeros= " . $acumulador . "\n";
?>