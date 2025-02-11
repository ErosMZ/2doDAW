<?php

    class Coche {

        public  $km = 0;
        
        public function avanza($kms){
            $this->km += $kms;
        }

        public function quemaRueda(){
            echo "Enhorabuena: Ha quemado rueda <br>\n";
            return ;
        }

        public function llenarDeposito(){
            echo "Enhorabuena: Ha rellenado el depósito <br>\n";
            return ;
        }

        public function verKMRecorridos(){
            echo "Usted ha recorrido $this->km km";
            return ;
        }
    }

?>