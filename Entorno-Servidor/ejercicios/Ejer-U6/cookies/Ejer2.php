<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    
        $nombre = $_POST["nombre"];
        $idiomas= $_POST["idiomas"];


    }
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejer2-cookies</title>
</head>
<body>
    <form action="Ejer2.php" method="post">

        <label for="">Nombre:</label>
        <input type="text" name="nombre" id=""> 
        
        <br><br>

        <label for="idiomas[]">Idiomas:</label> <br>
        <select name="idiomas[]" multiple size="3">
            <option value="Español">Español</option>
            <option value="Inglés">Inglés</option>
            <option value="Coreano">Coreano</option>
            <option value="Italiano">Italiano</option>
            <option value="Ruso">Ruso</option>
        </select>

        <br><br>

        <label for="color">Color:</label><br>
        <input type="radio" value="Rojo" name="color">Rojo <br>
        <input type="radio" value="Blanco" name="color">Blanco <br>
        <input type="radio" value="Amarillo" name="color">Amarillo <br>
        <input type="radio" value="Azul" name="color">Azul <br>
        <input type="radio" value="Verde" name="color">Verde <br>
        <input type="radio" value="Rosa" name="color">Rosa

        <br><br>

        <label for="ciudad">Cuidades:</label> <br>
        <select name="cuidades[]" multiple size="4">
            <option value="Valencia">Valencia</option>
            <option value="Bangkok">Bangkok</option>
            <option value="Quito">Quito</option>
            <option value="Ciudad de México">Ciudad de México</option>
            <option value="Madrid">Madird</option>
            <option value="A coruña">A coruña</option>
            <option value="Venecia">Venecia</option>
        </select>

        <br><br>



    </form>
</body>
</html>