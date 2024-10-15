<?php
    /**
     * Este ejercicio consiste en laborar un 
     * programa que dado un carácter determine su tipo
    * @author: Eros Muñoz Zanón
    */
    function comprobarCaracteres($caracter){

        if (ctype_upper($caracter)) {
            echo "$caracter: "." es mayúscula.\n";
        }elseif(ctype_lower($caracter)){
            echo "$caracter:" . " es minúscula\n";
        }elseif(ctype_digit($caracter)){
            echo  "$caracter:" . " es un número\n";
        }elseif (ctype_space($caracter)) {
            
        }elseif (ctype_punct($caracter)) {
            return  "$caracter:" . " signo de puntuación\n";
        }else {
            return "$caracter:" . " es un carácter especial\n";
        }
    }
    $valor = readline("Dime el caracter: ");
    comprobarCaracteres($valor);
?>