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
            $fechaInicial = $_GET["fechaInicial"];
            $fechaFinal = $_GET["fechaFinal"];
            
            if (isset($_GET["horaActual"])) {
                echo "El checkbox está marcado";
            } else {

                $fechaInicialString = explode(":", $fechaInicial );
                $fechaFinalString = explode(":", $fechaFinal );
                
                if (count($fechaInicialString) == 3 && count($fechaFinalString) == 3) {
                    
                    $fechaValida = true; // Bandera de validación

                    // Verificamos cada componente de la fecha inicial
                    foreach ($fechaInicialString as $valor) {
                        if (!is_numeric($valor)) {
                            $fechaValida = false;
                            break;
                        }
                    }

                    // Verificamos cada componente de la fecha final
                    foreach ($fechaFinalString as $valor) {
                        if (!is_numeric($valor)) {
                            $fechaValida = false;
                            break;
                        }
                    }

                    
                    if ($fechaValida) {
                        echo "La fecha de Inicio es " . $fechaInicial . "<br><br>";
                        echo " La fecha final es " . $fechaFinal  . "<br><br>";

                        if ($fechaFinal < $fechaInicial) {
                            echo "La fecha de inicial tiene que se menor a la final";
                        }else {
                            
                            echo "Todo ok";
                        }
                    }
                } else {
                    echo "Una o ambas fechas contienen valores no numéricos.";
                }
            }
        }
    ?>

    <form action="ejer8.php" method="get">

        <br><br>
        <input type="checkbox" name="horaActual" id="horaActual">Poner hora de inicio la actual
        <p>
            <label for="fechaInicial">Fecha de inicio:</label>
            <input type="text" id="fechaInicial" name="fechaInicial" placeholder="Formato D:H:M">
        </p>

        <p>
            <label for="fechaFinal">Fecha final:</label>
            <input type="text" id="fechaFinal" name="fechaFinal" placeholder="Formato D:H:M">
        </p>

        <p>
            <input value="Enviar" type="submit" name="boton-enviar" id="boton-enviar">
        </p>
    </form>
</body>
</html>
