<?php

    $valorA = readline("Dime el valor A: ");
    $valorB = readline("Dime el valor B (elevado): ");

    $acumulador = $valorA;
    for ($i=1; $i < $valorB; $i++) { 
        $acumulador = $acumulador * $valorA; 
    }
    echo "$acumulador\n";
?>