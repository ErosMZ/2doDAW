<?php

    include_once "Animal.php"; 

    class Mamifero extends Animal {
        protected static $totalMamiferos = 0;

        public function __construct() {
            parent::__construct();  
            self::$totalMamiferos++;
        }

        public static function getTotalMamiferos() {
            return "Hay un total de " . self::$totalMamiferos . " mamíferos <br>\n";
        }
    }

?>
