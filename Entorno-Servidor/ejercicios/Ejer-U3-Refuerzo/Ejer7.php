<?php

    $numero = [];
    $cuadrado = [];
    $cubo = [];

    for ($i=0; $i < 20; $i++) {
        $random = rand(0,100);
        $numero[$i] = $random;
        echo ($i + 1) . " - Número $random añadido a la array numero\n";
    }

    for ($i=0; $i < count($numero); $i++) {
        $calCuadrado = $numero[$i] * $numero[$i];
        $cuadrado[$numero[$i]] = $calCuadrado;
    }

    for ($i=0; $i < count($numero); $i++) {
        $calCubo = $numero[$i] * $numero[$i] * $numero[$i];
        $cubo[$numero[$i]] = $calCubo;
    }
    echo "\n Cuadrados\n";
    foreach ($cuadrado as $numero => $valor) {
        echo "El cuadrado de $numero es $valor\n";
    }
    echo "\n Cubos\n";
    foreach ($cubo as $numero => $valor) {
        echo "El cubo de $numero es $valor\n";
    }

?>