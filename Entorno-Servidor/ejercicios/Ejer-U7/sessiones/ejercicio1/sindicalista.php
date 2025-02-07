<?php
    
        session_start();    

    echo "<h1>Bienvenido " . $_SESSION["nombre"]  . "</h1>";
    echo "<p>Página del sndicalista</p>";

    foreach ($_SESSION["empleados"] as $empleado) {
        if ($empleado["sueldo"] == $minimo) {
            $empleadoMinimo = $empleado;
        }

        if ($empleado["sueldo"] == $maximo) {
            $empleadoMaximo = $empleado;
        }

        $sumaSueldos += $empleado["sueldo"];
    }

    echo "La media de el sueldo es: " . $media;

?>
