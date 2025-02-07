<?php
    session_start();
    $_SESSION["token"] = bin2hex(openssl_random_pseudo_bytes(24));

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Ejer1.php" method="POST">

        <input type="hidden" name="token" value="<?= $_SESSION["token"]; ?>">

        <label for="">Nombre:</label>
        <input type="text" name="nombre" require>
        <br><br>
        
        <label for="">Perfil:</label>
        <select name="perfil">
            <option value="Gerente">Gerente</option>
            <option value="Sindicalista">Sindicalista</option>
            <option value="Responsable de Nóminas">Responsable de Nóminas</option>
        </select>
        
        <br><br>
    
        <input value="Enviar" type="submit" name="boton-enviar" id="boton-enviar">   
    </form>

</body>
</html>