<?php
    $minutos = readline("Dime los minutos: ");

    $costoLlamada = 10;
    $cont = 1;
    while($cont <= $minutos){
        if($cont > 3 ){
            $costoLlamada += 5;
        }
        $cont++;
    }

    $costoLlamadaAEuros = $costoLlamada / 100;
    echo "El costo total de la de llamada es: $costoLlamadaAEuros" . "€\n";
?>