<?php

    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["boton-enviar"])) {
        
        $numeros = $_GET["numeros"];
        $calculos = $_GET["calculos"];

        if (empty($numeros) || empty($calculos)) {
            echo "<p>Algún campo está vacío.</p>";

        }else {
            

            $arrayNum = explode(" ", $numeros);

            foreach ($calculos as $opcionCalculo) {
                switch ($opcionCalculo) {
                    case "Media":
                        $op = array_sum($arrayNum) / count($arrayNum);
                        for ($i=0; $i < count($arrayNum) ; $i++) { 
                            $arrayNums .= $arrayNum[$i] . " "; 
                        }
                        echo "<p>La media de $arrayNums  es: " . $op;
                        break;
                    case "Moda":
                        $contValores = array_count_values($arrayNum);

                        //valor máximo de las repeticiones
                        $maxRepetitions = max($contValores);
                        
                        // por si hay mas valores repetidos o mas modas
                        $moda = array_keys($contValores, $maxRepetitions);
                        
                        
                        if (count($moda) === 1) {
                            $arrayNums = "";
                            for ($i=0; $i < count($arrayNum) ; $i++) { 
                                $arrayNums .= $arrayNum[$i] . " "; 
                            }
                            echo "<p>La moda de $arrayNums es: " . $moda[0] . "</p>";
                        } else {
                            $arrayNums = "";
                            for ($i=0; $i < count($arrayNum) ; $i++) { 
                                $arrayNums .= $arrayNum[$i] . " "; 
                            }
                            echo "<p>Las modas de $arrayNums  son: " . implode(", ", $moda) . "</p>";
                        }
                        break;
                    case "Mediana":
                        
                        
                        $mitad = count($arrayNum) / 2;
                       //  echo $mitad;
                      if ($mitad % 2 == 0) {
                            // echo "entra";
                            $op = ($arrayNum[$mitad] + $arrayNum[$mitad -1]) / 2;
                            $arrayNums = "";
                            for ($i=0; $i < count($arrayNum) ; $i++) { 
                                $arrayNums .= $arrayNum[$i] . " "; 
                            }
                            echo "<p>La mediana de $arrayNums es: " . $op . "</p>";

                        }else{

                            $arrayNums = "";
                            for ($i=0; $i < count($arrayNum) ; $i++) { 
                                $arrayNums .= $arrayNum[$i] . " "; 
                            }
                            echo "<p>La mediana de $arrayNums es: " . $arrayNum[$mitad] . "</p>";
                        
                        }
                        $numeroDelMedio = $arrayMenorMayor[$mitad];



                        break;
                    default:
                    echo "<p>Algo salió mal.</p>";
                        break;
                }
            }


        }

    }

?>
