<?php
    /**
     *  Calcular todas las potencias de un número hasta llegar al exponente indicado
     * @author Eros Muñoz Zanón
     */
    function potencias($base, $exponente){
        $operacion = "$base^$exponente: ";
        $acumulador = 1;
        for ($i=0; $i < $exponente; $i++) { 
            // guardo en el acumulador la operacion
            $acumulador = $acumulador * $base; 
            // guardo los valores para despues imprimir la operacion
            if ($i != $exponente - 1) {
                
                $operacion .= "$exponente x ";
            }else {
                $operacion .= "$exponente";
            }
        }
        echo "$operacion = $acumulador\n";
       
    }
            
    $numBase = readline("Dime la base: ");
    $numExp = readline("Dime el exponente: ");

    potencias($numBase, $numExp);

?>
