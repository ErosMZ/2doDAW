<?php
    /**
     * Darle la vuelta a un número
     * @author Eros Muñoz Zanón
     * 
     */
    $numero = readline("Dime el número: ");
    // separar por caractéres
    $arrayNum = str_split($numero);

    $numeroAlReves = "";

    for ($i=count($arrayNum); $i >= 0 ; $i--) { 
        $numeroAlReves .= $arrayNum[$i];
    }

    echo "El número $numero al revés es: " . $numeroAlReves . "\n";
?>