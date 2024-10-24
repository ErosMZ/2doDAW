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
            $horas = $_GET["horas"];
            $cont = 0;
            if (is_numeric($horas) && $horas > 0) {
                
                for ($i=1; $i <= $horas; $i++) { 
                    
                    if ($i <= 40) {
                        $cont += 12;
                    }else {
                        $cont += 16;

                    }
                }
                echo "Ha cobrado " . $cont . "€ en $horas" . "h<br><br>";
            }else{
                echo "Campo horas inválido <br><br> ";
            }
        }

    ?>
    <form action="ejer4.php" method="get">

        <label for="">Dime las horas: </label>
        <input type="text" name="horas" id="horas">

        <p>
            <input value="Enviar" type="submit" name="boton-enviar" id="boton-enviar">
        </p>
    </form>
</body>
</html>