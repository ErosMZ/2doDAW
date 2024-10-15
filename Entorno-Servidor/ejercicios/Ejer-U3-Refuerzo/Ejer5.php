<?php
    // random de minimo 4 caracteres de el 0001 al 9999
    $clave = sprintf("%04d", rand(1, 9999));

    echo "El pin es " . $clave . "\n";

    $intentos= 1;
    while($intentos <= 4){
        echo "Intento $intentos\n";
        $claveUsuario = readline("Dime el pin: ");
        if ($clave == $claveUsuario) {
            echo "La caja fuerte se ha abierto satisfactoriamente\n";
            $intentos = 5;
        }else {
            echo "Lo siento, esa no es la combinación\n";
            $intentos++;
        }

    }

?>