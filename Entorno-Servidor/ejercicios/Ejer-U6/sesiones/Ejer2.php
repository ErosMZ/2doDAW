<?php
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        $nombre = $_POST["nombre"];
        $idioma = $_POST["idioma"];
        $color = $_POST["color"];
        $ciudad = $_POST["ciudad"];

        $valorActual = $nombre . " " . $idioma . " " . $color . " " . $ciudad;

        if (isset($_SESSION["sessionXD"])) {
            echo "<p><b>Valor de la session</b></p>";
            echo "<p>" . $_SESSION["sessionXD"] . "</p>";
        }else {
            echo "<p><b>Valor de la session</b></p>";
            echo "<p>" . "No disponible" . "</p>";
        }

        echo "<p><b>Valor actual</b></p>";
        echo "<p>" . $valorActual . "</p>";

        $_SESSION["sessionXD"] = $valorActual;
        
    }   

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejer2-Sesiones</title>
</head>
<body>
    <form action="Ejer2.php" method="post">
        <p>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required>
        </p>
        <p>
            <label for="idioma">Idioma preferido:</label>
            <input type="text" name="idioma" id="idioma" required>
        </p>
        <p>
            <label for="color">Color preferido:</label>
            <input type="text" name="color" id="color" required>
        </p>
        <p>
            <label for="ciudad">Ciudad preferida:</label>
            <input type="text" name="ciudad" id="ciudad" required>
        </p>
        <p>
            <input type="submit" name="enviar" value="Guardar">
            <input type="reset" value="Borrar">
        </p>
    </form>
</body>
</html>