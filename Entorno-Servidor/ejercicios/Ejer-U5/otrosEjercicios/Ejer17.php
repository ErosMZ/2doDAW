<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 17</title>
</head>
<body>
    
    <form action="resultado17.php" method="get">
        
        <p>
            <label for="palabras">Palabras: </label> <br>
            <select name="palabras[]" id="palabras" multiple size="6">
                <option  value="Car">Coche</option>
                <option  value="Cat">Gato</option>
                <option  value="Plane">Avión</option>
                <option value="Home">Casa</option>
                <option value="Floor">Suelo</option>
                <option value="Spoon">Cuchara</option>
                <option value="Keyboard">Teclado</option>
                <option value="Mouse">Ratón</option>
                <option value="Water">Agua</option>
                <option value="Screen">Pantalla</option>
                <option value="Bottle">Botella</option>
                <option value="Translator">Traductor</option>
                <option value="Table">Mesa</option>
                <option value="Helicopter">Helicoptero</option>
                <option value="Bag">Bolsa</option>
                <option value="Button">Botón</option>
                <option value="Finance">Finanzas</option>
                <option value="Speaker">Altavoz</option>
                <option value="Characterization">Caracterización</option>
                <option value="Cinnamon">Canela</option>
            </select>
        </p>

        <p>
            <input value="Enviar" type="submit" name="boton-enviar" id="boton-enviar">
        </p>
    </form>

</body>
</html>