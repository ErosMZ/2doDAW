<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["boton-enviar"])) {
    $correo = $_GET["correo"];
    $recibirInformacion = isset($_GET["recibir-informacion"]) ? "Sí" : "No";

    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        echo "<p>Correo: Esta dirección de correo no es válida.</p>";
    } else {
        $valorActual = 
        "<b>Correo: </b>" .  $correo . "<br>" .
        "<b>Desea recibir información:: </b>"  . $recibirInformacion . "<br>"
        ;         

       
        if (isset($_SESSION["sessionXD"])) {
            echo "<p><b>Valor de la session</b></p>";
            echo "<p>" . $_SESSION["sessionXD"] . "</p>";
        }else {
            echo "<p><b>Preferencia anterior</b></p>";
            echo "<p>" . "No disponible" . "</p>";
        }

        echo "<p><h2>Valor actual</h2></p>";
        echo "<p>" . $valorActual . "</p>";

        $_SESSION["sessionXD"] = $valorActual;
    }

    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="Ejer10.php"><button>Volver</button></a>
</body>
</html>
