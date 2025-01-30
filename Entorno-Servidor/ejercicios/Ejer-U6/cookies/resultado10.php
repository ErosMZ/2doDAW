<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["boton-enviar"])) {
    $correo = $_GET["correo"];
    $recibirInformacion = isset($_GET["recibir-informacion"]) ? "Sí" : "No";

    // Validar el correo
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        echo "<p>Correo: Esta dirección de correo no es válida.</p>";
    } else {
        echo "<p>Correo: $correo</p>";
    }

    // Mostrar preferencia anterior
    $preferenciaAnterior = isset($_COOKIE["preferencia-publicidad"]) ? $_COOKIE["preferencia-publicidad"] : "No definida";
    echo "<p>Preferencia anterior de recibir publicidad: $preferenciaAnterior</p>";

    // Guardar la nueva preferencia en la cookie
    setcookie("preferencia-publicidad", $recibirInformacion, time() + 3600); // Cookie válida por 1 hora

    // Mostrar la nueva preferencia
    echo "<p>Desea recibir información: $recibirInformacion</p>";
}
?>
