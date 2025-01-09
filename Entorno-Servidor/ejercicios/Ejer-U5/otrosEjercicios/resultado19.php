<?php


    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["boton-enviar"])) {
        $curso = $_GET["curso"];
        $modulo = $_GET["modulos"];
        $horas = $_GET["horas"];

        if (!empty($curso) && !empty($modulo) && !empty($horas)) {
            echo "<table>";
            echo "<tr><th>Hora</th><th>Curso</th><th>Módulo</th></tr>";
            
            foreach ($horas as $hora) {
                echo "<tr>";
                echo "<td>" . $hora. "</td>";
                echo "<td>" . $curso. "</td>";
                echo "<td>" . $modulo . "</td>";
                echo "</tr>";
            }
            
            echo "</table>";
        } else {
            echo "<p>Por favor, selecciona un curso, un módulo y al menos una hora.</p>";
        }
    }

?>