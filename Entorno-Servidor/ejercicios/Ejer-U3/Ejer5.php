<?php
    /**
     * Este programa se encarga de comprobar cuanto cuesta una llamada
     * - Si pasa no pasa de 3min son 10cents
     * - Y a partir de ahí son 5cents cada minuto
     * @author Eros Muñoz Zanón
     */
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