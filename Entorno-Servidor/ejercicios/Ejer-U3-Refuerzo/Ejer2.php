<?php
/**
 * Dada la nota que solicita el usuario le digo lo que saldría en el boletín
 * @author Eros Muñoz Zanón
 */
    $nota= readline("Dime la nota correspondiente: ");
  
    switch ($nota) {
        case 1:
            echo "La nota $nota es un insuficiente\n";
            break;
        case 2:
            echo "La nota $nota es un insuficiente\n";    
            break;
        case 3:
            echo "La nota $nota es un insuficiente\n";  
            break;
        case 4:
            echo "La nota $nota es un insuficiente \n";  
            break;
        case 5:
            echo "La nota $nota es un suficiente \n";    
            break;
        case 6:
            echo "La nota $nota es un bien \n";  
            break;
        case 7:
            echo "La nota $nota es un notable\n";   
            break;
        case 8:
            echo "La nota $nota es un notable\n";   
            break;
        case 9:
            echo "La nota $nota es un notable\n";   
            break;
        case 10:
            echo "La nota $nota es un sobresaliente\n";   
            break;
        
        default:
            echo "Carater o número inválido";
            break;
    }

?>