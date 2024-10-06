<?php
    /**
     *Crea un conversor de monedas de pesetas a euros usando variables para almacenar el resultado
     * @author Eros Muñoz Zanón
     */

    $pesetas = readline("Dime las pesetas que quieres convertir: ");
    $euros = $pesetas / 166.386;
    // esto sirve para sacar solamente los 2 últimos decimales
    $eurosDosDecimales = number_format($euros, 2);
    echo $pesetas . "pts" . " son $eurosDosDecimales" ."€"
?>