<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>
<?php
    if (isset($_GET["boton-enviar"]) && isset($_GET["salarios"])) {
        
        $salariosTrab = $_GET["salarios"];
        $calculos = $_GET["calculos"] ?? [];

        // Convertir el input en un array asociativo
        $trabajadores = [];
        foreach (explode(",", $salariosTrab) as $item) {
            list($nombre, $salario) = explode("=", $item);
            $trabajadores[trim($nombre)] = (float)trim($salario);
        }

        // Calcular los valores seleccionados
        if (!empty($trabajadores)) {
            echo "<h2>Resultados</h2>";

            if (in_array("maximo", $calculos)) {
                $max_salario = max($trabajadores);
                $nombre_max = array_search($max_salario, $trabajadores);
                echo "Salario Máximo: $nombre_max con $max_salario<br>";
            }

            if (in_array("minimo", $calculos)) {
                $min_salario = min($trabajadores);
                $nombre_min = array_search($min_salario, $trabajadores);
                echo "Salario Mínimo: $nombre_min con $min_salario<br>";
            }

            if (in_array("medio", $calculos)) {
                $salario_medio = array_sum($trabajadores) / count($trabajadores);
                echo "Salario Medio: $salario_medio<br>";
            }
        } else {
            echo "<p>No se han introducido datos válidos.</p>";
        }
    }
    ?>

    <h1>Calcular Salarios</h1>
    <form action="ejer10.php" method="get">
        <label for="salarios">Introduce los salarios (nombre=salario, separados por comas):</label><br>
        <textarea name="salarios" id="salarios" rows="5" cols="40" placeholder="Ejemplo: Juan=3000, Maria=2500, Pedro=4000"></textarea><br><br>

        <label>¿Qué cálculo deseas realizar?</label><br>
        <input type="checkbox" name="calculos[]" value="maximo"> Salario Máximo<br>
        <input type="checkbox" name="calculos[]" value="minimo"> Salario Mínimo<br>
        <input type="checkbox" name="calculos[]" value="medio"> Salario Medio<br><br>

        <input value="Enviar" type="submit" name="boton-enviar" id="boton-enviar">    </form>
</body>
</html>
