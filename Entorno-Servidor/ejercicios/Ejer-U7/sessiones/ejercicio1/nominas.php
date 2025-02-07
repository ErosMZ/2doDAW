<?php

    session_start();    

    echo "<h1>Bienvenido " . $_SESSION["nombre"]  . "</h1>";
    echo "<p>Página del responsable de nóminas</p>";

    $sueldos = array_column($_SESSION["empleados"], "sueldo"); 

    $minimo = min($sueldos); 
    $maximo = max($sueldos); 

    $empleadoMinimo = "";
    $empleadoMaximo = "";
    foreach ($_SESSION["empleados"] as $empleado) {
        if ($empleado["sueldo"] == $minimo) {
            $empleadoMinimo = $empleado;
        }

        if ($empleado["sueldo"] == $maximo) {
            $empleadoMaximo = $empleado;
        }
    }
    
    echo "El empleado con el sueldo mínimo es: " . $empleadoMinimo["nombre"] . " con un sueldo de " . $empleadoMinimo["sueldo"] . "<br>";
    echo "El empleado con el sueldo mínimo es: " . $empleadoMaximo["nombre"] . " con un sueldo de " . $empleadoMaximo["sueldo"];

?>
