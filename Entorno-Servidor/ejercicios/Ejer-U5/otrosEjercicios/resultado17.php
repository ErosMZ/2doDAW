<?php

    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["boton-enviar"])) {
        $palabras = $_GET["palabras"];
        if (!empty($_GET["palabras"]) && count($palabras) == 10) {
            $palabras = $_GET["palabras"];
            $palabrasStr = implode(" - ", $palabras);
            echo "<p> Palabras: " . $palabrasStr . "</p>";
        } elseif (empty($_GET["palabras"])) {
            echo "<p>No ha seleccionado ningún horario.</p>";
        } else{
            echo "<p>Selecciona 10 palabras.</p>";
        }
        

    }

?>