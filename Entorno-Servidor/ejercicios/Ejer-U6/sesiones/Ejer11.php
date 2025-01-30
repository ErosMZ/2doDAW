<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error {
            color: red;
            font-size: 14px;
        }
    </style>
    <?php
    session_start();
    $errores = []; 

    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["boton-enviar"])) {
        $nombre = $_GET["nombre"];
        $email = $_GET["email"];
        $edad = $_GET["edad"];
        $estudios = $_GET["estudios"];
        $situacion = $_GET["situacion"] ?? []; // si estuviera vacio seria una array vacia
        $hobbies = $_GET["hobbies"] ?? [];
        $otroHobbie = $_GET["otroHobbie"] ?? "";

        if (empty($nombre)) {
            $errores["usuario"] = "El nombre de el usuario esta vacio";
        } elseif (strlen($nombre) < 3) {
            $errores["usuario"] = "El nombre tiene que tener mínimo 3 caracteres";
        }

        if (empty($email)) {
            $errores["email"] = "El correo electrónico esta vacío.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errores["email"] = "El formato del correo electrónico no es válido.";
        }

        if (empty($edad)) {
            $errores["edad"] = "El campo edad esta vacío";
        } elseif (!is_numeric($edad)) {
            $errores["edad"] = "Tiene que ser un valor numérico";
        }

        if ($estudios == " ") {
            $errores["estudios"] = "Selecciona algún nivel de estudio";
        }

        if (empty($situacion)) {
            $errores["situacion"] = "Selecciona alguna opción";
        }

        if (empty($hobbies) && empty($otroHobbie)) {
            $errores["hobbies"] = "Selecciona algún hobbie o escribe uno";
        }

        if (empty($errores)) {
            
            $situacionStr = implode(", ", $situacion); 
            $hobbiesStr = implode(", ", $hobbies);
            if (empty($hobbies)) {
                $valorActual = 
                "<b>Nombre: </b>" .  $nombre . "<br>" .
                "<b>Email: </b>"  . $email . "<br>" . 
                "<b>Edad: </b>" . " <br>" . $edad . " <br>" . 
                "<b>Estudios: </b>". $estudios . " <br>" .
                "<b>Situación: </b>". $situacionStr . "<br>" .
                "<b>Otros Hobbies: </b>". $otroHobbie
                ;
            }
            
            if (empty($otroHobbies)) {
                $valorActual = 
                "<b>Nombre: </b>" .  
                $nombre . "<br>" .
                "<b>Email: </b>"  . $email . "<br>" . 
                "<b>Edad: </b>" . " " . $edad . " <br>" . 
                "<b>Estudios: </b>". $estudios . " <br>" .
                "<b>Situación: </b>". $situacionStr . "<br>" .
                "<b>Hobbies: </b>". $hobbiesStr . "<br>"
                ;
            }
            if (!empty($otroHobbie) && !empty($hobbies)) {
                $valorActual = 
                "<b>Nombre: </b>" .  $nombre . "<br>" .
                "<b>Email: </b>"  . $email . "<br>" . 
                "<b>Edad: </b>"  . $edad . " <br>" . 
                "<b>Estudios: </b>". $estudios . " <br>" .
                "<b>Situación: </b>". $situacionStr . "<br>" .
                "<b>Hobbies: </b>". $hobbiesStr . "<br>" .
                "<b>Otros Hobbies: </b>". $otroHobbie
                ;         
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
            $_SESSION["sessionXD"] = $valorActual;
        }
        
    }
?>
</head>
<body>
    <form action="Ejer11.php" method="GET">
        <p>
            <label for="">Nombre: </label>
            <input type="text" name="nombre" id="nombre">
        </p>
        <?php
            if (isset($errores["usuario"])) {
                echo "<div class ='error'>" .$errores["usuario"] . "</div>";
            }
        ?>
        <p>
            <label for="">Email: </label>
            <input type="text" name="email" id="">
        </p>
        <?php
            if (isset($errores["email"])) {
                echo "<div class ='error'>" .$errores["email"] . "</div>";
            }
        ?>

        <p>
            <label for="Edad">Edad:</label>
            <input type="text" name="edad" id="">
        </p>
        <?php
            if (isset($errores["edad"])) {
                echo "<div class ='error'>" .$errores["edad"] . "</div>";
            }
        ?>

        <p>
            <label for="">Nivel estudios:</label>
            <select name="estudios" id="">
                <option value=" "> </option>
                <option value="Primaria">Primaria</option>
                <option value="Secundaria">Secundaria</option>
                <option value="Bachiller">Bachiller</option>
                <option value="Grado Medio">Grado Medio</option>
                <option value="Universidad">Universidad</option>
            </select>
        </p>
        <?php
            if (isset($errores["estudios"])) {
                echo "<div class ='error'>" .$errores["estudios"] . "</div>";
            }
        ?>
        <p>
            <label for="situacion">Situcación actual</label><br>
            <select name="situacion[]" id="situacion" multiple size="3">
                <option  value="Estudiando">Estudiando</option>
                <option  value="Trabajo">Trabajo</option>
                <option  value="Buscando empleo">Buscando empleo</option>
                <option value="Desempleado">Desempleado</option>
            </select>
        </p>
        <?php
            if (isset($errores["situacion"])) {
                echo "<div class ='error'>" .$errores["situacion"] . "</div>";
            }
        ?>
        
        <p>
            <label for="hobbies">Hobbies:</label><br>
            <input type="checkbox" name="hobbies[]" value="Leer"> Leer<br>
            <input type="checkbox" name="hobbies[]" value="Deporte"> Deporte<br>
            <input type="checkbox" name="hobbies[]" value="Cocinar"> Cocinar<br>
            <input type="checkbox" name="hobbies[]" value="Viajar"> Viajar<br>
        </p>
        
        <p>
            <label for="">Otro: </label>
            <input type="text" id="otroHobbie" name="otroHobbie">
        </p>
        <?php
            if (isset($errores["hobbies"])) {
                echo "<div class ='error'>" .$errores["hobbies"] . "</div>";
            }
        ?>
        <p>
            <input value="Enviar" type="submit" name="boton-enviar" id="boton-enviar">
            <input value="Limpiar" type="reset" name="boton-limpiarr" id="boton-limpiar">
        </p>
    </form>
</body>
</html>