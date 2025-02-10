<?php 
 session_start();
     if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["enviar"])) {
        session_destroy();
        header("Location: Ejer2.php");
        exit(); 
    }

   

    $nombre = $_SESSION["nombre"];
    $apellido = $_SESSION["apellido"];
    $asignatura = $_SESSION["asignatura"];
    $grupo = $_SESSION["grupo"];
    $edad = $_SESSION["edad"];
    $cargo = $_SESSION["cargo"];

    $asignaturaStr = implode(", ", $asignatura);
    echo "<h1>Bienvenido $nombre $apellido</h1>";
    echo "<p><b>Grupo: </b> $grupo</p>";
    echo "<p><b>Mayor de edad: </b>$edad</p>";
    echo "<p><b>Cargo: </b>$cargo</p>";
    echo "<p><b>Asignaturas: </b>$asignaturaStr</p>"

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Ejer 2</title>
</head>
<body>

    <form action="resultadoEjer2.php" method="post">
        <input type="submit" value="Volver" name="enviar">
    </form>

</body>
</html>
