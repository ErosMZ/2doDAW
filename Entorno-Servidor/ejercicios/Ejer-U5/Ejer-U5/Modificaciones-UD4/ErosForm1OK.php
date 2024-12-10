    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["boton-enviar"])) {
                
            $nombre = $_GET["nombre"];
            $apellidos = $_GET["apellidos"];
            $sexo = $_GET["sexo"];
            $correo = $_GET["correo"];
            $provincia = $_GET["provincia"];
            $recibirInformacion = isset($_GET["recibir-informacion"]) ? "Sí" : "No";
            $chekeoLeido = isset($_GET["chekeo-leido"]) ? "Sí" : "No";

            if (!preg_match("/^[a-zA-Z'-]+$/",$nombre)) {
                $nombre = "El nombre tiene caracteres inválidos";
            }

            if (!preg_match("/^[a-zA-Z'-]+\s*[a-zA-Z'-]*$/", $apellidos)) {
                $apellidos = "Los apellidos tienen caracteres inválidos";
            }
            
            if (empty($sexo)) {
                $sexo = "Este campo no ha sido rellenado";
            }
            
            if (!filter_var($email_a, FILTER_VALIDATE_EMAIL)) {
                $correo = "Esta dirección de correo no es válida.";
            }
        
            if (empty($nombre) || !preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚñÑ ]+$/", $nombre)) {
                $nombre = "Contiene algún caracter inválido";
                $claseNombre = "invalido";
            }
            

            echo "<h1>Datos del Formulario</h1>";
            echo "<p><i>Nombre:</i> " . "<strong>" . $nombre . "</strong>" . "</p>";
            echo "<p><i>Apellidos:</i> " . "<strong>" . $apellidos . "</strong>" . "</p>";
            echo "<p><i>Sexo:</i> " . "<strong>" . $sexo . "</strong>" . "</p>";
            echo "<p><i>Correo Electrónico:</i> " . "<strong>" . $correo . "</strong>" . "</p>";
            echo "<p><i>Provincia:</i> " . "<strong>" . $provincia . "</strong>" . "</p>";
            echo "<p><i>Desea recibir información:</i> " . "<strong>" . $recibirInformacion . "</strong>" . "</p>";
            echo "<p><i>Ha aceptado las condiciones:</i> " . "<strong>" . $chekeoLeido . "</strong>" . "</p>";
        } 
    ?>