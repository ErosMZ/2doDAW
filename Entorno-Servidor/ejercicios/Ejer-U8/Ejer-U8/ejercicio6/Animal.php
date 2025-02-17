<?php
    /**
     * @author Eros Muñoz Zanón
     */
    class Animal {
        protected static $totalAnimales = 0;
        protected $nombre;

        // SIEMPRE QUE SE CREE UN ANIMAL SUMA UNO AL TOTAL
        public function __construct() {
            self::$totalAnimales++;
        }

        // función para impirmir el total de animales
        public static function getTotalAnimales() {
            
            return "Hay un total de " . self::$totalAnimales . " animales <br>\n";
        }

        // poner nombre a todos los animales
        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }

        // sacar el nombre de tofod los animales
        public function getNombre() {
            return $this->nombre;
        }
    
    }

?>