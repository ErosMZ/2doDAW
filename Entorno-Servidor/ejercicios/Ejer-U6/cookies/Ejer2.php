<?php
// Manejo de cookies y datos enviados por el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["enviar"])) {
    // Recoger los datos del formulario
    $nombre = $_POST["nombre"];
    $idioma = $_POST["idioma"];
    $color = $_POST["color"];
    $ciudad = $_POST["ciudad"];

    // Guardar los datos en cookies (duración de 1 hora)
    setcookie("nombre", $nombre, time() + 3600);
    setcookie("idioma", $idioma, time() + 3600);
    setcookie("color", $color, time() + 3600);
    setcookie("ciudad", $ciudad, time() + 3600);

    $mensaje = "Datos guardados en la cookie.";
} else {
    $mensaje = "Introduce tus datos en el formulario.";
}

// Recuperar datos de las cookies si existen
$nombreGuardado = isset($_COOKIE["nombre"]) ? $_COOKIE["nombre"] : "No disponible";
$idiomaGuardado = isset($_COOKIE["idioma"]) ? $_COOKIE["idioma"] : "No disponible";
$colorGuardado = isset($_COOKIE["color"]) ? $_COOKIE["color"] : "No disponible";
$ciudadGuardada = isset($_COOKIE["ciudad"]) ? $_COOKIE["ciudad"] : "No disponible";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con Cookies</title>
</head>
<body>
    <h1>Formulario con Cookies</h1>
    <p><?php echo $mensaje; ?></p>

    <h2>Datos guardados en la Cookie</h2>
    <ul>
        <li><strong>Nombre:</strong> <?php echo $nombreGuardado; ?></li>
        <li><strong>Idioma:</strong> <?php echo $idiomaGuardado; ?></li>
        <li><strong>Color:</strong> <?php echo $colorGuardado; ?></li>
        <li><strong>Ciudad:</strong> <?php echo $ciudadGuardada; ?></li>
    </ul>

    <h2>Introduce tus datos</h2>
    <form action="" method="post">
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
