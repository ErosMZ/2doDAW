<?php
    /**
     * Genera un mensaje de modo que si el día actual es menor o igual que 15 muestre “primera
     * quincena” mostrando “segunda quincena” en otro caso. Haz una modificación para poder leer el día
     * @author Eros Muñoz Zanón
     */
    $hoy = date("d");
    echo "Hoy es dia " . $hoy .  "\n";
    
    if ($hoy > 15) {
        echo "Segunda quincena \n";
    }else{
        echo "Primera quincena \n";
    }
?>