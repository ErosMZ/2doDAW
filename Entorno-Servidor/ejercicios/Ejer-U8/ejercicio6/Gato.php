<?php

    /**
     * @author Eros Muñoz Zanón
     */
    include_once "Mamifero.php";
    class Gato extends Mamifero{
        private $sexo;
        private $raza = "Siames";

        public function __construct($sexo = "M") {
            parent::__construct();
            $this->sexo = $sexo;
        }

        public static function consSexoNombre($sexo , $nombre){
            $gato = new Gato();
            $gato->sexo = $sexo;
            $gato->setNombre($nombre);
            return $gato;
        }

        public static function consFull($sexo, $nombre, $raza){
            $gato = new Gato();
            $gato->sexo = $sexo;
            $gato->setNombre($nombre);
            $gato->raza = $raza;
            return $gato;
        }
        
        public function __toString() {
            $nombre = empty($this->nombre) ? " y no tengo nombre" : ", llamado " . $this->nombre;
            
            if ($this->sexo == "M") {
                return "Soy un Animal, un Mamífero, en concreto un Gato, con sexo MACHO, raza $this->raza$nombre<br>\n";
            } else {
                return "Soy un Animal, un Mamífero, en concreto un Gato, con sexo HEMBRA, raza $this->raza$nombre<br>\n";
            }
        }

        public function alimentarse(){
            echo "Gato $this->nombre: Estoy comiendo pescado<br>\n";
        }
        
        public function morirse(){
            echo "Gato $this->nombre: Adiós!<br>\n";
            self::$totalMamiferos--;
            parent::$totalAnimales--;
        }

        public function dormirse(){
            echo "Gato $this->nombre: Zzzzzzz<br>\n";
        }

        public function maulla(){
            echo "Gato $this->nombre: Miauuuu<br>\n";
        }

        public function amamantar(){
            if ($this->sexo == "M") {
                echo "Gato $this->nombre: Soy macho, no puedo amamantar<br>\n";
            } else {
                echo "Gato $this->nombre: Amamantando a mis crias<br>\n";
            }
        }
    }   

?>