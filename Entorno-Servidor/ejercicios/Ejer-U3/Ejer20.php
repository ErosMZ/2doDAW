<?php

    $numero = readline("Dime el número: ");
    $arrayNum = str_split($numero);

    $numeroAlReves = "";

    for ($i=count($arrayNum); $i >= 0 ; $i--) { 
        $numeroAlReves .= $arrayNum[$i];
    }

    echo "El número $numero al revés es: " . $numeroAlReves . "\n";
?>