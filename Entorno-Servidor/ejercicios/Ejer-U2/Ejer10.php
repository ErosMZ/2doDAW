<?php
    /**
     * Generar un número aleatorio entre 1 y 5 de modo que muestre el número y su nombre en letras
     * 
     * @author Eros Muñoz Zanón
     */
    $random = rand(1,5);
    
    switch($random){
        case 1:
            echo "$random - uno\n";
        break;
        case 2:
            echo "$random - dos\n";
        break;
        case 3:
        echo "$random - tres\n";
        break;
        case 4:
        echo "$random - cuatro\n";
        break;
        case 5:
        echo "$random - cinco\n";
        break;
    }
    
?>