<?php 
    require_once("../clases/CalcularNumeroPrimo.php");
    // Crear una instancia de la clase CalcularNumeroPrimo
    $numeroPrimo = new CalcularNumeroPrimo();
    $numeroPrimo->numero = $_POST["numero"];
    if (isset($_POST["btn-calcular"])) {
        echo "<br>";
        echo $numeroPrimo->calcularNumeroPrimo();
    }
