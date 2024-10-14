<?php

    $tamVector = readline("Dime le tamaño de el verctor: ");
    $vector = [];

    for ($i=1; $i <= $tamVector; $i++) { 
        $vector[] = readline("Dime el número de la posición $i: ");

    }
    invertir($vector);
    function invertir($vector){
        $temp = "";
        
        $tamañoVector = count($vector);
        $mitad = $tamañoVector / 2;
        for ($i=0; $i < $mitad; $i++) {
            
            $temp = $vector[$i];
            $vector[$i] = $vector[$tamañoVector - $i-1];
            
            $vector[$tamañoVector - $i-1] = $temp;

        }

        for ($i=0; $i < $tamañoVector; $i++) { 
            echo $vector[$i] . " ";
        }
    }

?>