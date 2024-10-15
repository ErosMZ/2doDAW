<?php
    /**
     * Calcular una función que calcule A elevado a B
     * @author Eros Muñoz Zanón
     */
    $valorA = readline("Dime el valor A: ");
    $valorB = readline("Dime el valor B (elevado): ");

    $acumulador = $valorA;
    for ($i=1; $i < $valorB; $i++) { 
        $acumulador = $acumulador * $valorA; 
    }
    echo "$acumulador\n";
?>