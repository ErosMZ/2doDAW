<?php
/**
 * Ordena 3 números de modo que se impriman de mayor a menor. Si son iguales debe mostrar
 * una advertencia indicando que son iguales
 * @author Eros Muñoz Zanón
 */
$ArrayNums = [];
    for($i = 0; $i < 3; $i++){
        $numero = readline("Dime el número " . ($i+1) . ": " );

        $ArrayNums[$i] = $numero;

    }

    if ($ArrayNums[0] == $ArrayNums[1] || $ArrayNums[1] == $ArrayNums[2]) {
        echo "Hay número repetidos \n";
    }else {
       
        asort($ArrayNums);
        foreach ($ArrayNums as $valor) { 
            echo $valor . " ";
        }
        echo "\n";
    }
?>