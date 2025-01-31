<?php
    $errores[""];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nombre= $_POST["nombre"];
        $saludoDespedida = $_POST["saludoDespedida"];
        
        if (!empty($nombre)) {
            if (!preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/u", $nombre)) {
                $errores["nombre"] = "El nombre contiene caracteres inválidos.";
            }
        }else {
            $errores["nombre"] = "El campo nombre está vacio";

        }

        if (empty($saludoDespedida)) {
            $errores["saludo"] = "El campo saludo está vacío.";
        }
        
        if (!empty($errores)) {
            foreach ($errores as $error) {
                echo "<div class='error'><li>$error</li></div>";
            }
        }else{
            $valorCookie= $saludoDespedida . ", ". $nombre;
            setcookie("valores", $valorCookie, time()+3600);
            if (!empty($_COOKIE["valores"])) {
                echo "<p><b>" . "Dato anterior" . "</b></p>" ;
                echo "<p>" . $_COOKIE["valores"] . "</p>" ;
                echo "<br>";
            }
            
            echo "<p><b>" . "Dato de ahora" . "</b></p>" ;
            echo "<p>" . $valorCookie . "</p>" ;
            echo "<br><br>";
        }
   
    }
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejer1-Cookies</title>
    
</head>
    <style>
        .error {
            color: red;
            font-size: 14px;
        }
    </style>
<body>
    <form action="" method="post">

        <label for="">Nombre</label>
        <input type="text" name="nombre" id="">

        <br><br>

        <label for="saludoDespedida">Que quieres recibir:</label>
        <input type="radio" name="saludoDespedida" value="Hola" > Saludo
        <input type="radio" name="saludoDespedida" value="Adios" > Despedida
        <br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>