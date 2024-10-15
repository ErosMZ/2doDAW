<?php
    /**
     * Sacar el salario máximo, mínimo y el medio de los trabajadores
     * @author Eros Muñoz Zanón
     */
    $trabajadores = readline("Dime cuantos trabajadores tienes: ");

    $arrayTrab = [];

    // Pedir valores por trabajador
    for($i=0; $i < $trabajadores ; $i++) { 
        $nomTrab = readline("Dime el nombre de el trabajador: ");
        $salario = readline("Ahora dime su salario: ");

        $arrayTrab[$nomTrab] = $salario;
    }
    // sacar el mínimo y el máximo de los trabajadores
    $trabajadorMin =  min(array_values($arrayTrab));
    $trabajadorMax = max(array_values($arrayTrab));
    $nombreTrabMax = "";
    $nombreTrabMin = "";
    $sumatorio = 0;
    foreach ($arrayTrab as $nombreTrab => $value) {
        $sumatorio += $value;
        // saco el nombre de el trabajador con más salario y el que menos salario
        if ($trabajadorMin == $value) {
            $nombreTrabMin = $nombreTrab;
        }
        if ($trabajadorMax == $value) {
            $nombreTrabMax = $nombreTrab;
        }
    }
    // lo que imprimo por pantalla
    echo "El trabajador con mas salario es $nombreTrabMax con " . $trabajadorMax . "€\n";
    echo "El trabajador con menos salario es $nombreTrabMin " . $trabajadorMin . "€\n";
    echo "El promedio es " . ($sumatorio / $trabajadores) . "€\n";
?>