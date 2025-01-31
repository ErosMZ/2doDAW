<?php
    session_start(); // Iniciar la sesión

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $numeros = $_POST["numeros"] ?? '';
        $calculos = $_POST["operacion"] ?? [];

        if (empty($numeros) || empty($calculos)) {
            echo "<p>Algún campo está vacío.</p>";
        } else {
            
            $arrayNum = array_filter(explode(" ", trim($numeros)), 'is_numeric');
            if (empty($arrayNum)) {
                echo "<p>Ingrese números válidos.</p>";
            } else {
                
                sort($arrayNum, SORT_NUMERIC);
                foreach ($calculos as $opcionCalculo) {
                    switch ($opcionCalculo) {
                        case "Media":
                            $op = array_sum($arrayNum) / count($arrayNum);
                            $valorActual = "<p>La media de " . implode(", ", $arrayNum) . " es: $op</p>";
                            break;

                        case "Moda":
                            $contValores = array_count_values($arrayNum);
                            $maxRepeticiones = max($contValores);
                            $moda = array_keys($contValores, $maxRepeticiones);
                            $valorActual = "<p>La moda de " . implode(", ", $arrayNum) . " es: " . implode(", ", $moda) . "</p>";
                            break;

                        case "Mediana":
                            $count = count($arrayNum);
                            $mitad = floor($count / 2);
                            if ($count % 2 == 0) {
                                $op = ($arrayNum[$mitad - 1] + $arrayNum[$mitad]) / 2;
                            } else {
                                $op = $arrayNum[$mitad];
                            }
                            $valorActual = "<p>La mediana de " . implode(", ", $arrayNum) . " es: $op</p>";
                            break;

                        default:
                            echo "<p>Operación no válida.</p>";
                            continue 2;
                    }
                    
                    echo "<p><h2>Valor actual</h2></p>";
                    echo "<p>" . $valorActual . "</p>";

                    if (isset($_SESSION["sessionXD"])) {
                        echo "<p><b>Valor de la session</b></p>";
                        echo "<p>" . $_SESSION["sessionXD"] . "</p>";
                    }else {
                        echo "<p><b>Valor de la session</b></p>";
                        echo "<p>" . "No disponible" . "</p>";
                    }
            
                    
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <form action="" method="post">
        <p>
            <label for="numeros">Números (separados por espacio):</label>
            <input type="text" name="numeros" required>
        </p>
        
        <p>
            <label for="operacion[]">Operación:</label> <br>
            <select name="operacion[]" multiple size="3" required>
                <option value="Media">Media</option>
                <option value="Mediana">Mediana</option>
                <option value="Moda">Moda</option>
            </select>
        </p>
        <p>
            <input type="submit" value="Enviar">
            <input type="reset" value="Borrar">
        </p>
    </form>
</body>
</html>