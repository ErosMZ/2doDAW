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

            $cantidad= $_GET["numero"];
            $tipoMoneda = $_GET["moneda"];
            if (isset($_GET["moneda"])) {
                if (is_numeric($cantidad)) {

                    foreach ($tipoMoneda as $moneda ) {
                        if ($moneda == "Euros") {
                            $euros = $cantidad / 166.386;
                            // esto sirve para sacar solamente los 2 últimos decimales
                            $eurosDosDecimales = number_format($euros, 2);
                            echo $cantidad . "pts son $eurosDosDecimales" . "€ <br><br>";
                        }elseif($moneda == "Pesetas"){
                            $pesetas = $cantidad * 166.386;
                            echo $cantidad . "€ son $pesetas" . "pts <br><br>";
                        }elseif($moneda == "") {
                            echo "Esta vacio";
                        }
                    }
                }else{
                    echo "Campo cantidad inválido";
                }
            }else {
               echo "No ha seleccionado el tipo de moneda";
            }
            
            
        }

    ?>
    <form action="ejer3.php" method="get">

        <label for="numero">Cantidad: </label>
        <input type="text" name="numero" id="numero">
        <br>
        <br>
        <label for="$operacion">Convertir a:</label> 
        <input type="radio" value="Euros" name="moneda[]" id="moneda">Euros
        <input type="radio" value= "Pesetas" name="moneda[]" id="moneda">Pesetas

        <p>
            <input value="Enviar" type="submit" name="boton-enviar" id="boton-enviar">
        </p>
    </form>

</body>
</html>