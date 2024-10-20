<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eros - Formulario de registro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Título principal -->
    <h1>Eros - Formulario de registro</h1>

    <form action="ejer1.php" method="get">

    <!-- Campo de Nombre -->
    <p>
        <label for="nombre"> Nombre: </label><br>
        <input type="text" name="nombre" maxlength="50" id="nombre" >
    </p>

    <!-- Campo de Apellidos -->
    <p>
        <label for="apellidos"> Apellidos:</label><br>
        <input type="text" name="apellidos" maxlength="200" id="apellidos" >
    </p>

    <!-- Campo de Sexo -->
    <p>
        <label for="sexo"> Sexo: </label><br>
        <input type="radio" name="sexo" id="radio-sexo-hombre" value="hombre" > Hombre<br>
        <input type="radio" name="sexo" id="radio-sexo-mujer" value="mujer" > Mujer
    </p>

    <!-- Campo de Correo electrónico -->
    <p>
        <label for="correo"> Correo electrónico: </label><br>
        <input type="email" name="correo" id="correo" maxlength="250" >
    </p>

    <!-- Campo de Provincia -->
    <p>
        <label for="provincia">Provincia</label><br>
        <select name="provincia" id="provincia" >
            <option value="">Seleccione su provincia</option>
            <option value="Alicante">Alicante</option>
            <option value="Castellón">Castellón</option>
            <option value="Valencia">Valencia</option>
        </select>
    </p>

    <!-- Casilla de recibir información -->
    <p>
        <input type="checkbox" name="recibir-informacion" value="recibir-informacion" id="recibir-informacion" checked>
        <label for="recibir-informacion">Deseo recibir información sobre novedades y ofertas</label>
    </p>

    <!-- Casilla de aceptación de condiciones -->
    <p>
        <input type="checkbox" name="chekeo-leido" id="chekeo-leido" >
        <label for="chekeo-leido">Declaro haber leído y aceptar las condiciones generales del programa y la normativa sobre protección de datos</label>
    </p>

    <!-- Botón de Enviar -->
    <p>
        <input value="Enviar" type="submit" name="boton-enviar" id="boton-enviar">
    </p>

    </form>
<?php
        
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            
            $nombre = isset($_GET["nombre"]) ? $_GET["nombre"] : "";
            $apellidos = isset($_GET["apellidos"]) ? $_GET["apellidos"] : "";
            $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "";
            $correo = isset($_GET["correo"]) ? $_GET["correo"] : "";
            $provincia = isset($_GET["provincia"]) ? $_GET["provincia"] : "";
            $recibirInformacion = isset($_GET["recibir-informacion"]) ? "Sí" : "No";
            $chekeoLeido = isset($_GET["chekeo-leido"]) ? "Sí" : "No";

            
            echo "<h1>Datos del Formulario</h1>";
            echo "<p><strong>Nombre:</strong> " . htmlspecialchars($nombre) . "</p>";
            echo "<p><strong>Apellidos:</strong> " . htmlspecialchars($apellidos) . "</p>";
            echo "<p><strong>Sexo:</strong> " . htmlspecialchars($sexo) . "</p>";
            echo "<p><strong>Correo Electrónico:</strong> " . htmlspecialchars($correo) . "</p>";
            echo "<p><strong>Provincia:</strong> " . htmlspecialchars($provincia) . "</p>";
            echo "<p><strong>Desea recibir información:</strong> " . htmlspecialchars($recibirInformacion) . "</p>";
            echo "<p><strong>Ha aceptado las condiciones:</strong> " . htmlspecialchars($chekeoLeido) . "</p>";
        } else {
            echo "<p>No se han enviado datos.</p>";
        }
?>

</body>
</html>
