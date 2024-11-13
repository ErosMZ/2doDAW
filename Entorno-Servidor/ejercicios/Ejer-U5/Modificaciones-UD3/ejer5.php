<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <?php

        if (isset($_GET["boton-enviar"])) {
            $caracter= $_GET["caracter"];
            if (strlen($caracter) == 1) {
                if (ctype_upper($caracter)) {
                    echo "$caracter: "." es mayúscula.\n";
                }elseif(ctype_lower($caracter)){
                    echo "$caracter:" . " es minúscula\n";
                }elseif(ctype_digit($caracter)){
                    echo  "$caracter:" . " es un número\n";
                }elseif (ctype_space($caracter)) {
                    
                }elseif (ctype_punct($caracter)) {
                    return  "$caracter:" . " signo de puntuación\n";
                }else {
                    return "$caracter:" . " es un carácter especial\n";
                }
            }else{
                echo "Tiene que ser un carácter";
            }
        }
    ?>
    <form action="ejer5.php" method="get">

        <label for="caracter">Dime el caracter: </label>
        <input type="text" name="caracter" id="caracter">

        <p>
            <input value="Enviar" type="submit" name="boton-enviar" id="boton-enviar">
        </p>
    </form>
</body>
</html>