<?php
    /**
     * Dar la vuelta a un vercor de está forma $V[$N-1] y $V[0], $V[$N-2] y $V[1] , $V[$N-3] y $V[2] 
     * @author Eros Muñoz Zanón
     */
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
        // lo imprimo hasta la mitad porque si no se pondrían otra vez en la misma posición
        for ($i=0; $i < $mitad; $i++) {
            // me guardo el temporar para luego utilizarlo
            $temp = $vector[$i];
            $vector[$i] = $vector[$tamañoVector - $i-1];
            
            $vector[$tamañoVector - $i-1] = $temp;

        }

        for ($i=0; $i < $tamañoVector; $i++) { 
            echo $vector[$i] . " ";
        }
    }

?>