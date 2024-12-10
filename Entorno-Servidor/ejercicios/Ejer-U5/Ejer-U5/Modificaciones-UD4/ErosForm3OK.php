<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["boton-enviar"])) {
        $nombre = $_POST["nombre"];
        $apellidos = $_POST["apellidos"];
        $correo = $_POST["correo"];
        $usuario = $_POST["usuario"];
        $password = $_POST["contrasenya"];
        $sexo = $_POST["sexo"];
        $provincia = $_POST["provincia"];
        $horario = isset($_POST["horario"]) ? $_POST["horario"] : [];
        $comoNosHaConocido = isset($_POST['como-nos-ha-conocido']) ? $_POST['como-nos-ha-conocido'] : [];
        $comentario = $_POST["comentarios"];
        $recibirInformacion = isset($_POST["recibir-informacion"]) ? "Sí" : "No";
        $chekeoLeido = isset($_POST["chekeo-leido"]) ? "Sí" : "No";

        $comoNosHaConocidoStr = !empty($comoNosHaConocido) ? implode(", ", $comoNosHaConocido) : "No ha como nos ha conocido";
        $horarioStr = !empty($horario) ? implode(" - ", $horario) : "No ha seleccionado ningún horario";

        echo "<h1>Datos del Formulario</h1>";
        echo "<p><i>Nombre:</i> " . "<strong>" . $nombre . "</strong>" . "</p>";
        echo "<p><i>Apellidos:</i> " . "<strong>" . $apellidos . "</strong>" . "</p>";
        echo "<p><i>Correo Electrónico:</i> " . "<strong>" . $correo . "</strong>" . "</p>";
        echo "<p><i>Usuario:</i> " . "<strong>" . $usuario . "</strong>" .  "</p>";
        echo "<p><i>Contraseña:</i> " . "<strong>" . $password . "</strong>" . "</p>";
        echo "<p><i>Sexo:</i> " . "<strong>" . $sexo . "</p>";
        echo "<p><i>Provincia:</i> " . "<strong>" . $provincia . "</strong>" . "</p>";
        echo "<p><i>Horario:</i> " . "<strong>" . $horarioStr . "</strong>" . "</p>";
        echo "<p><i>Como nos ha conocido:</i> " . "<strong>" . $comoNosHaConocidoStr . "</strong>" . "</p>";
        echo "<p><i>Comentario:</i> " . "<strong>" . $comentario . "</strong>" . "</p>";
        echo "<p><i>Desea recibir información:</i> " . "<strong>" . $recibirInformacion . "</strong>" . "</p>";
        echo "<p><i>Ha aceptado las condiciones:</i> " . "<strong>" . $chekeoLeido . "</strong>" . "</p>";
    }

?>