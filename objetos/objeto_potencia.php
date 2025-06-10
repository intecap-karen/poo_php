<?php
    require_once("../clases/Potencia.php");
    // Crear una instancia de la clase Potencia
    $resultado = new Potencia();
    $resultado->base = $_POST['base'];
    $resultado->exponente = $_POST['exponente'];

    if (isset($_POST["btn-potencia"])) {
        echo "<br>";
        echo $resultado->calcularPotencia();
    }