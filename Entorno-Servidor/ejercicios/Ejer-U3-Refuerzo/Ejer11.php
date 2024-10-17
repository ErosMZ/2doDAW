<?php
    /**
     * Crear y rellenar una tabla de tamaño 10x10, mostrar la suma de cada fila y de cada columna
     * @author Eros Muñoz Zanón
     */

    $matriz1= [];
    // for mara rellenar la arry de randoms
    for ($i = 0; $i < 10; $i++) {
        for ($j = 0; $j < 10; $j++) {

            $matriz1[$i][$j] = rand(1, 100); 
            
        }

    }

    // for para imprimir los números que hay en cad array
    for ($i = 0; $i < 10; $i++) {
        echo "Números de la fila $i: ";
        foreach ($matriz1[$i] as $numero) {
            echo ($numero +1) . " ";
        }
        echo "\n";
    }

    // for para sumar todas las filas de la array
    echo "\n";
    for ($i = 0; $i < 10; $i++) {
        $sumaFila = array_sum($matriz1[$i]);
        echo "Suma de la fila " .  ($i + 1) .": " . $sumaFila . "\n";
    }
    
?>