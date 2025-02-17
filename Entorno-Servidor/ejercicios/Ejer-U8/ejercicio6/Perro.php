<?php
    /**
     * @author Eros Muñoz Zanón
     */
    include_once "Mamifero.php";
    class Perro extends Mamifero{
  
        private $sexo;
        private $raza = "teckel";

        public function __construct($sexo = "M") {
            parent::__construct();
            $this->sexo = $sexo;
        }

        public static function consSexoNombre($sexo , $nombre){
            $perro = new Perro();
            $perro->sexo = $sexo;
            $perro->setNombre($nombre);
            return $perro;
        }

        public static function consFull($sexo, $nombre, $raza){
            $perro = new Perro();
            $perro->sexo = $sexo;
            $perro->setNombre($nombre);
            $perro->raza = $raza;
            return $perro;
        }
        
        public function __toString() {
            $nombre = empty($this->nombre) ? " y no tengo nombre" : ", llamado " . $this->nombre;
            
            if ($this->sexo == "M") {
                return "Soy un Animal, un Mamífero, en concreto un Perro, con sexo MACHO, raza $this->raza$nombre<br>\n";
            } else {
                return "Soy un Animal, un Mamífero, en concreto un Perro, con sexo HEMBRA, raza $this->raza$nombre<br>\n";
            }
        }

        public function alimentarse(){
            echo "Perro $this->nombre: Estoy comiendo carne<br>\n";
        }
        
        public function morirse(){
            echo "Perro $this->nombre: Adiós!<br>\n";
            self::$totalMamiferos--;
            parent::$totalAnimales--;
        }

        public function dormirse(){
            echo "Perro $this->nombre: Zzzzzzz<br>\n";
        }

        public function amamantar(){
            if ($this->sexo == "M") {
                echo "Perro $this->nombre: Soy macho, no puedo amamantar<br>\n";
            } else {
                echo "Perro $this->nombre: Amamantando a mis crias<br>\n";
            }
        }

        public function ladra(){
            echo "Perro $this->nombre: Guau guau <br>\n";
        }
    }

?>