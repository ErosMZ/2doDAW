<?php

    function potencias($base, $exponente){
        $operacion = "$base^$exponente: ";
        $acumulador = 1;
        for ($i=0; $i < $exponente; $i++) { 
            $acumulador = $acumulador * $base; 
            if ($i != $exponente - 1) {
                $operacion .= "$exponente x ";
            }else {
                $operacion .= "$exponente";
            }
        }
        echo "$operacion = $acumulador\n";
       
    }
            
    $numBase = readline("Dime la base: ");
    $numExp = readline("Dime el exponente: ");

    potencias($numBase, $numExp);

?>
