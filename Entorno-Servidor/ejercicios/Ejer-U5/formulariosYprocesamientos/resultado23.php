<?php
    echo "<h2>Datos recibidos:</h2>";
    echo "<p><strong>Nombre:</strong> " . $_GET["nombre"] . "</p>";
    echo "<p><strong>Email:</strong> " . $_GET["email"] . "</p>";
    echo "<p><strong>Edad:</strong> " . $_GET["edad"] . "</p>";
    echo "<p><strong>Nivel de estudios:</strong> " . $_GET["estudios"] . "</p>";

    echo "<p><strong>Situación actual:</strong> " . htmlspecialchars(implode(", ", $_GET["situacion"])) . "</p>";

    echo "<p><strong>Hobbies:</strong> " . implode(", ", $_GET["hobbies"]) . "</p>";

    if (!empty($_GET["otroHobbie"])) {
        echo "<p><strong>Otro hobbie:</strong> " . htmlspecialchars($_GET["otroHobbie"]) . "</p>";
    }

?>
