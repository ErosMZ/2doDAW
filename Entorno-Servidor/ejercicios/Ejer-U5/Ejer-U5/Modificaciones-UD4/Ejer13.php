<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Título principal -->
    <h1>Eros Muñoz- Formulario de registro 1</h1>

    <form action="ErosForm1OK.php" method="get">

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
        <input type="radio" name="sexo" id="radio-sexo-hombre" value="Hombre" > Hombre<br>
        <input type="radio" name="sexo" id="radio-sexo-mujer" value="Mujer" > Mujer
    </p>

    <!-- Campo de Correo electrónico -->
    <p>
        <label for="correo"> Correo electrónico: </label><br>
        <input type="text" name="correo" id="correo" maxlength="250" >
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
</body>
</html>