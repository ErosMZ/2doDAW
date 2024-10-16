<?php
/**
 * Pedir numeros hasta que su suma sea igual o mayor a 1000
 * y después imprimir los números que han sido introducidos
 * la cantidad de números la suma y la media de ellos
 */
    $acum = 0;
    $numeros = "";
    $cont = 0;
    while($acum < 1000){
        $numero = readline("Dime el número: ");

        $acum += $numero;

        $numeros .= $numero . " ";

        $cont++;
    }

    $media = $acum / $cont;
    echo "\nNúmeros introducidos: $numeros\n";
    echo "Cantidad de números: $cont\n";
    echo "Total de la suma: $acum\n";
    echo "Media: $media\n";
?>