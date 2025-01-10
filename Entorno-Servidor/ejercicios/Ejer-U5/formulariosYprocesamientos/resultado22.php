<?php
        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["boton-enviar"])) {

            $correo = $_GET["correo"];
            $recibirInformacion = isset($_GET["recibir-informacion"]) ? "Sí" : "No";

            if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
                 echo "<p>" . "Correo: Esta dirección de correo no es válida. </p>";
            }else {
                echo "<p>Correo: $correo";
            }

            echo "<p> Desea recibir información: $recibirInformacion";
            
        }
    ?>