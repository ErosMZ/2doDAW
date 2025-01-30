<?php
session_start();
$errores = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST["nombre"];
    $saludoDespedida = $_POST["saludoDespedida"];

    if (!empty($nombre)) {
        if (!preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/u", $nombre)) {
            $errores["nombre"] = "El nombre contiene caracteres inválidos.";
        }
    } else {
        $errores["nombre"] = "El campo nombre está vacío.";
    }

    if (empty($saludoDespedida)) {
        $errores["saludo"] = "El campo saludo está vacío.";
    }

    if (!empty($errores)) {
        foreach ($errores as $error) {
            echo "<div class='error'><li>$error</li></div>";
        }
    } else {
        $valorActual = $saludoDespedida . ", " . $nombre;

        if (isset($_SESSION["ultimo_valor"])) {
            echo "<p><b>Dato anterior(Session):</b></p>";
            echo "<p>" . $_SESSION["ultimo_valor"] . "</p><br>";
        } else {
            echo "<p><b>Dato anterior:</b> No disponible.</p><br>";
        }

        // Mostrar el valor actual
        echo "<p><b>Dato de ahora:</b></p>";
        echo "<p>" . $valorActual . "</p><br><br>";

        $_SESSION["ultimo_valor"] = $valorActual;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejer1-Sesiones</title>
    <style>
        .error {
            color: red;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <form action="Ejer1.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">
        <br><br>

        <label for="saludoDespedida">¿Qué quieres recibir?</label>
        <input type="radio" name="saludoDespedida" value="Hola"> Saludo
        <input type="radio" name="saludoDespedida" value="Adiós"> Despedida
        <br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
