<?php

    echo "        Bucle for:\n";
    for ($i=1; $i <= 100; $i++) { 
        if (($i % 5)== 0) {
            echo "El número $i es divisor de 5\n";
        }
    }

    echo "\n        Bucle while:\n";

    $cont = 1;
    while($cont <= 100){
        if (($cont % 5)== 0) {
            echo "El número $cont es divisor de 5\n";
        }
        $cont++;
    }

    echo "\n      Bucle do-while:\n";

    $cont = 1;
    do {
        if (($cont % 5) == 0) {
            echo "El número $cont es divisor de 5\n";
        }
        $cont++;
    } while ($cont <= 100);
?>