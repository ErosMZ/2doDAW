<?php
    $numeros = readline("Dime el número sepradaros por comas (,): ");
    $numerosInt = str_replace(",", "", $numeros);
    $numerosInt = (int) $numerosInt;
    

    $numerosSep = explode(",", $numeros);
    $espar= count($numerosSep) % 2;
    if (str_contains($numeros, ',')) {
        
        if (count($numerosSep) > 2) {
            
            if ($espar == 0) {
                    $empezarAContar= (count($numerosSep) / 2) -1;
                    $pararDeContar = (count($numerosSep) / 2);
                    $primerNum =$numerosSep[$empezarAContar] . " ";
                    $segundoNum= $numerosSep[$pararDeContar] . "\n";
                    echo "Los números de el medio de $numerosInt son: $primerNum y $segundoNum";
            }else{
                $posicionMedia = floor(count($numerosSep) / 2);
                $numMedio = $numerosSep[$posicionMedia];
                echo "El número del medio de $numerosInt es: $numMedio \n";
            }
        }else {
        echo "No se puede sacar el número de el medio de  $numerosInt \n";
        }
    }else{
        echo "Separa el número por comas, gracias :)\n";
    }
?>