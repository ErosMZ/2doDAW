<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Título principal -->
    <h1>Eros - Formulario de registro</h1>
    <form action="ejer3.php" method="get">

        <!-- Campo de Nombre -->
        <p>
            <label for="nombre"> Nombre: </label><br>
            <input type="text" name="nombre" maxlength="50" id="nombre" required>
        </p>

        <!-- Campo de Apellidos -->
        <p>
            <label for="apellidos"> Apellidos:</label><br>
            <input type="text" name="apellidos" maxlength="200" id="apellidos" >
        </p>

        <!-- Campo del Usuario -->
        <p>
            <label for="usuario">Usuario:</label> <br>
            <input type="text" name="usuario" id="usuario" maxlength="5">
        </p>
        <p>
            <label for="contrasenya">Contraseña:</label> <br>
            <input type="password" name="contrasenya" id="contrasenya" maxlength="15">
        </p>
        
        <!-- Campo de Sexo -->
        <p>
            <label for="sexo"> Sexo: </label><br>
            <input type="radio" name="sexo" id="radio-sexo-hombre" value="hombre" > Hombre<br>
            <input type="radio" name="sexo" id="radio-sexo-mujer" value="mujer" > Mujer
        </p>

        <!-- Campo de Provincia -->
        <p>
            <label for="provincia">Selecciona tu provincia: </label><br>
            <select name="provincia" id="provincia" >
                <option value="">Seleccione su provincia</option>
                <option value="alicante">Alicante</option>
                <option value="castellon">Castellón</option>
                <option value="valencia">Valencia</option>
            </select>
        </p>

        <!-- Campo Horario de contacto -->
        <p>
            <label for="horario">Horario de contacto: </label> <br>
            <select name="horario" id="horario" multiple size="2">
                <option value="" selected>Seleccione su horario</option>
                <option value="horario-8-14">8 a 14</option>
                <option value="horario-14-18">14 a 18</option>
                <option value="horario-18-21">18 a 21</option>
            </select>
        </p>

    </form>
</body>
</html>