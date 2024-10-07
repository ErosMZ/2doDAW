<?php
/**
 * Calcula la media de varios números (mínimo 5) y redondea el resultado. Muestra los números
 * introducidos y el resultado sin redondear y tras el redondeo.
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