<?php
    /**
     * Crea un conversor de monedas de euros a pesetas usando variables para almacenar el resultado
     * @author Eros Muñoz Zanón
     */

    $euros = readline("Dime los euros que quieres convertir: ");
    $pesetas = $euros * 166.386;
    echo $euros . "€" . " son $pesetas" ."pts"
?>