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
<?php
            if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["boton-enviar"])) {
                $nombre = isset($_GET["nombre"]) ? $_GET["nombre"] : "";
                $apellidos = isset($_GET["apellidos"]) ? $_GET["apellidos"] : "";
                $correo = isset($_GET["correo"]) ? $_GET["correo"] : "";
                $usuario = isset($_GET["usuario"]) ? $_GET["usuario"] : "";
                $password = isset($_GET["contrasenya"]) ? $_GET["contrasenya"] : "";
                $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "";
                $provincia = isset($_GET["provincia"]) ? $_GET["provincia"] : "";
                $situacion = isset($_GET["situacion"]) ? $_GET["situacion"] : [];
                $comentario = isset($_GET["comentarios"]) ? $_GET["comentarios"] : "";
                $recibirInformacion = isset($_GET["recibir-informacion"]) ? "Sí" : "No";
                $chekeoLeido = isset($_GET["chekeo-leido"]) ? "Sí" : "No";
                $situacionStr = !empty($situacion) ? implode(" - ", $situacion) : "No ha seleccionado ningún horario";

                echo "<h1>Datos del Formulario</h1>";
                echo "<p><strong>Nombre:</strong> " . htmlspecialchars($nombre) . "</p>";
                echo "<p><strong>Apellidos:</strong> " . htmlspecialchars($apellidos) . "</p>";
                echo "<p><strong>Correo Electrónico:</strong> " . htmlspecialchars($correo) . "</p>";
                echo "<p><strong>Usuario:</strong> " . htmlspecialchars($usuario) . "</p>";
                echo "<p><strong>Contraseña:</strong> " . htmlspecialchars($password) . "</p>";
                echo "<p><strong>Sexo:</strong> " . htmlspecialchars($sexo) . "</p>";
                echo "<p><strong>Provincia:</strong> " . htmlspecialchars($provincia) . "</p>";
                echo "<p><strong>Situación:</strong> " . htmlspecialchars($situacionStr) . "</p>";
                echo "<p><strong>Comentario:</strong> " . htmlspecialchars($comentario) . "</p>";
                echo "<p><strong>Desea recibir información:</strong> " . htmlspecialchars($recibirInformacion) . "</p>";
                echo "<p><strong>Ha aceptado las condiciones:</strong> " . htmlspecialchars($chekeoLeido) . "</p>";
            }
           
           
        ?>
    <!-- Título principal -->
    <h1>Eros Muñoz - Formulario de registro 2</h1>

    <form action="ejer2.php" method="get">

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

    <!-- Campo de Correo electrónico -->
    <p>
        <label for="correo"> Correo electrónico: </label><br>
        <input type="email" name="correo" id="correo" maxlength="250" >
    </p>

    <!-- Campo del Usuario -->
    <p>
        <label for="usuario">Usuario:</label> <br>
        <input type="text" name="usuario" id="usuario" maxlength="5">
    </p>
    <p>
        <label for="contrasenya">Contraseña:</label> <br>
        <input type="password" name="contrasenya" id="contrasenya" maxlength="15">
    </p>

    <!-- Campo de Sexo -->
    <p>
        <label for="sexo"> Sexo: </label><br>
        <input type="radio" name="sexo" id="radio-sexo-hombre" value="Hombre"> Hombre<br>
        <input type="radio" name="sexo" id="radio-sexo-mujer" value="Mujer" > Mujer
    </p>

    <!-- Campo de Provincia -->
    <p>
        <label for="provincia">Provincia</label><br>
        <select name="provincia" id="provincia" >
            <option value="Alicante">Alicante</option>
            <option value="Castellón">Castellón</option>
            <option value="Valencia">Valencia</option>
        </select>
    </p>
    <!-- Campo Situacion -->
    <p>
        <label for="situacion">Selecciona tu situación:</label> <br>
            <select id="situacion" name="situacion[]" multiple size="2">
            <option value="estudiando">Estudiando</option>
            <option value="trabajando">Trabajando</option>
            <option value="buscando">Buscando empleo</option>
            <option value="otro">Otro</option>
        </select>
    </p>

    <!-- Casilla comentarios -->
    <p>
        <label for="comentarios">Escribe tus comentarios:</label>
        <textarea id="comentarios" name="comentarios" rows="6" cols="60"></textarea>
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
        <input value="Limpiar" type="reset" name="boton-limpiarr" id="boton-limpiar">
    </p>

    </form>
    
</body>
</html>
