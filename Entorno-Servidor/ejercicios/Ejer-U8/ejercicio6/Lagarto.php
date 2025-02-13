<?php

include_once "Animal.php";

class Lagarto extends Animal {
    private $sexo; 

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
        echo "$this->nombre está tomando el sol ☀️ <br>";
    }

    public function dormirse() {
        echo "$this->nombre se ha dormido 😴 <br>";
    }

    public function morirse() {
        echo "$this->nombre ha muerto 💀 <br>";
    }
    public function __toString() {
        return "Soy un Animal, en concreto un Lagarto, con sexo $this->sexo, llamado $this->nombre<br>\n";
    }
}



?>
