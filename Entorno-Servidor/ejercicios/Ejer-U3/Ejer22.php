<?php
    /**
     * Sacar positivos y negativos y el porcentaje de cada uno
     * @author Eros Muñoz Zanón
     */
    // elijo pedirlos derectamente todos los números y sepraralos para convertirlo en una array el número
    $numeros = readline("Dime los números 10 números: ");
    $numerosArray = explode(" ", $numeros);

    $contNegativos = 0;
    $contPositivos = 0;
    $numerosNegativos = "";
    $numerosPositivos = "";
    // si no son 10 número salte un aviso
    if (count($numerosArray) != 10 ) {
        echo "Tienen que ser 10 números";
    }else{
        echo "Los números son:\n";

        for ($i=0; $i < count($numerosArray); $i++) { 
            echo $numerosArray[$i] . " ";
            // si el número es mayor a 0 (positivo) le sumo uno 
            // a el contador de positivos para hacer mas tarde la media y añado el número a un string
            // para mas tarde imprimirlo por pantalla
            if ($numerosArray[$i] > 0) {
                $numerosPositivos .= $numerosArray[$i] . " ";
                $contPositivos++;
            }else {
                // igual que con los positivos pero con los negativos
                $numerosNegativos .= $numerosArray[$i] . " ";
                $contNegativos++;
            }
        }
        echo "\n";
        // porcentaje de positivos y negativos
        $porcentajePositivos = ($contPositivos / 10) * 100;
        $porcentajeNegativos = ($contNegativos / 10) * 100;

        // lo que muestro por la terminal
        echo "Números positivos $contPositivos: $numerosPositivos\n";
        echo "Números positivos $contNegativos: $numerosNegativos\n";
        echo "Porcentaje de números positivos: $porcentajePositivos%\n";
        echo "Porcentaje de números negativos: $porcentajeNegativos%\n";

    }
?>