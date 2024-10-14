<?php

    include "Ejer23.php";
    $arrayAntes = $arrayTrab;
    

    $porcentaje = readline("¿Cuanto porcentaje quieres subir a los salarios? ");

    foreach ($arrayTrab as $nombre => $salario) {
        echo "$nombre tenia un salario de $salario". "€\n";
    }
    foreach ($arrayTrab as $nombre => $salario) {
        $nuevoSalario = $salario + ($salario * $porcentaje / 100);
        echo "$nombre ahora tiene un salario de $nuevoSalario" ."€ \n";
    }
?>