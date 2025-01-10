<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php

        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["boton-enviar"])) {
        
            $nombre = $_GET["nombre"];
            $apellido = $_GET["apellido"];
            $edad = $_GET["edad"];
            $estudios = $_GET["estudios"];
            $situacion = $_GET["situacion"] ?? []; // si estubiera vacio seria una array vacia
            // header("Location: resultado23.php");
            
            
        }

    ?>

</head>
<body>
    <form action="" method="get">
        <p>
            <label for="">Nombre: </label>
            <input type="text" name="nombre" id="nombre">
        </p>

        <p>
            <label for="">Email: </label>
            <input type="text" name="email" id="">
        </p>

        <p>
            <label for="Edad">Edad:</label>
            <input type="text" name="edad" id="">
        </p>


        <p>
            <label for="">Nivel estudios:</label>
            <select name="estudios" id="">
                <option value="Primaria">Primaria</option>
                <option value="Secundaria">Secundaria</option>
                <option value="Bachiller">Bachiller</option>
                <option value="Grado Medio">Grado Medio</option>
                <option value="Universidad">Universidad</option>
            </select>
        </p>

        <p>
            <label for="situacion">Situcación actual</label><br>
            <select name="situacion[]" id="situacion" multiple size="3">
                <option  value="Estudiando">Estudiando</option>
                <option  value="Trabajo">Trabajo</option>
                <option  value="Buscando empleo">Buscando empleo</option>
                <option value="Desempleado">Desempleado</option>
            </select>
        </p>
        <p>
            <label for="hobbies">Hobbies:</label><br>
            <input type="checkbox" name="hobbies[]" value="Leer"> Leer<br>
            <input type="checkbox" name="hobbies[]" value="Deporte"> Deporte<br>
            <input type="checkbox" name="hobbies[]" value="Cocinar"> Cocinar<br>
            <input type="checkbox" name="hobbies[]" value="Viajar"> Viajar<br>
        </p>
        <p>
            <label for="">Otro: </label>
            <input type="text" id="otroHobbie" name="hobbies[]">
        </p>

        <p>
            <input value="Enviar" type="submit" name="boton-enviar" id="boton-enviar">
            <input value="Limpiar" type="reset" name="boton-limpiarr" id="boton-limpiar">
        </p>
    </form>
</body>
</html>