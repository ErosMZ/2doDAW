<?php
/**
 * Este ejercicio trata de comprobar cuantos números hay repetidos
 * @author Eros Muñoz Zanón
 */
    $numeros = readline("Dime los tres numeros separadaos por espacios: ");
    // seprar los números para que a la hora de preguntar quede mas bonito
    // en vez de hacer un bucle y preguntar de uno en uno
    $numerosSeparados = explode(" ", $numeros);

    $num1 = $numerosSeparados[0];
    $num2 = $numerosSeparados[1];
    $num3 = $numerosSeparados[2];

    $vecesIgual = 0;
    $numeroIgual = 0;

    // hago dos for anidados y en el de dentro hago la comparación para
    // le sumo uno a la x para que no haya error y se compruebe el mismo número
    for ($i=0; $i < count($numerosSeparados) ; $i++) { 
        
        for ($x=$i+1; $x < count($numerosSeparados); $x++) { 
            
            if ($numerosSeparados[$i] == $numerosSeparados[$x]) {
                $vecesIgual++;
                $numeroIgual =$numerosSeparados[$i] ;
                
            }
        }
    }
    
    if($vecesIgual == 3){
        echo "Hay tres números iguales a $numeroIgual\n";
    }elseif ($vecesIgual == 1) {
        echo "Hay dos números iguales a $numeroIgual\n";
    }else {
        echo "No hay números iguales\n";
    }
?>