<?php
    $numeros = readline("Dime los tres numeros separadaos por espacios: ");

    $numerosSeparados = explode(" ", $numeros);

    $num1 = $numerosSeparados[0];
    $num2 = $numerosSeparados[1];
    $num3 = $numerosSeparados[2];

    $vecesIgual = 0;
    $numeroIgual = 0;
    for ($i=0; $i < count($numerosSeparados) ; $i++) { 
        // echo "ds\n";
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