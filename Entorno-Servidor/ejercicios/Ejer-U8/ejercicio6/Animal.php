<?php

class Animal {
    protected static $totalAnimales = 0;
    protected $nombre;

    public function __construct() {
        self::$totalAnimales++;
    }

    public static function getTotalAnimales() {
        
        return "Hay un total de " . self::$totalAnimales . " animales <br>\n";
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre() {
        return $this->nombre;
    }
   
}

?>