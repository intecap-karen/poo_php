<?php
    require_once("../clases/CalcularFactorial.php");
    
    // Crear una instancia de la clase CalcularFactorial
    $factorial = new CalcularFactorial();
    $factorial->numero = $_POST['numero'];

    if (isset($_POST["btn-calcular"])) {
        echo "<br>";
        echo $factorial->calcularFactorial();
    }