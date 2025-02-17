<?php

    class Vehiculo{

        public $kmTotales = 0;
        
        


    }

    class Bicicleta extends Vehiculo{
        
        public $km = 0;
        


        public function avanza($kms){
            $this->km += $kms;
            
        }

        public function hacerCaballito(){
            echo "\nEnhorabuena: Ha hecho el caballino xd <br>\n\n";
            return ;
        }

        public function ponerCadena(){
            echo "\nEnhorabuena: Ha puesto la cadena <br>\n\n";
            return ;
        }

        public function verKMRecorridos(){
            echo "\nUsted ha recorrido $this->km km<br>\n\n";
            return ;
        }
    }

    class Coche extends Vehiculo{

        public  $km = 0;

        public function avanza($kms) {
            $this->km += $kms;
            self::$kmTotales += $kms; 
        }
    

        public function quemaRueda(){
            echo "\nEnhorabuena: Ha quemado rueda <br>\n\n";
            return ;
        }

        public function llenarDeposito(){
            echo "\nEnhorabuena: Ha rellenado el depósito <br>\n\n";
            return ;
        }

        public function verKMRecorridos(){
            echo "\nUsted ha recorrido $this->km km <br>\n\n";
            return ;
        }
    }

?>