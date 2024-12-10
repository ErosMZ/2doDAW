<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
        if (isset($_GET["boton-enviar"]) && isset($_GET['salarios'])) {

            $salariosTrab = $_GET['salarios'];
            $porcentajeASubir = $_GET["porcentaje"];
            
            $trabajadores = [];
            foreach (explode(",", $salariosTrab) as $item) {
                list($nombre, $salario) = explode("=", $item);
                $trabajadores[trim($nombre)] = (float)trim($salario);
            }

            foreach ($trabajadores as $nombre => $salario) {
                $trabajadores[$nombre]= $salario + ($salario * $porcentajeASubir / 100);
            }

            foreach ($trabajadores as $nombre => $salario) {
                echo "El salario de $nombre ahora es de $salario<br>";
            }
        }
    ?>

    <h1>Aumentar Salarios</h1>
    <form method="get" action="ejer11.php">
        <label for="salarios">Introduce los salarios (nombre=salario, separados por comas):</label><br>
        <textarea name="salarios" id="salarios" rows="5" cols="40" placeholder="Ejemplo: Juan=3000, Maria=2500, Pedro=4000"></textarea><br><br>

        <label>Porcentaje que quiere subir:</label><br>
        <input type="text" name="porcentaje" id="porcentaje"> <br> <br>

        <input value="Enviar" type="submit" name="boton-enviar" id="boton-enviar">    </form>
    </form>
</body>
</html>