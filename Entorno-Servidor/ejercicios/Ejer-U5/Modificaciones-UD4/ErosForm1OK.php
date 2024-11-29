    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["boton-enviar"])) {
                
            $nombre = $_GET["nombre"];
            $apellidos = $_GET["apellidos"];
            $sexo = $_GET["sexo"];
            $correo = $_GET["correo"];
            $provincia = $_GET["provincia"];
            $recibirInformacion = isset($_GET["recibir-informacion"]) ? "Sí" : "No";
            $chekeoLeido = isset($_GET["chekeo-leido"]) ? "Sí" : "No";

        
            
                $claseNombre = "valido";
                
            
                if (empty($nombre) || !preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚñÑ ]+$/", $nombre)) {
                    $nombre = "Contiene algún caracter inválido";
                    $claseNombre = "invalido";
                }
            
                
            
            
            echo "<h1>Datos del Formulario</h1>";
            echo "<p class='$claseNombre'><i>Nombre:</i> $nombre</p>";
            echo "<p><i>Apellidos:</i> " . "<strong>" . $apellidos . "</strong>" . "</p>";
            echo "<p><i>Sexo:</i> " . "<strong>" . $sexo . "</strong>" . "</p>";
            echo "<p><i>Correo Electrónico:</i> " . "<strong>" . $correo . "</strong>" . "</p>";
            echo "<p><i>Provincia:</i> " . "<strong>" . $provincia . "</strong>" . "</p>";
            echo "<p><i>Desea recibir información:</i> " . "<strong>" . $recibirInformacion . "</strong>" . "</p>";
            echo "<p><i>Ha aceptado las condiciones:</i> " . "<strong>" . $chekeoLeido . "</strong>" . "</p>";
        } 
    ?>