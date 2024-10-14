<?php

    $trabajadores = readline("Dime cuantos trabajadores tienes: ");

    $arrayTrab = [];

    for($i=0; $i < $trabajadores ; $i++) { 
        $nomTrab = readline("Dime el nombre de el trabajador: ");
        $salario = readline("Ahora dime su salario: ");

        $arrayTrab[$nomTrab] = $salario;
    }

    $trabajadorMin =  min(array_values($arrayTrab));
    $trabajadorMax = max(array_values($arrayTrab));
    $nombreTrabMax = "";
    $nombreTrabMin = "";
    $sumatorio = 0;
    foreach ($arrayTrab as $nombreTrab => $value) {
        $sumatorio += $value;
        if ($trabajadorMin == $value) {
            $nombreTrabMin = $nombreTrab;
        }
        if ($trabajadorMax == $value) {
            $nombreTrabMax = $nombreTrab;
        }
    }
    echo "El trabajador con mas salario es $nombreTrabMax con " . $trabajadorMax . "€\n";
    echo "El trabajador con menos salario es $nombreTrabMin " . $trabajadorMin . "€\n";
    echo "El promedio es " . ($sumatorio / $trabajadores) . "€\n";
?>