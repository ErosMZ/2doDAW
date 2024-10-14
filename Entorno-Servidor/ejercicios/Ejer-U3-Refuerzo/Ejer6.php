<?php

    $numeros = readline("Dime los ocho números separados por espacios: ");

    $numerosArray = explode(" ", $numeros);

    $arrayParImpar = [];

    $pares = 0;
    $impares= 0;
    if (count($numerosArray) != 8) {
        echo "Deben ser 8 números separados por espacios\n";
    }else{
        for ($i=0; $i < count($numerosArray); $i++) { 
            if (($numerosArray[$i] % 2) == 0) {
                $pares++;
                $arrayParImpar[$numerosArray[$i]] = "par";
            }else{
                $impares++;
                $arrayParImpar[$numerosArray[$i]] = "impar";
            }
        }

        foreach ($arrayParImpar as $num => $valor) {
            echo "El número $num es $valor\n";
        }

        if ($pares > 0) {
            $mediaPares = $sumaPares / $pares;
            echo "La media de los números pares es: $mediaPares\n";
        } else {
            echo "No hay números pares\n";
        }
    
        if ($impares > 0) {
            $mediaImpares = $sumaImpares / $impares;
            echo "La media de los números impares es: $mediaImpares\n";
        } else {
            echo "No hay números impares\n";
        }
    }
    

?>