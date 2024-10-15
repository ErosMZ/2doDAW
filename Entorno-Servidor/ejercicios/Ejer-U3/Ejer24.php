<?php
    /**
     * Calcular el salario actual y el salario aumentado un
     *  porcentaje indicado por la variable
     * @author Eros Muñoz Zanón
     */
    // ejecuto el otro fichero (no se si funciona en todos los PCs)
    // asi que dejo el código comentado por si acaso
    include "Ejer23.php";

   /* $trabajadores = readline("Dime cuantos trabajadores tienes: ");

    $arrayTrab = [];

    // Pedir valores por trabajador
    for($i=0; $i < $trabajadores ; $i++) { 
        $nomTrab = readline("Dime el nombre de el trabajador: ");
        $salario = readline("Ahora dime su salario: ");

        $arrayTrab[$nomTrab] = $salario;
    } */

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