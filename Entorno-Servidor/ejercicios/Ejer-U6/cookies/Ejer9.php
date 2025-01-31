<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hora por Zona Horaria</title>
</head>
<body>

<form action="Ejer9.php" method="POST">
    <label for="zonaHoraria">Selecciona la zona horaria:</label>
    <select id="zonaHoraria" name="zonaHoraria">
        <option value="America/Argentina/Buenos_Aires">Argentina</option>
        <option value="Australia/Sydney">Australia</option>
        <option value="America/Sao_Paulo">Brasil</option>
        <option value="America/Toronto">Canadá</option>
        <option value="America/Santiago">Chile</option>
        <option value="Asia/Shanghai">China</option>
        <option value="America/Bogota">Colombia</option>
        <option value="Africa/Cairo">Egipto</option>
        <option value="Europe/Madrid">España</option>
        <option value="America/New_York">Estados Unidos</option>
        <option value="Europe/Paris">Francia</option>
        <option value="Asia/Kolkata">India</option>
        <option value="Europe/Rome">Italia</option>
        <option value="Asia/Tokyo">Japón</option>
        <option value="America/Mexico_City">México</option>
        <option value="America/Lima">Perú</option>
        <option value="Europe/London">Reino Unido</option>
        <option value="Europe/Moscow">Rusia</option>
        <option value="Africa/Johannesburg">Sudáfrica</option>
        <option value="America/Caracas">Venezuela</option>
    </select>
    <button type="submit">Mostrar Hora</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $zonaSeleccionada = $_POST["zonaHoraria"];

    if (isset($_COOKIE["zona_horaria"])) {
        $zonaAnterior = $_COOKIE["zona_horaria"];
    } else {
        $zonaAnterior = "No hay datos anteriores";
    }

    setcookie("zona_horaria", $zonaSeleccionada, time() + 60, "/");

    date_default_timezone_set($zonaSeleccionada);
    $horaActual = date("H:i:s");

    echo "<p><b>Zona horaria actual:</b> " . htmlspecialchars($zonaSeleccionada) . " - Hora: $horaActual</p>";
    
    if ($zonaAnterior !== "No hay datos anteriores") {
        date_default_timezone_set($zonaAnterior);
        $horaAnterior = date("H:i:s");
        echo "<p><b>Zona horaria anterior: </b> " . htmlspecialchars($zonaAnterior) . " - Hora: $horaAnterior</p>";
    } else {
        echo "<p>No hay datos de zona horaria anterior.</p>";
    }
}
?>

</body>
</html>
