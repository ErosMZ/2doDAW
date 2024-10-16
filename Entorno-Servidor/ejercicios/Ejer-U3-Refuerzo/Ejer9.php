<?php
    /**
     * Crear una matriz 5x5 rellenadola de la sguiente forma
     *  la posición M[n,m] debe contener n+m
     * @author Eros Muñoz Zanón
     */
    $filas = 5;
    $columnas = 5;

    $matriz5x5 = [];

    for ($n = 0; $n < $filas; $n++) {
        for ($m = 0; $m < $columnas; $m++) {
            $matriz[$n][$m] = $n + $m;
        }
    }

    for ($n = 0; $n < $filas; $n++) {
        for ($m = 0; $m < $columnas; $m++) {
            echo $matriz[$n][$m] . "          "; 
        }
        echo "\n"; 
    }

?>