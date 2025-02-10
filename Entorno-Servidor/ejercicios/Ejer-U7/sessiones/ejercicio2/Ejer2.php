<?php

    session_start();    

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $_SESSION["nombre"] = $_POST["nombre"];
        $_SESSION["apellido"] = $_POST["apellido"];
        $_SESSION["grupo"] = $_POST["grupo"];
        $_SESSION["edad"] = $_POST["edad"];
        $_SESSION["cargo"] = $_POST["cargo"];
        $_SESSION["asignatura"] = $_POST["asignatura"] ?? [];

        header("Location: resultadoEjer2.php");

    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <form action="Ejer2.php" method="post">
        
        <label for="">Nombre:</label>
        <input type="text" name="nombre" require>

        <br><br>

        <label for="">Apellido</label>
        <input type="text" name="apellido" require>

        <br><br>

        <label for="">Grupo:</label>
        <select name="grupo">
            <option value="ASIR">ASIR</option>
            <option value="DAW">DAW</option>
            <option value="DAW">DAW</option>
        </select>

        <br><br>

        <label for="">Asignatura:</label><br>
        <select name="asignatura[]" multiple size="5">
            <option value="Implantación de Sistemas Operativos">Implantación de Sistemas Operativos</option>
            <option value="Planificación y Administración de Redes">Planificación y Administración de Redes</option>
            <option value="Fundamentos de Hardware">Fundamentos de Hardware</option>
            <option value="Gestión de Bases de Datos">Gestión de Bases de Datos</option>
            <option value="Programación">Programación</option>
            <option value="Desarrollo Web en Entorno Cliente">Desarrollo Web en Entorno Cliente
            <option value="Desarrollo Web en Entorno Servidor">Desarrollo Web en Entorno Servidor</option>
            <option value="Desarrollo de Interfaces">Desarrollo de Interfaces</option>
            <option value="Programación de Servicios y Procesos">Programación de Servicios y Procesos</option>
            <option value="Empresa e Iniciativa Emprendedora">Empresa e Iniciativa Emprendedora</option>
       </select>
        <br><br>

        <label for="">Marca la correcta:</label> <br>
        <input type="radio" value="Si" name="edad"> Mayor de edad
        <input type="radio" value="No" name="edad"> Menor de edad
        
        <br><br>

        <label for="">¿Tiene cargo?</label> <br>
        <input type="radio" value="Si" name="cargo"> Si 
        <input type="radio" value="No" name="cargo"> No <br>

        <br>
        <input type="submit" value="Enviar">
        <input type="reset" value="Limpiar">
    </form>
</body>
</html>