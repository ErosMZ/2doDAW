<?php
    $numAlumnos = readline("Dime cuantos alumnos hay: ");

    $cont = 1;
    $acum = 0;
    $array = [];
    while($cont <= $numAlumnos){
        $nota = floatval(readline("Dime la nota del alumno $cont: "));
        $acum += $nota;
        $array[$cont] = $nota;
        $cont++;
    }

    $media = $acum / $numAlumnos;
    $alumnosMayorMedia = 0;

    foreach ($array as $clave => $valor) {
        if ($valor > $media) {
            echo "Alumno $clave tiene una nota mayor a la media: $valor\n";
            $alumnosMayorMedia++; 
        }
    }

    echo "Número de alumnos con nota mayor a la media: $alumnosMayorMedia\n";
?>
