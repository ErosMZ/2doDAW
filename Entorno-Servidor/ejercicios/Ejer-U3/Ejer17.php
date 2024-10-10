<?php   
    $numero = readline("Dime el número: ");

    $esPar = $numero % 2;
    $esDivisibleEntre3 = $numero % 3;

    if ($esPar == 0) {
        echo "$numero es un número par";
    }else if($esDivisibleEntre3 == 0){
        echo "$numero es un número divisor de 3";
    }else{
        echo "$numero no es par ni divisible entre 3";
    }

   
?>