<?php
    $random = rand(1,15);
    $valorRandom = $random;
    $acumulador = 1;
    $numeros = "";
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