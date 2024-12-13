<?php
        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["boton-enviar"])) {
            $nombre = isset($_GET["nombre"]) ? $_GET["nombre"] : "";
            $apellidos = isset($_GET["apellidos"]) ? $_GET["apellidos"] : "";
            $correo = isset($_GET["correo"]) ? $_GET["correo"] : "";
            $usuario = isset($_GET["usuario"]) ? $_GET["usuario"] : "";
            $password = isset($_GET["contrasenya"]) ? $_GET["contrasenya"] : "";
            $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "";
            $provincia = isset($_GET["provincia"]) ? $_GET["provincia"] : "";
            $horario = isset($_GET["horario"]) ? $_GET["horario"] : [];
            $comoNosHaConocido = isset($_GET['como-nos-ha-conocido']) ? $_GET['como-nos-ha-conocido'] : [];
            $tipoIncidencia = isset($_GET["tipoIncidencia"]) ? $_GET["tipoIncidencia"] : "";
            $incidencia = isset($_GET["comentarioIncencia"]) ? $_GET["comentarioIncencia"] : "";
            
            $comoNosHaConocidoStr = !empty($comoNosHaConocido) ? implode(", ", $comoNosHaConocido) : "No ha como nos ha conocido";
            $horarioStr = !empty($horario) ? implode(" - ", $horario) : "No ha seleccionado ningún horario";

            echo "<h1>Datos del Formulario</h1>";
            echo "<p><strong>Nombre:</strong> " . htmlspecialchars($nombre) . "</p>";
            echo "<p><strong>Apellidos:</strong> " . htmlspecialchars($apellidos) . "</p>";
            echo "<p><strong>Correo Electrónico:</strong> " . htmlspecialchars($correo) . "</p>";
            echo "<p><strong>Usuario:</strong> " . htmlspecialchars($usuario) . "</p>";
            echo "<p><strong>Contraseña:</strong> " . htmlspecialchars($password) . "</p>";
            echo "<p><strong>Sexo:</strong> " . htmlspecialchars($sexo) . "</p>";
            echo "<p><strong>Provincia:</strong> " . htmlspecialchars($provincia) . "</p>";
            echo "<p><strong>Horario:</strong> " . htmlspecialchars($horarioStr) . "</p>";
            echo "<p><strong>Como nos ha conocido:</strong> " . htmlspecialchars($comoNosHaConocidoStr) . "</p>";
            echo "<p><strong>Tipo Incicencia:</strong> " . htmlspecialchars($tipoIncidencia) . "</p>";
            echo "<p><strong>Incicencia:</strong> " . htmlspecialchars($incidencia) . "</p>";
        }
    ?>