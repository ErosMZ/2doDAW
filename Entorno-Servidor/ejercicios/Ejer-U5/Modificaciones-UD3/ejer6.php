<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <?php

        if (isset($_GET["boton-enviar"])) {
            $hora = $_GET["hora"];
            $partes = explode(":", $hora);
        
            // Verificar que haya 3 partes
            if (count($partes) != 3) {
                echo "Error al introducir la hora\n";
            } else {
                // que cada parte sea un número y que no contenga letras
                if (ctype_digit($partes[0]) && ctype_digit($partes[1]) && ctype_digit($partes[2])) {
                    $horas = (int)$partes[0];
                    $minutos = (int)$partes[1];
                    $segundos = (int)$partes[2];
        
                    // if para verificar si es correcta la hora 
                    if ($horas < 0 || $horas >= 24) {
                        echo "Las horas deben estar entre el 1 y el 24\n";
                    } elseif ($minutos < 0 || $minutos >= 60) {
                        echo "Los minutos deben estar entre el 0 y el 59\n";
                    } elseif ($segundos < 0 || $segundos >= 60) {
                        echo "Los segundos deben estar entre el 0 y el 59\n";
                    } else {
                        echo "La hora es válida: $horas:$minutos:$segundos\n";
                    }
                } else {
                    echo "La hora contiene caracteres no numéricos";
                }
            }
        }
        
    ?>
    <form action="ejer6.php" method="get">

        <label for="hora">Dime la hora en formato(H:M:S)</label>
        <input type="text" name="hora" id="hora">

        <p>
            <input value="Enviar" type="submit" name="boton-enviar" id="boton-enviar">
        </p>
    </form>
</body>
</html>