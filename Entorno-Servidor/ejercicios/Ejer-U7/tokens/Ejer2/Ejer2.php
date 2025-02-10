<?php
    session_start();

    // Si no hay token en la sesión se genera
    if (!isset($_SESSION["token"])) {
        $_SESSION["token"] = bin2hex(random_bytes(32)); // Token de 32 bytes en formato hexadecimal
    }

    // Si el usuario cambia el SID, se destruye la sesión y se genera un nuevo token
    if (isset($_POST["cambiar_sid"])) {
        session_regenerate_id(true); // Cambia el ID de sesión
        $_SESSION["token"] = bin2hex(random_bytes(32)); // Nuevo token de seguridad
        header("Location: Ejer2.php"); // Recarga la página para aplicar cambios
        exit();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["boton-enviar"])) {
        if (!isset($_POST["token"]) || $_POST["token"] !== $_SESSION["token"]) {
            die("Error: Token de seguridad inválido. Posible ataque CSRF.");
        }

        $_SESSION["nombre"] = $_POST["nombre"];
        $_SESSION["apellido"] = $_POST["apellido"];
        $_SESSION["grupo"] = $_POST["grupo"];
        $_SESSION["edad"] = $_POST["edad"];
        $_SESSION["cargo"] = $_POST["cargo"];
        $_SESSION["asignatura"] = $_POST["asignatura"] ?? [];
        $_SESSION["rol"] = $_POST["rol"];

        switch ($_SESSION["rol"]) {
            case "Delegado":
                header("Location: delegado.php");
                break;
            case "Estudiante":
                header("Location: estudiante.php");
                break;
            case "Profesor":
                header("Location: profesor.php");
                break;
            case "Director":
                header("Location: director.php");
                break;
            default:
                die("Error: Rol no válido.");
        }
        exit();
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 - Roles</title>
</head>
<body>
    <h2>Formulario de Roles</h2>
    
    <form action="Ejer2.php" method="post">
        <input type="hidden" name="token" value="<?= $_SESSION["token"]; ?>">

        <label>Nombre:</label>
        <input type="text" name="nombre" required>

        <br><br>

        <label>Apellido:</label>
        <input type="text" name="apellido" required>

        <br><br>

        <label>Grupo:</label>
        <select name="grupo">
            <option value="ASIR">ASIR</option>
            <option value="DAW">DAW</option>
            <option value="DAM">DAM</option>
        </select>

        <br><br>

        <label>Asignatura:</label><br>
        <select name="asignatura[]" multiple size="5">
            <option value="Implantación de Sistemas Operativos">Implantación de Sistemas Operativos</option>
            <option value="Planificación y Administración de Redes">Planificación y Administración de Redes</option>
            <option value="Fundamentos de Hardware">Fundamentos de Hardware</option>
            <option value="Gestión de Bases de Datos">Gestión de Bases de Datos</option>
            <option value="Programación">Programación</option>
            <option value="Desarrollo Web en Entorno Cliente">Desarrollo Web en Entorno Cliente</option>
            <option value="Desarrollo Web en Entorno Servidor">Desarrollo Web en Entorno Servidor</option>
            <option value="Desarrollo de Interfaces">Desarrollo de Interfaces</option>
            <option value="Programación de Servicios y Procesos">Programación de Servicios y Procesos</option>
            <option value="Empresa e Iniciativa Emprendedora">Empresa e Iniciativa Emprendedora</option>
        </select>
        <br><br>

        <label>Marca la correcta:</label> <br>
        <input type="radio" value="Si" name="edad" required> Mayor de edad
        <input type="radio" value="No" name="edad" required> Menor de edad

        <br><br>

        <label>¿Tiene cargo?</label> <br>
        <input type="radio" value="Si" name="cargo" required> Sí
        <input type="radio" value="No" name="cargo" required> No <br>

        <br><br>

        <label>Rol:</label>
        <select name="rol">
            <option value="Delegado">Delegado</option>
            <option value="Estudiante">Estudiante</option>
            <option value="Profesor">Profesor</option>
            <option value="Director">Director</option>
        </select>

        <br><br>

        <input type="submit" value="Enviar" name="boton-enviar">
        <input type="reset" value="Limpiar">
    </form>

    <br><br>

    <form method="post">
        <input type="submit" name="cambiar_sid" value="Cambiar SID (Token Nuevo)">
    </form>
</body>
</html>
