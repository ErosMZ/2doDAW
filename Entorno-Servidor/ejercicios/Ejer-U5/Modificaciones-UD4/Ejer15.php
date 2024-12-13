<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Título principal -->
    <h1>Eros Muñoz - Formulario de registro 3</h1>
        <form action="ErosForm3OK.php" method="post">

            <!-- Campo de Nombre -->
            <p>
                <label for="nombre"> Nombre: </label><br>
                <input type="text" name="nombre" maxlength="50" id="nombre" >
            </p>

            <!-- Campo de Apellidos -->
            <p>
                <label for="apellidos"> Apellidos:</label><br>
                <input type="text" name="apellidos" maxlength="200" id="apellidos" >
            </p>

            <!-- Campo de Correo electrónico -->
            <p>
                <label for="correo"> Correo electrónico: </label><br>
                <input type="email" name="correo" id="correo" maxlength="250" >
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
                <input type="radio" name="sexo" id="radio-sexo-hombre" value="Hombre" > Hombre<br>
                <input type="radio" name="sexo" id="radio-sexo-mujer" value="Mujer" > Mujer
            </p>

            
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
                <label for="como-nos-ha-conocido">¿Cómo nos ha conocido?</label>
                <input type="checkbox" name="como-nos-ha-conocido[]" id="como-nos-ha-conocido-amigo" value="Por un amigo">Un amigo
                <input type="checkbox" name="como-nos-ha-conocido[]" id="como-nos-ha-conocido-prensa" value="Por la prensa">Prensa
                <input type="checkbox" name="como-nos-ha-conocido[]" id="como-nos-ha-conocido-web" value="Por nuestra web">Web
                <input type="checkbox" name="como-nos-ha-conocido[]" id="como-nos-ha-conocido-otros" value="Otros...">Otros
            </p>

            <!-- Casilla comentarios -->
            <p>
                <label for="comentarios">Escribe tus comentarios:</label>
                <textarea id="comentarios" name="comentarios" rows="6" cols="60"></textarea>
            </p>

            <!-- Casilla de recibir información -->
            <p>
                <input type="checkbox" name="recibir-informacion" value="recibir-informacion" id="recibir-informacion" checked>
                <label for="recibir-informacion">Deseo recibir información sobre novedades y ofertas</label>
            </p>
            
            <!-- Casilla de aceptación de condiciones -->
            <p>
                <input type="checkbox" name="chekeo-leido" id="chekeo-leido" >
                <label for="chekeo-leido">Declaro haber leído y aceptar las condiciones generales del programa y la normativa sobre protección de datos</label>
            </p>

            <!-- Botón de Enviar -->
            <p>
                <input value="Enviar" type="submit" name="boton-enviar" id="boton-enviar">
                <input value="Limpiar" type="reset" name="boton-limpiarr" id="boton-limpiar">
            </p>
        </form>
</body>
</html>