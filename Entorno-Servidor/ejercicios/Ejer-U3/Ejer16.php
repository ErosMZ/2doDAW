<?php
    $valorA = readline("Dime el valor de a: ");
    $valorB = readline("Dime el valor b: ");
    
    if ($valorA == 0) {
        echo "El valor de a no puede ser 0, la ecuación no tiene solución.\n";
    } else {
        $ope1 = 2 * $valorA; 
        $ope2 = 2 * $valorB; 

        $solucion = $ope2 / $ope1;

        echo "La solución es: x = " . $solucion . "\n";
    }
?>