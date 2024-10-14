<?php
    $numero = readline("Dime el número: ");
    $operacion = $numero % 2;

    if ($operacion == 1) {
        for ($numero; $numero >= 1 ; $numero -=2) { 
            echo $numero . " ";
        }
    }else{
        $numero--;
        for ($numero; $numero >= 1 ; $numero -= 2) { 
            echo $numero . " ";
        }
        
    }
    echo "\n";
?>