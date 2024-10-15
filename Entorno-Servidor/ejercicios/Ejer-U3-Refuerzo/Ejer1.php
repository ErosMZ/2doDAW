<?php

    $numero= readline("Dime el número de correspondiente al dia de la semana: ");

    switch ($numero) {
        case 1:
            echo "El día $numero es lunes\n";
            break;
        case 2:
            echo "El día $numero es martes\n";    
            break;
        case 3:
            echo "El día $numero es miércoles\n";  
            break;
        case 4:
            echo "El día $numero es jueves \n";  
            break;
        case 5:
            echo "El día $numero es viernes \n";    
            break;
        case 6:
            echo "El día $numero es sábado \n";  
            break;
        case 7:
            echo "El día $numero es domingo\n";   
            break;
        
        default:
            echo "Carater o número inválido";
            break;
    }

?>