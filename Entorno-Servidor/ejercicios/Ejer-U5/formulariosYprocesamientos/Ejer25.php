<?php
    $errores = [];
    $valido = [];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $contrasena = $_POST["contrasena"];
        $estudios = $_POST["estudios"];
        $nacionalidad = $_POST["nacionalidad"] ?? [];
        $idiomas = $_POST["idiomas"] ?? [];
        $email = $_POST["email"];
        $foto = $_FILES["foto"] ?? null;
        $directorio = "imagen/";
        $rutaFoto = "";

        // Validación de el nombre
        if (preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/u", $nombre)) {
            $palabras = explode(" ", trim($nombre));
            if (count($palabras) >= 2) {
                $valido["nombre"] = "El nombre es válido.";
            } else {
                $errores["nombre"] = "El campo nombre debe de tener mínimo un nombre y un apellido.";
            }
        } else {
            $errores["nombre"] = "El nombre contiene caracteres inválidos.";
        }

        // Validación de la contraseña
        if (empty($contrasena)) {
            $errores["contrasena"] = "Campo contraseña vacío.";
        } elseif (strlen($contrasena) < 6) {
            $errores["contrasena"] = "La contraseña debe tener al menos 6 caracteres.";
        } 

        // Validación de los estudios
        if (empty($estudios)) {
            $errores["estudios"] = "Campo estudios vacío.";
        } 

        // Validación de la nacionalidad
        if (empty($nacionalidad)) {
            $errores["nacionalidad"] = "Campo nacionalidad vacío.";
        } 

        // Validación de los idiomas
        if (empty($idiomas)) {
            $errores["idiomas"] = "Campo idiomas vacío.";
        } 
        // Separo los idiomas con una , antes de pasarlo por el header
        $idiomasStr = implode(", ", $idiomas);

        // Validación del email
        if (empty($email)) {
            $errores["email"] = "El correo electrónico está vacío.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errores["email"] = "El formato del correo electrónico no es válido.";
        } 

        if (!is_dir($directorio)) {
            mkdir($directorio); 
        }

        // validación imagen
        if ($foto && !isset($errores['foto'])) {
            $nombreCompleto = $directorio . basename($foto["name"]);
            $extension = strtolower(pathinfo($nombreCompleto, PATHINFO_EXTENSION));
            $arrayExt = ["jpg", "png", "gif"];

            if (!in_array($extension, $arrayExt)) {
                $errores["foto"] = "La foto no tiene una extensión correcta.";
            } else {
                move_uploaded_file($foto["tmp_name"], $nombreCompleto);
                $rutaFoto = $nombreCompleto;
                $valido["foto"] = "La foto se ha subido correctamente.";
            }

        } elseif ($foto && isset($foto["error"])) {
            $errores["foto"] = "Hubo un problema al subir la foto.";
        }

        // Mostrar errores al validar
        if (isset($_POST["validar"])) {
            foreach ($errores as $error) {
                echo "<div class='error'><li>$error</li></div>";
            }

            if (empty($errores)) {
                echo "<p><strong><div class='valido'>El formulario está correcto.</div></strong></p>";
            } else {
                echo "<p><strong><div class='error'>El formulario está incorrecto.</div></strong></p>";
            }
        }

        // Enviar los datos al otro fichero si no hay errores
        if (isset($_POST["boton-enviar"]) && empty($errores)) {
            header("Location: resultado25.php?nombre=" . urlencode($nombre) . "&contrasena=" . urldecode($contrasena) . "&estudios=" . urldecode($estudios) . "&nacionalidad=" . urldecode($nacionalidad) . "&email=" . urldecode($email) . "&idiomas=" . urldecode($idiomasStr) . "&foto=" . urlencode($rutaFoto));
            exit();
        }

        // Si hay datos erróneos, mostrar el mensaje correspondiente
        if (isset($_POST["boton-enviar"]) && !empty($errores)) {
            echo "<p><strong><div class='error'>**Hay datos inválidos, prueba con el botón de validar para saber cuáles son.**</div></strong></p>";
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

        .valido {
            color: green;
            font-size: 14px;
        }
    </style>
<body>
    <form action="Ejer25.php" method="POST" enctype="multipart/form-data">

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

        <input type="HIDDEN" name="MAX_FILE_SIZE" value="102400">
        <label for="">Adjuntar foto:</label>
        <input type="file" name="foto">
        <br>
        <?php
            if ($rutaFoto) {
                echo '<img src="' . htmlspecialchars($rutaFoto) . '" alt="Foto subida" width="150">';
            }
        ?>
        <br><br>
        
        <input value="Enviar" type="submit" name="boton-enviar" >
        <input value="Limpiar" type="reset" name="boton-limpiar">
        <input value="Validar" type="submit" name="validar">
        
    </form>
</body>
</html>
