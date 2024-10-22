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
                
                
                $numero1= $_GET["numero1"];
                $numero2= $_GET["numero2"];
                $operacion = $_GET["operacion"];
                if (is_numeric($numero1) && is_numeric($numero2)) {
                    foreach ($operacion as $valor) {
                        switch($valor){
                            case 'sum':
                                    $ope = $numero1 + $numero2;
                                    echo $numero1 . " + " . $numero2 . " = $ope";
                                break;
                        }

                        
                    }
                } else {
                    echo "Hay algún número no numérico o vacío";
                }
                
            }else{
                
            }

        
    ?>
    <form action="ejer1.php" method="get">
        <label for="numero1">Dime el primer número</label>
        <input type="numero1" name="numero1" id="numero1">
        <br>
        <label for="numero2">Dime el segundo número</label>
        <input type="numero2" name="numero2" id="numero2">
        <br>
        <br>
        <label for="operacion"> Dime el la operacíon que quieres hacer</label>
        <br>
        <select name="operacion[]" id="operacion" multiple>
            <option value="sum">Sumar</option>
            <option value="res">Restar</option>
            <option value="mul">Multiplicar</option>
            <option value="div">Dividir</option>
        </select>
        <p>
            <input value="Enviar" type="submit" name="boton-enviar" id="boton-enviar">
           
        </p>
    </form>
</body>
</html>