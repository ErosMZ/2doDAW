<?php
    /**
     * @author Eros Muñoz Zanón
     */

    include_once "Ave.php";
    class Pinguino extends Ave{
        private $sexo = "M";

        // le pongo sexo con valor Macho
        public function __construct($sexo = "M") {
            parent::__construct();
            $this->sexo = $sexo; // Almacenar el sexo
        }

        //  crear un Canario con sexo definido
        public static function consSexo($sexo) { 
            $pinguino = new Pinguino();
            $pinguino->sexo = $sexo;
            return $pinguino;
        }

        // crear 
        public static function consFull($sexo, $nombre) {
            $pinguino = new Pinguino();
            $pinguino->sexo = $sexo;
            $pinguino->setNombre($nombre);
            return $pinguino;
        }

        // imprimir el pingüino dependiendo de se sexo
        public function __toString() {
            $nombre = empty($this->nombre) ? " y no tengo nombre" : ", llamado " . $this->nombre;
        
            if ($this->sexo == "M") {
                return "Soy un Animal, un Ave, en concreto un Pingüino, con sexo MACHO$nombre<br>\n";
            } else {
                return "Soy un Animal, un Ave, en concreto un Pingüino, con sexo HEMBRA$nombre<br>\n";
            }
        }

        public function alimentarse(){
            echo "Pingüino $this->nombre: Estoy comiendo peces<br>\n";
        }

        public function programar(){
            echo "Pingüino $this->nombre: Soy un pingüino programandor en PHP<br>\n";
        }

        public function morirse(){
            echo "Pingüino $this->nombre: Adiós!<br>\n";
            self::$totalAves--;
            parent::$totalAnimales--;
        }

        public function dormirse() {
            echo "Pingüino $this->nombre: Zzzzzzz <br>\n";
        }

        public function ponerHuevo(){
            if ($this->sexo == "M") {
                echo "Pingüino $this->nombre: Soy macho no puedo poner huevos<br>\n";
            }else{
                echo "Pingüino $this->nombre: He puesto un huevo! <br>\n";
            }
        }
    }

?>