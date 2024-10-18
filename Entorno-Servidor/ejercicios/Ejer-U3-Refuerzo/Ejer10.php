<?php
    /**
     * Crear y rellenar por teclado dos matrices de tamaño 3x3, sumarlas y mostrar su suma
     * @author Eros Muñoz Zanón
     */
    $matriz1 = [];
    $matriz2 = [];

    // creación de los números de forma Random
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {

            $matriz1[$i][$j] = rand(1, 100); 
            $matriz2[$i][$j] = rand(1, 100); 
        
        }

    }

    // ejecución de la suma
    $suma = [];
    for ($i = 0; $i < 3; $i++) {

        for ($j = 0; $j < 3; $j++) {

            $suma[$i][$j] = $matriz1[$i][$j] + $matriz2[$i][$j];
       
        }

    }
    // imprimo la matriz 1
    echo "\nMatriz 1:\n";

    for ($i = 0; $i < 3; $i++) {

        for ($j = 0; $j < 3; $j++) {

            echo $matriz1[$i][$j] . "\t";

        }

        echo "\n";

    }

    // imprimo la matriz 2
    echo "\nMatriz 2:\n";

    for ($i = 0; $i < 3; $i++) {

        for ($j = 0; $j < 3; $j++) {

            echo $matriz2[$i][$j] . "\t";

        }

        echo "\n";

    }
    // imprimo las sumas
    echo "\nLa suma de las dos matrices es:\n";
    for ($i = 0; $i < 3; $i++) {

        for ($j = 0; $j < 3; $j++) {
            
            echo $suma[$i][$j] . "\t";
        }
        echo "\n";
    }
?>
