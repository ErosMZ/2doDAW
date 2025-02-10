<?php

    class Movil {
        public $numero;
        public $nombre;
        public static $minutos = 0;
        public static $segundos= 0;
        public static $moviles = [];

        public function __construct($numero, $nombre){
            $this->numero = $numero;
            $this->nombre = $nombre;
            self::$moviles[] = $this; 
        }

        public function __toString(){
            return "Número: $this->numero - Nombre: $this->nombre\n";
        }

        public function llama($otroMovil, $tiempo) {
            $tiempoTot = $tiempo;
            if ($tiempoTot % 60 >= 60) {
                $otroMovil->minutos += 1;
                
            }
            echo "$this->nombre está llamando a " . $otroMovil->nombre . " durante $otroMovil->minutos minutos.<br>\n";
        }
    }

?>