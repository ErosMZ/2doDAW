<?php
    session_start(); 

    echo "<h1>Bienvenido " . $_SESSION["nombre"]  . "</h1>";
    echo "<p>Pagina del gerente</p>";
    $sueldos = array_column($_SESSION["empleados"], "sueldo"); 

    $minimo = min($sueldos); 
    $maximo = max($sueldos); 

    $empleadoMinimo = "";
    $empleadoMaximo = "";

    $sumaSueldos = 0;
    

    foreach ($_SESSION["empleados"] as $empleado) {
        if ($empleado["sueldo"] == $minimo) {
            $empleadoMinimo = $empleado;
        }

        if ($empleado["sueldo"] == $maximo) {
            $empleadoMaximo = $empleado;
        }

        $sumaSueldos += $empleado["sueldo"];
    }

    $media = $sumaSueldos / count($_SESSION["empleados"]);
    
    echo "El empleado con el sueldo mínimo es: " . $empleadoMinimo["nombre"] . " con un sueldo de " . $empleadoMinimo["sueldo"] . "<br>";
    echo "El empleado con el sueldo máximo es: " . $empleadoMaximo["nombre"] . " con un sueldo de " . $empleadoMaximo["sueldo"] . "<br>";
    echo "La media de el sueldo es: " . $media;
?>  
