<?php
/**
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