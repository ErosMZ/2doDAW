<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    if (isset($_GET["boton-enviar"])) {
        // almaceno las llamadas en una array para hacer un foreach
        $llamadas = [
            $_GET["llamada1"],
            $_GET["llamada2"],
            $_GET["llamada3"],
            $_GET["llamada4"],
            $_GET["llamada5"]
        ];

        // recorro cada llamda 
        foreach ($llamadas as $num => $llamada) {
            // que el valor de la llamda que pone el usurio sea numérico y mayor de 0
            if (is_numeric($llamada) && $llamada > 0) {
                $costoLlamada = 10; 
                $cont = 1;

                // si es mayor a 3 ya le empiezo a sumar de 5 en 5
                while ($cont <= $llamada) {
                    if ($cont > 3) {
                        $costoLlamada += 5; 
                    }
                    $cont++;
                }

                // Convertir a euros
                $costoLlamadaAEuros = $costoLlamada / 100;
                echo "El costo total de la llamada " . ($num + 1) . " es: $costoLlamadaAEuros €<br><br>";
            } else {
                echo "No rellenaste el campo de la llamada " . ($num + 1) . " o pusiste caracteres inválidos.<br><br>";
            }
        }
    }
?>
    <form action="ejer7.php" method="get">
        <label for="llamada1">Dime la primera llamada</label>
        <input type="text" name="llamada1" id="llamada1"><br><br>

        <label for="llamada2">Dime la segunda llamada</label>
        <input type="text" name="llamada2" id="llamada2"><br><br>

        <label for="llamada3">Dime la tercera llamada</label>
        <input type="text" name="llamada3" id="llamada3"><br><br>

        <label for="llamada4">Dime la cuarta llamada</label>
        <input type="text" name="llamada4" id="llamada4"><br><br>

        <label for="llamada5">Dime la quinta llamada</label>
        <input type="text" name="llamada5" id="llamada5"><br><br>

        <p>
            <input value="Enviar" type="submit" name="boton-enviar" id="boton-enviar">
        </p>
    </form>
</body>
</html>