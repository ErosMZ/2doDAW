<?php
    
    session_start();    

    echo "<h1>Bienvenido " . $_SESSION["nombre"]  . "</h1>";
    echo "<p>Página del sindicalista</p>";

    $sueldos = array_column($_SESSION["empleados"], "sueldo"); 


    $sumaSueldos = 0;
    

    foreach ($_SESSION["empleados"] as $empleado) {
       

        $sumaSueldos += $empleado["sueldo"];
    }

    $media = $sumaSueldos / count($_SESSION["empleados"]);
    
    echo "La media de el sueldo es: " . $media;
?>
