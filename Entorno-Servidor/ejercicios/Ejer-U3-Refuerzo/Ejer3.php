<?php
/**
 * Calcular la media aritmética de 7 notas y su su correspondencia en el boletín
 * @author Eros Muñoz Zanón
 */
    $acum = 0;
    for ($i=1; $i <= 7; $i++) { 
        $nota = readline("Dime la nota de el alumno $i: ");
        $acum += $nota;

    }

    (float)$result = $acum / 7;

    if ($result < 5 && $result >= 0) {
        echo "La media es $result que es un SUSPENSO!!!\n";
    }else if($result >= 5 && $result < 6){
        echo "La media es un $result que es un suficiente\n";
    }else if($result >= 6 && $result < 7){
        echo "La media es $result que es un bien\n";
    }else if ($result > 7 && $result < 10) {
        echo "La media es $result que es un notable\n";
    }elseif($result == 10){
        echo "La media es un $result que es sobresaliente";
    }else{
        echo "Algo salió mal :(\n";
    }

?>