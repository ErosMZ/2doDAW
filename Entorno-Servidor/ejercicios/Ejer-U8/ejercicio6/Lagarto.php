<?php

include_once "Animal.php";

class Lagarto extends Animal {
    private $sexo; 

    public function __construct($sexo = "M") { 
        parent::__construct();
        $this->sexo = $sexo; 
    }

    public static function consSexo($sexo = "M") {
        return new Lagarto($sexo); // Se pasa el sexo directamente
    }
    
    public static function consFull($sexo, $nombre) {
        $lagarto = new Lagarto($sexo); 
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
