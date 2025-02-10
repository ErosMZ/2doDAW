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

        self::$incidencias[] = $this; // Agregar esta incidencia al array estático
    }

    public function resuelve($descripcion) {
        // Buscar incidencia por descripción
        foreach (self::$incidencias as $incidencia) {
            if ($incidencia->descripcion == $descripcion) {
                $incidencia->estado = "resuelta"; // Cambiar estado de la incidencia encontrada
            }
        }
        return null; 
    }

    public function __toString() {
        return "ID: $this->id - Descripción: $this->descripcion - Estado: $this->estado\n";
    }
}
?>
