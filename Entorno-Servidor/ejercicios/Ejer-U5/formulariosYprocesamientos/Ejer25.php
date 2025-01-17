<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 25</title>
</head>
    
<body>
<?php
        $errores= [];
        $valido= [];

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["boton-enviar"]) || $_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["boton-validar"])) {
           
            $nombre = $_POST["nombre"];
           $contrasena = $_POST[""];
           if (!preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/u", $nombre)) {
                $palabras = explode(" ", trim($nombre));               
                
                if (count($palabras) >= 3) {
                    $valido["nombre"] = "El nombre es válido";
                } else {
                    $errores["nombre"] = "Tiene que ser nombre y dos apellidos.";
                }
            } else {
                $errores["nombre"] = "El nombre contiene caracteres inválidos.";
            }

            if (condition) {
                
            }
        }   



        function enviar(){
            // header url
        }
    ?>
    <form action="Ejer25.php" method="POST">

        <label for="">Nombre completo:</label>
        <input type="text" name="nombre" value="<?php
            if (isset($errores["nombre"])) {
                echo "";
            }else{
                echo $_POST["nombre"];
            }
            
        ?>">
        <br><br>

        <label for="contraseña">Contraseña:</label>
        <input type="password" name="contrasena" value="<?php
            echo $_POST["contrasena"];
        ?>">
        <br><br>

        <label for="">Nivel de estudios:</label>
        <select name="estudios">
            <option value="Sin estudios">Sin estudios</option>
            <option value="Educación Secundaria Obligatoria">Educación Secundaria Obligatoria</option>
            <option value="Bachillerato">Bachillerato</option>
            <option value="Formación Profesional">Formación Profesional</option>
            <option value="Estudios Universitarios">Estudios Universitarios</option>
        </select>
        <br><br>

        <label for="nacionalidad">Nacionalidad</label>
        <input type="radio" name="nacionalidad" value="Española"> Española
        <input type="radio" name="nacionalidad" value="Otra"> Otra
        <br><br>

        <label for="idiomas[]">Idiomas:</label><br>
        <input type="checkbox" name="idiomas[]" value="Español">Español<br>
        <input type="checkbox" name="idiomas[]" value="Inglés">Inglés<br>
        <input type="checkbox" name="idiomas[]" value="Francés">Francés<br>
        <input type="checkbox" name="idiomas[]" value="Alemán">Alemán<br>
        <input type="checkbox" name="idiomas[]" value="Italiano">Italiano
        <br><br>

        <label for="">Email:</label>
        <input type="text" name="email" value="<?php
            echo $_POST["email"];
        ?>">
<br><br>
        <label for="">Adjuntar foto:</label>
        <input type="file" name="foto"><br><br>
        <input value="Enviar" type="submit" name="boton-enviar" >
        <input value="Limpiar" type="reset" name="boton-limpiar">
        <input value="Validar" type="submit" name="boton-validad" >
        <input type="text" name="" id="">
    </form>
</body>
</html>