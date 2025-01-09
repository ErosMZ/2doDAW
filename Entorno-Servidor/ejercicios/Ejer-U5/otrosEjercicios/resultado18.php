<?php

    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["boton-enviar"])) {
        
        $numeros = $_GET["numeros"];
        $calculos = $_GET["calculos"];

        if (empty($numeros) || empty($calculos)) {
            echo "<p>Algún campo está vacío.</p>";

        }else {
            $numerosStr = implode(" ", $numeros);

            $arrayNum = explode(" ", $numerosStr);

            foreach ($calculos as $opcionCalculo) {
                switch ($opcionCalculo) {
                    case 'Media':
                        $op = array_sum($arrayNum) / count($arrayNum);
                        echo "La media es: " . $op;
                        break;
                    case 'Moda':
                        
                        break;
                    case 'Mediana':
                        $arrayMenorMayor = sort($arrayNum);
                        $mitad = count($arrayMenorMayor / 2);

                        
                        break;
                    default:
                    echo "<p>Algo salió mal.</p>";
                        break;
                }
            }


        }

    }

?>
