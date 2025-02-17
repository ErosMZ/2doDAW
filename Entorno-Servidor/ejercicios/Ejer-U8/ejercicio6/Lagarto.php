<?php
    /**
     * @author Eros Muñoz Zanón
     */
    include_once "Animal.php";

    class Lagarto extends Animal {
        private $sexo; 

        public function __construct($sexo = "M") { 
            parent::__construct();
            $this->sexo = $sexo; 
        }

        public static function consSexo($sexo) {
            $lagarto = new Lagarto();
            $lagarto->sexo = $sexo;
            return $lagarto;
        }
        
        public static function consFull($sexo, $nombre) {
           
            $lagarto = new Lagarto();
            $lagarto->sexo = $sexo;
            $lagarto->setNombre($nombre);
            return $lagarto;
            
        }
        
        public function tomarSol() {
            echo "Lagarto $this->nombre: Estoy tomando el sol <br>\n";
        }

        public function dormirse() {
            echo "Lagarto $this->nombre: Zzzzzzz <br>\n";
        }

        public function morirse() {
            echo "Lagarto $this->nombre: Adiós! <br>\n";
            parent::$totalAnimales--;
        }

        public function alimentarse(){
            echo "Lagarto $this->nombre: Estoy comiendo insectos <br>\n";
        }

        public function __toString() {
            $sexoStr = ($this->sexo == "H") ? "HEMBRA" : "MACHO";
            return "Soy un Animal, en concreto un Lagarto, con sexo $sexoStr, llamado $this->nombre<br>\n";
        }
    }

?>
