<?php

    $numero = readline("Dime el número (máximo 5 caracteres): ");
    $arrayNum = str_split($numero);

    $tamañoNum = count($arrayNum);

    if ($tamañoNum > 5) {
        echo "El número no puede tener mas de 5 caractéres\n";
    }else{

        $numBuscado =  $tamañoNum - 2;

        echo "La penúltima cifra de el número $numero es " . $arrayNum[$numBuscado] . "\n";

    }

?>