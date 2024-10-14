<?php

    $numeros = readline("Dime los números 10 números: ");
    $numerosArray = explode(" ", $numeros);

    $contNegativos = 0;
    $contPositivos = 0;
    $numerosNegativos = "";
    $numerosPositivos = "";
    if (count($numerosArray) != 10 ) {
        echo "Tienen que ser 10 números";
    }else{
        echo "Los números son:\n";

        for ($i=0; $i < count($numerosArray); $i++) { 
            echo $numerosArray[$i] . " ";
            if ($numerosArray[$i] > 0) {
                $numerosPositivos .= $numerosArray[$i] . " ";
                $contPositivos++;
            }else {
                $numerosNegativos .= $numerosArray[$i] . " ";
                $contNegativos++;
            }
        }
        echo "\n";
        $porcentajePositivos = ($contPositivos / 10) * 100;
        $porcentajeNegativos = ($contNegativos / 10) * 100;

        echo "Números positivos $contPositivos: $numerosPositivos\n";
        echo "Números positivos $contNegativos: $numerosNegativos\n";
        echo "Porcentaje de números positivos: $porcentajePositivos%\n";
        echo "Porcentaje de números negativos: $porcentajeNegativos%\n";

    }
?>