<?php
/**
* @author: Eros Muñoz Zanón
*/
    $num1 = readline("Dime el primer número ");
    $num2 = readline("Dime el segundo número ");

    $suma= $num1 + $num2;
    echo "La suma $num1 + $num2 = $suma\n";
    $resta= $num1 - $num2;
    echo "La resta $num1 - $num2 = $resta\n";
    $multiplicacion= $num1 * $num2;
    echo "La multiplicación $num1 * $num2 = $multiplicacion\n";
    
    if ($num1 > $num2) {
        $division= $num1 / $num2;
        echo "La división $num1 / $num2 " . "= $division\n";
    }else{
        $division = $num2 / $num1;
        echo "La división $num2 / $num1 " . "= $division\n";
    }
    
?>