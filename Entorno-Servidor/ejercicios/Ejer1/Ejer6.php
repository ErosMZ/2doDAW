<?php
/**
 * @author Eros Muñoz Zanón
 */

$veces = readline("¿Cuantos numeros quieres? ");
for ($i=0; $i < $veces; $i++) { 
    $numero= readline("Dime numero " . ($i + 1) .": ");
    $ArrayNums[$i] = $numero; 
}
$suma = 0;
for ($i=0; $i < count($ArrayNums); $i++) { 
    $suma += $ArrayNums[$i];
}

$operacion = $suma / $veces;


echo "$operacion\n"
?>