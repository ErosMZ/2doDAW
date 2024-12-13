<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
    <h1>Eros Muñoz - Formulario de registro 4</h1>
    <form action="ejer4.php" method="get">
    <fieldset>
        <legend>Bloque Datos Personales</legend>
        <p>
            <label for="nombre"> Nombre: </label><br>
            <input type="text" placeholder="Escribe su nombre" name="nombre" maxlength="50" id="nombre" >
        </p>

        <!-- Campo de Apellidos -->
        <p>
            <label for="apellidos"> Apellidos:</label><br>
            <input type="text" placeholder="Escribe su apellido" name="apellidos" maxlength="200" id="apellidos" >
        </p>

        <!-- Campo de Correo electrónico -->
        <p>
            <label for="correo"> Correo electrónico: </label><br>
            <input type="email" placeholder="Escribe su correo" name="correo" id="correo" maxlength="250" >
        </p>

        <!-- Campo del Usuario -->
        <p>
            <label for="usuario">Usuario:</label> <br>
            <input type="text" placeholder="Escribe si usuario" name="usuario" id="usuario" maxlength="5">
        </p>
        <p>
            <label for="contrasenya">Contraseña:</label> <br>
            <input type="password" placeholder="Escribe su contraseña" name="contrasenya" id="contrasenya" maxlength="15">
        </p>

        <!-- Campo de Sexo -->
        <p>
            <label for="sexo"> Sexo: </label><br>
            <input type="radio" name="sexo" id="radio-sexo-hombre" value="Hombre"> Hombre
            <input type="radio"  name="sexo" id="radio-sexo-mujer" value="Mujer" > Mujer
        </p>
    </fieldset>

    <fieldset>
        <legend> Bloque Datos de contacto </legend>
        <!-- Campo de Provincia -->
        <p>
                <label for="provincia">Provincia</label><br>
                <select name="provincia" id="provincia" >
                    <option value="Alicante">Alicante</option>
                    <option value="Castellón">Castellón</option>
                    <option value="Valencia">Valencia</option>
                </select>
            </p>

            <!-- Campo Horario de contacto -->
            <p>
                <label for="horario">Horario de contacto: </label> <br>
                <select name="horario[]" id="horario" multiple size="3">
                    <option  value="De 8:00 a 14:00">8 a 14</option>
                    <option  value="De 14:00 a 18:00">14 a 18</option>
                    <option  value="De 18:00 a 21:00">18 a 21</option>
                </select>
            </p>

            <!-- Campo ¿Cómo nos ha conocido? -->
            <p>
                <label for="como-nos-ha-conocido">¿Cómo nos ha conocido?</label> <br>
                <input type="checkbox" name="como-nos-ha-conocido[]" id="como-nos-ha-conocido-amigo" value="Por un amigo">Un amigo
                <input type="checkbox" name="como-nos-ha-conocido[]" id="como-nos-ha-conocido-prensa" value="Por la prensa">Prensa
                <input type="checkbox" name="como-nos-ha-conocido[]" id="como-nos-ha-conocido-web" value="Por nuestra web">Web
                <input type="checkbox" name="como-nos-ha-conocido[]" id="como-nos-ha-conocido-otros" value="Otros...">Otros
            </p>
    </fieldset>

    <fieldset>
        <legend> Bloque Datos de la incidencia </legend>

        <!-- Desplegable tipo de incidencia -->
        <label for="tipoIncidencia">Tipo:</label>
        <select name="tipoIncidencia" id="tipoIncidencia">
            <option value="Teléfono fijo">Teléfono fijo</option>
            <option value="Teléfono móvil">Teléfono móvil</option>
            <option value="Internet">Internet</option>
            <option value="Televisión">Televisión</option>
        </select>

        <!-- Casilla Descripción de la incidencia: -->
        <p>
            <label for="comentarioIncencia">Descripción de la incidencia:</label> 
            <textarea id="comentarioIncencia" placeholder="Describa la incidencia..." name="comentarioIncencia" rows="4" cols="40"></textarea>
        </p>
    </fieldset>

    <fieldset>
        <legend>Botones</legend>

        <p>
            <input value="Enviar" type="submit" name="boton-enviar" id="boton-enviar">
            <input value="Limpiar" type="reset" name="boton-limpiarr" id="boton-limpiar">
        </p>
        
    </fieldset>
    </form>
</body>

</html>