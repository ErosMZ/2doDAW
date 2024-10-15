<?php
    /**
     * Indicar cual o cuales son las cifras de el medio
     * @author Eros Muñoz Zanón
     */
    $numeros = readline("Dime el número: ");
    
    $numerosInt = (int) $numeros;
    
    $numerosSep = str_split($numeros);
    $espar = count($numerosSep) % 2;
   
    if (count($numerosSep) > 2) {
        
        if ($espar == 0) {
            // si es par saco dos cifras
            $empezarAContar = (count($numerosSep) / 2) - 1;
            $pararDeContar = (count($numerosSep) / 2);
            $primerNum = $numerosSep[$empezarAContar];
            $segundoNum = $numerosSep[$pararDeContar];
            echo "Los números de en medio de $numerosInt son: $primerNum y $segundoNum\n";
        } else {
            // si es impar saco solo una cifra
            $posicionMedia = floor(count($numerosSep) / 2);
            $numMedio = $numerosSep[$posicionMedia];
            echo "El número del medio de $numerosInt es: $numMedio\n";
        
        }
    } else {
        echo "No se puede sacar el número de en medio de $numerosInt\n";
    }
?>
