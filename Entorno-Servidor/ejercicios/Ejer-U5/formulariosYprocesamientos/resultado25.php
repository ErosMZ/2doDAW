<?php
echo "<h2>Datos recibidos:</h2>";
echo "<p><li><strong>Nombre:</strong> " . htmlspecialchars($_GET["nombre"]) . "</li></p>";
echo "<p><li><strong>Contraseña:</strong> " . htmlspecialchars($_GET["contrasena"]) . "</li></p>";
echo "<p><li><strong>Nivel de estudios:</strong> " . htmlspecialchars($_GET["estudios"]) . "</li></p>";
echo "<p><li><strong>Nacionalidad:</strong> " . htmlspecialchars($_GET["nacionalidad"]) . "</li></p>";  
echo "<p><li><strong>Idiomas:</strong> " . htmlspecialchars($_GET["idiomas"]) . "</li></p>";
echo "<p><li><strong>Email:</strong> " . htmlspecialchars($_GET["email"]) . "</li></p>";
echo "<p><strong>Foto:</strong><br>";
echo '<img src="' . htmlspecialchars($_GET["foto"]) . '" alt="Foto subida" width="150">';
echo "<br><strong>Ruta de la foto:</strong> " . htmlspecialchars($_GET["foto"]). "</p>";
?>
