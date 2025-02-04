<?php

    session_start();    

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
    
    /**
     * @author Eros Muñoz Zanon
     * Ejercicio 1 de roles
     */
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $_SESSION["nombre"] = $_POST["nombre"];
        $_SESSION["perfil"] = $_POST["perfil"];
        $_SESSION["trabajadores"] = $empleados;
        
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
                echo "Perfil no válido";
                break;
        }
        exit();
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 Roles</title>
</head>
<body>


    <h1>Calcular Salarios</h1>
    <form action="Ejer1.php" method="POST">
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
        <label>Salario:</label><br>
        <input type="number" name="sueldo" require>

        <input value="Enviar" type="submit" name="boton-enviar" id="boton-enviar">    </form>
</body>
</html>
