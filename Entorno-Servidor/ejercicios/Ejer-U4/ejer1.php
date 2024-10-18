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
            <option value="alicante">Alicante</option>
            <option value="castellon">Castellón</option>
            <option value="valencia">Valencia</option>
        </select>
    </p>

    <!-- Casilla de recibir información -->
    <p>
        <input type="checkbox" name="recibir-informacion" value="recibir-informacion" id="recibir-informacion" >
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

</body>
</html>
