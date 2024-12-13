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

                $fechaActual = date("d:m:i");

                $diaActual = date("d"); 
                $horaActual = date("H");   
                $minutoActual = date("i");

                $fechaFinalArray = explode(":", $fechaFinal );

                if (count($fechaFinalArray) == 3) {
                    
                    $fechaValida = true;

                    // Verificamos cada componente de la fecha final
                    foreach ($fechaFinalArray as $valor) {
                        if (!is_numeric($valor)) {
                            $fechaValida = false;
                            break;
                        }
                    }

                    if ($fechaValida) {
                        

                        if ($fechaFinal < $fechaActual) {
                            echo "La fecha final tiene que ser mayor a la actual";
                        }else {
                            
                           
                            $diaFechaFinal = $fechaFinalArray[0];
                            $horaFechaFinal = $fechaFinalArray[1];
                            $minutoFechaFinal = $fechaFinalArray[2];

                            if (validarDiaHoraMinuto($diaFechaFinal,$horaFechaFinal,$minutoFechaFinal)) {
                                $totalMinutosActual = ($diaActual * 24 * 60) + ($horaActual * 60) + $minutoActual;
                                $totalMinutosFinal = ($diaFechaFinal * 24 * 60) + ($horaFechaFinal * 60) + $minutoFechaFinal;

                                // Calcula la diferencia en minutos
                                $diferenciaMinutos = $totalMinutosFinal - $totalMinutosActual;
                                                        
                                $diferenciaDias = floor($diferenciaMinutos / (24 * 60)); // floor si hay decimales
                                $diferenciaMinutos %= (24 * 60); // %= sirve para sacar el resto
                                $diferenciaHoras = floor($diferenciaMinutos / 60);
                                $diferenciaMinutos %= 60;
                                echo "La fecha de actual es " . $fechaActual . "<br><br>";
                                echo " La fecha final es " . $fechaFinal  . "<br><br>";
                                echo "Tiempo restante: $diferenciaDias días, $diferenciaHoras horas y $diferenciaMinutos minutos. <br><br>";

                            }else {
                                echo "Fecha incorrecta";

                            }
                            
                        }
                    
                    } else {
                        echo "Una o ambas fechas contienen valores no numéricos.";
                    }
                }else {
                    echo "El formato es incorrecto";
                }
            } else {

                $fechaInicialArray = explode(":", $fechaInicial );
                $fechaFinalArray = explode(":", $fechaFinal );
                
                if (count($fechaInicialArray) == 3 && count($fechaFinalArray) == 3) {
                    
                    $fechaValida = true;

                    // Verificamos cada componente de la fecha inicial
                    foreach ($fechaInicialArray as $valor) {
                        if (!is_numeric($valor)) {
                            $fechaValida = false;
                            break;
                        }
                    }

                    // Verificamos cada componente de la fecha final
                    foreach ($fechaFinalArray as $valor) {
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
                            
                            $diaFechaInicial = $fechaInicialArray[0];
                            $diaFechaFinal = $fechaFinalArray[0];

                            $horaFechaInicial = $fechaInicialArray[1];
                            $horaFechaFinal = $fechaFinalArray[1];

                            $minutoFechaInicial = $fechaInicialArray[2];
                            $minutoFechaFinal = $fechaFinalArray[2];

                            if (validarDiaHoraMinuto($diaFechaFinal,$horaFechaFinal,$minutoFechaFinal) && validarDiaHoraMinuto($diaFechaInicial, $horaFechaInicial, $minutoFechaInicial)) {
                                $totalMinutosInicial = ($diaFechaInicial * 24 * 60) + ($horaFechaInicial * 60) + $minutoFechaInicial;
                                $totalMinutosFinal = ($diaFechaFinal * 24 * 60) + ($horaFechaFinal * 60) + $minutoFechaFinal;

                                // Calcula la diferencia en minutos
                                $diferenciaMinutos = $totalMinutosFinal - $totalMinutosInicial;
                                                        
                                $diferenciaDias = floor($diferenciaMinutos / (24 * 60));
                                $diferenciaMinutos %= (24 * 60);
                                $diferenciaHoras = floor($diferenciaMinutos / 60);
                                $diferenciaMinutos %= 60;
                                
                                echo "La fecha de actual es " . $fechaActual . "<br><br>";
                                echo " La fecha final es " . $fechaFinal  . "<br><br>";
                                echo "Tiempo restante: $diferenciaDias días, $diferenciaHoras horas y $diferenciaMinutos minutos. <br><br>";

                            }else {
                                echo "Fecha incorrecta";

                            }
                            
                        }
                    
                    } else {
                        echo "Una o ambas fechas contienen valores no numéricos.";
                    }
                }else {
                    echo "El formato es incorrecto";
                }
            }   
        }
    
        function validarDiaHoraMinuto($dia, $hora, $minuto) {

            if ($dia < 1 || $dia > 31) {
                return false;
            } else if ($hora < 0 || $hora > 23) { 
                return false;
            } else if ($minuto < 0 || $minuto > 59) { 
                return false;
            } else {
                return true;
            }
        }
    ?>

    <form action="ejer8.php" method="get">

        
        <input type="checkbox" name="horaActual" id="horaActual">Poner hora de inicio la actual (Al seleccionar esta opción no hay que rellenar la fecha de inicio)
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
