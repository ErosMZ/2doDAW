<?php
    /**
     * @author Eros Muñoz Zanón
     */
    include_once "Ave.php";

    class Canario extends Ave {
        private $sexo;

        // Aumenta el contador de aves ya que lo envia al constructor
        // de aves y a demas guarda el sexo
        public function __construct($sexo = "M") {
            parent::__construct(); 
            $this->sexo = $sexo; 
        }

        //  crea un Canario con sexo predeterminado de macho
        public static function consSexo($sexo) { 

            $canario = new Canario();
            $canario->sexo = $sexo;
            return $canario;
           
        }

        public static function consFull($sexo, $nombre) {
            $canario = new canario();
            $canario->sexo = $sexo;
            $canario->setNombre($nombre);
            return $canario;
        }

        public function __toString() {
            
            if ($this->sexo == "M") {
                return "Soy un Animal, un Ave, en concreto un Canario, con sexo  MACHO, llamado $this->nombre<br>\n";
            }else {
                return "Soy un Animal, un Ave, en concreto un Canario, con sexo  HEMBRA, llamado $this->nombre<br>\n";

            }
        }

        public function alimentarse(){

            echo "Canario $this->nombre: Estoy comiendo alpiste <br>\n";
        }

        public function ponerHuevo(){
            if ($this->sexo == "M") {
                echo "Canario $this->nombre: Soy macho no puedo poner huevos<br>\n";
            }else{
                echo "Canario $this->nombre: He puesto un huevo! <br>\n";
            }
        }

        public function pia(){
            echo "Canario $this->nombre: Pio pio pio<br>\n";
        }

        public function morirse(){
            echo "Canario $this->nombre: Adiós!<br>\n";
            self::$totalAves--;
            parent::$totalAnimales--;
        }
    }

?>
