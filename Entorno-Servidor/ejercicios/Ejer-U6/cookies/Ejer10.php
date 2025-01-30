<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10 </title>
</head>
<body>
    <form action="resultado10.php" method="get">
        <label for="correo">Correo:</label>
        <input type="text" name="correo" id="correo" required>

        <p>
            <input type="checkbox" name="recibir-informacion" id="recibir-informacion">
            <label for="recibir-informacion">Desea recibir información después de realizar este formulario</label>
        </p>

        <p>
            <input value="Enviar" type="submit" name="boton-enviar" id="boton-enviar">
            <input type="reset" value="Borrar">
        </p>
    </form>
</body>
</html>
