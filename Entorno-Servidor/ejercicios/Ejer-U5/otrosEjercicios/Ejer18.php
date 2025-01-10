<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="resultado18.php" method="get">
    <p>
        <label for="numeros"> Numeros (separados por espacios): </label><br>
        <input type="text" name="numeros" maxlength="50" id="numeros" >
    </p>
    <p>
            <label for="calculos">Que quieres calcular: </label> <br>
            <select name="calculos[]" id="calculos" multiple size="3">
                <option  value="Media">Media</option>
                <option  value="Moda">Moda</option>
                <option  value="Mediana">Mediana</option>
            </select>
            <p>
                <input value="Enviar" type="submit" name="boton-enviar" id="boton-enviar">
            </p>
    </form>
</body>
</html>