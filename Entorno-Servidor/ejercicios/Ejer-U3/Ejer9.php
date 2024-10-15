<?php
/**
 * A partir de un numero random calcular el factorial
 * @author Eros Muñoz Zanón
 */
    $random = rand(1,15);
    // esta variable la utilizo para no restarle directamente al random
    $valorRandom = $random;
    $acumulador = 1;
    $numeros = "";
    // While para ir multiplicando y sumandolo a al acumulador
    // y voy añadiendo los números junto a * a números para luego imprimirlo
    // y que quede bonito
    while($valorRandom > 0){

        $acumulador = $acumulador * $valorRandom;
        $numeros .= $valorRandom;
        if ($valorRandom >1) {
            $numeros .= " * ";
        }
        $valorRandom--;
    }
    echo "$numeros= " . $acumulador . "\n";
?>