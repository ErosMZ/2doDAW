<?php

    class Terminal {

        protected $numero;
        protected $tiempoConversacion = 0;

        public function __construct($numero) {
            $this->numero = $numero;
        }

        public function getTiempoConversacion() {
            return $this->tiempoConversacion;
        }

        public function incrementarTiempo($segundos) {
            $this->tiempoConversacion += $segundos;
        }

        public function __toString() {
            $minutos = floor($this->tiempoConversacion / 60);
            $segundos = $this->tiempoConversacion % 60;
            return "Nº $this->numero - $minutos m y $segundos s de conversación en total\n";
        }
    }

    class Movil extends Terminal {
        
        private $tarifa;
        private $costeTotal = 0;
        private static $tarifas = [
            "rata" => 0.06,
            "mono" => 0.12,
            "bisonte" => 0.30
        ];

        public function __construct($numero, $tarifa) {
            parent::__construct($numero);
            if (!isset(self::$tarifas[$tarifa])) {
                throw new Exception("Tarifa no válida");
            }
            $this->tarifa = $tarifa;
        }

        public function llama($terminal, $segundosDeLlamada) {
            $this->incrementarTiempo($segundosDeLlamada);
            $terminal->incrementarTiempo($segundosDeLlamada);
            $this->costeTotal += ($segundosDeLlamada / 60) * self::$tarifas[$this->tarifa];
        }

        public function __toString() {
            $minutos = floor($this->getTiempoConversacion() / 60);
            $segundos = $this->getTiempoConversacion() % 60;
            return "Nº $this->numero - $minutos m y $segundos s de conversación en total - tarificados $minutos m y $segundos s por un importe de " . number_format($this->costeTotal, 2) . " euros\n";
        }
    }

?>