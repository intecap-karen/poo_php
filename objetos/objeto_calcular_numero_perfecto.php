<?php
    require_once("../clases/CalcularNumeroPerfecto.php");

    // Crear una instancia de la clase CalcularNumeroPerfecto
    $numeroPerfecto = new CalcularNumeroPerfecto();
    $numeroPerfecto->numero = $_POST['numero'];

    if (isset($_POST["btn-calcular"])) {
        echo "<br>";
        echo $numeroPerfecto->calcularNumeroPerfecto();
    }
