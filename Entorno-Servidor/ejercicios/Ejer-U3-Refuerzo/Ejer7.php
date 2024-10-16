<?php
    /**
     * Calcular el cuadrado y el cubo de un número dado
     * @author Eros Muñoz Zanón
     */
    $numero = [];
    $cuadrado = [];
    $cubo = [];

    // for para añadir los números a la array
    for ($i=0; $i < 20; $i++) {
        $random = rand(0,100);
        $numero[$i] = $random;
        echo ($i + 1) . " - Número $random añadido a la array numero\n";
    }
    // for para calcular los cuadrados de los números de la array 
    for ($i=0; $i < count($numero); $i++) {
        $calCuadrado = $numero[$i] * $numero[$i];
        $cuadrado[$numero[$i]] = $calCuadrado;
    }
 // for para calcular los cubos de los números de la array 
    for ($i=0; $i < count($numero); $i++) {
        $calCubo = $numero[$i] * $numero[$i] * $numero[$i];
        $cubo[$numero[$i]] = $calCubo;
    }
    echo "\n Cuadrados\n";

    // saco por pantalla los valores de cada array
    foreach ($cuadrado as $numero => $valor) {
        echo "El cuadrado de $numero es $valor\n";
    }
    echo "\n Cubos\n";
    foreach ($cubo as $numero => $valor) {
        echo "El cubo de $numero es $valor\n";
    }

?>