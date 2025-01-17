<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    $errores = [];
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["boton-enviar"])) {

        $nombre = $_GET["nombre"];
        $apellidos = $_GET["apellidos"];
        $edad = $_GET["edad"];
        $peso = $_GET["peso"];
        $sexo = $_GET["sexo"];
        $estadoCivil = $_GET["estadoCivil"];
        $aficiones = $_GET["aficiones"] ?? [];

        if (empty($nombre)) {
            $errores["nombre"] = "Campo nombre vacío";
        }elseif (!preg_match("/^[a-zA-Z'-]+$/",$nombre)) {
            $errores["nombre"] =  "El nombre tiene caracteres inválidos";
        }
        
        if (empty($apellidos)) {
            $errores["apellido"] = "Campo apellido vacío";
        }elseif (!preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/", $apellido)) {
            $errores["apellido"] = "El apellido es inválido";
        }

        if (empty($edad)) {
            $errores["edad"] = "El campo edad esta vacío";

        }elseif (!filter_var($edad,filter_validate_int)) {
            $errores["edad"] = "El campo edad es inválido";
        }

        if (empty($peso)) {
            $errores["edad"] = "El campo peso está vacío";
        }elseif (!filter_var($peso,filter_validate_int)) {
            $errores["peso"] = "El campo peso es inválido";
        }
        
        $valoresSexo = ["mujer" , "hombre"];
        if (empty($sexo)) {
            $errores["sexo"] = "El campo sexo esta vacío";
        }elseif (!in_array($sexo, $valoresSexo)) {
            $errores["sexo"] = "El campo sexo es inválido";
        }

        $valoresEstadoCivil= ["Soltero", "Casado", "Viudo", "Divorciado", "Otro"];
        if (empty($estadoCivil)) {
            $errores["estadoCivil"] = "El campo de estado civil está vacío";
            
        }elseif (!in_array($estadoCivil, $valoresEstadoCivil)) {
            
            $errores["estadoCivil"] = "El campo de estado civil es inválido";
        }
        

    }   

?>
<body>
    <form action="Ejer24.php" method="get">

        <label for="">Nombre: </label>
        <input type="text" name="nombre" id=""> <br> <br>

        <label for="">Apellidos: </label>
        <input type="text" name="apellidos"> <br> <br>

        <label for="">Edad: </label>
        <input type="text" name="edad" id=""> <br> <br>

        <label for="">Peso: </label>
        <input type="text" name="peso"> <br><br><!--  
            que sea entre 10 y 150
        -->

        <label for="sexo">Sexo: </label>
        <input type="radio" name="sexo" id="" value="mujer">Mujer
        <input type="radio" name="sexo" id="" value="hombre">Hombre 
        <br><br>

        <label for="estadoCivil">Estado civil: </label>
        <select name="estadoCivil" id="estadoCivil">
            <option value=""></option>
            <option value="Soltero">Soltero</option>
            <option value="Casado">Casado</option>
            <option value="Viudo">Viudo</option>
            <option value="Divorciado">Divorciado</option>
            <option value="Otro">Otro</option>
        </select>
        <br><br>

        <label for="aficiones">Aficiones:</label><br>
        <select name="aficiones" multiple size="5">
            <option value="Cine">Cine</option>
            <option value="Deporte">Deporte</option>
            <option value="Deporte">Literatura</option>
            <option value="Musica">Música</option>
            <option value="Comics">Cómics</option>
            <option value="Series">Series</option>
            <option value="Videojuegos">Videojuegos</option> 
        </select><br><br>

        <input value="Enviar" type="submit" name="boton-enviar" id="boton-enviar">
            <input value="Limpiar" type="reset" name="boton-limpiarr" id="boton-limpiar">

    </form>
</body>
</html>