<?php

    session_start();

    if (!isset($_SESSION["token"])) {
        $_SESSION["token"] = bin2hex(random_bytes(32));
    }

    $empleados = [
      ["nombre" => "Juan", "sueldo" => 1500],
      ["nombre" => "María", "sueldo" => 1800],
      ["nombre" => "Carlos", "sueldo" => 1700],
      ["nombre" => "Laura", "sueldo" => 1600],
      ["nombre" => "Pedro", "sueldo" => 2000],
      ["nombre" => "Sofía", "sueldo" => 2200],
      ["nombre" => "Diego", "sueldo" => 1400],
      ["nombre" => "Ana", "sueldo" => 1900],
      ["nombre" => "Luis", "sueldo" => 2100],
      ["nombre" => "Elena", "sueldo" => 2300]
    ];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (!isset($_POST['token']) || !hash_equals($_SESSION['token'], $_POST['token'])) {
            die("Error: El token no es válido o la sesión ha cambiado.");
        }

        $_SESSION["nombre"] = $_POST["nombre"];
        $_SESSION["perfil"] = $_POST["perfil"];
        $_SESSION["empleados"] = $empleados;

        switch ($_SESSION["perfil"]) {
            case "Gerente":
                header("Location: gerente.php");
                break;
            case "Sindicalista":
                header("Location: sindicalista.php");
                break;
            case "Responsable de Nóminas":
                header("Location: nominas.php");
                break;
            default:
                die("Error: Perfil no válido.");
        }
        exit();
        
    }
  

    
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