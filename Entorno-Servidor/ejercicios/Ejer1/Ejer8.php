<?php
    /**
     * @author 
     */
    $hoy = date("d");
    echo "Hoy es dia " . $hoy .  "\n";
    
    if ($hoy > 15) {
        echo "Segunda quincena \n";
    }else{
        echo "Primera quincena \n";
    }
?>