
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impresión de datos</title>
</head>
<body>
    <?php
        echo "<h2>Datos recibidos:</h2>";
        echo "<p><li><strong>Nombre:</strong> " . htmlspecialchars($_GET["nombre"]) . "</li></p>";
        echo "<p><li><strong>Contraseña:</strong> " . htmlspecialchars($_GET["contrasena"]) . "</li></p>";
        echo "<p><li><strong>Nivel de estudios:</strong> " . htmlspecialchars($_GET["estudios"]) . "</li></p>";
        echo "<p><li><strong>Nacionalidad:</strong> " . htmlspecialchars($_GET["nacionalidad"]) . "</li></p>";  
        echo "<p><li><strong>Idiomas:</strong> " . htmlspecialchars($_GET["idiomas"]) . "</li></p>";
        echo "<p><li><strong>Email:</strong> " . htmlspecialchars($_GET["email"]) . "</li></p>";
        echo "<p><strong>Foto:</strong><br>";
        echo '<img src="' . htmlspecialchars($_GET["foto"]) . '" alt="" width="150">';
        echo "<br><strong>Ruta de la foto:</strong> " . htmlspecialchars($_GET["foto"]). "</p>";
    ?>
</body>
</html>
