<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["boton-enviar"])) {
        $nombre = $_POST["nombre"];
        $apellidos = $_POST["apellidos"];
        $correo = $_POST["correo"];
        $usuario = $_POST["usuario"];
        $password = $_POST["contrasenya"];
        $sexo = $_POST["sexo"];
        $provincia = $_POST["provincia"];
        $situacion = isset($_POST["situacion"]) ? $_POST["situacion"] : [];
        $comentario = $_POST["comentarios"];
        $recibirInformacion = isset($_POST["recibir-informacion"]) ? "Sí" : "No";
        $chekeoLeido = isset($_POST["chekeo-leido"]) ? "Sí" : "No";

        if (!preg_match("/^[a-zA-Z'-]+$/",$nombre)) {
            $nombre = "El nombre tiene caracteres inválidos";
        }

        if (empty($usuario)) {
            $usuario = "Este campo está vacío";
        }

        if (!preg_match("/^[a-zA-Z'-]+\s*[a-zA-Z'-]*$/", $apellidos)) {
            $apellidos = "Los apellidos tienen caracteres inválidos";
        }
        
        if (empty($sexo)) {
            $sexo = "Este campo no ha sido rellenado";
        }
        
        // valida si tiene mayuscula y algun caracter especial
        $logitudMinima = strlen($password) >= 8;
        $caracterEspecial = preg_match('/[!@#$%^&*(),.?":{}|<>]/', $password);
        
        if (!$logitudMinima && !$caracterEspecial) {
            $password = "Contraseña inválida";
        }
        
        // si no esta vacío separas cada situación por - y si esta vacío escribe "No ha seleccionado ningún horario"
        $situacionStr = !empty($situacion) ? implode(" - ", $situacion) : "No ha seleccionado ningún horario";

        if (empty($situacion)) {
            $situacionStr = "Este campo está vacío";
        }

        if (empty($comentario)) {
            $comentario = "No se ha puesto ningún comentario";
        }


        echo "<h1>Datos del Formulario</h1>";
        echo "<p><i>Nombre:</i> " . "<strong>" . $nombre . "</strong>" . "</p>";
        echo "<p><i>Apellidos:</i> " . "<strong>" . $apellidos . "</strong>" . "</p>";
        echo "<p><i>Correo Electrónico:</i> " . "<strong>" . $correo . "</strong>" . "</p>";
        echo "<p><i>Usuario:</i> " . "<strong>" . $usuario . "</strong>" .  "</p>";
        echo "<p><i>Contraseña:</i> " . "<strong>" . $password . "</strong>" . "</p>";
        echo "<p><i>Sexo:</i> " . "<strong>" . $sexo . "</p>";
        echo "<p><i>Provincia:</i> " . "<strong>" . $provincia . "</strong>" . "</p>";
        echo "<p><i>Situación:</i> " . "<strong>" . $situacionStr . "</strong>" . "</p>";
        echo "<p><i>Comentario:</i> " . "<strong>" . $comentario . "</strong>" . "</p>";
        echo "<p><i>Desea recibir información:</i> " . "<strong>" . $recibirInformacion . "</strong>" . "</p>";
        echo "<p><i>Ha aceptado las condiciones:</i> " . "<strong>" . $chekeoLeido . "</strong>" . "</p>";
    }
    
    
?>