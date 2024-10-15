<?php
    /**
     * Tabla de multiplicación a partir de un número
     * @author Eros Muñoz Zanón
     */
    +$numero = readline("Dime el número: ");
    print "1 x $numero= " . (1*$numero) . PHP_EOL;
    echo "\n2 x $numero= " . (2*$numero) . PHP_EOL;
    echo "\n3 x $numero= " . (3*$numero) . PHP_EOL;
    echo "\n4 x $numero= " . (4*$numero) . PHP_EOL;
    echo "\n5 x $numero= " . (5*$numero). PHP_EOL;
    echo "\n6 x $numero= " . (6*$numero). PHP_EOL;
    echo "\n7 x $numero= " . (7*$numero). PHP_EOL;
    echo "\n8 x $numero= " . (8*$numero) . PHP_EOL;
    echo "\n9 x $numero= " . (9*$numero) . PHP_EOL;
    echo "\n10 x $numero= " . (10*$numero) . PHP_EOL;


    // tambien se puede hacer de esta manera
    echo "\n";
    echo "Segunda manera de programar la tabla de multiplicar\n";


    for ($i = 1; $i <= 10; $i++) {
        echo "\n$i x $numero = " . ($i * $numero) . PHP_EOL;
    }
?>