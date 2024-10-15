<?php
/**
 * Indicar cuantos dígitos tiene un número
 * @author Eros Muñoz Zanón
 */
    $numero = readline("Dime el número: ");
    $arrayNum = str_split($numero);

    $numDigitos = count($arrayNum);

    echo "El número $numero tiene " . $numDigitos . " dígitos\n"
    
?>