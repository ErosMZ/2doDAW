<?php

    class Bicicleta{
        
        public  $km = 0;
        
        public function avanza($kms){
            $this->km += $kms;
        }

        public function hacerCaballito(){
            echo "Enhorabuena: Ha hecho el caballino xd <br>\n";
            return ;
        }

        public function ponerCadena(){
            echo "Enhorabuena: Ha puesto la cadena <br>\n";
            return ;
        }

        public function verKMRecorridos(){
            echo "Usted ha recorrido $this->km km";
            return ;
        }
    }

?>