<?php
    /**
     * @author Eros Muñoz Zanón
     */
    include_once "Animal.php";

    class Ave extends Animal {

        protected static $totalAves = 0;

        public function __construct() {
            parent::__construct(); // Aumenta el contador de Animal
            self::$totalAves++; // Aumenta el contador de Aves
        }

        // saca el total de aves que hay
        public static function getTotalAves() {
            return "Hay un total de " . self::$totalAves . " aves <br>\n";
        }

        

        
    }

?>
