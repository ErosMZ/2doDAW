<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php

        if (isset($_GET["boton-enviar"])) {
            
            $dia= $_GET["dia"];
            if ($dia <= 15) {
                echo "El dia $dia " . "es primera quincena <br><br>";
            }elseif($dia > 15 && $dia < 31){
                echo "El dia $dia " . "es segunda quincena <br><br>";
            }
        }

    ?>
    <form action="ejer2.php" method="get">

        <label for="dia">Número de el mes: </label>
        <input type="text" name="dia" id="dia">

        <p>
            <input value="Enviar" type="submit" name="boton-enviar" id="boton-enviar">
        </p>
    </form>
</body>
</html>