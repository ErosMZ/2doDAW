<?php
    $errores= [];
    $valido= [];

    if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
        
        $nombre = $_POST["nombre"];
        $contrasena = $_POST["contrasena"];
        $estudios = $_POST["estudios"];
        $nacionalidad = $_POST["nacionalidad"] ?? [];
        $idiomas = $_POST["idiomas"] ?? [];
        $email = $_POST["email"];
        $foto = $_FILES["foto"] ?? null;
        $directorio = "imagen/";
        

        if (preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/u", $nombre)) {
            $palabras = explode(" ", trim($nombre));
            if (count($palabras) >= 2) {
                $valido["nombre"] = "El nombre es válido.";
            } else {
                $errores["nombre"] = "El campo nombre debe de tener minimo nombre y un apellido.";
            }
        } else {
            $errores["nombre"] = "El nombre contiene caracteres inválidos.";
        }
        

        if(empty($contrasena)) {
            $errores["contrasena"] = "Campo contraseña vacío.";
        }elseif (strlen($contrasena) < 6) {
            $errores["contrasena"] = "La contraseña debe tener al menos 6 caracteres.";
        }else{
            $valido["contrasena"] = "La contraseña es correcta";
        }

        if (empty($estudios)) {
            $errores["estudios"] = "Campo nacionalidad vacío.";
        }else {
            $valido["estudios"] = "El campo nacionalidad es válido";
        }
        

        if (empty($nacionalidad)) {
            $errores["nacionalidad"] = "Campo nacionalidad vacío.";
        }else {
            $valido["nacionalidad"] = "El campo nacionalidad es válido";
        }

        if (empty($idiomas)) {
            $errores["idiomas"] = "Campo idiomas vacío.";
        }else{
            $valido["idiomas"] = "El campo idiomas es válido";
        }
        
        $idiomasStr = implode(", ", $idiomas); 

        if (empty($email)) {
            $errores["email"] = "El correo electrónico esta vacío.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errores["email"] = "El formato del correo electrónico no es válido.";
        }else {
            $valido["email"] = "El campo email es válido";
        }

        if (!is_dir($directorio)) {
            mkdir($directorio);

        }
        $nombreCompleto = $directorio . $_FILES["foto"]["name"];

        $partes = explode(".", $_FILES["foto"]["name"]);
        $extension = strtolower(end($partes));

        $arrayExt = ["jpg" , "png", "jpeg"];

        if (!in_array($extension , $arrayExt)) {
            $errores["foto"] = "La foto no tiene extension correcta";
        }else{
            move_uploaded_file($_FILES["foto"]["tmp_name"], $nombreCompleto);
        }

        if ( isset($_POST["validar"])) {
            
            foreach ($errores as  $error) {
                echo  "<div class='error'>" . "<li>"   . $error . "</li>" . "</div>";
            }
        }

        if (isset($_POST["boton-enviar"]) && empty($errores)) {
            header("Location: resultado25.php?nombre=" . urlencode($nombre) . "&contrasena=" . urldecode($contrasena) . "&estudios=" . urldecode($estudios) . "&nacionalidad=" . urldecode($nacionalidad) . "&email=" . urldecode($email) ."&idiomas=" . urldecode($idiomasStr));
            exit(); 
        }

        // si hay erroes y le das a enviar te muestra un mensaje
        if (isset($_POST["boton-enviar"]) && !empty($errores)) {
            echo "<p><strong>" . "<div class ='error'>" . "Hay datos inválidos prueba con el botón de validar para saber cuales son</strong>" . "</div>";

        }

        if (isset($_POST["validar"]) && empty($errores)) {
            echo "<p><strong>" . "<div class ='valido'>" ."Es formulario esta correcto</strong> " . "</div>";

        }

        if (isset($_POST["validar"]) && !empty($errores)) {
            echo "<p><strong>" . "<div class ='error'>" ."Es formulario esta incorrecto</strong> " . "</div>";

        }

        

        
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 25</title>
</head>
    <style>
        .error {
            color: red;
            font-size: 14px;
        }

        .valido{
            color: green;
            font-size: 14px;
        }
    </style>
<body>
    
    <form action="Ejer25.php" method="POST">

    <label for="">Nombre completo:</label>
        <input type="text" name="nombre" value="<?php echo isset($_POST["nombre"]) ? htmlspecialchars($_POST["nombre"]) : ""; ?>">
       
        <br><br>

        <label for="contrasena">Contraseña:</label>
        <input type="password" name="contrasena" value="<?php echo isset($_POST["contrasena"]) ? htmlspecialchars($_POST["contrasena"]) : ""; ?>">
        
        <br><br>

        <label for="estudios">Nivel de estudios:</label>
        <select name="estudios">
            <option value="Sin estudios"  <?php echo isset($_POST["estudios"]) && $_POST["estudios"] == "Sin estudios" ? "selected" : ""?>>Sin estudios</option>
            <option value="Educación Secundaria Obligatoria"  <?php echo isset($_POST["estudios"]) && $_POST["estudios"] == "Educación Secundaria Obligatoria" ? "selected" : ""?>>Educación Secundaria Obligatoria</option>
            <option value="Bachillerato"<?php echo isset($_POST["estudios"]) && $_POST["estudios"] == "Bachillerato" ? "checked" : ""?>>Bachillerato</option>
            <option value="Formación Profesional"<?php echo isset($_POST["estudios"]) && $_POST["estudios"] == "Formación Profesional" ? "selected" : ""?>>Formación Profesional</option>
            <option value="Estudios Universitarios"<?php echo isset($_POST["estudios"]) && $_POST["estudios"] == "Estudios Universitarios" ? "selected" : ""?>>Estudios Universitarios</option>
        </select>
        
        <br><br>

        <label for="nacionalidad">Nacionalidad</label>
        <input type="radio" name="nacionalidad" value="Española" <?php echo (isset($_POST["nacionalidad"])) && $_POST["nacionalidad"] == "Española" ? "checked" : "";?>> Española
        <input type="radio" name="nacionalidad" value="Otra" <?php echo (isset($_POST["nacionalidad"])) && $_POST["nacionalidad"] == "Otra" ? "checked" : "";?>> Otra
        
        <br><br>

        <label for="idiomas[]">Idiomas:</label><br>
        <input type="checkbox" name="idiomas[]" value="Español" <?php echo (isset($_POST["idiomas"]) && in_array("Español", $_POST['idiomas'])) ? "checked" : ""; ?>>Español<br>
        <input type="checkbox" name="idiomas[]" value="Inglés" <?php echo (isset($_POST["idiomas"]) && in_array("Inglés", $_POST["idiomas"])) ? "checked" : ""; ?>>Inglés<br>
        <input type="checkbox" name="idiomas[]" value="Francés" <?php echo (isset($_POST["idiomas"]) && in_array("Francés", $_POST["idiomas"])) ? "checked" : ""; ?>>Francés<br>
        <input type="checkbox" name="idiomas[]" value="Alemán" <?php echo (isset($_POST["idiomas"]) && in_array("Alemán", $_POST["idiomas"])) ? "checked" : ""; ?>>Alemán<br>
        <input type="checkbox" name="idiomas[]" value="Italiano" <?php echo (isset($_POST["idiomas"]) && in_array("Italiano", $_POST["idiomas"])) ? "checked" : ""; ?>>Italiano

        
        <br><br>

        <label for="">Email:</label>
        <input type="text" name="email" value="<?php echo isset($_POST["email"]) ? htmlspecialchars($_POST["email"]) : ""; ?>">
        
        <br><br>

        <label for="">Adjuntar foto:</label>
        <input type="file" name="foto">
        <?php
            if (isset($_FILE["foto"])) {
                echo '<img src="$nombreCompleto" alt="">';
            }
        ?>
        <br><br>
        
        <input value="Enviar" type="submit" name="boton-enviar" >
        <input value="Limpiar" type="reset" name="boton-limpiar">
        <input value="Validar" type="submit" name="validar">
        
    </form>
</body>
</html>
