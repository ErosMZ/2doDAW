<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Ejer 2</title>
</head>
<body>
    <?php 

        session_start();

        $nombre = $_SESSION["nombre"];
        $apellido = $_SESSION["apellido"];
        $asignatura = $_SESSION["asignatura"];
        
        $grupo = $_SESSION["grupo"];
        $edad = $_SESSION["edad"];
        $cargo = $_SESSION["cargo"];
        
        echo "<h1>Bienvenido $nombre $apellido</h1>";

    ?>
</body>
</html>
