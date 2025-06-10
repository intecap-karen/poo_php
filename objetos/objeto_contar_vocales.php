<?php
    require_once("../clases/CalcularVocales.php");
    // Crear una instancia de la clase CalcularVocales
    $resultado = new CalcularVocales();
    $resultado->texto = $_POST['texto'];
    if (isset($_POST["btn-calcular"])) {
        echo "<br>";
        echo $resultado->contarVocales();
    }