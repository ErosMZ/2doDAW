<?php

$fechaActual = strtotime("now");

$fechaDeseadaStr = readline("Dime la fecha y hora deseada (YYYY-MM-DD HH:MM): ");
$fechaDeseada = strtotime($fechaDeseadaStr);

if ($fechaDeseada > $fechaActual) {
   
    $diferenciaSegundos = $fechaDeseada - $fechaActual;
    $horasRestantes = floor($diferenciaSegundos / 3600);
    $minutosRestantes = floor(($diferenciaSegundos % 3600) / 60);
    echo "Quedan $horasRestantes" . "h " . "y $minutosRestantes" . "min.\n";

} else {

    echo "La fecha deseada ya ha pasado.\n";

}
?>
