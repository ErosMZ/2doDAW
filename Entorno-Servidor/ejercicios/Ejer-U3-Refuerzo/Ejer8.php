<?php
    /**
     * Rellenar dos vectores de 10 números enteros y mezclarlos en un tercer vector
     * @author Eros Muñoz Zanón
     */
    $valoresArray1 = readline("Dime los valores de la array1 separado por espacios: ");
    $valoresArray2 = readline("Dime los valores de la array2 separado por espacios: ");
    $array1 = explode(" ", $valoresArray1);
    $array2 = explode(" ", $valoresArray2);

    // compruebo que hay 10 números por array
    if (count($array1) > 10 || count($array2) > 10) {
        echo "Tienen que ser 10 números en ambas arrays\n";
    }else{
        // meto los números de cada array en la array arrayNumeros
        $arrayNumeros = [];
        for ($i=0; $i < 10; $i++) { 
            $arrayNumeros[] = $array1[$i];
            $arrayNumeros[] = $array2[$i];
        }
        // imprimo los números
        for ($i=0; $i < count($arrayNumeros); $i++) {
            if ($i == (count($arrayNumeros) -1) ) {
                echo $arrayNumeros[$i]. "\n";
            }else{
                echo $arrayNumeros[$i]. ", ";
            }
            
        }
    }
?>