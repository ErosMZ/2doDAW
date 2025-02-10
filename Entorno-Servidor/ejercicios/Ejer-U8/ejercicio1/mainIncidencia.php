<?php
    /**
     * @author Silvia Vilar
     * Ej1UD8 - mainIncidencia.php
     */ 
    include "Incidencia.php";
    $inc1 = new Incidencia(105, "No tiene acceso a internet");
    $inc2 = new Incidencia(14, "No arranca");
    $inc3 = new Incidencia(5, "La pantalla se ve rosa");
    $inc4 = new Incidencia(237, "Hace un ruido extraño");
    $inc5 = new Incidencia(111, "Se cuelga al abrir 3 ventanas");
    $inc2->resuelve("El equipo no estaba enchufado");
    $inc3->resuelve("Cambio del cable VGA");
    print $inc1 . "<br>";
    print $inc2. "<br>";
    print $inc3. "<br>";
    print $inc4. "<br>";
    print $inc5. "<br>";
    // print "Incidencias pendientes: " . Incidencia::getPendientes();
?>