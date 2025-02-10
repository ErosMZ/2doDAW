<?php

    class Incidencia {
        public $id;
        public $descripcion;
        public $estado = "pendiente";

        public static $incidencias = [];

        public function __construct($id, $descripcion, $estado = "pendiente") {
            $this->id = $id;
            $this->descripcion = $descripcion;
            $this->estado = $estado;
            self::$incidencias[] = $this; 
            

        }

        public static function getPendientes() {
            $pendientes = "";
            foreach (self::$incidencias as $incidencia) {
                if ($incidencia->estado == "pendiente") {
                    $pendientes .= "ID: $incidencia->id - Descripción: $incidencia->descripcion - Estado: $incidencia->estado\n";
                }
            }
            return $pendientes;
        }


        public function resuelve() {
            $this->estado = "resuelta";
        }

        public function __toString() {
            return "ID: $this->id - Descripción: $this->descripcion - Estado: $this->estado\n";
        }
    }
?>
