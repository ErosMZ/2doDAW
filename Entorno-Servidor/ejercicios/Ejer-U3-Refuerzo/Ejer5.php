<?php
/**
 * Programa para el control de acceso a una caja fuerte
 * @author Eros Muñoz Zanón
 */
    // random de minimo 4 caracteres de el 0001 al 9999
    $clave = sprintf("%04d", rand(1, 9999));

    echo "El pin es " . $clave . "\n";

    $intentos= 1;
    while($intentos <= 4){
        echo "Intento $intentos\n";
        $claveUsuario = readline("Dime el pin: ");
        // si la clave pone el usuario es correcta termina el while
        if ($clave == $claveUsuario) {
            echo "La caja fuerte se ha abierto satisfactoriamente\n";
            $intentos = 5;
        }else {
            echo "Lo siento, esa no es la combinación\n";
            $intentos++;
        }

    }

?>