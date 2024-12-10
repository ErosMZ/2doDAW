<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        if (isset($_GET["boton-enviar"])) {
            $multiplicando = $_GET["multiplicando"];
            $multiplicador =$_GET["multiplicador"];
            if (!empty($_GET["multiplicando"])  && !empty($_GET["multiplicador"])) {
                for ($i=1; $i <= $multiplicador; $i++) { 
                    $op = $multiplicando * $i;

                    echo "$multiplicando x $i = $op <br><br>";
                }
            }else{
                echo "Algún caracter esta vacío";
            }
        }

    ?>
    <form action="ejer9.php" method="get">
    
        <label for="multiplicando">Dime el multiplicando</label>
        <input type="text" name="multiplicando" id="multiplicando">
        <br><br>
        <label for="multiplicador">Introduce el multiplicador:</label>
        <input type="text" name="multiplicador" id="multiplicador" placeholder="1-10">
        <p>
            <input value="Enviar" type="submit" name="boton-enviar" id="boton-enviar">
        </p>
    </form>
</body>
</html>