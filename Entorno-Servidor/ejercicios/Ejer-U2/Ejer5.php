
<?php
/**
 * . Dado un número decimal, calcula el resultado de aplicar el redondeo a dicho número y muestra
*el resultado
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

        if((is_float($division))){
            echo round($division);
            echo "La división $num1 / $num2 " . "= " . round($division) . "\n";
        }else {
            echo "La división $num1 / $num2 " . "= $division\n";
        }
        
    }else{

        $division = $num2 / $num1;
        // si es float (es decimal) se redonde el número
        if((is_float($division))){
           
            echo "La división $num2 / $num1 " . "= " . round($division) . "\n";
        }else {
            echo "La división $num2 / $num1 " . "= $division\n";
        }
    }

?>