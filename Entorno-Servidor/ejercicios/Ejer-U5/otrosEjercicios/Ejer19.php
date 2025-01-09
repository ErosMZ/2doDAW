<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="resultado19.php" method="get">

        <p>
            <label for="curso">Curso: </label><br>
            <input type="radio" name="curso" value="DAW"> DAW<br>
            <input type="radio" name="curso" value="DAM" > DAM <br>
            <input type="radio" name="curso" value="ASIR">ASIR <br>
        </p>

        <p>

            <label for="modulos">Modulos:</label><br>
            <select name="modulos" id="modulos" >
                <option value="Sistemas Informáticos">Sistemas Informáticos</option>
                <option value="Bases de Datos">Bases de Datos</option>
                <option value="Programación">Programación</option>
                <option value="Sistemas de Gestión Empresarial">Sistemas de Gestión Empresarial</option>
                <option value="Servicios de Red e Internet">Servicios de Red e Internet</option>
                <option value="Seguridad y Alta Disponibilidad">Seguridad y Alta Disponibilidad</option>
                <option value="Implantación de Aplicaciones Web">Implantación de Aplicaciones Web</option>
                <option value="Planificación y Administración de Redes">Planificación y Administración de Redes</option>
                <option value="Seguridad y Alta Disponibilidad">Seguridad y Alta Disponibilidad</option>
                <option value="Programación Multimedia y Dispositivos Móviles">Programación Multimedia y Dispositivos Móviles</option>
            </select>
        </p>
        <p>
            <label>Horas:</label><br>
            <input type="checkbox" name="horas" value="8:00-9:00"> 8:00-9:00<br>
            <input type="checkbox" name="horas" value="9:00-10:00"> 9:00-10:00<br>
            <input type="checkbox" name="horas" value="10:00-11:00"> 10:00-11:00<br>
            <input type="checkbox" name="horas" value="11:00-12:00"> 11:00-12:00<br>
            <input type="checkbox" name="horas" value="12:00-13:00"> 12:00-13:00<br>
            <input type="checkbox" name="horas" value="13:00-14:00"> 13:00-14:00<br>
        </p>

        <p>
            <input value="Enviar" type="submit" name="boton-enviar" id="boton-enviar">
        </p>
    </form>
</body>
</html>