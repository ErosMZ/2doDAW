<?php
        session_start();
        // creo una sesión para la variable de clave porque si no al darle a confirmar me volvía a generar otra
        
        // Si no hay clave generada para la sesion se genera
        if (!isset($_SESSION["clave"])) {
            // random de minimo 4 caracteres de el 0001 al 9999
            $_SESSION["clave"] = sprintf("%04d", rand(1, 9999));
        }
        
       
        $mensaje = "";
        $claseMensaje = "";
        if (isset($_GET["boton-enviar"])) {
            $claveUsuario = $_GET["Contrasena"];
            // Cojo la clave de la la sesión
            $clave = $_SESSION["clave"];
            if ($claveUsuario == $clave) {
                $mensaje = "La caja fuerte se ha abierto satisfactoriamente";
                $claseMensaje = "correcto";
                // creo otra si es satisfactoria para que en la siguiente recarga una vez este bien se cambie la contraseña
                $_SESSION["clave"] = sprintf("%04d", rand(1, 9999));
            }else {
                $mensaje = "Lo siento, esa no es la combinación";
                $claseMensaje = "incorrecto";
            }
        }else {
            $clave = $_SESSION["clave"];
            echo "La clave es $clave";
        }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>

</head>
<body>
    <p class="<?php echo $claseMensaje; ?>"><?php echo $mensaje; ?><br></p>
    <form  method="get" action="Ejer12.php">
        <label for="Contrasena">Clave:</label>
        <input type="text" name="Contrasena" id="Contrasena"> <br><br>
    
        <input value="Confirmar" type="submit" name="boton-enviar" id="boton-enviar">
    </form>
</body>
</html>  