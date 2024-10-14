<?php
    $numero = readline("Dime el número: ");
    $arrayNum = str_split($numero);

    $numDigitos = count($arrayNum);

    echo "El número $numero tiene " . $numDigitos . " dígitos\n"
    
?>