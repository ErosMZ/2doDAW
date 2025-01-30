<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor Euros-Pesetas</title>
</head>
<body>
    <h1>Conversor de Euros a Pesetas y Viceversa</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["boton-enviar"])) {
        // Obtener datos del formulario
        $cantidad = trim($_GET["numero"]);
        $tipoMoneda = $_GET["moneda"] ?? null;

        // Validar entrada
        if (!is_numeric($cantidad) || empty($tipoMoneda)) {
            echo "<p style='color: red;'>Por favor, introduce una cantidad válida y selecciona una moneda.</p>";
        } else {
            $resultado = 0;
            $monedaOrigen = $tipoMoneda;
            $monedaDestino = ($tipoMoneda == "Euros") ? "Pesetas" : "Euros";

            // Realizar la conversión
            if ($tipoMoneda == "Euros") {
                $resultado = $cantidad * 166.386;
            } else if ($tipoMoneda == "Pesetas") {
                $resultado = $cantidad / 166.386;
                $resultado = number_format($resultado, 2);
            }

            // Mostrar resultado actual
            echo "<h2>Conversión actual:</h2>";
            echo "<p>Cantidad: $cantidad $monedaOrigen</p>";
            echo "<p>Conversión: $resultado $monedaDestino</p>";

            // Guardar resultado en una cookie
            $conversionActual = [
                "cantidad" => $cantidad,
                "monedaOrigen" => $monedaOrigen,
                "resultado" => $resultado,
                "monedaDestino" => $monedaDestino
            ];
            setcookie("conversion_anterior", json_encode($conversionActual), time() + 3600); // 1 hora
        }
    }

    // Mostrar la conversión anterior si existe
    if (isset($_COOKIE["conversion_anterior"])) {
        $conversionAnterior = json_decode($_COOKIE["conversion_anterior"], true);
        echo "<h2>Conversión anterior:</h2>";
        echo "<p>Cantidad: {$conversionAnterior['cantidad']} {$conversionAnterior['monedaOrigen']}</p>";
        echo "<p>Conversión: {$conversionAnterior['resultado']} {$conversionAnterior['monedaDestino']}</p>";
    }
    ?>

    <form action="" method="get">
        <p>
            <label for="numero">Cantidad:</label><br>
            <input type="number" name="numero" id="numero" step="any" required>
        </p>
        <p>
            <label>Convertir a:</label><br>
            <input type="radio" value="Euros" name="moneda" required> Euros<br>
            <input type="radio" value="Pesetas" name="moneda" required> Pesetas
        </p>
        <p>
            <input type="submit" name="boton-enviar" value="Convertir">
        </p>
    </form>
</body>
</html>
